<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | LOGIN PAGE
    |--------------------------------------------------------------------------
    */

    public function showLogin()
    {
        // Kalau sudah login, langsung ke dashboard
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }

        return view('auth.login');
    }


    /*
    |--------------------------------------------------------------------------
    | LOGIN PROCESS
    |--------------------------------------------------------------------------
    */

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'password.required' => 'Password wajib diisi.',
        ]);


        /*
        |--------------------------------------------------------------------------
        | Cari user berdasarkan email
        |--------------------------------------------------------------------------
        */

        $user = User::where('email', $validated['email'])->first();


        if (!$user) {
            return back()
                ->withErrors([
                    'email' => 'Email atau password salah.'
                ])
                ->withInput($request->only('email'));
        }


        /*
        |--------------------------------------------------------------------------
        | CEK PASSWORD
        |--------------------------------------------------------------------------
        |
        | Sistem ini bisa menangani:
        |
        | 1. Password Bcrypt
        | 2. Password lama yang masih plaintext
        |
        */

        $passwordValid = false;


        // Cek apakah password database sudah berupa hash
        $isHashed = str_starts_with($user->password, '$2y$')
            || str_starts_with($user->password, '$2a$')
            || str_starts_with($user->password, '$2b$');


        if ($isHashed) {

            // Password sudah hash
            $passwordValid = Hash::check(
                $validated['password'],
                $user->password
            );

        } else {

            // Password lama masih plaintext
            $passwordValid = hash_equals(
                (string) $user->password,
                (string) $validated['password']
            );

            /*
            |--------------------------------------------------------------------------
            | Kalau password benar, langsung ubah menjadi Bcrypt
            |--------------------------------------------------------------------------
            */

            if ($passwordValid) {
                $user->password = Hash::make($validated['password']);
                $user->save();
            }
        }


        /*
        |--------------------------------------------------------------------------
        | Password salah
        |--------------------------------------------------------------------------
        */

        if (!$passwordValid) {
            return back()
                ->withErrors([
                    'email' => 'Email atau password salah.'
                ])
                ->withInput($request->only('email'));
        }


        /*
        |--------------------------------------------------------------------------
        | LOGIN BERHASIL
        |--------------------------------------------------------------------------
        */

        Auth::login($user);

        $request->session()->regenerate();


        return redirect()
            ->route('dashboard')
            ->with(
                'success',
                'Selamat datang kembali, ' . $user->name . '! 👋'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | REGISTER PAGE
    |--------------------------------------------------------------------------
    */

    public function showRegister()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }

        return view('auth.register');
    }


    /*
    |--------------------------------------------------------------------------
    | REGISTER PROCESS
    |--------------------------------------------------------------------------
    */

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
            ],

            'email' => [
                'required',
                'email',
                'max:255',
                'unique:users,email',
            ],

            'password' => [
                'required',
                'min:8',
                'confirmed',
            ],
        ], [
            'name.required' => 'Nama wajib diisi.',

            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah terdaftar.',

            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password minimal 8 karakter.',
            'password.confirmed' => 'Konfirmasi password tidak cocok.',
        ]);


        /*
        |--------------------------------------------------------------------------
        | BUAT USER BARU
        |--------------------------------------------------------------------------
        */

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],

            // WAJIB HASH
            'password' => Hash::make($validated['password']),
        ]);


        /*
        |--------------------------------------------------------------------------
        | LANGSUNG LOGIN
        |--------------------------------------------------------------------------
        */

        Auth::login($user);

        $request->session()->regenerate();


        /*
        |--------------------------------------------------------------------------
        | MASUK DASHBOARD
        |--------------------------------------------------------------------------
        */

        return redirect()
            ->route('dashboard')
            ->with(
                'success',
                'Akun berhasil dibuat! Selamat datang di SkillCareerAI 🚀'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | LOGOUT
    |--------------------------------------------------------------------------
    */

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()
            ->route('login')
            ->with(
                'success',
                'Kamu berhasil logout.'
            );
    }
}