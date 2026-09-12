<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class AiMentorController extends Controller
{
    public function chat(Request $request)
    {
        $request->validate([
            'messages' => 'required|array|min:1',
            'messages.*.role' => 'required|string',
            'messages.*.content' => 'required|string|max:10000',
            'mode' => 'nullable|string|in:mentor,interview',
        ]);

        $apiKey = env('TERMAI_API_KEY');

        if (!$apiKey) {
            return response()->json([
                'success' => false,
                'message' => 'API key belum dikonfigurasi di file .env.'
            ], 500);
        }

        $mode = $request->input('mode', 'mentor');

        /*
        |--------------------------------------------------------------------------
        | SYSTEM PROMPT
        |--------------------------------------------------------------------------
        */

        if ($mode === 'interview') {
            $systemPrompt = <<<PROMPT
Kamu adalah AI Interviewer profesional untuk platform SkillCareerAI.

Tugas kamu:
- Bertindak seperti recruiter/interviewer.
- Ajukan pertanyaan interview secara profesional.
- Evaluasi jawaban kandidat.
- Berikan feedback yang jelas dan membangun.
- Jangan terlalu panjang.
- Gunakan Bahasa Indonesia.
- Fokus pada dunia kerja, teknologi, software development, dan karier.
- Jika kandidat memberikan jawaban yang kurang jelas, jelaskan bagian yang perlu diperbaiki.
- Gunakan format yang mudah dibaca.
- Jangan memberikan nilai secara asal jika belum cukup informasi.

Kamu sedang melakukan simulasi interview untuk calon Full Stack Developer.
PROMPT;
        } else {
            $systemPrompt = <<<PROMPT
Kamu adalah AI Mentor bernama AI Mentor SkillCareerAI.

Kamu membantu siswa dan pemula yang sedang belajar teknologi, programming, software engineering, UI/UX, portfolio, dan persiapan karier.

Gaya komunikasi:
- Ramah.
- Santai tetapi tetap profesional.
- Gunakan Bahasa Indonesia.
- Jelaskan dengan bahasa yang mudah dipahami.
- Jika menjelaskan coding, berikan contoh sederhana.
- Jika pengguna bingung, pecah masalah menjadi langkah-langkah kecil.
- Jangan membuat jawaban terlalu rumit untuk pemula.
- Boleh menggunakan emoji secukupnya.
- Jangan mengarang informasi jika tidak yakin.

Topik yang dapat kamu bantu:
- HTML
- CSS
- JavaScript
- PHP
- Laravel
- MySQL
- REST API
- Git/GitHub
- UI/UX
- Figma
- Full Stack Development
- Portfolio
- CV
- Interview kerja
- Roadmap belajar
- Karier teknologi
- Project sekolah
- RPL

Nama platform:
SkillCareerAI
PROMPT;
        }

        /*
        |--------------------------------------------------------------------------
        | AMBIL MESSAGE
        |--------------------------------------------------------------------------
        */

        $messages = $request->input('messages');

        /*
        |--------------------------------------------------------------------------
        | BATASI HISTORY
        |--------------------------------------------------------------------------
        |
        | Supaya request tidak terlalu besar.
        |
        */

        $messages = array_slice($messages, -20);

        /*
        |--------------------------------------------------------------------------
        | FORMAT REQUEST
        |--------------------------------------------------------------------------
        */

        $body = [
            'messages' => array_merge(
                [
                    [
                        'role' => 'system',
                        'content' => $systemPrompt
                    ]
                ],
                $messages
            )
        ];

        try {

            $response = Http::timeout(60)
                ->acceptJson()
                ->withHeaders([
                    'Content-Type' => 'application/json',
                ])
                ->post(
                    'https://api.termai.cc/api/chat/gpt?key=' .
                    urlencode($apiKey),
                    $body
                );

            /*
            |--------------------------------------------------------------------------
            | JIKA API ERROR
            |--------------------------------------------------------------------------
            */

            if (!$response->successful()) {

                Log::error('Termai API Error', [
                    'status' => $response->status(),
                    'body' => $response->body(),
                ]);

                return response()->json([
                    'success' => false,
                    'message' => 'API AI sedang mengalami masalah.',
                    'status' => $response->status(),
                ], 502);
            }

            $data = $response->json();

            /*
            |--------------------------------------------------------------------------
            | AMBIL RESPONSE AI
            |--------------------------------------------------------------------------
            |
            | Struktur response API pihak ketiga bisa berbeda.
            | Kita cek beberapa kemungkinan.
            |
            */

            $answer = null;

            if (isset($data['response'])) {
                $answer = $data['response'];
            }

            elseif (isset($data['answer'])) {
                $answer = $data['answer'];
            }

            elseif (isset($data['message'])) {
                $answer = $data['message'];
            }

            elseif (
                isset($data['choices'][0]['message']['content'])
            ) {
                $answer = $data['choices'][0]['message']['content'];
            }

            elseif (
                isset($data['data']['response'])
            ) {
                $answer = $data['data']['response'];
            }

            elseif (
                isset($data['data']['message'])
            ) {
                $answer = $data['data']['message'];
            }

            /*
            |--------------------------------------------------------------------------
            | FALLBACK
            |--------------------------------------------------------------------------
            */

            if (!$answer) {

                Log::warning('Termai response tidak dikenali', [
                    'response' => $data
                ]);

                return response()->json([
                    'success' => false,
                    'message' => 'Response dari AI tidak dapat dibaca.',
                    'raw' => $data
                ], 502);
            }

            return response()->json([
                'success' => true,
                'message' => $answer
            ]);

        } catch (\Throwable $e) {

            Log::error('AI Mentor Exception', [
                'message' => $e->getMessage(),
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Tidak dapat terhubung ke AI. Pastikan koneksi internet aktif.'
            ], 500);
        }
    }
}