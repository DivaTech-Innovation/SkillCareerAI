{{-- =========================================================
     SKILLCAREER AI - ASSESSMENT
     resources/views/dashboard/assessment.blade.php
========================================================= --}}

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Assessment - SkillCareer AI</title>

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    {{-- Lucide Icons --}}
    <script src="https://unpkg.com/lucide@latest"></script>


    <style>
    /* =====================================================
           GLOBAL
        ===================================================== */

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        font-family: 'Inter', sans-serif;
        background: #f6f8fc;
        color: #111827;
        min-height: 100vh;
    }

    button,
    input {
        font-family: inherit;
    }

    button {
        cursor: pointer;
    }


    /* =====================================================
           DARK MODE
        ===================================================== */

    body.dark {
        background: #0b1120;
        color: #f1f5f9;
    }

    body.dark .assessment-topbar,
    body.dark .assessment-card,
    body.dark .question-card,
    body.dark .result-card,
    body.dark .result-career,
    body.dark .score-card {
        background: #111827;
        border-color: #263247;
    }

    body.dark .top-title,
    body.dark .assessment-card h1,
    body.dark .question-title,
    body.dark .result-card h2,
    body.dark .career-name,
    body.dark .score-name {
        color: #f8fafc;
    }

    body.dark .top-subtitle,
    body.dark .assessment-description,
    body.dark .question-description,
    body.dark .result-description,
    body.dark .score-description {
        color: #94a3b8;
    }

    body.dark .option {
        background: #151f31;
        border-color: #2a374d;
        color: #dbe4f0;
    }

    body.dark .option:hover {
        background: #19263b;
        border-color: #4f6cff;
    }

    body.dark .option.selected {
        background: rgba(49, 85, 255, .14);
        border-color: #5570ff;
    }

    body.dark .progress-background {
        background: #263247;
    }

    body.dark .back-button {
        color: #aab8ff;
    }

    body.dark .ai-box {
        background: linear-gradient(135deg,
                rgba(49, 85, 255, .12),
                rgba(99, 70, 255, .08));
        border-color: #2b3b65;
    }

    body.dark .result-icon {
        background: #1c2946;
    }


    /* =====================================================
           TOPBAR
        ===================================================== */

    .assessment-topbar {
        height: 74px;

        position: sticky;
        top: 0;

        z-index: 100;

        display: flex;
        align-items: center;
        justify-content: space-between;

        padding: 0 35px;

        background: rgba(255, 255, 255, .94);

        border-bottom: 1px solid #e7eaf1;

        backdrop-filter: blur(15px);
    }

    .top-left {
        display: flex;
        align-items: center;
        gap: 14px;
    }

    .back-button {
        display: inline-flex;
        align-items: center;
        gap: 7px;

        color: #3155ff;

        text-decoration: none;

        font-size: 13px;
        font-weight: 600;
    }

    .back-button svg {
        width: 17px;
    }

    .top-divider {
        width: 1px;
        height: 25px;

        background: #e5e7eb;
    }

    .top-title {
        font-size: 15px;
        font-weight: 700;
        color: #172033;
    }

    .top-subtitle {
        font-size: 11px;
        color: #8992a3;
    }

    .top-right {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .ai-status {
        display: flex;
        align-items: center;
        gap: 7px;

        padding: 7px 12px;

        border-radius: 30px;

        background: #eef2ff;

        color: #3155ff;

        font-size: 11px;
        font-weight: 600;
    }

    .status-dot {
        width: 7px;
        height: 7px;

        border-radius: 50%;

        background: #32c48d;

        box-shadow: 0 0 0 4px rgba(50, 196, 141, .12);
    }

    .theme-button {
        width: 36px;
        height: 36px;

        display: flex;
        align-items: center;
        justify-content: center;

        border: 1px solid #e4e7ee;
        border-radius: 9px;

        background: white;
        color: #4b5563;
    }

    .theme-button svg {
        width: 17px;
    }


    /* =====================================================
           MAIN
        ===================================================== */

    .assessment-wrapper {
        width: min(1000px, 92%);

        margin: 0 auto;

        padding: 42px 0 70px;
    }


    /* =====================================================
           INTRO CARD
        ===================================================== */

    .assessment-card {
        padding: 30px;

        background: white;

        border: 1px solid #e7eaf1;

        border-radius: 18px;

        box-shadow:
            0 10px 35px rgba(15, 23, 42, .04);

        margin-bottom: 20px;
    }

    .assessment-badge {
        display: inline-flex;
        align-items: center;
        gap: 7px;

        padding: 7px 12px;

        border-radius: 30px;

        background: #eef2ff;

        color: #3155ff;

        font-size: 11px;
        font-weight: 700;

        margin-bottom: 14px;
    }

    .assessment-badge svg {
        width: 14px;
    }

    .assessment-card h1 {
        font-size: 29px;
        line-height: 1.25;

        color: #10182c;

        margin-bottom: 10px;
    }

    .assessment-description {
        max-width: 700px;

        color: #697386;

        font-size: 13px;

        line-height: 1.8;
    }

    .assessment-info {
        display: grid;
        grid-template-columns: repeat(3, 1fr);

        gap: 12px;

        margin-top: 24px;
    }

    .info-box {
        padding: 15px;

        border: 1px solid #edf0f5;

        border-radius: 11px;

        background: #fafbfe;
    }

    .info-box svg {
        width: 18px;

        color: #3155ff;

        margin-bottom: 7px;
    }

    .info-box strong {
        display: block;

        font-size: 12px;

        margin-bottom: 3px;
    }

    .info-box span {
        color: #8a92a2;

        font-size: 10px;
    }


    /* =====================================================
           PROGRESS
        ===================================================== */

    .progress-section {
        margin-bottom: 18px;
    }

    .progress-top {
        display: flex;
        align-items: center;
        justify-content: space-between;

        margin-bottom: 8px;
    }

    .progress-top span {
        color: #7b8495;

        font-size: 11px;
        font-weight: 600;
    }

    .progress-top strong {
        color: #3155ff;

        font-size: 11px;
    }

    .progress-background {
        width: 100%;
        height: 7px;

        background: #edf0f6;

        border-radius: 20px;

        overflow: hidden;
    }

    .progress-bar {
        width: 10%;
        height: 100%;

        border-radius: inherit;

        background:
            linear-gradient(90deg,
                #3155ff,
                #6945ff);

        transition: width .35s ease;
    }


    /* =====================================================
           QUESTION CARD
        ===================================================== */

    .question-card {
        background: white;

        border: 1px solid #e7eaf1;

        border-radius: 18px;

        padding: 35px;

        box-shadow:
            0 10px 35px rgba(15, 23, 42, .04);

        animation: questionIn .3s ease;
    }

    @keyframes questionIn {

        from {
            opacity: 0;
            transform: translateY(8px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }

    }

    .question-category {
        display: inline-flex;

        padding: 6px 10px;

        border-radius: 7px;

        background: #f1f4ff;

        color: #3155ff;

        font-size: 10px;
        font-weight: 700;

        margin-bottom: 13px;
    }

    .question-number {
        color: #8992a3;

        font-size: 11px;
        font-weight: 600;

        margin-bottom: 7px;
    }

    .question-title {
        max-width: 750px;

        font-size: 22px;
        line-height: 1.45;

        color: #172033;

        margin-bottom: 9px;
    }

    .question-description {
        color: #7b8495;

        font-size: 12px;

        line-height: 1.7;

        margin-bottom: 25px;
    }


    /* =====================================================
           OPTIONS
        ===================================================== */

    .options {
        display: grid;

        grid-template-columns: 1fr 1fr;

        gap: 12px;
    }

    .option {
        position: relative;

        min-height: 74px;

        display: flex;
        align-items: center;

        gap: 13px;

        padding: 16px;

        border: 1px solid #e4e7ee;

        border-radius: 12px;

        background: #fff;

        color: #374151;

        transition: .2s ease;
    }

    .option:hover {
        border-color: #9eacff;

        background: #fafbff;

        transform: translateY(-1px);
    }

    .option.selected {
        border-color: #3155ff;

        background: #f1f4ff;

        box-shadow:
            0 5px 18px rgba(49, 85, 255, .08);
    }

    .option-letter {
        width: 34px;
        height: 34px;

        flex-shrink: 0;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 9px;

        background: #f1f3f8;

        color: #687386;

        font-size: 12px;
        font-weight: 700;
    }

    .option.selected .option-letter {
        background: #3155ff;

        color: white;
    }

    .option-content {
        flex: 1;
    }

    .option-title {
        display: block;

        font-size: 13px;
        font-weight: 600;

        margin-bottom: 3px;
    }

    .option-text {
        display: block;

        color: #8992a3;

        font-size: 10px;

        line-height: 1.5;
    }

    .option-check {
        width: 19px;
        height: 19px;

        display: flex;
        align-items: center;
        justify-content: center;

        border: 1px solid #d5dae4;

        border-radius: 50%;

        color: transparent;
    }

    .option.selected .option-check {
        border-color: #3155ff;

        background: #3155ff;

        color: white;
    }

    .option-check svg {
        width: 12px;
    }


    /* =====================================================
           BOTTOM ACTION
        ===================================================== */

    .question-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;

        gap: 15px;

        margin-top: 28px;

        padding-top: 20px;

        border-top: 1px solid #edf0f5;
    }

    .question-tip {
        display: flex;
        align-items: center;
        gap: 7px;

        color: #8992a3;

        font-size: 10px;
    }

    .question-tip svg {
        width: 14px;

        color: #f0a51c;
    }

    .action-buttons {
        display: flex;
        gap: 9px;
    }

    .btn-back,
    .btn-next {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 7px;

        min-width: 105px;

        padding: 11px 18px;

        border-radius: 9px;

        font-size: 12px;
        font-weight: 700;

        transition: .2s ease;
    }

    .btn-back {
        border: 1px solid #e2e5ec;

        background: white;

        color: #6b7280;
    }

    .btn-back:hover {
        border-color: #3155ff;

        color: #3155ff;
    }

    .btn-next {
        border: none;

        background:
            linear-gradient(135deg,
                #3155ff,
                #5840ef);

        color: white;

        box-shadow:
            0 7px 18px rgba(49, 85, 255, .18);
    }

    .btn-next:hover {
        transform: translateY(-1px);

        box-shadow:
            0 10px 22px rgba(49, 85, 255, .25);
    }

    .btn-next svg,
    .btn-back svg {
        width: 14px;
    }


    /* =====================================================
           AI ANALYZING
        ===================================================== */

    .analyzing {
        display: none;

        text-align: center;

        padding: 65px 25px;
    }

    .ai-animation {
        width: 80px;
        height: 80px;

        display: flex;
        align-items: center;
        justify-content: center;

        margin: 0 auto 22px;

        border-radius: 50%;

        background:
            linear-gradient(135deg,
                #3155ff,
                #6945ff);

        color: white;

        box-shadow:
            0 15px 35px rgba(49, 85, 255, .25);

        animation: aiPulse 1.5s infinite;
    }

    .ai-animation svg {
        width: 34px;
        height: 34px;
    }

    @keyframes aiPulse {

        0%,
        100% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.08);
        }

    }

    .analyzing h2 {
        font-size: 22px;

        margin-bottom: 8px;
    }

    .analyzing p {
        color: #7b8495;

        font-size: 12px;
    }

    .typing {
        display: inline-flex;

        gap: 4px;

        margin-left: 4px;
    }

    .typing span {
        width: 4px;
        height: 4px;

        border-radius: 50%;

        background: #3155ff;

        animation: typing 1s infinite;
    }

    .typing span:nth-child(2) {
        animation-delay: .15s;
    }

    .typing span:nth-child(3) {
        animation-delay: .3s;
    }

    @keyframes typing {

        0%,
        100% {
            opacity: .25;
            transform: translateY(0);
        }

        50% {
            opacity: 1;
            transform: translateY(-3px);
        }

    }


    /* =====================================================
           RESULT
        ===================================================== */

    .result-section {
        display: none;
    }

    .result-card {
        padding: 35px;

        background: white;

        border: 1px solid #e7eaf1;

        border-radius: 18px;

        text-align: center;

        box-shadow:
            0 10px 35px rgba(15, 23, 42, .04);
    }

    .result-icon {
        width: 70px;
        height: 70px;

        display: flex;
        align-items: center;
        justify-content: center;

        margin: 0 auto 17px;

        border-radius: 20px;

        background: #eef2ff;

        color: #3155ff;
    }

    .result-icon svg {
        width: 32px;
    }

    .result-label {
        color: #3155ff;

        font-size: 11px;
        font-weight: 700;

        margin-bottom: 7px;
    }

    .result-card h2 {
        font-size: 28px;

        color: #172033;

        margin-bottom: 9px;
    }

    .result-description {
        max-width: 620px;

        margin: auto;

        color: #7b8495;

        font-size: 12px;

        line-height: 1.7;
    }


    /* =====================================================
           CAREER RESULT
        ===================================================== */

    .result-careers {
        display: grid;

        grid-template-columns: repeat(3, 1fr);

        gap: 13px;

        margin-top: 25px;
    }

    .result-career {
        padding: 18px;

        text-align: left;

        background: white;

        border: 1px solid #e7eaf1;

        border-radius: 13px;

        transition: .2s ease;
    }

    .result-career:hover {
        transform: translateY(-3px);

        border-color: #cdd5ff;

        box-shadow:
            0 10px 25px rgba(15, 23, 42, .05);
    }

    .career-icon {
        width: 38px;
        height: 38px;

        display: flex;
        align-items: center;
        justify-content: center;

        margin-bottom: 12px;

        border-radius: 10px;

        background: #f0f3ff;

        color: #3155ff;
    }

    .career-icon svg {
        width: 18px;
    }

    .career-name {
        font-size: 13px;

        font-weight: 700;

        margin-bottom: 5px;
    }

    .career-match {
        color: #3155ff;

        font-size: 11px;

        font-weight: 700;

        margin-bottom: 9px;
    }

    .career-bar {
        width: 100%;
        height: 5px;

        background: #edf0f6;

        border-radius: 10px;

        overflow: hidden;
    }

    .career-bar span {
        display: block;

        height: 100%;

        border-radius: inherit;

        background:
            linear-gradient(90deg,
                #3155ff,
                #6945ff);
    }


    /* =====================================================
           RECOMMENDATION
        ===================================================== */

    .recommendation {
        margin-top: 18px;

        padding: 22px;

        text-align: left;

        border-radius: 14px;

        background:
            linear-gradient(135deg,
                #f6f8ff,
                #fbfaff);

        border: 1px solid #e4e8fa;
    }

    .recommendation-header {
        display: flex;
        align-items: center;
        gap: 9px;

        margin-bottom: 10px;
    }

    .recommendation-header svg {
        width: 18px;

        color: #3155ff;
    }

    .recommendation-header strong {
        font-size: 13px;
    }

    .recommendation p {
        color: #6f7889;

        font-size: 11px;

        line-height: 1.7;
    }


    /* =====================================================
           RESULT BUTTON
        ===================================================== */

    .result-buttons {
        display: flex;

        justify-content: center;

        gap: 10px;

        margin-top: 25px;
    }

    .result-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 7px;

        padding: 12px 19px;

        border-radius: 9px;

        text-decoration: none;

        font-size: 11px;
        font-weight: 700;
    }

    .result-btn.primary {
        background:
            linear-gradient(135deg,
                #3155ff,
                #5840ef);

        color: white;

        box-shadow:
            0 7px 18px rgba(49, 85, 255, .18);
    }

    .result-btn.secondary {
        background: white;

        border: 1px solid #e1e5ec;

        color: #5f6878;
    }


    /* =====================================================
           RESPONSIVE
        ===================================================== */

    @media(max-width: 800px) {

        .assessment-topbar {
            padding: 0 18px;
        }

        .top-subtitle,
        .top-divider {
            display: none;
        }

        .assessment-wrapper {
            width: 94%;

            padding-top: 25px;
        }

        .assessment-info {
            grid-template-columns: 1fr;
        }

        .options {
            grid-template-columns: 1fr;
        }

        .result-careers {
            grid-template-columns: 1fr;
        }

    }


    @media(max-width: 550px) {

        .assessment-topbar {
            height: 65px;
        }

        .top-title {
            font-size: 13px;
        }

        .ai-status {
            display: none;
        }

        .assessment-card,
        .question-card,
        .result-card {
            padding: 23px;
        }

        .assessment-card h1 {
            font-size: 24px;
        }

        .question-title {
            font-size: 19px;
        }

        .question-footer {
            flex-direction: column;
            align-items: stretch;
        }

        .question-tip {
            justify-content: center;
        }

        .action-buttons {
            width: 100%;
        }

        .btn-back,
        .btn-next {
            flex: 1;
        }

        .result-buttons {
            flex-direction: column;
        }

    }
    </style>

</head>


<body>


    {{-- =========================================================
     TOPBAR
========================================================= --}}

    <header class="assessment-topbar">

        <div class="top-left">

            <a href="{{ route('dashboard') }}" class="back-button">
                <i data-lucide="arrow-left"></i>
                Dashboard
            </a>

            <div class="top-divider"></div>

            <div>

                <div class="top-title">
                    Career Assessment
                </div>

                <div class="top-subtitle">
                    Temukan potensi dan arah kariermu
                </div>

            </div>

        </div>


        <div class="top-right">

            <div class="ai-status">

                <span class="status-dot"></span>

                AI Ready

            </div>

            <button class="theme-button" id="themeButton" title="Mode gelap/terang">
                <i data-lucide="moon"></i>
            </button>

        </div>

    </header>



    {{-- =========================================================
     MAIN
========================================================= --}}

    <main class="assessment-wrapper">


        {{-- =====================================================
         INTRO
    ====================================================== --}}

        <div class="assessment-card">

            <div class="assessment-badge">

                <i data-lucide="sparkles"></i>

                AI Career Assessment

            </div>


            <h1>
                Kenali Potensi. Temukan Kariermu.
            </h1>


            <p class="assessment-description">

                Jawab beberapa pertanyaan tentang minat, cara berpikir,
                kemampuan, dan tujuanmu. SkillCareer AI akan menganalisis
                jawabanmu dan memberikan rekomendasi bidang karier yang
                paling sesuai.

            </p>


            <div class="assessment-info">


                <div class="info-box">

                    <i data-lucide="clock-3"></i>

                    <strong>
                        ± 5 Menit
                    </strong>

                    <span>
                        Waktu pengerjaan
                    </span>

                </div>


                <div class="info-box">

                    <i data-lucide="list-checks"></i>

                    <strong>
                        10 Pertanyaan
                    </strong>

                    <span>
                        Tentang dirimu
                    </span>

                </div>


                <div class="info-box">

                    <i data-lucide="brain"></i>

                    <strong>
                        AI Analysis
                    </strong>

                    <span>
                        Analisis otomatis
                    </span>

                </div>


            </div>

        </div>



        {{-- =====================================================
         QUIZ AREA
    ====================================================== --}}

        <div id="quizArea">


            {{-- Progress --}}

            <div class="progress-section">

                <div class="progress-top">

                    <span>
                        Progress Assessment
                    </span>

                    <strong id="progressText">
                        1 / 10
                    </strong>

                </div>


                <div class="progress-background">

                    <div class="progress-bar" id="progressBar"></div>

                </div>

            </div>



            {{-- Question Card --}}

            <div class="question-card" id="questionCard">

                <div class="question-category" id="questionCategory">
                    Minat
                </div>


                <div class="question-number" id="questionNumber">
                    PERTANYAAN 01
                </div>


                <h2 class="question-title" id="questionTitle"></h2>


                <p class="question-description" id="questionDescription"></p>


                <div class="options" id="optionsContainer"></div>


                <div class="question-footer">


                    <div class="question-tip">

                        <i data-lucide="lightbulb"></i>

                        Tidak ada jawaban benar atau salah.

                    </div>


                    <div class="action-buttons">

                        <button class="btn-back" id="backButton" onclick="previousQuestion()">

                            <i data-lucide="arrow-left"></i>

                            Kembali

                        </button>


                        <button class="btn-next" id="nextButton" onclick="nextQuestion()">

                            Lanjut

                            <i data-lucide="arrow-right"></i>

                        </button>

                    </div>

                </div>

            </div>

        </div>



        {{-- =====================================================
         AI ANALYZING
    ====================================================== --}}

        <div class="question-card analyzing" id="analyzing">

            <div class="ai-animation">

                <i data-lucide="sparkles"></i>

            </div>


            <h2>
                AI sedang menganalisis jawabanmu
            </h2>


            <p>

                Kami sedang mencocokkan minat dan potensimu
                dengan berbagai bidang karier

                <span class="typing">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>

            </p>

        </div>



        {{-- =====================================================
         RESULT
    ====================================================== --}}

        <section class="result-section" id="resultSection">

            <div class="result-card">


                <div class="result-icon">

                    <i data-lucide="trophy"></i>

                </div>


                <div class="result-label">
                    HASIL CAREER MATCH
                </div>


                <h2 id="mainCareer">
                    Full Stack Developer
                </h2>


                <p class="result-description">

                    Berdasarkan jawabanmu, kamu memiliki kecenderungan
                    yang kuat pada bidang teknologi, problem solving,
                    dan pengembangan produk digital.

                </p>



                {{-- Career Scores --}}

                <div class="result-careers">


                    <div class="result-career">

                        <div class="career-icon">
                            <i data-lucide="code-2"></i>
                        </div>

                        <div class="career-name">
                            Full Stack Developer
                        </div>

                        <div class="career-match" id="scoreDeveloper">
                            92% Match
                        </div>

                        <div class="career-bar">
                            <span id="barDeveloper" style="width:92%"></span>
                        </div>

                    </div>



                    <div class="result-career">

                        <div class="career-icon">
                            <i data-lucide="palette"></i>
                        </div>

                        <div class="career-name">
                            UI/UX Designer
                        </div>

                        <div class="career-match" id="scoreDesigner">
                            78% Match
                        </div>

                        <div class="career-bar">
                            <span id="barDesigner" style="width:78%"></span>
                        </div>

                    </div>



                    <div class="result-career">

                        <div class="career-icon">
                            <i data-lucide="bar-chart-3"></i>
                        </div>

                        <div class="career-name">
                            Data Analyst
                        </div>

                        <div class="career-match" id="scoreData">
                            65% Match
                        </div>

                        <div class="career-bar">
                            <span id="barData" style="width:65%"></span>
                        </div>

                    </div>


                </div>



                {{-- Recommendation --}}

                <div class="recommendation">

                    <div class="recommendation-header">

                        <i data-lucide="sparkles"></i>

                        <strong>
                            Rekomendasi AI
                        </strong>

                    </div>


                    <p id="recommendationText">

                        Berdasarkan hasil assessment, kamu cocok
                        memulai perjalanan sebagai Full Stack Developer.
                        Mulailah dari HTML, CSS, JavaScript, kemudian
                        lanjut ke frontend, backend, database, dan API.

                    </p>

                </div>



                {{-- Buttons --}}

                <div class="result-buttons">

                    <a href="{{ route('dashboard') }}" class="result-btn secondary">

                        <i data-lucide="layout-dashboard"></i>

                        Kembali ke Dashboard

                    </a>


                    <a href="#" class="result-btn primary" onclick="alert('Roadmap akan segera tersedia!')">

                        Lihat Roadmap Saya

                        <i data-lucide="arrow-right"></i>

                    </a>

                </div>

            </div>

        </section>


    </main>



    <script>
    /* =====================================================
       LUCIDE
    ===================================================== */

    lucide.createIcons();



    /* =====================================================
       QUESTIONS
    ===================================================== */

    const questions = [

        {
            category: "Minat",
            title: "Aktivitas apa yang paling kamu sukai ketika menggunakan komputer?",
            description: "Pilih aktivitas yang paling menggambarkan dirimu.",
            options: [{
                    title: "Membuat website atau aplikasi",
                    text: "Menulis kode dan membangun sesuatu dari awal.",
                    scores: {
                        developer: 4,
                        designer: 1,
                        data: 1
                    }
                },
                {
                    title: "Mendesain tampilan",
                    text: "Membuat desain, UI, poster, atau visual.",
                    scores: {
                        developer: 1,
                        designer: 4,
                        data: 1
                    }
                },
                {
                    title: "Menganalisis data",
                    text: "Mencari pola dan menarik kesimpulan.",
                    scores: {
                        developer: 2,
                        designer: 1,
                        data: 4
                    }
                },
                {
                    title: "Mengatur dan membantu orang",
                    text: "Berkomunikasi dan bekerja dalam tim.",
                    scores: {
                        developer: 1,
                        designer: 2,
                        data: 2
                    }
                }
            ]
        },

        {
            category: "Problem Solving",
            title: "Ketika menemukan masalah yang sulit, apa yang biasanya kamu lakukan?",
            description: "Pilih respons yang paling dekat dengan kebiasaanmu.",
            options: [{
                    title: "Mencari tahu sampai menemukan solusi",
                    text: "Saya suka mencoba berbagai cara.",
                    scores: {
                        developer: 4,
                        designer: 2,
                        data: 4
                    }
                },
                {
                    title: "Membuat beberapa alternatif",
                    text: "Saya membandingkan beberapa kemungkinan.",
                    scores: {
                        developer: 3,
                        designer: 4,
                        data: 3
                    }
                },
                {
                    title: "Mencari data terlebih dahulu",
                    text: "Saya ingin memahami fakta sebelum bertindak.",
                    scores: {
                        developer: 3,
                        designer: 1,
                        data: 4
                    }
                },
                {
                    title: "Bertanya kepada orang lain",
                    text: "Saya senang mencari perspektif baru.",
                    scores: {
                        developer: 2,
                        designer: 3,
                        data: 2
                    }
                }
            ]
        },

        {
            category: "Kreativitas",
            title: "Seberapa tertarik kamu membuat sesuatu yang unik?",
            description: "Misalnya desain, aplikasi, konten, atau solusi baru.",
            options: [{
                    title: "Sangat tertarik",
                    text: "Saya suka bereksperimen dengan ide baru.",
                    scores: {
                        developer: 3,
                        designer: 4,
                        data: 2
                    }
                },
                {
                    title: "Cukup tertarik",
                    text: "Saya suka mencoba jika ada kesempatan.",
                    scores: {
                        developer: 3,
                        designer: 3,
                        data: 2
                    }
                },
                {
                    title: "Saya lebih suka sesuatu yang terstruktur",
                    text: "Saya nyaman mengikuti pola yang sudah ada.",
                    scores: {
                        developer: 3,
                        designer: 1,
                        data: 4
                    }
                },
                {
                    title: "Tergantung situasinya",
                    text: "Saya bisa kreatif ketika dibutuhkan.",
                    scores: {
                        developer: 2,
                        designer: 3,
                        data: 3
                    }
                }
            ]
        },

        {
            category: "Teknologi",
            title: "Bagaimana perasaanmu ketika mempelajari teknologi baru?",
            description: "Teknologi terus berkembang. Pilih yang paling menggambarkan dirimu.",
            options: [{
                    title: "Sangat penasaran",
                    text: "Saya ingin langsung mencoba.",
                    scores: {
                        developer: 4,
                        designer: 3,
                        data: 3
                    }
                },
                {
                    title: "Menarik kalau visual",
                    text: "Saya lebih mudah belajar melalui tampilan.",
                    scores: {
                        developer: 2,
                        designer: 4,
                        data: 1
                    }
                },
                {
                    title: "Saya suka memahami cara kerjanya",
                    text: "Saya tertarik dengan data dan logikanya.",
                    scores: {
                        developer: 4,
                        designer: 1,
                        data: 4
                    }
                },
                {
                    title: "Saya belajar jika memang diperlukan",
                    text: "Saya fokus pada hal yang berguna.",
                    scores: {
                        developer: 2,
                        designer: 2,
                        data: 2
                    }
                }
            ]
        },

        {
            category: "Gaya Kerja",
            title: "Lingkungan kerja seperti apa yang paling kamu sukai?",
            description: "Bayangkan dirimu sedang menjalani pekerjaan impian.",
            options: [{
                    title: "Mengerjakan project teknologi",
                    text: "Fokus membuat dan mengembangkan produk.",
                    scores: {
                        developer: 4,
                        designer: 2,
                        data: 2
                    }
                },
                {
                    title: "Studio kreatif",
                    text: "Banyak visual, ide, dan eksperimen.",
                    scores: {
                        developer: 1,
                        designer: 4,
                        data: 1
                    }
                },
                {
                    title: "Lingkungan berbasis data",
                    text: "Bekerja dengan angka dan informasi.",
                    scores: {
                        developer: 2,
                        designer: 1,
                        data: 4
                    }
                },
                {
                    title: "Kolaborasi bersama banyak orang",
                    text: "Banyak diskusi dan komunikasi.",
                    scores: {
                        developer: 2,
                        designer: 3,
                        data: 2
                    }
                }
            ]
        },

        {
            category: "Ketelitian",
            title: "Bagaimana tingkat ketelitianmu ketika mengerjakan sesuatu?",
            description: "Pilih jawaban yang paling sesuai.",
            options: [{
                    title: "Saya sangat memperhatikan detail",
                    text: "Kesalahan kecil biasanya saya cek kembali.",
                    scores: {
                        developer: 4,
                        designer: 3,
                        data: 4
                    }
                },
                {
                    title: "Saya cukup teliti",
                    text: "Saya selalu melakukan pengecekan.",
                    scores: {
                        developer: 3,
                        designer: 3,
                        data: 3
                    }
                },
                {
                    title: "Saya lebih fokus pada hasil",
                    text: "Yang penting tujuan utama tercapai.",
                    scores: {
                        developer: 3,
                        designer: 2,
                        data: 2
                    }
                },
                {
                    title: "Saya lebih suka bekerja cepat",
                    text: "Saya bisa memperbaiki detail belakangan.",
                    scores: {
                        developer: 2,
                        designer: 3,
                        data: 1
                    }
                }
            ]
        },

        {
            category: "Belajar",
            title: "Bagaimana cara belajar yang paling cocok untukmu?",
            description: "Pilih metode yang membuatmu paling mudah memahami sesuatu.",
            options: [{
                    title: "Praktik langsung",
                    text: "Saya belajar dengan membuat project.",
                    scores: {
                        developer: 4,
                        designer: 3,
                        data: 3
                    }
                },
                {
                    title: "Visual dan contoh",
                    text: "Saya suka melihat contoh sebelum mencoba.",
                    scores: {
                        developer: 2,
                        designer: 4,
                        data: 2
                    }
                },
                {
                    title: "Analisis dan teori",
                    text: "Saya ingin memahami konsepnya dahulu.",
                    scores: {
                        developer: 3,
                        designer: 1,
                        data: 4
                    }
                },
                {
                    title: "Diskusi",
                    text: "Saya mudah memahami melalui percakapan.",
                    scores: {
                        developer: 2,
                        designer: 3,
                        data: 2
                    }
                }
            ]
        },

        {
            category: "Karier",
            title: "Apa yang paling ingin kamu capai dalam karier?",
            description: "Pilih tujuan yang paling penting bagimu.",
            options: [{
                    title: "Membangun produk digital",
                    text: "Membuat aplikasi atau platform yang digunakan orang.",
                    scores: {
                        developer: 4,
                        designer: 2,
                        data: 2
                    }
                },
                {
                    title: "Menciptakan pengalaman yang menarik",
                    text: "Membuat produk terlihat dan terasa lebih baik.",
                    scores: {
                        developer: 1,
                        designer: 4,
                        data: 1
                    }
                },
                {
                    title: "Menghasilkan insight dari data",
                    text: "Membantu keputusan melalui informasi.",
                    scores: {
                        developer: 2,
                        designer: 1,
                        data: 4
                    }
                },
                {
                    title: "Memimpin sebuah project",
                    text: "Mengatur strategi dan bekerja dengan tim.",
                    scores: {
                        developer: 2,
                        designer: 3,
                        data: 2
                    }
                }
            ]
        },

        {
            category: "Masa Depan",
            title: "Bidang mana yang paling ingin kamu pelajari lebih dalam?",
            description: "Bayangkan kamu punya waktu untuk mendalami salah satunya.",
            options: [{
                    title: "Programming & Software",
                    text: "Web, mobile, backend, AI, dan teknologi.",
                    scores: {
                        developer: 5,
                        designer: 1,
                        data: 2
                    }
                },
                {
                    title: "Design & Creative",
                    text: "UI/UX, visual design, branding, dan produk.",
                    scores: {
                        developer: 1,
                        designer: 5,
                        data: 1
                    }
                },
                {
                    title: "Data & Analytics",
                    text: "Data analysis, statistik, dan visualisasi.",
                    scores: {
                        developer: 2,
                        designer: 1,
                        data: 5
                    }
                },
                {
                    title: "Teknologi secara umum",
                    text: "Saya masih ingin mengeksplorasi semuanya.",
                    scores: {
                        developer: 3,
                        designer: 3,
                        data: 3
                    }
                }
            ]
        },

        {
            category: "Final",
            title: "Jika diberi project bebas, apa yang ingin kamu buat?",
            description: "Pertanyaan terakhir. Pilih yang paling menarik bagimu.",
            options: [{
                    title: "Website atau aplikasi",
                    text: "Sesuatu yang bisa digunakan banyak orang.",
                    scores: {
                        developer: 5,
                        designer: 2,
                        data: 2
                    }
                },
                {
                    title: "Desain aplikasi",
                    text: "Membuat tampilan dan pengalaman pengguna.",
                    scores: {
                        developer: 1,
                        designer: 5,
                        data: 1
                    }
                },
                {
                    title: "Dashboard analisis",
                    text: "Mengubah data menjadi informasi yang berguna.",
                    scores: {
                        developer: 2,
                        designer: 2,
                        data: 5
                    }
                },
                {
                    title: "Project gabungan",
                    text: "Saya ingin mencoba berbagai bagian.",
                    scores: {
                        developer: 3,
                        designer: 3,
                        data: 3
                    }
                }
            ]
        }

    ];



    /* =====================================================
       VARIABLES
    ===================================================== */

    let currentQuestion = 0;

    let answers = new Array(questions.length).fill(null);



    /* =====================================================
       ELEMENTS
    ===================================================== */

    const questionCategory =
        document.getElementById('questionCategory');

    const questionNumber =
        document.getElementById('questionNumber');

    const questionTitle =
        document.getElementById('questionTitle');

    const questionDescription =
        document.getElementById('questionDescription');

    const optionsContainer =
        document.getElementById('optionsContainer');

    const progressText =
        document.getElementById('progressText');

    const progressBar =
        document.getElementById('progressBar');

    const backButton =
        document.getElementById('backButton');

    const nextButton =
        document.getElementById('nextButton');



    /* =====================================================
       LOAD QUESTION
    ===================================================== */

    function loadQuestion() {

        const question =
            questions[currentQuestion];


        questionCategory.textContent =
            question.category;


        questionNumber.textContent =
            `PERTANYAAN ${String(currentQuestion + 1).padStart(2, '0')}`;


        questionTitle.textContent =
            question.title;


        questionDescription.textContent =
            question.description;


        progressText.textContent =
            `${currentQuestion + 1} / ${questions.length}`;


        const progress =
            ((currentQuestion + 1) / questions.length) * 100;


        progressBar.style.width =
            `${progress}%`;


        optionsContainer.innerHTML = '';


        question.options.forEach((option, index) => {

            const selected =
                answers[currentQuestion] === index ?
                'selected' :
                '';


            const letters = ['A', 'B', 'C', 'D'];


            const optionElement =
                document.createElement('div');


            optionElement.className =
                `option ${selected}`;


            optionElement.onclick =
                () => selectOption(index);


            optionElement.innerHTML = `

                <div class="option-letter">
                    ${letters[index]}
                </div>

                <div class="option-content">

                    <span class="option-title">
                        ${option.title}
                    </span>

                    <span class="option-text">
                        ${option.text}
                    </span>

                </div>

                <div class="option-check">

                    <i data-lucide="check"></i>

                </div>

            `;


            optionsContainer.appendChild(optionElement);

        });


        backButton.disabled =
            currentQuestion === 0;


        backButton.style.opacity =
            currentQuestion === 0 ? '.5' : '1';


        if (currentQuestion === questions.length - 1) {

            nextButton.innerHTML = `

                Lihat Hasil

                <i data-lucide="sparkles"></i>

            `;

        } else {

            nextButton.innerHTML = `

                Lanjut

                <i data-lucide="arrow-right"></i>

            `;

        }


        lucide.createIcons();

    }



    /* =====================================================
       SELECT OPTION
    ===================================================== */

    function selectOption(index) {

        answers[currentQuestion] =
            index;


        document
            .querySelectorAll('.option')
            .forEach((option, i) => {

                option.classList.toggle(
                    'selected',
                    i === index
                );

            });

    }



    /* =====================================================
       NEXT
    ===================================================== */

    function nextQuestion() {

        if (answers[currentQuestion] === null) {

            alert(
                'Silakan pilih salah satu jawaban terlebih dahulu.'
            );

            return;

        }


        if (
            currentQuestion <
            questions.length - 1
        ) {

            currentQuestion++;

            loadQuestion();

            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });

        } else {

            showAnalyzing();

        }

    }



    /* =====================================================
       PREVIOUS
    ===================================================== */

    function previousQuestion() {

        if (currentQuestion > 0) {

            currentQuestion--;

            loadQuestion();

            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });

        }

    }



    /* =====================================================
       ANALYZING
    ===================================================== */

    function showAnalyzing() {

        document
            .getElementById('quizArea')
            .style.display = 'none';


        document
            .getElementById('analyzing')
            .style.display = 'block';


        setTimeout(
            showResult,
            2200
        );

    }



    /* =====================================================
       CALCULATE RESULT
    ===================================================== */

    function calculateScores() {

        let developer = 0;

        let designer = 0;

        let data = 0;


        answers.forEach(
            (answer, questionIndex) => {

                if (answer === null) {
                    return;
                }


                const selected =
                    questions[questionIndex]
                    .options[answer];


                developer +=
                    selected.scores.developer;


                designer +=
                    selected.scores.designer;


                data +=
                    selected.scores.data;

            }
        );


        return {
            developer,
            designer,
            data
        };

    }



    /* =====================================================
       SHOW RESULT
    ===================================================== */

    function showResult() {

        document
            .getElementById('analyzing')
            .style.display = 'none';


        document
            .getElementById('resultSection')
            .style.display = 'block';


        const scores =
            calculateScores();


        const maxScore =
            Math.max(
                scores.developer,
                scores.designer,
                scores.data
            );


        const totalPossible =
            questions.length * 5;


        let developerPercent =
            Math.round(
                (scores.developer / totalPossible) * 100
            );


        let designerPercent =
            Math.round(
                (scores.designer / totalPossible) * 100
            );


        let dataPercent =
            Math.round(
                (scores.data / totalPossible) * 100
            );


        const mainCareer =
            document.getElementById(
                'mainCareer'
            );


        const recommendation =
            document.getElementById(
                'recommendationText'
            );


        if (
            scores.developer === maxScore
        ) {

            mainCareer.textContent =
                'Full Stack Developer';


            recommendation.textContent =
                'Hasil assessment menunjukkan bahwa kamu memiliki kecenderungan kuat pada programming, problem solving, dan teknologi. Kamu cocok memulai roadmap Full Stack Developer dari HTML, CSS, JavaScript, frontend, backend, database, hingga API.';

        } else if (
            scores.designer === maxScore
        ) {

            mainCareer.textContent =
                'UI/UX Designer';


            recommendation.textContent =
                'Kamu memiliki kecenderungan kuat pada kreativitas, visual, dan pengalaman pengguna. Roadmap yang cocok untukmu adalah UI/UX Design, design thinking, wireframing, prototyping, Figma, hingga product design.';

        } else {

            mainCareer.textContent =
                'Data Analyst';


            recommendation.textContent =
                'Kamu memiliki kecenderungan kuat pada analisis, ketelitian, dan pengolahan informasi. Kamu dapat memulai roadmap Data Analyst dari spreadsheet, SQL, statistik dasar, data visualization, hingga Python.';

        }


        document.getElementById(
                'scoreDeveloper'
            ).textContent =
            `${developerPercent}% Match`;


        document.getElementById(
                'barDeveloper'
            ).style.width =
            `${developerPercent}%`;


        document.getElementById(
                'scoreDesigner'
            ).textContent =
            `${designerPercent}% Match`;


        document.getElementById(
                'barDesigner'
            ).style.width =
            `${designerPercent}%`;


        document.getElementById(
                'scoreData'
            ).textContent =
            `${dataPercent}% Match`;


        document.getElementById(
                'barData'
            ).style.width =
            `${dataPercent}%`;


        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });


        lucide.createIcons();

    }



    /* =====================================================
       DARK / LIGHT MODE
    ===================================================== */

    const themeButton =
        document.getElementById(
            'themeButton'
        );


    function updateThemeIcon() {

        themeButton.innerHTML =
            document.body.classList.contains('dark') ?
            '<i data-lucide="sun"></i>' :
            '<i data-lucide="moon"></i>';


        lucide.createIcons();

    }


    themeButton.addEventListener(
        'click',
        function() {

            document.body.classList.toggle(
                'dark'
            );


            const dark =
                document.body.classList.contains(
                    'dark'
                );


            localStorage.setItem(
                'skillcareer-theme',
                dark ? 'dark' : 'light'
            );


            updateThemeIcon();

        }
    );


    const savedTheme =
        localStorage.getItem(
            'skillcareer-theme'
        );


    if (savedTheme === 'dark') {

        document.body.classList.add(
            'dark'
        );

    }


    updateThemeIcon();



    /* =====================================================
       INITIAL LOAD
    ===================================================== */

    loadQuestion();
    </script>

</body>

</html>