<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Belajar - SkillCareerAI</title>

    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Inter, Arial, sans-serif;
        background: #f6f8fc;
        color: #172033;
    }

    button,
    input,
    textarea {
        font-family: inherit;
    }

    button {
        cursor: pointer;
    }

    a {
        text-decoration: none;
        color: inherit;
    }

    /* =========================
           LAYOUT
        ========================= */

    .main {
        max-width: 1250px;
        margin: auto;
        padding: 30px;
    }

    /* =========================
           HEADER
        ========================= */

    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
        margin-bottom: 25px;
    }

    .header-title h1 {
        font-size: 29px;
        font-weight: 800;
    }

    .header-title p {
        margin-top: 7px;
        color: #7d8697;
        font-size: 13px;
    }

    .header-actions {
        display: flex;
        gap: 10px;
    }

    .header-btn {
        display: flex;
        align-items: center;
        gap: 7px;
        padding: 10px 14px;
        border: 1px solid #e1e6ef;
        border-radius: 10px;
        background: white;
        color: #4b5568;
        font-size: 12px;
        font-weight: 700;
        transition: .2s;
    }

    .header-btn:hover {
        border-color: #3155ff;
        color: #3155ff;
    }

    /* =========================
           LEARNING HERO
        ========================= */

    .learning-hero {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 25px;

        padding: 25px;

        border-radius: 18px;

        background:
            radial-gradient(circle at 90% 20%,
                rgba(255, 255, 255, .16),
                transparent 30%),
            linear-gradient(135deg,
                #3155ff,
                #5236d8);

        color: white;

        box-shadow:
            0 15px 35px rgba(49, 85, 255, .18);

        margin-bottom: 25px;
    }

    .hero-info {
        max-width: 700px;
    }

    .hero-label {
        display: inline-flex;
        align-items: center;
        gap: 7px;

        padding: 6px 11px;

        background: rgba(255, 255, 255, .12);

        border-radius: 30px;

        font-size: 10px;
        font-weight: 800;
    }

    .hero-info h2 {
        margin-top: 13px;

        font-size: 24px;
        font-weight: 800;
    }

    .hero-info p {
        margin-top: 7px;

        color: rgba(255, 255, 255, .76);

        font-size: 12px;
        line-height: 1.6;
    }

    .hero-progress {
        min-width: 220px;
    }

    .hero-progress-top {
        display: flex;
        justify-content: space-between;

        margin-bottom: 8px;

        font-size: 11px;
    }

    .hero-progress-bar {
        height: 8px;

        overflow: hidden;

        border-radius: 20px;

        background: rgba(255, 255, 255, .18);
    }

    .hero-progress-fill {
        width: 42%;

        height: 100%;

        border-radius: inherit;

        background: white;
    }

    /* =========================
           CONTENT GRID
        ========================= */

    .learning-grid {
        display: grid;

        grid-template-columns:
            minmax(0, 1.55fr) minmax(300px, .75fr);

        gap: 20px;

        align-items: start;
    }

    /* =========================
           VIDEO
        ========================= */

    .video-card {
        overflow: hidden;

        border: 1px solid #e7eaf1;

        border-radius: 16px;

        background: white;
    }

    .video-player {
        position: relative;

        height: 390px;

        display: flex;

        align-items: center;
        justify-content: center;

        overflow: hidden;

        background:
            linear-gradient(135deg,
                #111827,
                #1e293b);
    }

    .video-pattern {
        position: absolute;

        inset: 0;

        background-image:
            linear-gradient(rgba(255, 255, 255, .025) 1px,
                transparent 1px),
            linear-gradient(90deg,
                rgba(255, 255, 255, .025) 1px,
                transparent 1px);

        background-size: 35px 35px;
    }

    .video-content {
        position: relative;

        text-align: center;

        color: white;

        z-index: 2;
    }

    .video-icon {
        width: 75px;
        height: 75px;

        display: flex;
        align-items: center;
        justify-content: center;

        margin: auto;

        border-radius: 50%;

        background: rgba(49, 85, 255, .95);

        box-shadow:
            0 12px 35px rgba(49, 85, 255, .35);

        transition: .25s;
    }

    .video-icon:hover {
        transform: scale(1.08);
    }

    .video-content h3 {
        margin-top: 17px;

        font-size: 18px;
    }

    .video-content p {
        margin-top: 5px;

        color: #aeb7c8;

        font-size: 11px;
    }

    .video-controls {
        position: absolute;

        left: 18px;
        right: 18px;
        bottom: 15px;

        z-index: 3;
    }

    .video-progress {
        height: 5px;

        overflow: hidden;

        border-radius: 20px;

        background: rgba(255, 255, 255, .18);

        margin-bottom: 11px;
    }

    .video-progress span {
        display: block;

        width: 38%;

        height: 100%;

        background: #3155ff;
    }

    .video-control-row {
        display: flex;

        justify-content: space-between;

        align-items: center;

        color: white;

        font-size: 10px;
    }

    .video-control-left {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .video-control-btn {
        border: none;

        background: transparent;

        color: white;
    }

    /* =========================
           VIDEO INFO
        ========================= */

    .video-info {
        padding: 20px;
    }

    .video-title-row {
        display: flex;
        justify-content: space-between;

        gap: 15px;
    }

    .video-title h2 {
        font-size: 18px;
    }

    .video-title p {
        margin-top: 5px;

        color: #858d9e;

        font-size: 11px;
    }

    .complete-btn {
        display: inline-flex;
        align-items: center;
        gap: 7px;

        border: none;

        border-radius: 9px;

        padding: 10px 13px;

        background: #3155ff;
        color: white;

        font-size: 10px;
        font-weight: 700;
    }

    .complete-btn.completed {
        background: #10a876;
    }

    .video-tags {
        display: flex;
        gap: 7px;

        margin-top: 14px;
    }

    .video-tag {
        padding: 6px 9px;

        border-radius: 20px;

        background: #f0f3ff;

        color: #3155ff;

        font-size: 9px;
        font-weight: 700;
    }

    /* =========================
           MODULE CARD
        ========================= */

    .module-card {
        margin-top: 20px;

        padding: 20px;

        border: 1px solid #e7eaf1;

        border-radius: 16px;

        background: white;
    }

    .section-header {
        display: flex;

        justify-content: space-between;

        align-items: center;

        margin-bottom: 15px;
    }

    .section-header h2 {
        font-size: 16px;
    }

    .section-header span {
        color: #3155ff;

        font-size: 10px;

        font-weight: 700;
    }

    .module-list {
        display: flex;

        flex-direction: column;

        gap: 8px;
    }

    .module-item {
        display: flex;

        align-items: center;

        gap: 12px;

        padding: 12px;

        border: 1px solid #edf0f5;

        border-radius: 10px;

        transition: .2s;
    }

    .module-item:hover {
        border-color: #d8def0;
        transform: translateX(2px);
    }

    .module-item.active {
        border-color: #3155ff;

        background: #f6f8ff;
    }

    .module-number {
        width: 32px;
        height: 32px;

        display: flex;

        align-items: center;
        justify-content: center;

        flex-shrink: 0;

        border-radius: 9px;

        background: #eef2ff;

        color: #3155ff;

        font-size: 11px;
        font-weight: 800;
    }

    .module-item.done .module-number {
        background: #e6f9f1;
        color: #0b9c6c;
    }

    .module-item.locked .module-number {
        background: #f0f2f5;
        color: #9ba2af;
    }

    .module-info {
        flex: 1;
    }

    .module-info strong {
        display: block;

        font-size: 11px;
    }

    .module-info span {
        display: block;

        margin-top: 4px;

        color: #9199a8;

        font-size: 9px;
    }

    .module-status {
        font-size: 9px;

        font-weight: 700;

        color: #8991a1;
    }

    .module-item.active .module-status {
        color: #3155ff;
    }

    .module-item.done .module-status {
        color: #0b9c6c;
    }

    /* =========================
           AI MENTOR
        ========================= */

    .ai-card {
        position: sticky;

        top: 20px;

        overflow: hidden;

        border: 1px solid #e2e6ef;

        border-radius: 16px;

        background: white;

        box-shadow:
            0 10px 30px rgba(15, 23, 42, .05);
    }

    .ai-header {
        display: flex;

        align-items: center;

        gap: 11px;

        padding: 17px;

        border-bottom: 1px solid #edf0f4;
    }

    .ai-logo {
        width: 40px;
        height: 40px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 12px;

        background:
            linear-gradient(135deg,
                #3155ff,
                #783cff);

        color: white;

        box-shadow:
            0 8px 20px rgba(49, 85, 255, .2);
    }

    .ai-header-info strong {
        display: block;

        font-size: 13px;
    }

    .ai-header-info span {
        display: flex;
        align-items: center;
        gap: 5px;

        margin-top: 3px;

        color: #0da879;

        font-size: 9px;
    }

    .online-dot {
        width: 6px;
        height: 6px;

        border-radius: 50%;

        background: #0da879;
    }

    .ai-chat {
        height: 420px;

        overflow-y: auto;

        padding: 17px;

        background: #fafbfe;
    }

    .ai-message {
        display: flex;

        gap: 8px;

        margin-bottom: 14px;
    }

    .ai-message.user {
        justify-content: flex-end;
    }

    .message-avatar {
        width: 27px;
        height: 27px;

        display: flex;
        align-items: center;
        justify-content: center;

        flex-shrink: 0;

        border-radius: 8px;

        background: #eef2ff;

        color: #3155ff;
    }

    .ai-message.user .message-avatar {
        display: none;
    }

    .message-bubble {
        max-width: 84%;

        padding: 10px 12px;

        border-radius: 11px;

        background: white;

        border: 1px solid #e8ebf2;

        color: #4f5869;

        font-size: 10px;

        line-height: 1.6;
    }

    .ai-message.user .message-bubble {
        background: #3155ff;

        color: white;

        border-color: #3155ff;
    }

    .thinking {
        display: flex;

        align-items: center;

        gap: 4px;

        padding: 11px 13px;

        border-radius: 11px;

        background: white;

        border: 1px solid #e8ebf2;
    }

    .thinking span {
        width: 5px;
        height: 5px;

        border-radius: 50%;

        background: #8791a4;

        animation: thinking 1.2s infinite;
    }

    .thinking span:nth-child(2) {
        animation-delay: .15s;
    }

    .thinking span:nth-child(3) {
        animation-delay: .3s;
    }

    @keyframes thinking {

        0%,
        60%,
        100% {
            transform: translateY(0);
            opacity: .4;
        }

        30% {
            transform: translateY(-4px);
            opacity: 1;
        }
    }

    .suggestions {
        display: flex;

        flex-wrap: wrap;

        gap: 6px;

        padding: 10px 14px;

        border-top: 1px solid #edf0f4;
    }

    .suggestion {
        border: 1px solid #e2e6ee;

        border-radius: 20px;

        background: white;

        padding: 6px 9px;

        color: #5e6778;

        font-size: 9px;
    }

    .suggestion:hover {
        color: #3155ff;

        border-color: #3155ff;
    }

    .ai-input-area {
        display: flex;

        gap: 7px;

        padding: 12px;

        border-top: 1px solid #edf0f4;

        background: white;
    }

    .ai-input {
        flex: 1;

        min-width: 0;

        border: 1px solid #e0e5ed;

        outline: none;

        border-radius: 9px;

        padding: 10px;

        font-size: 10px;
    }

    .ai-input:focus {
        border-color: #3155ff;
    }

    .ai-send {
        width: 38px;
        height: 38px;

        display: flex;
        align-items: center;
        justify-content: center;

        flex-shrink: 0;

        border: none;

        border-radius: 9px;

        background: #3155ff;

        color: white;
    }

    /* =========================
           QUIZ
        ========================= */

    .quiz-card {
        margin-top: 20px;

        padding: 20px;

        border: 1px solid #e7eaf1;

        border-radius: 16px;

        background: white;
    }

    .quiz-question {
        margin-top: 14px;

        font-size: 13px;

        font-weight: 700;

        line-height: 1.6;
    }

    .quiz-options {
        display: grid;

        gap: 8px;

        margin-top: 13px;
    }

    .quiz-option {
        width: 100%;

        text-align: left;

        padding: 11px 12px;

        border: 1px solid #e5e8ef;

        border-radius: 9px;

        background: white;

        color: #4f5869;

        font-size: 10px;

        transition: .2s;
    }

    .quiz-option:hover {
        border-color: #3155ff;

        background: #f7f8ff;
    }

    .quiz-option.correct {
        border-color: #10a876;

        background: #e9faf4;

        color: #087b56;
    }

    .quiz-option.wrong {
        border-color: #e05252;

        background: #fff0f0;

        color: #bd3434;
    }

    .quiz-result {
        display: none;

        margin-top: 13px;

        padding: 11px;

        border-radius: 9px;

        background: #f0f4ff;

        color: #3155ff;

        font-size: 10px;

        font-weight: 700;
    }

    /* =========================
           PRACTICE
        ========================= */

    .practice-card {
        margin-top: 20px;

        padding: 20px;

        border: 1px solid #e7eaf1;

        border-radius: 16px;

        background: white;
    }

    .practice-desc {
        margin-top: 5px;

        color: #8991a1;

        font-size: 10px;

        line-height: 1.6;
    }

    .code-editor {
        margin-top: 14px;

        overflow: hidden;

        border-radius: 10px;

        background: #111827;
    }

    .code-top {
        display: flex;

        justify-content: space-between;

        padding: 8px 11px;

        background: #1f2937;

        color: #9ca3af;

        font-size: 9px;
    }

    .code-editor textarea {
        width: 100%;

        min-height: 150px;

        resize: vertical;

        border: none;

        outline: none;

        padding: 14px;

        background: #111827;

        color: #d1d5db;

        font-family: Consolas, monospace;

        font-size: 11px;

        line-height: 1.6;
    }

    .run-code {
        margin: 0 12px 12px;

        padding: 8px 12px;

        border: none;

        border-radius: 7px;

        background: #3155ff;

        color: white;

        font-size: 9px;

        font-weight: 700;
    }

    .code-output {
        display: none;

        margin: 0 12px 12px;

        padding: 10px;

        border-radius: 7px;

        background: #f8fafc;

        color: #334155;

        font-size: 10px;
    }

    /* =========================
           RESPONSIVE
        ========================= */

    @media(max-width: 950px) {

        .learning-grid {
            grid-template-columns: 1fr;
        }

        .ai-card {
            position: static;
        }

    }

    @media(max-width: 650px) {

        .main {
            padding: 20px 15px 40px;
        }

        .page-header {
            flex-direction: column;

            align-items: flex-start;
        }

        .learning-hero {
            flex-direction: column;

            align-items: flex-start;
        }

        .hero-progress {
            width: 100%;
        }

        .video-player {
            height: 280px;
        }

        .video-title-row {
            flex-direction: column;
        }

        .complete-btn {
            width: 100%;

            justify-content: center;
        }

    }
    </style>
</head>

<body>

    <main class="main">

        <!-- =========================
         HEADER
    ========================== -->

        <div class="page-header">

            <div class="header-title">

                <h1>Belajar</h1>

                <p>
                    Tingkatkan skill-mu dengan materi, video, praktik,
                    dan bantuan AI Mentor.
                </p>

            </div>

            <div class="header-actions">

                <a href="{{ url('/dashboard') }}" class="header-btn">

                    <i data-lucide="arrow-left" size="14"></i>

                    Dashboard

                </a>

            </div>

        </div>


        <!-- =========================
         HERO
    ========================== -->

        <section class="learning-hero">

            <div class="hero-info">

                <div class="hero-label">

                    <i data-lucide="graduation-cap" size="13"></i>

                    ROADMAP AKTIF

                </div>

                <h2>
                    Full Stack Developer
                </h2>

                <p>
                    Lanjutkan pembelajaranmu dan kuasai skill yang
                    dibutuhkan untuk menjadi Full Stack Developer.
                </p>

            </div>

            <div class="hero-progress">

                <div class="hero-progress-top">

                    <span>Progress Belajar</span>

                    <strong>42%</strong>

                </div>

                <div class="hero-progress-bar">

                    <div class="hero-progress-fill"></div>

                </div>

            </div>

        </section>


        <!-- =========================
         MAIN GRID
    ========================== -->

        <div class="learning-grid">


            <!-- =====================
             LEFT COLUMN
        ====================== -->

            <div>


                <!-- VIDEO -->

                <section class="video-card">

                    <div class="video-player">

                        <div class="video-pattern"></div>

                        <div class="video-content">

                            <div class="video-icon" id="playButton">

                                <i data-lucide="play" fill="white" size="28"></i>

                            </div>

                            <h3>
                                Flexbox & CSS Layout
                            </h3>

                            <p>
                                Modul 4 • Frontend Development
                            </p>

                        </div>


                        <div class="video-controls">

                            <div class="video-progress">

                                <span></span>

                            </div>

                            <div class="video-control-row">

                                <div class="video-control-left">

                                    <button class="video-control-btn" id="controlPlay">

                                        <i data-lucide="play" size="15"></i>

                                    </button>

                                    <button class="video-control-btn">

                                        <i data-lucide="volume-2" size="15"></i>

                                    </button>

                                    <span>
                                        12:34 / 32:10
                                    </span>

                                </div>

                                <div>

                                    <button class="video-control-btn">

                                        <i data-lucide="settings" size="15"></i>

                                    </button>

                                    <button class="video-control-btn">

                                        <i data-lucide="maximize" size="15"></i>

                                    </button>

                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="video-info">

                        <div class="video-title-row">

                            <div class="video-title">

                                <h2>
                                    Membangun Layout dengan Flexbox
                                </h2>

                                <p>
                                    Pelajari cara membuat layout website
                                    modern menggunakan CSS Flexbox.
                                </p>

                            </div>

                            <button class="complete-btn" id="completeBtn">

                                <i data-lucide="check-circle" size="14"></i>

                                Tandai Selesai

                            </button>

                        </div>


                        <div class="video-tags">

                            <span class="video-tag">
                                CSS
                            </span>

                            <span class="video-tag">
                                Frontend
                            </span>

                            <span class="video-tag">
                                Intermediate
                            </span>

                        </div>

                    </div>

                </section>


                <!-- MODULE -->

                <section class="module-card">

                    <div class="section-header">

                        <h2>
                            Modul Pembelajaran
                        </h2>

                        <span>
                            4 / 10 Modul
                        </span>

                    </div>


                    <div class="module-list">


                        <div class="module-item done">

                            <div class="module-number">
                                <i data-lucide="check" size="14"></i>
                            </div>

                            <div class="module-info">

                                <strong>
                                    01. Pengenalan Web Development
                                </strong>

                                <span>
                                    6 materi • 45 menit
                                </span>

                            </div>

                            <span class="module-status">
                                SELESAI
                            </span>

                        </div>


                        <div class="module-item done">

                            <div class="module-number">
                                <i data-lucide="check" size="14"></i>
                            </div>

                            <div class="module-info">

                                <strong>
                                    02. HTML Fundamental
                                </strong>

                                <span>
                                    8 materi • 1 jam 20 menit
                                </span>

                            </div>

                            <span class="module-status">
                                SELESAI
                            </span>

                        </div>


                        <div class="module-item done">

                            <div class="module-number">
                                <i data-lucide="check" size="14"></i>
                            </div>

                            <div class="module-info">

                                <strong>
                                    03. CSS Fundamental
                                </strong>

                                <span>
                                    10 materi • 2 jam
                                </span>

                            </div>

                            <span class="module-status">
                                SELESAI
                            </span>

                        </div>


                        <div class="module-item active">

                            <div class="module-number">
                                04
                            </div>

                            <div class="module-info">

                                <strong>
                                    Flexbox & CSS Layout
                                </strong>

                                <span>
                                    7 materi • 1 jam 40 menit
                                </span>

                            </div>

                            <span class="module-status">
                                65%
                            </span>

                        </div>


                        <div class="module-item">

                            <div class="module-number">
                                05
                            </div>

                            <div class="module-info">

                                <strong>
                                    JavaScript Fundamental
                                </strong>

                                <span>
                                    12 materi • 3 jam
                                </span>

                            </div>

                            <span class="module-status">
                                0%
                            </span>

                        </div>


                        <div class="module-item">

                            <div class="module-number">
                                06
                            </div>

                            <div class="module-info">

                                <strong>
                                    DOM & Event
                                </strong>

                                <span>
                                    8 materi • 2 jam
                                </span>

                            </div>

                            <span class="module-status">
                                0%
                            </span>

                        </div>


                        <div class="module-item locked">

                            <div class="module-number">

                                <i data-lucide="lock" size="13"></i>

                            </div>

                            <div class="module-info">

                                <strong>
                                    07. JavaScript Advanced
                                </strong>

                                <span>
                                    10 materi • 3 jam
                                </span>

                            </div>

                            <span class="module-status">
                                TERKUNCI
                            </span>

                        </div>


                    </div>

                </section>


                <!-- QUIZ -->

                <section class="quiz-card">

                    <div class="section-header">

                        <h2>
                            🧠 Mini Quiz
                        </h2>

                        <span>
                            1 Pertanyaan
                        </span>

                    </div>


                    <div class="quiz-question">

                        Apa fungsi utama dari
                        <strong>justify-content</strong>
                        pada CSS Flexbox?

                    </div>


                    <div class="quiz-options">

                        <button class="quiz-option" onclick="answerQuiz(this, false)">
                            Mengubah warna teks
                        </button>

                        <button class="quiz-option" onclick="answerQuiz(this, true)">
                            Mengatur posisi item pada main axis
                        </button>

                        <button class="quiz-option" onclick="answerQuiz(this, false)">
                            Mengatur ukuran font
                        </button>

                        <button class="quiz-option" onclick="answerQuiz(this, false)">
                            Membuat database
                        </button>

                    </div>


                    <div class="quiz-result" id="quizResult"></div>

                </section>


                <!-- PRACTICE -->

                <section class="practice-card">

                    <div class="section-header">

                        <h2>
                            💻 Praktik Coding
                        </h2>

                        <span>
                            Playground
                        </span>

                    </div>

                    <p class="practice-desc">

                        Coba ubah kode di bawah ini.
                        Setelah itu tekan Run Code untuk melihat hasilnya.

                    </p>


                    <div class="code-editor">

                        <div class="code-top">

                            <span>
                                index.html
                            </span>

                            <span>
                                HTML
                            </span>

                        </div>


                        <textarea id="codeInput"><div style="display:flex; justify-content:center; align-items:center; height:120px;">
    <h2>Hello SkillCareerAI 👋</h2>
</div></textarea>


                        <button class="run-code" onclick="runCode()">

                            <i data-lucide="play" size="11"></i>

                            Run Code

                        </button>


                        <div class="code-output" id="codeOutput"></div>

                    </div>

                </section>

            </div>


            <!-- =====================
             AI COLUMN
        ====================== -->

            <aside>

                <div class="ai-card">


                    <!-- AI HEADER -->

                    <div class="ai-header">

                        <div class="ai-logo">

                            <i data-lucide="sparkles" size="19"></i>

                        </div>

                        <div class="ai-header-info">

                            <strong>
                                AI Mentor
                            </strong>

                            <span>

                                <span class="online-dot"></span>

                                Online • Siap membantu

                            </span>

                        </div>

                    </div>


                    <!-- CHAT -->

                    <div class="ai-chat" id="aiChat">


                        <div class="ai-message">

                            <div class="message-avatar">

                                <i data-lucide="sparkles" size="13"></i>

                            </div>

                            <div class="message-bubble">

                                Halo! 👋 Aku AI Mentor SkillCareerAI.

                                <br><br>

                                Kalau kamu bingung dengan materi,
                                langsung tanyakan saja kepadaku.
                                Aku bisa menjelaskan menggunakan bahasa
                                sederhana, memberikan contoh kode,
                                atau membantu memahami error.

                            </div>

                        </div>


                    </div>


                    <!-- SUGGESTIONS -->

                    <div class="suggestions">

                        <button class="suggestion" onclick="askSuggestion('Apa itu Flexbox?')">
                            Apa itu Flexbox?
                        </button>

                        <button class="suggestion" onclick="askSuggestion('Jelaskan justify-content')">
                            justify-content?
                        </button>

                        <button class="suggestion" onclick="askSuggestion('Kasih contoh kode Flexbox')">
                            Contoh kode
                        </button>

                        <button class="suggestion" onclick="askSuggestion('Apa perbedaan Flexbox dan Grid?')">
                            Flexbox vs Grid
                        </button>

                    </div>


                    <!-- INPUT -->

                    <div class="ai-input-area">

                        <input type="text" id="aiInput" class="ai-input" placeholder="Tanyakan sesuatu..."
                            autocomplete="off">

                        <button class="ai-send" onclick="sendMessage()">

                            <i data-lucide="send" size="15"></i>

                        </button>

                    </div>


                </div>

            </aside>

        </div>

    </main>


    <script>
    lucide.createIcons();


    /* =========================
       VIDEO SIMULATION
    ========================== */

    let playing = false;

    const playButton =
        document.getElementById("playButton");

    const controlPlay =
        document.getElementById("controlPlay");

    function toggleVideo() {

        playing = !playing;

        if (playing) {

            playButton.innerHTML =
                '<i data-lucide="pause" size="28"></i>';

            controlPlay.innerHTML =
                '<i data-lucide="pause" size="15"></i>';

        } else {

            playButton.innerHTML =
                '<i data-lucide="play" fill="white" size="28"></i>';

            controlPlay.innerHTML =
                '<i data-lucide="play" size="15"></i>';

        }

        lucide.createIcons();

    }

    playButton.addEventListener(
        "click",
        toggleVideo
    );

    controlPlay.addEventListener(
        "click",
        toggleVideo
    );


    /* =========================
       COMPLETE MODULE
    ========================== */

    const completeBtn =
        document.getElementById("completeBtn");

    completeBtn.addEventListener(
        "click",
        function() {

            this.classList.toggle("completed");

            if (this.classList.contains("completed")) {

                this.innerHTML =
                    '<i data-lucide="check-circle" size="14"></i> Modul Selesai';

            } else {

                this.innerHTML =
                    '<i data-lucide="check-circle" size="14"></i> Tandai Selesai';

            }

            lucide.createIcons();

        }
    );


    /* =========================
       AI MENTOR
    ========================== */

    const aiInput =
        document.getElementById("aiInput");

    const aiChat =
        document.getElementById("aiChat");


    aiInput.addEventListener(
        "keydown",
        function(event) {

            if (event.key === "Enter") {

                sendMessage();

            }

        }
    );


    function askSuggestion(text) {

        aiInput.value = text;

        sendMessage();

    }


    function addMessage(
        text,
        type = "ai"
    ) {

        const wrapper =
            document.createElement("div");

        wrapper.className =
            "ai-message " + type;


        let avatar = "";

        if (type === "ai") {

            avatar = `
                <div class="message-avatar">
                    <i data-lucide="sparkles" size="13"></i>
                </div>
            `;

        }


        wrapper.innerHTML = `

            ${avatar}

            <div class="message-bubble">
                ${text}
            </div>

        `;


        aiChat.appendChild(wrapper);

        lucide.createIcons();

        aiChat.scrollTop =
            aiChat.scrollHeight;

    }


    function showThinking() {

        const wrapper =
            document.createElement("div");

        wrapper.className =
            "ai-message";

        wrapper.id =
            "thinkingMessage";


        wrapper.innerHTML = `

            <div class="message-avatar">

                <i data-lucide="sparkles" size="13"></i>

            </div>

            <div class="thinking">

                <span></span>
                <span></span>
                <span></span>

            </div>

        `;


        aiChat.appendChild(wrapper);

        lucide.createIcons();

        aiChat.scrollTop =
            aiChat.scrollHeight;

    }


    function removeThinking() {

        const thinking =
            document.getElementById(
                "thinkingMessage"
            );

        if (thinking) {

            thinking.remove();

        }

    }


    function getAIResponse(question) {

        const q =
            question.toLowerCase();


        if (
            q.includes("flexbox") &&
            q.includes("grid")
        ) {

            return `
                <strong>Flexbox vs Grid</strong><br><br>

                Flexbox cocok untuk mengatur layout
                dalam <strong>satu arah</strong>, misalnya
                horizontal atau vertikal.

                <br><br>

                CSS Grid lebih cocok untuk layout
                <strong>dua dimensi</strong>, yaitu baris
                dan kolom.

                <br><br>

                Gampangnya:<br>
                👉 Flexbox = satu arah<br>
                👉 Grid = baris + kolom
            `;

        }


        if (
            q.includes("justify") ||
            q.includes("justify-content")
        ) {

            return `
                <strong>justify-content</strong> digunakan
                untuk mengatur posisi item pada
                <strong>main axis</strong> Flexbox.

                <br><br>

                Contohnya:

                <br><br>

                <code>
                display: flex;<br>
                justify-content: center;
                </code>

                <br><br>

                Kode tersebut membuat item berada
                di tengah pada arah utama.
            `;

        }


        if (
            q.includes("align") ||
            q.includes("align-items")
        ) {

            return `
                <strong>align-items</strong> mengatur posisi
                item pada <strong>cross axis</strong>.

                <br><br>

                Kalau kamu ingin membuat sebuah item
                berada di tengah secara vertikal,
                biasanya kamu bisa menggunakan:

                <br><br>

                <code>
                align-items: center;
                </code>
            `;

        }


        if (
            q.includes("html")
        ) {

            return `
                <strong>HTML</strong> adalah bahasa markup
                yang digunakan untuk membuat struktur
                sebuah halaman website.

                <br><br>

                Contohnya:

                <br><br>

                <code>
                &lt;h1&gt;Halo Dunia&lt;/h1&gt;
                </code>

                <br><br>

                HTML menentukan
                <strong>isi dan struktur</strong> website,
                sedangkan CSS mengatur tampilannya.
            `;

        }


        if (
            q.includes("css")
        ) {

            return `
                <strong>CSS</strong> digunakan untuk
                mengatur tampilan website.

                <br><br>

                Misalnya warna, ukuran teks,
                jarak, posisi, layout dan animasi.

                <br><br>

                Contoh:

                <br><br>

                <code>
                h1 {<br>
                &nbsp;&nbsp;color: blue;<br>
                }
                </code>
            `;

        }


        if (
            q.includes("javascript") ||
            q.includes("js")
        ) {

            return `
                <strong>JavaScript</strong> digunakan untuk
                membuat website menjadi interaktif.

                <br><br>

                Contohnya tombol yang bisa diklik,
                modal, dropdown, validasi form,
                animasi dan berbagai interaksi lainnya.
            `;

        }


        if (
            q.includes("laravel")
        ) {

            return `
                <strong>Laravel</strong> adalah framework PHP
                yang banyak digunakan untuk membangun
                aplikasi web.

                <br><br>

                Laravel menyediakan fitur seperti:

                <br>
                • Routing<br>
                • Controller<br>
                • Migration<br>
                • Database<br>
                • Authentication<br>
                • Blade
            `;

        }


        if (
            q.includes("error") ||
            q.includes("eror")
        ) {

            return `
                Tenang 😎 Jangan panik dulu.

                <br><br>

                Kalau kamu mendapatkan error,
                kirimkan <strong>pesan error lengkapnya</strong>
                kepadaku.

                <br><br>

                Aku bisa bantu membaca error tersebut
                dan menjelaskan kemungkinan penyebabnya
                langkah demi langkah.
            `;

        }


        if (
            q.includes("belajar") ||
            q.includes("mulai")
        ) {

            return `
                Kalau kamu baru mulai belajar web development,
                aku sarankan urutannya:

                <br><br>

                <strong>
                HTML → CSS → JavaScript → Backend → Database → Project
                </strong>

                <br><br>

                Jangan buru-buru belajar semuanya sekaligus.
                Kuasai satu dasar dulu, kemudian lanjutkan
                ke tahap berikutnya. 🚀
            `;

        }


        return `
            Aku mengerti pertanyaanmu tentang:

            <br><br>

            <strong>
            "${question}"
            </strong>

            <br><br>

            Aku bisa bantu menjelaskannya.
            Coba tambahkan sedikit konteks supaya
            jawabanku lebih tepat.

            <br><br>

            Kamu juga bisa bertanya seperti:
            <br>
            • "Apa itu HTML?"<br>
            • "Kenapa CSS-ku error?"<br>
            • "Apa fungsi JavaScript?"<br>
            • "Jelaskan Flexbox dengan sederhana"<br>
            • "Kasih contoh kode"
        `;

    }


    function sendMessage() {

        const question =
            aiInput.value.trim();


        if (!question) {

            return;

        }


        addMessage(
            question,
            "user"
        );


        aiInput.value = "";


        showThinking();


        setTimeout(
            function() {

                removeThinking();


                const answer =
                    getAIResponse(question);


                addMessage(
                    answer,
                    "ai"
                );


            },
            1200
        );

    }


    /* =========================
       QUIZ
    ========================== */

    function answerQuiz(
        button,
        correct
    ) {

        const options =
            document.querySelectorAll(
                ".quiz-option"
            );


        options.forEach(
            option => {

                option.disabled = true;

            }
        );


        const result =
            document.getElementById(
                "quizResult"
            );


        if (correct) {

            button.classList.add(
                "correct"
            );

            result.style.display =
                "block";

            result.innerHTML =
                "🎉 Benar! justify-content mengatur posisi item pada main axis.";

        } else {

            button.classList.add(
                "wrong"
            );

            result.style.display =
                "block";

            result.innerHTML =
                "❌ Belum tepat. Coba ingat kembali fungsi main axis pada Flexbox.";

        }

    }


    /* =========================
       CODE PLAYGROUND
    ========================== */

    function runCode() {

        const code =
            document.getElementById(
                "codeInput"
            ).value;

        const output =
            document.getElementById(
                "codeOutput"
            );


        output.style.display =
            "block";


        output.innerHTML = "";

        const iframe =
            document.createElement(
                "iframe"
            );

        iframe.style.width =
            "100%";

        iframe.style.height =
            "120px";

        iframe.style.border =
            "none";

        iframe.style.background =
            "white";

        output.appendChild(
            iframe
        );


        iframe.contentDocument.open();

        iframe.contentDocument.write(
            code
        );

        iframe.contentDocument.close();

    }
    </script>

</body>

</html>