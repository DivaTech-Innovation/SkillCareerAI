<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AI Mentor - SkillCareerAI</title>

    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Inter, Arial, sans-serif;
        background: #f5f7fb;
        color: #172033;
    }

    button,
    textarea {
        font-family: inherit;
    }

    button {
        cursor: pointer;
    }

    .page {
        min-height: 100vh;
        padding: 28px;
    }

    .container {
        max-width: 1250px;
        margin: auto;
    }

    /* HEADER */

    .topbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        margin-bottom: 22px;
    }

    .brand {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .brand-icon {
        width: 46px;
        height: 46px;
        border-radius: 14px;

        display: flex;
        align-items: center;
        justify-content: center;

        background: linear-gradient(135deg,
                #3155ff,
                #7048ff);

        color: white;

        box-shadow:
            0 10px 25px rgba(49, 85, 255, .2);
    }

    .brand h1 {
        font-size: 21px;
        font-weight: 800;
    }

    .brand p {
        margin-top: 3px;
        font-size: 12px;
        color: #8a92a3;
    }

    .back-btn {
        display: inline-flex;
        align-items: center;
        gap: 7px;

        padding: 10px 14px;

        border: 1px solid #e1e6ef;
        border-radius: 10px;

        background: white;
        color: #4d5668;

        font-size: 12px;
        font-weight: 700;
        text-decoration: none;
    }

    /* MODE */

    .mode-selector {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px;
        margin-bottom: 20px;
    }

    .mode-card {
        padding: 18px;

        border: 1px solid #e4e8f0;
        border-radius: 15px;

        background: white;

        display: flex;
        align-items: center;
        gap: 14px;

        transition: .2s;
        cursor: pointer;
    }

    .mode-card:hover {
        transform: translateY(-2px);
        border-color: #bfc9ff;
    }

    .mode-card.active {
        border-color: #3155ff;
        background: #f4f6ff;

        box-shadow:
            0 8px 25px rgba(49, 85, 255, .08);
    }

    .mode-icon {
        width: 45px;
        height: 45px;

        flex-shrink: 0;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 12px;

        background: #eef2ff;
        color: #3155ff;
    }

    .mode-card h3 {
        font-size: 14px;
    }

    .mode-card p {
        margin-top: 4px;

        color: #8991a2;

        font-size: 11px;
        line-height: 1.5;
    }

    /* MAIN */

    .main-grid {
        display: grid;
        grid-template-columns: 1fr 320px;
        gap: 20px;
    }

    /* CHAT */

    .chat-card {
        min-height: 650px;

        display: flex;
        flex-direction: column;

        overflow: hidden;

        border: 1px solid #e4e8f0;
        border-radius: 18px;

        background: white;

        box-shadow:
            0 10px 35px rgba(20, 30, 60, .04);
    }

    .chat-header {
        display: flex;
        align-items: center;
        justify-content: space-between;

        padding: 18px 20px;

        border-bottom: 1px solid #edf0f5;
    }

    .ai-profile {
        display: flex;
        align-items: center;
        gap: 11px;
    }

    .ai-avatar {
        width: 42px;
        height: 42px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 13px;

        background: linear-gradient(135deg,
                #3155ff,
                #7548ff);

        color: white;
    }

    .ai-profile h3 {
        font-size: 14px;
    }

    .online {
        display: flex;
        align-items: center;
        gap: 5px;

        margin-top: 3px;

        color: #12a879;

        font-size: 10px;
        font-weight: 700;
    }

    .online-dot {
        width: 7px;
        height: 7px;

        border-radius: 50%;
        background: #12b981;
    }

    .clear-btn {
        border: none;
        background: transparent;

        color: #929aaa;

        padding: 7px;
    }

    /* CHAT BODY */

    .chat-body {
        flex: 1;

        padding: 22px;

        overflow-y: auto;

        max-height: 470px;
    }

    .message {
        display: flex;
        gap: 10px;

        margin-bottom: 18px;

        animation: messageIn .25s ease;
    }

    @keyframes messageIn {

        from {
            opacity: 0;
            transform: translateY(5px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }

    }

    .message.user {
        flex-direction: row-reverse;
    }

    .mini-avatar {
        width: 30px;
        height: 30px;

        flex-shrink: 0;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 9px;

        background: #eef2ff;
        color: #3155ff;
    }

    .message.user .mini-avatar {
        background: #3155ff;
        color: white;
    }

    .bubble {
        max-width: 75%;

        padding: 12px 15px;

        border-radius: 13px;

        background: #f5f7fb;

        color: #40495a;

        font-size: 12px;
        line-height: 1.65;

        word-wrap: break-word;
    }

    .message.user .bubble {
        background: #3155ff;
        color: white;

        border-bottom-right-radius: 4px;
    }

    .message.ai .bubble {
        border-bottom-left-radius: 4px;
    }

    /* THINKING */

    .thinking {
        display: none;
        align-items: center;
        gap: 8px;

        margin-bottom: 15px;
    }

    .thinking.show {
        display: flex;
    }

    .thinking-avatar {
        width: 30px;
        height: 30px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 9px;

        background: #eef2ff;
        color: #3155ff;
    }

    .thinking-bubble {
        padding: 10px 14px;

        border-radius: 12px;

        background: #f5f7fb;
    }

    .dots {
        display: flex;
        gap: 4px;
    }

    .dots span {
        width: 6px;
        height: 6px;

        border-radius: 50%;

        background: #3155ff;

        animation: bounce 1s infinite;
    }

    .dots span:nth-child(2) {
        animation-delay: .15s;
    }

    .dots span:nth-child(3) {
        animation-delay: .3s;
    }

    @keyframes bounce {

        0%,
        60%,
        100% {
            transform: translateY(0);
            opacity: .4;
        }

        30% {
            transform: translateY(-5px);
            opacity: 1;
        }

    }

    /* INPUT */

    .chat-input-area {
        padding: 15px;

        border-top: 1px solid #edf0f5;
    }

    .input-box {
        display: flex;
        align-items: flex-end;
        gap: 8px;

        padding: 8px;

        border: 1px solid #e0e5ee;
        border-radius: 14px;

        background: #fafbfe;
    }

    textarea {
        flex: 1;

        min-height: 42px;
        max-height: 100px;

        resize: none;

        padding: 11px;

        border: none;
        outline: none;

        background: transparent;

        color: #263047;

        font-size: 12px;
    }

    textarea::placeholder {
        color: #9aa2b1;
    }

    .input-btn {
        width: 40px;
        height: 40px;

        flex-shrink: 0;

        border: none;
        border-radius: 11px;

        display: flex;
        align-items: center;
        justify-content: center;

        background: white;
        color: #687286;

        transition: .2s;
    }

    .input-btn:hover {
        color: #3155ff;
    }

    .send-btn {
        background: #3155ff;
        color: white;
    }

    .send-btn:hover {
        color: white;
        transform: translateY(-1px);
    }

    .send-btn:disabled {
        opacity: .6;
        cursor: not-allowed;
        transform: none;
    }

    /* MICROPHONE */

    .mic-btn {
        position: relative;
    }

    .mic-btn.recording {
        background: #ffecee;
        color: #e6475f;
    }

    .mic-btn.recording::after {
        content: "";

        position: absolute;

        width: 100%;
        height: 100%;

        border: 2px solid #e6475f;
        border-radius: 11px;

        animation: micPulse 1s infinite;
    }

    @keyframes micPulse {

        0% {
            transform: scale(1);
            opacity: .8;
        }

        100% {
            transform: scale(1.35);
            opacity: 0;
        }

    }

    .voice-status {
        display: none;

        margin-top: 8px;

        color: #e6475f;

        font-size: 10px;
        font-weight: 700;
    }

    .voice-status.show {
        display: block;
    }

    /* SIDE */

    .side {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .side-card {
        padding: 20px;

        border: 1px solid #e4e8f0;
        border-radius: 16px;

        background: white;
    }

    .side-card h3 {
        font-size: 14px;
    }

    .side-card-subtitle {
        margin-top: 4px;

        color: #9098a8;

        font-size: 10px;
        line-height: 1.5;
    }

    /* QUICK */

    .quick-list {
        display: flex;
        flex-direction: column;
        gap: 8px;

        margin-top: 14px;
    }

    .quick-btn {
        width: 100%;

        padding: 10px 11px;

        border: 1px solid #e8ebf1;
        border-radius: 10px;

        background: #fafbfe;

        color: #596276;

        text-align: left;

        font-size: 10px;

        transition: .2s;
    }

    .quick-btn:hover {
        border-color: #3155ff;
        color: #3155ff;
        background: #f5f7ff;
    }

    /* SCORE */

    .score-box {
        display: none;

        margin-top: 15px;
    }

    .score-box.show {
        display: block;
    }

    .score-main {
        display: flex;
        align-items: center;
        gap: 15px;

        margin-bottom: 16px;
    }

    .score-circle {
        width: 70px;
        height: 70px;

        display: flex;
        align-items: center;
        justify-content: center;

        flex-shrink: 0;

        border-radius: 50%;

        border: 7px solid #e9edff;

        color: #3155ff;

        font-size: 18px;
        font-weight: 800;
    }

    .score-main h4 {
        font-size: 13px;
    }

    .score-main p {
        margin-top: 3px;

        color: #8a92a2;

        font-size: 10px;
    }

    .metric {
        margin-top: 12px;
    }

    .metric-head {
        display: flex;
        justify-content: space-between;

        margin-bottom: 6px;

        font-size: 10px;
    }

    .metric-head span:last-child {
        color: #3155ff;
        font-weight: 700;
    }

    .metric-bar {
        height: 6px;

        overflow: hidden;

        border-radius: 20px;

        background: #edf0f6;
    }

    .metric-fill {
        height: 100%;

        border-radius: inherit;

        background: #3155ff;
    }

    /* TIPS */

    .tips {
        margin-top: 14px;
    }

    .tip {
        display: flex;
        gap: 8px;

        padding: 9px 0;

        border-bottom: 1px solid #edf0f5;

        color: #697285;

        font-size: 10px;
        line-height: 1.5;
    }

    .tip:last-child {
        border-bottom: none;
    }

    .tip i {
        color: #3155ff;
        flex-shrink: 0;
    }

    /* INTERVIEW */

    .interview-panel {
        display: none;

        padding: 14px;

        margin: 0 15px 10px;

        border-radius: 12px;

        background: #f5f7ff;

        border: 1px solid #e2e7ff;
    }

    .interview-panel.show {
        display: block;
    }

    .interview-label {
        color: #3155ff;

        font-size: 9px;
        font-weight: 800;

        text-transform: uppercase;
    }

    .question {
        margin-top: 6px;

        font-size: 12px;
        font-weight: 700;

        line-height: 1.5;
    }

    .question-number {
        color: #8b94a5;

        font-size: 9px;
    }

    /* DARK MODE */

    body.dark {
        background: #0d111b;
        color: #edf1f8;
    }

    body.dark .chat-card,
    body.dark .side-card,
    body.dark .mode-card,
    body.dark .back-btn {
        background: #151b28;
        border-color: #252d3d;
    }

    body.dark .mode-card.active {
        background: #1a2340;
    }

    body.dark .chat-header,
    body.dark .chat-input-area {
        border-color: #252d3d;
    }

    body.dark .bubble {
        background: #202837;
        color: #dbe1eb;
    }

    body.dark .input-box {
        background: #111722;
        border-color: #2a3344;
    }

    body.dark textarea {
        color: #e7ebf2;
    }

    body.dark .quick-btn {
        background: #111722;
        border-color: #2a3344;
        color: #b8c0ce;
    }

    body.dark .interview-panel {
        background: #17203a;
        border-color: #2c3a65;
    }

    body.dark .thinking-bubble {
        background: #202837;
    }

    body.dark .side-card-subtitle,
    body.dark .brand p {
        color: #8993a5;
    }

    body.dark .back-btn {
        color: #c4cbd7;
    }

    /* RESPONSIVE */

    @media(max-width: 950px) {

        .main-grid {
            grid-template-columns: 1fr;
        }

        .side {
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

    }

    @media(max-width: 650px) {

        .page {
            padding: 16px;
        }

        .topbar {
            align-items: flex-start;
        }

        .mode-selector {
            grid-template-columns: 1fr;
        }

        .side {
            display: flex;
        }

        .chat-card {
            min-height: 600px;
        }

        .chat-body {
            max-height: 430px;
        }

        .bubble {
            max-width: 85%;
        }

    }
    </style>

</head>

<body>

    <div class="page">

        <div class="container">

            <!-- HEADER -->

            <div class="topbar">

                <div class="brand">

                    <div class="brand-icon">
                        <i data-lucide="bot"></i>
                    </div>

                    <div>

                        <h1>AI Mentor</h1>

                        <p>
                            Teman belajar dan persiapan kariermu.
                        </p>

                    </div>

                </div>

                <a href="{{ url('/dashboard') }}" class="back-btn">

                    <i data-lucide="arrow-left" size="15"></i>

                    Dashboard

                </a>

            </div>


            <!-- MODE -->

            <div class="mode-selector">

                <div class="mode-card active" id="mentorMode">

                    <div class="mode-icon">

                        <i data-lucide="bot"></i>

                    </div>

                    <div>

                        <h3>AI Mentor</h3>

                        <p>
                            Ngobrol langsung dengan AI tentang belajar,
                            coding, karier, dan hal lainnya.
                        </p>

                    </div>

                </div>


                <div class="mode-card" id="interviewMode">

                    <div class="mode-icon">

                        <i data-lucide="briefcase-business"></i>

                    </div>

                    <div>

                        <h3>AI Simulasi Wawancara</h3>

                        <p>
                            Latihan interview kerja dengan AI
                            seperti menghadapi recruiter sungguhan.
                        </p>

                    </div>

                </div>

            </div>


            <!-- MAIN -->

            <div class="main-grid">

                <!-- CHAT -->

                <div class="chat-card">

                    <div class="chat-header">

                        <div class="ai-profile">

                            <div class="ai-avatar">

                                <i data-lucide="sparkles"></i>

                            </div>

                            <div>

                                <h3 id="aiTitle">
                                    AI Mentor
                                </h3>

                                <div class="online">

                                    <span class="online-dot"></span>

                                    Online • Siap ngobrol

                                </div>

                            </div>

                        </div>

                        <button class="clear-btn" id="clearChat" title="Hapus chat">

                            <i data-lucide="trash-2" size="16"></i>

                        </button>

                    </div>


                    <!-- CHAT BODY -->

                    <div class="chat-body" id="chatBody">

                        <div class="message ai">

                            <div class="mini-avatar">

                                <i data-lucide="bot" size="15"></i>

                            </div>

                            <div class="bubble">

                                Halo! 👋 Aku
                                <b>AI Mentor SkillCareerAI</b>.

                                <br><br>

                                Kamu bisa ngobrol denganku
                                seperti ngobrol dengan mentor.

                                Mau bertanya tentang coding,
                                belajar, karier, portfolio,
                                atau hal lainnya juga boleh.

                                <br><br>

                                🎙️ Kamu juga bisa menggunakan
                                microphone supaya nggak perlu mengetik.

                            </div>

                        </div>


                        <!-- THINKING -->

                        <div class="thinking" id="thinking">

                            <div class="thinking-avatar">

                                <i data-lucide="sparkles" size="14"></i>

                            </div>

                            <div class="thinking-bubble">

                                <div class="dots">

                                    <span></span>
                                    <span></span>
                                    <span></span>

                                </div>

                            </div>

                        </div>

                    </div>


                    <!-- INTERVIEW -->

                    <div class="interview-panel" id="interviewPanel">

                        <div class="interview-label">
                            Pertanyaan Interview
                        </div>

                        <div class="question-number" id="questionNumber">
                            Pertanyaan 1 dari 5
                        </div>

                        <div class="question" id="questionText">
                            Ceritakan tentang diri kamu
                            dan alasan kamu tertarik menjadi
                            Full Stack Developer.
                        </div>

                    </div>


                    <!-- INPUT -->

                    <div class="chat-input-area">

                        <div class="input-box">

                            <textarea id="messageInput" placeholder="Ketik pesan atau tekan microphone..."></textarea>


                            <button class="input-btn mic-btn" id="micBtn" title="Gunakan microphone">

                                <i data-lucide="mic" size="18"></i>

                            </button>


                            <button class="input-btn send-btn" id="sendBtn" title="Kirim">

                                <i data-lucide="send" size="17"></i>

                            </button>

                        </div>


                        <div class="voice-status" id="voiceStatus">
                            🎙️ Sedang mendengarkan...
                            silakan bicara
                        </div>

                    </div>

                </div>


                <!-- SIDE PANEL -->

                <div class="side">

                    <!-- QUICK -->

                    <div class="side-card">

                        <h3>
                            Pertanyaan Cepat
                        </h3>

                        <p class="side-card-subtitle">
                            Klik pertanyaan untuk memulai percakapan.
                        </p>


                        <div class="quick-list">

                            <button class="quick-btn">
                                Apa bedanya frontend dan backend?
                            </button>

                            <button class="quick-btn">
                                Bagaimana cara belajar Laravel?
                            </button>

                            <button class="quick-btn">
                                Skill apa yang harus saya kuasai?
                            </button>

                            <button class="quick-btn">
                                Bagaimana membuat portfolio yang bagus?
                            </button>

                        </div>

                    </div>


                    <!-- SCORE -->

                    <div class="side-card">

                        <h3>
                            Evaluasi Interview
                        </h3>

                        <p class="side-card-subtitle">
                            Hasil evaluasi akan muncul setelah
                            kamu menjawab pertanyaan interview.
                        </p>


                        <div class="score-box" id="scoreBox">

                            <div class="score-main">

                                <div class="score-circle" id="scoreValue">
                                    --
                                </div>

                                <div>

                                    <h4 id="scoreTitle">
                                        Menunggu evaluasi
                                    </h4>

                                    <p id="scoreDescription">
                                        Jawab pertanyaan interview
                                        untuk mendapatkan evaluasi.
                                    </p>

                                </div>

                            </div>


                            <div class="metric">

                                <div class="metric-head">

                                    <span>
                                        Kejelasan
                                    </span>

                                    <span id="clarityValue">
                                        --%
                                    </span>

                                </div>

                                <div class="metric-bar">

                                    <div class="metric-fill" id="clarityBar" style="width:0%"></div>

                                </div>

                            </div>


                            <div class="metric">

                                <div class="metric-head">

                                    <span>
                                        Relevansi
                                    </span>

                                    <span id="relevanceValue">
                                        --%
                                    </span>

                                </div>

                                <div class="metric-bar">

                                    <div class="metric-fill" id="relevanceBar" style="width:0%"></div>

                                </div>

                            </div>


                            <div class="metric">

                                <div class="metric-head">

                                    <span>
                                        Struktur
                                    </span>

                                    <span id="structureValue">
                                        --%
                                    </span>

                                </div>

                                <div class="metric-bar">

                                    <div class="metric-fill" id="structureBar" style="width:0%"></div>

                                </div>

                            </div>


                            <div class="metric">

                                <div class="metric-head">

                                    <span>
                                        Pengucapan
                                    </span>

                                    <span>
                                        N/A
                                    </span>

                                </div>

                                <div class="metric-bar">

                                    <div class="metric-fill" style="width:0%"></div>

                                </div>

                            </div>

                        </div>

                    </div>


                    <!-- TIPS -->

                    <div class="side-card">

                        <h3>
                            💡 Tips dari AI
                        </h3>


                        <div class="tips">

                            <div class="tip">

                                <i data-lucide="check-circle" size="14"></i>

                                Jawab dengan struktur yang jelas
                                dan mudah dipahami.

                            </div>


                            <div class="tip">

                                <i data-lucide="check-circle" size="14"></i>

                                Gunakan contoh project nyata
                                ketika menjawab pertanyaan recruiter.

                            </div>


                            <div class="tip">

                                <i data-lucide="check-circle" size="14"></i>

                                Jangan terlalu cepat ketika berbicara.

                            </div>


                            <div class="tip">

                                <i data-lucide="check-circle" size="14"></i>

                                Percaya diri dan jangan takut
                                melakukan kesalahan.

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <script>
    lucide.createIcons();


    /*
    |--------------------------------------------------------------------------
    | ELEMENT
    |--------------------------------------------------------------------------
    */

    const chatBody =
        document.getElementById("chatBody");

    const messageInput =
        document.getElementById("messageInput");

    const sendBtn =
        document.getElementById("sendBtn");

    const micBtn =
        document.getElementById("micBtn");

    const voiceStatus =
        document.getElementById("voiceStatus");

    const thinking =
        document.getElementById("thinking");

    const mentorMode =
        document.getElementById("mentorMode");

    const interviewMode =
        document.getElementById("interviewMode");

    const interviewPanel =
        document.getElementById("interviewPanel");

    const aiTitle =
        document.getElementById("aiTitle");

    const scoreBox =
        document.getElementById("scoreBox");

    const questionText =
        document.getElementById("questionText");

    const questionNumber =
        document.getElementById("questionNumber");

    const csrfToken =
        document.querySelector(
            'meta[name="csrf-token"]'
        ).getAttribute("content");


    /*
    |--------------------------------------------------------------------------
    | STATE
    |--------------------------------------------------------------------------
    */

    let currentMode = "mentor";

    let questionIndex = 0;

    let recognition = null;

    let isRecording = false;

    let isSending = false;


    /*
    |--------------------------------------------------------------------------
    | CHAT HISTORY
    |--------------------------------------------------------------------------
    */

    let chatHistory = [];


    /*
    |--------------------------------------------------------------------------
    | INTERVIEW QUESTIONS
    |--------------------------------------------------------------------------
    */

    const interviewQuestions = [

        "Ceritakan tentang diri kamu dan alasan kamu tertarik menjadi Full Stack Developer.",

        "Apa project yang pernah kamu buat dan apa tantangan terbesar yang kamu hadapi?",

        "Bagaimana cara kamu menghadapi masalah ketika kode yang kamu buat mengalami error?",

        "Apa teknologi yang paling kamu kuasai saat ini dan mengapa?",

        "Mengapa kami harus memilih kamu dibandingkan kandidat lainnya?"

    ];


    /*
    |--------------------------------------------------------------------------
    | MODE MENTOR
    |--------------------------------------------------------------------------
    */

    mentorMode.addEventListener(
        "click",
        () => {

            currentMode = "mentor";

            mentorMode.classList.add("active");

            interviewMode.classList.remove("active");

            interviewPanel.classList.remove("show");

            scoreBox.classList.remove("show");

            aiTitle.textContent =
                "AI Mentor";

            messageInput.placeholder =
                "Ketik pesan atau tekan microphone...";

            addAIMessage(
                "Mode <b>AI Mentor</b> aktif 🤖<br><br>" +

                "Silakan tanya apa saja. " +

                "Aku akan membantu kamu belajar, " +
                "coding, portfolio, dan persiapan karier."
            );

        }
    );


    /*
    |--------------------------------------------------------------------------
    | MODE INTERVIEW
    |--------------------------------------------------------------------------
    */

    interviewMode.addEventListener(
        "click",
        () => {

            currentMode = "interview";

            interviewMode.classList.add("active");

            mentorMode.classList.remove("active");

            interviewPanel.classList.add("show");

            scoreBox.classList.remove("show");

            questionIndex = 0;

            showInterviewQuestion();

            aiTitle.textContent =
                "AI Simulasi Wawancara";

            messageInput.placeholder =
                "Jawab pertanyaan dengan mengetik atau berbicara...";

            chatHistory = [];

            addAIMessage(

                "Mode <b>simulasi wawancara</b> dimulai 🎤<br><br>" +

                "Anggap aku sebagai recruiter. " +

                "Jawab pertanyaan seolah-olah kamu sedang " +

                "melakukan interview sungguhan."

            );

        }
    );


    /*
    |--------------------------------------------------------------------------
    | SHOW QUESTION
    |--------------------------------------------------------------------------
    */

    function showInterviewQuestion() {

        questionNumber.textContent =
            `Pertanyaan ${questionIndex + 1} dari ${interviewQuestions.length}`;

        questionText.textContent =
            interviewQuestions[questionIndex];

    }


    /*
    |--------------------------------------------------------------------------
    | ADD USER MESSAGE
    |--------------------------------------------------------------------------
    */

    function addUserMessage(text) {

        const message =
            document.createElement("div");

        message.className =
            "message user";

        message.innerHTML = `

        <div class="mini-avatar">

            <i
                data-lucide="user"
                size="15"
            ></i>

        </div>

        <div class="bubble">

            ${escapeHTML(text)}

        </div>

    `;

        chatBody.insertBefore(
            message,
            thinking
        );

        lucide.createIcons();

        scrollChat();

    }


    /*
    |--------------------------------------------------------------------------
    | ADD AI MESSAGE
    |--------------------------------------------------------------------------
    */

    function addAIMessage(text) {

        const message =
            document.createElement("div");

        message.className =
            "message ai";

        message.innerHTML = `

        <div class="mini-avatar">

            <i
                data-lucide="bot"
                size="15"
            ></i>

        </div>

        <div class="bubble">

            ${formatAIResponse(text)}

        </div>

    `;

        chatBody.insertBefore(
            message,
            thinking
        );

        lucide.createIcons();

        scrollChat();

        speak(
            text
            .replace(/<[^>]*>/g, "")
            .replace(/&nbsp;/g, " ")
        );

    }


    /*
    |--------------------------------------------------------------------------
    | FORMAT AI
    |--------------------------------------------------------------------------
    */

    function formatAIResponse(text) {

        if (!text) {
            return "";
        }

        let safe =
            escapeHTML(text);

        safe = safe
            .replace(/\*\*(.*?)\*\*/g, "<b>$1</b>")
            .replace(/\n/g, "<br>");

        return safe;

    }


    /*
    |--------------------------------------------------------------------------
    | SEND MESSAGE
    |--------------------------------------------------------------------------
    */

    async function sendMessage() {

        if (isSending) {
            return;
        }

        const text =
            messageInput.value.trim();

        if (!text) {
            return;
        }

        addUserMessage(text);

        messageInput.value = "";

        /*
        | Simpan message
        */

        chatHistory.push({
            role: "user",
            content: text
        });

        /*
        | Loading
        */

        isSending = true;

        sendBtn.disabled = true;

        thinking.classList.add("show");

        scrollChat();


        try {

            const response =
                await fetch(
                    "{{ route('ai.mentor.chat') }}", {

                        method: "POST",

                        headers: {

                            "Content-Type": "application/json",

                            "Accept": "application/json",

                            "X-CSRF-TOKEN": csrfToken

                        },

                        body: JSON.stringify({

                            messages: chatHistory,

                            mode: currentMode

                        })

                    }
                );


            const data =
                await response.json();


            if (!response.ok || !data.success) {

                throw new Error(
                    data.message ||
                    "Terjadi kesalahan."
                );

            }


            /*
            | AI response
            */

            const aiText =
                data.message;


            chatHistory.push({

                role: "assistant",

                content: aiText

            });


            thinking.classList.remove("show");

            addAIMessage(aiText);


            /*
            | Interview
            */

            if (
                currentMode === "interview"
            ) {

                handleInterviewProgress(
                    text,
                    aiText
                );

            }


        } catch (error) {

            console.error(error);

            thinking.classList.remove("show");

            addAIMessage(

                "Maaf 😥 terjadi masalah ketika " +
                "menghubungkan ke AI.<br><br>" +

                "<b>Error:</b> " +

                escapeHTML(
                    error.message
                ) +

                "<br><br>" +

                "Coba lagi beberapa saat."

            );

        } finally {

            isSending = false;

            sendBtn.disabled = false;

            messageInput.focus();

        }

    }


    /*
    |--------------------------------------------------------------------------
    | INTERVIEW PROGRESS
    |--------------------------------------------------------------------------
    */

    function handleInterviewProgress(
        userText,
        aiText
    ) {

        scoreBox.classList.add("show");

        /*
        | Score sederhana berdasarkan panjang jawaban.
        | Ini hanya indikator UI.
        */

        const length =
            userText.length;

        let score = 60;

        if (length > 100) {
            score = 85;
        } else if (length > 60) {
            score = 78;
        } else if (length > 30) {
            score = 70;
        }

        updateScore(score);


        /*
        | Next question
        */

        setTimeout(() => {

            if (
                questionIndex <
                interviewQuestions.length - 1
            ) {

                questionIndex++;

                showInterviewQuestion();

            } else {

                addAIMessage(

                    "🎉 <b>Simulasi wawancara selesai!</b><br><br>" +

                    "Kamu sudah menjawab semua pertanyaan. " +

                    "Gunakan feedback dari AI untuk memperbaiki " +

                    "jawaban interview kamu."

                );

            }

        }, 700);

    }


    /*
    |--------------------------------------------------------------------------
    | UPDATE SCORE
    |--------------------------------------------------------------------------
    */

    function updateScore(score) {

        const clarity =
            Math.min(
                95,
                Math.max(
                    55,
                    score + 2
                )
            );

        const relevance =
            Math.min(
                96,
                Math.max(
                    58,
                    score + 5
                )
            );

        const structure =
            Math.min(
                92,
                Math.max(
                    50,
                    score - 3
                )
            );


        document.getElementById(
                "scoreValue"
            ).textContent =
            score;


        document.getElementById(
                "clarityValue"
            ).textContent =
            clarity + "%";


        document.getElementById(
                "relevanceValue"
            ).textContent =
            relevance + "%";


        document.getElementById(
                "structureValue"
            ).textContent =
            structure + "%";


        document.getElementById(
                "clarityBar"
            ).style.width =
            clarity + "%";


        document.getElementById(
                "relevanceBar"
            ).style.width =
            relevance + "%";


        document.getElementById(
                "structureBar"
            ).style.width =
            structure + "%";


        const title =
            document.getElementById(
                "scoreTitle"
            );

        const description =
            document.getElementById(
                "scoreDescription"
            );


        if (score >= 85) {

            title.textContent =
                "Performa Bagus! 🔥";

            description.textContent =
                "Jawaban kamu cukup kuat. Tingkatkan struktur agar semakin profesional.";

        } else if (score >= 70) {

            title.textContent =
                "Cukup Bagus 👍";

            description.textContent =
                "Jawaban sudah memiliki dasar yang baik.";

        } else {

            title.textContent =
                "Perlu Ditingkatkan";

            description.textContent =
                "Coba berikan jawaban yang lebih lengkap dan terstruktur.";

        }

    }


    /*
    |--------------------------------------------------------------------------
    | MICROPHONE
    |--------------------------------------------------------------------------
    */

    if (
        "webkitSpeechRecognition" in window ||
        "SpeechRecognition" in window
    ) {

        const SpeechRecognition =
            window.SpeechRecognition ||
            window.webkitSpeechRecognition;


        recognition =
            new SpeechRecognition();


        recognition.lang =
            "id-ID";


        recognition.continuous =
            false;


        recognition.interimResults =
            true;


        recognition.onstart =
            function() {

                isRecording =
                    true;

                micBtn.classList.add(
                    "recording"
                );

                voiceStatus.classList.add(
                    "show"
                );

                voiceStatus.textContent =
                    "🎙️ Sedang mendengarkan... silakan bicara";

            };


        recognition.onresult =
            function(event) {

                let transcript =
                    "";

                for (
                    let i =
                        event.resultIndex;

                    i <
                    event.results.length;

                    i++
                ) {

                    transcript +=
                        event.results[i][0]
                        .transcript;

                }

                messageInput.value =
                    transcript;

            };


        recognition.onerror =
            function(event) {

                console.log(
                    "Speech error:",
                    event.error
                );

                voiceStatus.textContent =
                    "❌ Microphone tidak dapat digunakan.";

            };


        recognition.onend =
            function() {

                isRecording =
                    false;

                micBtn.classList.remove(
                    "recording"
                );

                setTimeout(
                    () => {

                        voiceStatus.classList.remove(
                            "show"
                        );

                    },
                    1000
                );

            };


        micBtn.addEventListener(
            "click",
            () => {

                if (isRecording) {

                    recognition.stop();

                } else {

                    recognition.start();

                }

            }
        );

    } else {

        micBtn.addEventListener(
            "click",
            () => {

                alert(
                    "Browser kamu belum mendukung fitur microphone. " +
                    "Coba gunakan Google Chrome."
                );

            }
        );

    }


    /*
    |--------------------------------------------------------------------------
    | ENTER
    |--------------------------------------------------------------------------
    */

    messageInput.addEventListener(
        "keydown",
        function(event) {

            if (
                event.key === "Enter" &&
                !event.shiftKey
            ) {

                event.preventDefault();

                sendMessage();

            }

        }
    );


    /*
    |--------------------------------------------------------------------------
    | QUICK QUESTIONS
    |--------------------------------------------------------------------------
    */

    document
        .querySelectorAll(".quick-btn")
        .forEach(button => {

            button.addEventListener(
                "click",
                () => {

                    messageInput.value =
                        button.textContent.trim();

                    sendMessage();

                }
            );

        });


    /*
    |--------------------------------------------------------------------------
    | CLEAR CHAT
    |--------------------------------------------------------------------------
    */

    document
        .getElementById("clearChat")
        .addEventListener(
            "click",
            () => {

                chatHistory = [];

                questionIndex = 0;

                chatBody.innerHTML = "";


                const welcome =
                    document.createElement(
                        "div"
                    );


                welcome.className =
                    "message ai";


                welcome.innerHTML = `

                <div class="mini-avatar">

                    <i
                        data-lucide="bot"
                        size="15"
                    ></i>

                </div>

                <div class="bubble">

                    Chat dibersihkan. 👋

                    <br><br>

                    Aku siap ngobrol lagi.

                </div>

            `;


                chatBody.appendChild(
                    welcome
                );


                chatBody.appendChild(
                    thinking
                );


                thinking.classList.remove(
                    "show"
                );


                scoreBox.classList.remove(
                    "show"
                );


                lucide.createIcons();

            }
        );


    /*
    |--------------------------------------------------------------------------
    | TEXT TO SPEECH
    |--------------------------------------------------------------------------
    */

    function speak(text) {

        if (
            !("speechSynthesis" in window)
        ) {

            return;

        }


        window.speechSynthesis.cancel();


        const utterance =
            new SpeechSynthesisUtterance(
                text
            );


        utterance.lang =
            "id-ID";


        utterance.rate =
            1;


        utterance.pitch =
            1;


        window.speechSynthesis.speak(
            utterance
        );

    }


    /*
    |--------------------------------------------------------------------------
    | SCROLL
    |--------------------------------------------------------------------------
    */

    function scrollChat() {

        chatBody.scrollTop =
            chatBody.scrollHeight;

    }


    /*
    |--------------------------------------------------------------------------
    | ESCAPE HTML
    |--------------------------------------------------------------------------
    */

    function escapeHTML(text) {

        const div =
            document.createElement(
                "div"
            );

        div.textContent =
            text;

        return div.innerHTML;

    }
    </script>

</body>

</html>