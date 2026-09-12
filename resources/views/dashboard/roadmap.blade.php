<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Roadmap Saya - SkillCareerAI</title>

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

    a {
        text-decoration: none;
        color: inherit;
    }

    button {
        font-family: inherit;
    }

    .main {
        max-width: 1200px;
        margin: auto;
        padding: 35px 30px 60px;
    }

    /* HEADER */

    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
        margin-bottom: 25px;
    }

    .header-left h1 {
        font-size: 30px;
        font-weight: 800;
    }

    .header-left p {
        margin-top: 7px;
        color: #7b8496;
        font-size: 14px;
    }

    .header-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 11px 16px;
        border: 1px solid #e1e6ef;
        border-radius: 10px;
        background: white;
        color: #475166;
        font-size: 13px;
        font-weight: 600;
        cursor: pointer;
    }

    /* CAREER SELECTOR */

    .career-selector {
        background: white;
        border: 1px solid #e8ebf2;
        border-radius: 18px;
        padding: 24px;
        margin-bottom: 25px;
    }

    .career-selector h2 {
        font-size: 18px;
    }

    .career-selector p {
        margin-top: 6px;
        color: #8991a2;
        font-size: 12px;
    }

    .career-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 12px;
        margin-top: 18px;
    }

    .career-option {
        position: relative;
        padding: 17px;
        border: 1px solid #e4e8f0;
        border-radius: 13px;
        background: #fff;
        cursor: pointer;
        text-align: left;
        transition: .2s;
    }

    .career-option:hover {
        transform: translateY(-2px);
        border-color: #3155ff;
        box-shadow: 0 8px 20px rgba(49, 85, 255, .08);
    }

    .career-option.active {
        border: 2px solid #3155ff;
        background: #f4f6ff;
    }

    .career-icon {
        width: 42px;
        height: 42px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 11px;
        background: #eef2ff;
        color: #3155ff;
        margin-bottom: 12px;
    }

    .career-option h3 {
        font-size: 13px;
    }

    .career-option span {
        display: block;
        margin-top: 5px;
        color: #8a92a2;
        font-size: 10px;
    }

    .selected-check {
        display: none;
        position: absolute;
        top: 12px;
        right: 12px;
        color: #3155ff;
    }

    .career-option.active .selected-check {
        display: block;
    }

    /* HERO */

    .roadmap-hero {
        position: relative;
        overflow: hidden;
        padding: 30px;
        border-radius: 20px;
        background:
            radial-gradient(circle at 90% 20%,
                rgba(113, 96, 255, .35),
                transparent 30%),
            linear-gradient(135deg, #3155ff, #4b36d8);
        color: white;
        box-shadow: 0 18px 40px rgba(49, 85, 255, .18);
        margin-bottom: 25px;
    }

    .hero-content {
        position: relative;
        z-index: 2;
    }

    .hero-label {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        padding: 7px 12px;
        border-radius: 30px;
        background: rgba(255, 255, 255, .12);
        font-size: 10px;
        font-weight: 700;
    }

    .hero-content h2 {
        margin-top: 15px;
        font-size: 26px;
    }

    .hero-content p {
        margin-top: 7px;
        max-width: 700px;
        color: rgba(255, 255, 255, .78);
        font-size: 13px;
        line-height: 1.6;
    }

    .hero-bottom {
        display: flex;
        justify-content: space-between;
        align-items: end;
        gap: 25px;
        margin-top: 25px;
    }

    .progress-area {
        width: 100%;
        max-width: 600px;
    }

    .progress-label {
        display: flex;
        justify-content: space-between;
        margin-bottom: 8px;
        font-size: 11px;
    }

    .progress-bar {
        height: 9px;
        background: rgba(255, 255, 255, .18);
        border-radius: 20px;
        overflow: hidden;
    }

    .progress-fill {
        width: 38%;
        height: 100%;
        background: white;
        border-radius: inherit;
    }

    .progress-percent {
        font-size: 28px;
        font-weight: 800;
    }

    /* STATS */

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 14px;
        margin-bottom: 28px;
    }

    .stat-card {
        padding: 20px;
        background: white;
        border: 1px solid #e8ebf2;
        border-radius: 14px;
    }

    .stat-icon {
        width: 39px;
        height: 39px;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #eef2ff;
        color: #3155ff;
        border-radius: 10px;
    }

    .stat-card strong {
        display: block;
        margin-top: 13px;
        font-size: 22px;
    }

    .stat-card span {
        display: block;
        margin-top: 3px;
        color: #8991a2;
        font-size: 10px;
    }

    /* CONTENT */

    .section-title {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
    }

    .section-title h2 {
        font-size: 19px;
    }

    .roadmap-layout {
        display: grid;
        grid-template-columns: 1.5fr .75fr;
        gap: 20px;
    }

    /* TIMELINE */

    .roadmap-path {
        padding: 24px;
        background: white;
        border: 1px solid #e8ebf2;
        border-radius: 16px;
    }

    .timeline {
        position: relative;
    }

    .timeline::before {
        content: "";
        position: absolute;
        left: 23px;
        top: 22px;
        bottom: 22px;
        width: 2px;
        background: #e4e8f1;
    }

    .road-item {
        position: relative;
        display: flex;
        gap: 17px;
        padding-bottom: 22px;
    }

    .road-item:last-child {
        padding-bottom: 0;
    }

    .road-dot {
        position: relative;
        z-index: 2;
        flex-shrink: 0;
        width: 47px;
        height: 47px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        border: 4px solid white;
        background: #eef2ff;
        color: #3155ff;
    }

    .road-item.completed .road-dot {
        background: #3155ff;
        color: white;
    }

    .road-item.current .road-dot {
        border-color: #3155ff;
        box-shadow: 0 0 0 5px #eef2ff;
    }

    .road-item.locked .road-dot {
        background: #f0f2f6;
        color: #9ba3b2;
    }

    .road-content {
        width: 100%;
        padding: 15px 17px;
        border: 1px solid #edf0f5;
        border-radius: 12px;
    }

    .road-top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 10px;
    }

    .road-top h3 {
        font-size: 14px;
    }

    .status {
        padding: 5px 9px;
        border-radius: 20px;
        font-size: 8px;
        font-weight: 700;
    }

    .status.done {
        background: #e8faf3;
        color: #0f9f70;
    }

    .status.progress {
        background: #eef2ff;
        color: #3155ff;
    }

    .status.locked {
        background: #f1f3f6;
        color: #858d9d;
    }

    .road-content p {
        margin-top: 6px;
        color: #7b8393;
        font-size: 11px;
        line-height: 1.6;
    }

    .road-meta {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
        margin-top: 11px;
        color: #8991a2;
        font-size: 10px;
    }

    .road-meta span {
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .module-list {
        margin-top: 14px;
        display: none;
    }

    .road-item.open .module-list {
        display: block;
    }

    .module {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 10px;
        padding: 10px 11px;
        margin-top: 7px;
        border: 1px solid #edf0f5;
        border-radius: 9px;
        cursor: pointer;
        transition: .2s;
    }

    .module:hover {
        border-color: #3155ff;
        background: #f8f9ff;
    }

    .module-left {
        display: flex;
        align-items: center;
        gap: 9px;
    }

    .module-number {
        width: 24px;
        height: 24px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 7px;
        background: #eef2ff;
        color: #3155ff;
        font-size: 9px;
        font-weight: 700;
    }

    .module-title {
        font-size: 10px;
        font-weight: 600;
    }

    .module-status {
        color: #8b93a3;
        font-size: 9px;
    }

    .module.completed-module .module-number {
        background: #e8faf3;
        color: #0f9f70;
    }

    .module.completed-module .module-status {
        color: #0f9f70;
    }

    .module-btn {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        margin-top: 12px;
        padding: 8px 12px;
        border: none;
        border-radius: 8px;
        background: #3155ff;
        color: white;
        font-size: 10px;
        font-weight: 700;
        cursor: pointer;
    }

    /* SIDE */

    .side-card {
        padding: 21px;
        background: white;
        border: 1px solid #e8ebf2;
        border-radius: 16px;
        margin-bottom: 16px;
    }

    .side-card h3 {
        font-size: 15px;
    }

    .side-card-subtitle {
        margin-top: 5px;
        color: #8991a2;
        font-size: 11px;
    }

    .skill {
        margin-top: 17px;
    }

    .skill-head {
        display: flex;
        justify-content: space-between;
        margin-bottom: 6px;
        font-size: 10px;
    }

    .skill-head span:last-child {
        color: #3155ff;
        font-weight: 700;
    }

    .skill-bar {
        height: 7px;
        background: #edf0f6;
        border-radius: 20px;
        overflow: hidden;
    }

    .skill-fill {
        height: 100%;
        background: #3155ff;
        border-radius: inherit;
    }

    .career-card {
        padding: 22px;
        border-radius: 16px;
        background: linear-gradient(145deg, #f2f5ff, #fff);
        border: 1px solid #e2e7f5;
    }

    .career-label {
        color: #3155ff;
        font-size: 9px;
        font-weight: 800;
    }

    .career-card h3 {
        margin-top: 8px;
        font-size: 18px;
    }

    .career-card p {
        margin-top: 12px;
        color: #737c8d;
        font-size: 11px;
        line-height: 1.6;
    }

    .career-btn {
        display: block;
        margin-top: 15px;
        padding: 10px;
        text-align: center;
        border-radius: 9px;
        background: #3155ff;
        color: white;
        font-size: 10px;
        font-weight: 700;
    }

    /* MODAL */

    .modal {
        display: none;
        position: fixed;
        inset: 0;
        z-index: 9999;
        background: rgba(15, 23, 42, .55);
        backdrop-filter: blur(5px);
        justify-content: center;
        align-items: center;
        padding: 20px;
    }

    .modal.show {
        display: flex;
    }

    .modal-box {
        width: 100%;
        max-width: 520px;
        max-height: 90vh;
        overflow-y: auto;
        background: white;
        border-radius: 18px;
        padding: 25px;
        box-shadow: 0 25px 60px rgba(0, 0, 0, .18);
    }

    .modal-header {
        display: flex;
        justify-content: space-between;
        align-items: start;
        gap: 15px;
    }

    .modal-icon {
        width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #eef2ff;
        color: #3155ff;
        border-radius: 11px;
    }

    .modal-close {
        border: none;
        background: #f2f4f8;
        width: 34px;
        height: 34px;
        border-radius: 9px;
        cursor: pointer;
    }

    .modal-box h2 {
        margin-top: 15px;
        font-size: 20px;
    }

    .modal-box p {
        margin-top: 8px;
        color: #747d8d;
        font-size: 12px;
        line-height: 1.7;
    }

    .lesson-list {
        margin-top: 18px;
    }

    .lesson {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 12px;
        margin-top: 7px;
        background: #f8f9fc;
        border-radius: 9px;
        font-size: 11px;
    }

    .lesson i {
        color: #3155ff;
    }

    .start-learning {
        width: 100%;
        margin-top: 18px;
        padding: 12px;
        border: none;
        border-radius: 9px;
        background: #3155ff;
        color: white;
        font-weight: 700;
        cursor: pointer;
    }

    /* RESPONSIVE */

    @media(max-width:900px) {
        .career-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .stats-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .roadmap-layout {
            grid-template-columns: 1fr;
        }
    }

    @media(max-width:600px) {
        .main {
            padding: 22px 15px 50px;
        }

        .page-header {
            flex-direction: column;
            align-items: flex-start;
        }

        .career-grid {
            grid-template-columns: 1fr;
        }

        .stats-grid {
            grid-template-columns: 1fr;
        }

        .hero-bottom {
            flex-direction: column;
            align-items: flex-start;
        }
    }
    </style>
</head>

<body>

    <main class="main">

        <!-- HEADER -->

        <div class="page-header">

            <div class="header-left">

                <h1>Roadmap Saya</h1>

                <p>
                    Tentukan tujuan kariermu dan ikuti perjalanan belajar
                    yang telah disusun khusus untukmu.
                </p>

            </div>

            <a href="{{ url('/dashboard') }}" class="header-btn">

                <i data-lucide="arrow-left" size="15"></i>

                Dashboard

            </a>

        </div>


        <!-- PILIH KARIER -->

        <section class="career-selector">

            <h2>🎯 Mau jadi apa?</h2>

            <p>
                Pilih karier yang ingin kamu capai. Roadmap dan modul
                akan menyesuaikan pilihanmu.
            </p>

            <div class="career-grid">

                <button class="career-option active" onclick="selectCareer('Full Stack Developer', this)">

                    <div class="selected-check">
                        <i data-lucide="check-circle" size="17"></i>
                    </div>

                    <div class="career-icon">
                        <i data-lucide="code-2"></i>
                    </div>

                    <h3>Full Stack Developer</h3>

                    <span>Frontend + Backend + Database</span>

                </button>


                <button class="career-option" onclick="selectCareer('UI/UX Designer', this)">

                    <div class="selected-check">
                        <i data-lucide="check-circle" size="17"></i>
                    </div>

                    <div class="career-icon">
                        <i data-lucide="palette"></i>
                    </div>

                    <h3>UI/UX Designer</h3>

                    <span>Design + Research + Prototyping</span>

                </button>


                <button class="career-option" onclick="selectCareer('Mobile Developer', this)">

                    <div class="selected-check">
                        <i data-lucide="smartphone"></i>
                    </div>

                    <h3>Mobile Developer</h3>

                    <span>Android + iOS + App Development</span>

                </button>


                <button class="career-option" onclick="selectCareer('AI Engineer', this)">

                    <div class="selected-check">
                        <i data-lucide="check-circle" size="17"></i>
                    </div>

                    <div class="career-icon">
                        <i data-lucide="bot"></i>
                    </div>

                    <h3>AI Engineer</h3>

                    <span>AI + Machine Learning + Python</span>

                </button>


                <button class="career-option" onclick="selectCareer('Data Analyst', this)">

                    <div class="selected-check">
                        <i data-lucide="check-circle" size="17"></i>
                    </div>

                    <div class="career-icon">
                        <i data-lucide="bar-chart-3"></i>
                    </div>

                    <h3>Data Analyst</h3>

                    <span>Data + Statistics + Visualization</span>

                </button>


                <button class="career-option" onclick="selectCareer('Digital Marketer', this)">

                    <div class="selected-check">
                        <i data-lucide="check-circle" size="17"></i>
                    </div>

                    <div class="career-icon">
                        <i data-lucide="megaphone"></i>
                    </div>

                    <h3>Digital Marketer</h3>

                    <span>Marketing + Social Media + SEO</span>

                </button>

            </div>

        </section>


        <!-- HERO -->

        <section class="roadmap-hero">

            <div class="hero-content">

                <div class="hero-label">

                    <i data-lucide="sparkles" size="13"></i>

                    AI PERSONAL ROADMAP

                </div>

                <h2 id="careerTitle">
                    Full Stack Developer
                </h2>

                <p id="careerDescription">
                    Roadmap pembelajaran dari dasar hingga siap bekerja
                    sebagai Full Stack Developer.
                </p>

                <div class="hero-bottom">

                    <div class="progress-area">

                        <div class="progress-label">

                            <span>Progress Roadmap</span>

                            <strong id="heroProgressText">38%</strong>

                        </div>

                        <div class="progress-bar">

                            <div class="progress-fill" id="heroProgress" style="width:38%">
                            </div>

                        </div>

                    </div>

                    <div class="progress-percent" id="heroProgressNumber">

                        38%

                    </div>

                </div>

            </div>

        </section>


        <!-- STATISTICS -->

        <div class="stats-grid">

            <div class="stat-card">

                <div class="stat-icon">
                    <i data-lucide="book-open"></i>
                </div>

                <strong id="moduleCount">42</strong>

                <span>Total Modul</span>

            </div>


            <div class="stat-card">

                <div class="stat-icon">
                    <i data-lucide="clock-3"></i>
                </div>

                <strong id="learningHours">64 Jam</strong>

                <span>Estimasi Belajar</span>

            </div>


            <div class="stat-card">

                <div class="stat-icon">
                    <i data-lucide="layers"></i>
                </div>

                <strong id="levelCount">6</strong>

                <span>Tahap Pembelajaran</span>

            </div>


            <div class="stat-card">

                <div class="stat-icon">
                    <i data-lucide="target"></i>
                </div>

                <strong>92%</strong>

                <span>Career Match</span>

            </div>

        </div>


        <!-- ROADMAP -->

        <div class="section-title">

            <h2>Jalur Belajarmu</h2>

            <span style="font-size:11px;color:#8991a2;">
                Klik tahap untuk melihat modul
            </span>

        </div>


        <div class="roadmap-layout">

            <!-- LEFT -->

            <div class="roadmap-path">

                <div class="timeline" id="roadmapContainer">

                    <!-- DIISI JAVASCRIPT -->

                </div>

            </div>


            <!-- RIGHT -->

            <div>

                <div class="side-card">

                    <h3>Skill Progress</h3>

                    <p class="side-card-subtitle">
                        Perkembangan skill berdasarkan roadmap.
                    </p>


                    <div class="skill">

                        <div class="skill-head">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>

                        <div class="skill-bar">
                            <div class="skill-fill" style="width:90%"></div>
                        </div>

                    </div>


                    <div class="skill">

                        <div class="skill-head">
                            <span>CSS</span>
                            <span>78%</span>
                        </div>

                        <div class="skill-bar">
                            <div class="skill-fill" style="width:78%"></div>
                        </div>

                    </div>


                    <div class="skill">

                        <div class="skill-head">
                            <span>JavaScript</span>
                            <span>62%</span>
                        </div>

                        <div class="skill-bar">
                            <div class="skill-fill" style="width:62%"></div>
                        </div>

                    </div>


                    <div class="skill">

                        <div class="skill-head">
                            <span>Laravel</span>
                            <span>45%</span>
                        </div>

                        <div class="skill-bar">
                            <div class="skill-fill" style="width:45%"></div>
                        </div>

                    </div>

                </div>


                <div class="career-card">

                    <div class="career-label">
                        AI CAREER MATCH
                    </div>

                    <h3 id="sideCareer">
                        Full Stack Developer
                    </h3>

                    <p>
                        Berdasarkan pilihan karier dan perkembangan
                        pembelajaranmu, SkillCareerAI akan membantu
                        menentukan materi yang paling relevan.
                    </p>

                    <a href="{{ url('/dashboard/assessment') }}" class="career-btn">

                        🔍 Lihat Assessment

                    </a>

                </div>

            </div>

        </div>

    </main>


    <!-- MODAL MODUL -->

    <div class="modal" id="moduleModal">

        <div class="modal-box">

            <div class="modal-header">

                <div class="modal-icon">

                    <i data-lucide="book-open"></i>

                </div>

                <button class="modal-close" onclick="closeModal()">

                    <i data-lucide="x" size="17"></i>

                </button>

            </div>

            <h2 id="modalTitle">
                Materi
            </h2>

            <p id="modalDescription">
                Pelajari materi ini untuk meningkatkan kemampuanmu.
            </p>

            <div class="lesson-list" id="lessonList">

            </div>

            <button class="start-learning" onclick="startLearning()">

                🚀 Mulai Belajar

            </button>

        </div>

    </div>


    <script>
    /*
    ============================================================
    DATA ROADMAP
    ============================================================
    */

    const roadmaps = {

        "Full Stack Developer": {

            description: "Roadmap pembelajaran dari dasar hingga siap bekerja sebagai Full Stack Developer.",

            progress: 38,

            modules: 42,

            hours: 64,

            stages: [

                {
                    title: "Web Fundamental",
                    icon: "globe",
                    status: "completed",
                    badge: "SELESAI",
                    description: "Pelajari dasar website, HTML, CSS dan konsep web modern.",
                    lessons: [
                        "Cara Kerja Website",
                        "HTML Dasar",
                        "Semantic HTML",
                        "CSS Dasar",
                        "Flexbox",
                        "CSS Grid",
                        "Responsive Design"
                    ]
                },

                {
                    title: "JavaScript Development",
                    icon: "braces",
                    status: "current",
                    badge: "SEDANG BERJALAN",
                    description: "Kuasai JavaScript untuk membuat website interaktif.",
                    lessons: [
                        "JavaScript Dasar",
                        "Variable & Data Type",
                        "Function",
                        "Array & Object",
                        "DOM Manipulation",
                        "Event Handling",
                        "Async JavaScript",
                        "Fetch API"
                    ]
                },

                {
                    title: "Frontend Development",
                    icon: "layout-dashboard",
                    status: "normal",
                    badge: "0%",
                    description: "Bangun interface modern menggunakan framework frontend.",
                    lessons: [
                        "Git & GitHub",
                        "React Dasar",
                        "Components",
                        "Props",
                        "State",
                        "React Router",
                        "API Integration",
                        "Frontend Project"
                    ]
                },

                {
                    title: "Backend Development",
                    icon: "server",
                    status: "normal",
                    badge: "0%",
                    description: "Pelajari server, authentication, Laravel dan REST API.",
                    lessons: [
                        "PHP Dasar",
                        "Object Oriented Programming",
                        "Laravel Introduction",
                        "Routing",
                        "Controller",
                        "Model",
                        "Authentication",
                        "REST API"
                    ]
                },

                {
                    title: "Database & API",
                    icon: "database",
                    status: "locked",
                    badge: "TERKUNCI",
                    description: "Pelajari database dan hubungan data dengan aplikasi.",
                    lessons: [
                        "Database Fundamental",
                        "MySQL",
                        "Table & Column",
                        "Primary Key",
                        "Foreign Key",
                        "Database Relationship",
                        "Laravel Migration",
                        "Eloquent ORM"
                    ]
                },

                {
                    title: "Professional Project",
                    icon: "folder-git-2",
                    status: "locked",
                    badge: "TERKUNCI",
                    description: "Bangun project portfolio yang siap ditampilkan kepada perusahaan.",
                    lessons: [
                        "Project Planning",
                        "UI Design",
                        "Frontend Development",
                        "Backend Development",
                        "Database",
                        "Authentication",
                        "Deployment"
                    ]
                }

            ]

        },


        "UI/UX Designer": {

            description: "Pelajari proses desain produk digital dari riset hingga prototype profesional.",

            progress: 15,

            modules: 36,

            hours: 52,

            stages: [

                {
                    title: "Design Fundamental",
                    icon: "palette",
                    status: "completed",
                    badge: "SELESAI",
                    description: "Pelajari prinsip dasar desain dan visual.",
                    lessons: [
                        "Design Thinking",
                        "Color Theory",
                        "Typography",
                        "Layout",
                        "Visual Hierarchy",
                        "Design Principles"
                    ]
                },

                {
                    title: "UX Research",
                    icon: "search",
                    status: "current",
                    badge: "SEDANG BERJALAN",
                    description: "Pelajari bagaimana memahami kebutuhan pengguna.",
                    lessons: [
                        "User Research",
                        "Interview",
                        "User Persona",
                        "User Journey",
                        "Problem Statement",
                        "User Flow"
                    ]
                },

                {
                    title: "UI Design",
                    icon: "pen-tool",
                    status: "normal",
                    badge: "0%",
                    description: "Bangun interface yang modern dan mudah digunakan.",
                    lessons: [
                        "Wireframe",
                        "Design System",
                        "Component",
                        "Button",
                        "Form",
                        "Navigation",
                        "Responsive UI"
                    ]
                },

                {
                    title: "Figma Mastery",
                    icon: "figma",
                    status: "normal",
                    badge: "0%",
                    description: "Kuasai Figma untuk membuat desain profesional.",
                    lessons: [
                        "Figma Basic",
                        "Auto Layout",
                        "Component",
                        "Prototype",
                        "Variables",
                        "Design System"
                    ]
                },

                {
                    title: "UX Testing",
                    icon: "users",
                    status: "locked",
                    badge: "TERKUNCI",
                    description: "Uji desain dan temukan masalah usability.",
                    lessons: [
                        "Usability Testing",
                        "A/B Testing",
                        "Feedback",
                        "Iteration"
                    ]
                },

                {
                    title: "Design Portfolio",
                    icon: "briefcase",
                    status: "locked",
                    badge: "TERKUNCI",
                    description: "Bangun portfolio UI/UX untuk memasuki dunia kerja.",
                    lessons: [
                        "Case Study",
                        "Portfolio",
                        "Behance",
                        "Presentation",
                        "Design Interview"
                    ]
                }

            ]

        },


        "Mobile Developer": {

            description: "Bangun aplikasi mobile modern dari dasar sampai siap dipublikasikan.",

            progress: 10,
            modules: 40,
            hours: 60,

            stages: [

                {
                    title: "Programming Fundamental",
                    icon: "code",
                    status: "completed",
                    badge: "SELESAI",
                    description: "Dasar pemrograman untuk mobile developer.",
                    lessons: [
                        "Programming Logic",
                        "Variable",
                        "Condition",
                        "Loop",
                        "Function",
                        "Object"
                    ]
                },

                {
                    title: "Mobile UI",
                    icon: "smartphone",
                    status: "current",
                    badge: "SEDANG BERJALAN",
                    description: "Membangun tampilan aplikasi mobile.",
                    lessons: [
                        "Mobile Layout",
                        "Navigation",
                        "Form",
                        "List",
                        "Responsive UI"
                    ]
                },

                {
                    title: "Flutter Development",
                    icon: "layers",
                    status: "normal",
                    badge: "0%",
                    description: "Membangun aplikasi menggunakan Flutter.",
                    lessons: [
                        "Flutter Introduction",
                        "Widget",
                        "State",
                        "Navigation",
                        "API",
                        "Firebase"
                    ]
                },

                {
                    title: "Mobile Backend",
                    icon: "server",
                    status: "normal",
                    badge: "0%",
                    description: "Hubungkan aplikasi dengan backend.",
                    lessons: [
                        "REST API",
                        "Authentication",
                        "Database",
                        "Cloud Storage"
                    ]
                },

                {
                    title: "Mobile Project",
                    icon: "rocket",
                    status: "locked",
                    badge: "TERKUNCI",
                    description: "Bangun aplikasi mobile portfolio.",
                    lessons: [
                        "Project Planning",
                        "Development",
                        "Testing",
                        "Deployment"
                    ]
                }

            ]

        },


        "AI Engineer": {

            description: "Pelajari Python, data, machine learning dan pengembangan aplikasi AI.",

            progress: 8,
            modules: 44,
            hours: 70,

            stages: [

                {
                    title: "Python Fundamental",
                    icon: "code-2",
                    status: "completed",
                    badge: "SELESAI",
                    description: "Dasar Python untuk AI.",
                    lessons: [
                        "Python Basic",
                        "Variable",
                        "Function",
                        "List",
                        "Dictionary",
                        "OOP"
                    ]
                },

                {
                    title: "Data Fundamental",
                    icon: "database",
                    status: "current",
                    badge: "SEDANG BERJALAN",
                    description: "Belajar mengolah data.",
                    lessons: [
                        "Data Cleaning",
                        "Pandas",
                        "NumPy",
                        "Data Visualization"
                    ]
                },

                {
                    title: "Machine Learning",
                    icon: "brain",
                    status: "normal",
                    badge: "0%",
                    description: "Membangun model machine learning.",
                    lessons: [
                        "ML Fundamental",
                        "Regression",
                        "Classification",
                        "Clustering",
                        "Model Evaluation"
                    ]
                },

                {
                    title: "Generative AI",
                    icon: "bot",
                    status: "normal",
                    badge: "0%",
                    description: "Mengenal teknologi AI generatif.",
                    lessons: [
                        "LLM Fundamental",
                        "Prompt Engineering",
                        "AI API",
                        "AI Application"
                    ]
                },

                {
                    title: "AI Project",
                    icon: "rocket",
                    status: "locked",
                    badge: "TERKUNCI",
                    description: "Bangun project AI.",
                    lessons: [
                        "Project Planning",
                        "Dataset",
                        "Model",
                        "Deployment"
                    ]
                }

            ]

        },


        "Data Analyst": {

            description: "Kuasai analisis data untuk menghasilkan insight yang berguna bagi bisnis.",

            progress: 12,
            modules: 38,
            hours: 55,

            stages: [

                {
                    title: "Data Fundamental",
                    icon: "database",
                    status: "completed",
                    badge: "SELESAI",
                    description: "Dasar data dan statistik.",
                    lessons: [
                        "Data Fundamental",
                        "Data Types",
                        "Statistics",
                        "Probability"
                    ]
                },

                {
                    title: "Excel & Spreadsheet",
                    icon: "table",
                    status: "current",
                    badge: "SEDANG BERJALAN",
                    description: "Mengolah data menggunakan spreadsheet.",
                    lessons: [
                        "Excel Basic",
                        "Formula",
                        "Pivot Table",
                        "Data Cleaning",
                        "Dashboard"
                    ]
                },

                {
                    title: "SQL",
                    icon: "database",
                    status: "normal",
                    badge: "0%",
                    description: "Mengambil dan mengolah data dari database.",
                    lessons: [
                        "SQL Basic",
                        "SELECT",
                        "JOIN",
                        "GROUP BY",
                        "Subquery",
                        "Database Analysis"
                    ]
                },

                {
                    title: "Data Visualization",
                    icon: "bar-chart-3",
                    status: "normal",
                    badge: "0%",
                    description: "Membuat visualisasi data.",
                    lessons: [
                        "Chart",
                        "Dashboard",
                        "Power BI",
                        "Data Storytelling"
                    ]
                },

                {
                    title: "Data Project",
                    icon: "rocket",
                    status: "locked",
                    badge: "TERKUNCI",
                    description: "Bangun portfolio data analyst.",
                    lessons: [
                        "Data Collection",
                        "Analysis",
                        "Visualization",
                        "Presentation"
                    ]
                }

            ]

        },


        "Digital Marketer": {

            description: "Pelajari strategi digital marketing untuk membangun brand dan meningkatkan bisnis.",

            progress: 18,
            modules: 35,
            hours: 48,

            stages: [

                {
                    title: "Marketing Fundamental",
                    icon: "megaphone",
                    status: "completed",
                    badge: "SELESAI",
                    description: "Dasar digital marketing.",
                    lessons: [
                        "Marketing Basic",
                        "Target Audience",
                        "Customer Journey",
                        "Branding"
                    ]
                },

                {
                    title: "Social Media",
                    icon: "instagram",
                    status: "current",
                    badge: "SEDANG BERJALAN",
                    description: "Membangun strategi social media.",
                    lessons: [
                        "Content Strategy",
                        "Instagram",
                        "TikTok",
                        "Content Calendar",
                        "Analytics"
                    ]
                },

                {
                    title: "SEO",
                    icon: "search",
                    status: "normal",
                    badge: "0%",
                    description: "Meningkatkan visibilitas website.",
                    lessons: [
                        "SEO Basic",
                        "Keyword Research",
                        "On Page SEO",
                        "Technical SEO",
                        "Analytics"
                    ]
                },

                {
                    title: "Advertising",
                    icon: "badge-dollar-sign",
                    status: "normal",
                    badge: "0%",
                    description: "Mengenal strategi iklan digital.",
                    lessons: [
                        "Digital Ads",
                        "Audience Targeting",
                        "Campaign",
                        "Optimization"
                    ]
                },

                {
                    title: "Marketing Project",
                    icon: "rocket",
                    status: "locked",
                    badge: "TERKUNCI",
                    description: "Buat campaign digital marketing.",
                    lessons: [
                        "Campaign Planning",
                        "Content",
                        "Advertising",
                        "Analytics",
                        "Report"
                    ]
                }

            ]

        }

    };


    /*
    ============================================================
    PILIH KARIER
    ============================================================
    */

    function selectCareer(career, element) {

        document.querySelectorAll(".career-option")
            .forEach(btn => btn.classList.remove("active"));

        element.classList.add("active");

        const data = roadmaps[career];

        document.getElementById("careerTitle").textContent = career;

        document.getElementById("sideCareer").textContent = career;

        document.getElementById("careerDescription")
            .textContent = data.description;

        document.getElementById("heroProgressText")
            .textContent = data.progress + "%";

        document.getElementById("heroProgressNumber")
            .textContent = data.progress + "%";

        document.getElementById("heroProgress")
            .style.width = data.progress + "%";

        document.getElementById("moduleCount")
            .textContent = data.modules;

        document.getElementById("learningHours")
            .textContent = data.hours + " Jam";

        document.getElementById("levelCount")
            .textContent = data.stages.length;

        renderRoadmap(data.stages);

        lucide.createIcons();

    }


    /*
    ============================================================
    RENDER ROADMAP
    ============================================================
    */

    function renderRoadmap(stages) {

        const container =
            document.getElementById("roadmapContainer");

        container.innerHTML = "";

        stages.forEach((stage, index) => {

            let statusClass = "";

            if (stage.status === "completed") {
                statusClass = "completed";
            }

            if (stage.status === "current") {
                statusClass = "current open";
            }

            if (stage.status === "locked") {
                statusClass = "locked";
            }

            let statusBadge = "progress";

            if (stage.status === "completed") {
                statusBadge = "done";
            }

            if (stage.status === "locked") {
                statusBadge = "locked";
            }

            let modulesHTML = "";

            stage.lessons.forEach((lesson, lessonIndex) => {

                modulesHTML += `

                    <div class="module
                        ${lessonIndex < 2 && stage.status === "completed"
                            ? "completed-module"
                            : ""}"
                        onclick="openModule(
                            '${lesson.replace(/'/g, "\\'")}',
                            '${stage.title.replace(/'/g, "\\'")}'
                        )">

                        <div class="module-left">

                            <div class="module-number">

                                ${lessonIndex < 2 &&
                                stage.status === "completed"
                                    ? "✓"
                                    : lessonIndex + 1}

                            </div>

                            <div>

                                <div class="module-title">
                                    ${lesson}
                                </div>

                                <div class="module-status">
                                    ${stage.status === "locked"
                                        ? "Terkunci"
                                        : lessonIndex < 2 &&
                                          stage.status === "completed"
                                            ? "Selesai"
                                            : "Belum dipelajari"}
                                </div>

                            </div>

                        </div>

                        <i data-lucide="chevron-right" size="14"></i>

                    </div>

                `;

            });


            const item = document.createElement("div");

            item.className =
                `road-item ${statusClass}`;

            item.innerHTML = `

                <div class="road-dot">

                    <i data-lucide="${stage.icon}" size="18"></i>

                </div>

                <div class="road-content">

                    <div class="road-top">

                        <h3>
                            ${index + 1}. ${stage.title}
                        </h3>

                        <span class="status ${statusBadge}">
                            ${stage.badge}
                        </span>

                    </div>

                    <p>
                        ${stage.description}
                    </p>

                    <div class="road-meta">

                        <span>

                            <i data-lucide="book-open" size="12"></i>

                            ${stage.lessons.length} Modul

                        </span>

                        <span>

                            <i data-lucide="clock" size="12"></i>

                            ${stage.lessons.length * 1} Jam

                        </span>

                    </div>

                    <div class="module-list">

                        ${modulesHTML}

                    </div>

                    ${
                        stage.status !== "locked"

                        ?

                        `<button class="module-btn"
                            onclick="toggleStage(this,event)">

                            ${stage.status === "completed"
                                ? "Lihat Modul"
                                : "Lanjut Belajar"}

                            <i data-lucide="arrow-down" size="13"></i>

                        </button>`

                        :

                        `<button class="module-btn"
                            style="background:#e8ebf1;color:#8991a2"
                            disabled>

                            🔒 Terkunci

                        </button>`
                    }

                </div>

            `;

            container.appendChild(item);

        });

        lucide.createIcons();

    }


    /*
    ============================================================
    BUKA/TUTUP MODUL
    ============================================================
    */

    function toggleStage(button, event) {

        event.stopPropagation();

        const item =
            button.closest(".road-item");

        item.classList.toggle("open");

        const icon =
            button.querySelector("svg");

        if (item.classList.contains("open")) {

            button.innerHTML =
                `Tutup Modul
                <i data-lucide="arrow-up" size="13"></i>`;

        } else {

            button.innerHTML =
                `Lihat Modul
                <i data-lucide="arrow-down" size="13"></i>`;

        }

        lucide.createIcons();

    }


    /*
    ============================================================
    MODAL MODULE
    ============================================================
    */

    function openModule(module, stage) {

        document.getElementById("modalTitle")
            .textContent = module;

        document.getElementById("modalDescription")
            .textContent =
            `Modul "${module}" merupakan bagian dari tahap ${stage}. Pelajari materi secara bertahap untuk meningkatkan kemampuanmu.`;

        const lessons = [
            "Pengenalan materi",
            "Konsep dasar",
            "Contoh penggunaan",
            "Latihan interaktif",
            "Mini challenge",
            "Evaluasi pemahaman"
        ];

        const list =
            document.getElementById("lessonList");

        list.innerHTML = "";

        lessons.forEach((lesson, index) => {

            list.innerHTML += `

                <div class="lesson">

                    <i data-lucide="play-circle"
                       size="15"></i>

                    <span>
                        ${index + 1}. ${lesson}
                    </span>

                </div>

            `;

        });

        document
            .getElementById("moduleModal")
            .classList.add("show");

        lucide.createIcons();

    }


    function closeModal() {

        document
            .getElementById("moduleModal")
            .classList.remove("show");

    }


    function startLearning() {

        alert(
            "🚀 Modul pembelajaran akan segera dimulai!\n\nFitur materi interaktif dapat kita sambungkan ke database Laravel setelah struktur dashboard selesai."
        );

    }


    /*
    ============================================================
    CLOSE MODAL CLICK OUTSIDE
    ============================================================
    */

    document
        .getElementById("moduleModal")
        .addEventListener("click", function(e) {

            if (e.target === this) {
                closeModal();
            }

        });


    /*
    ============================================================
    INITIAL ROADMAP
    ============================================================
    */

    renderRoadmap(
        roadmaps["Full Stack Developer"].stages
    );

    lucide.createIcons();
    </script>

</body>

</html>