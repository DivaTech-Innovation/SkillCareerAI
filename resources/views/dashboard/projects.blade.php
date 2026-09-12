<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Proyek - SkillCareerAI</title>

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
    textarea,
    select {
        font-family: inherit;
    }

    button {
        cursor: pointer;
    }

    a {
        text-decoration: none;
        color: inherit;
    }

    .main {
        max-width: 1250px;
        margin: auto;
        padding: 35px 30px 70px;
    }

    /* ================= HEADER ================= */

    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
        margin-bottom: 25px;
    }

    .header-title h1 {
        font-size: 30px;
        font-weight: 800;
    }

    .header-title p {
        margin-top: 7px;
        color: #7b8496;
        font-size: 14px;
    }

    .back-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 11px 15px;
        border: 1px solid #e1e6ef;
        border-radius: 10px;
        background: white;
        color: #475166;
        font-size: 12px;
        font-weight: 700;
    }

    .back-btn:hover {
        color: #3155ff;
        border-color: #3155ff;
    }

    /* ================= HERO ================= */

    .hero {
        position: relative;
        overflow: hidden;

        padding: 30px;

        border-radius: 20px;

        background:
            radial-gradient(circle at 90% 10%,
                rgba(255, 255, 255, .16),
                transparent 30%),
            linear-gradient(135deg,
                #3155ff,
                #4b36d8);

        color: white;

        margin-bottom: 25px;

        box-shadow:
            0 18px 40px rgba(49, 85, 255, .18);
    }

    .hero::after {
        content: "";

        position: absolute;

        width: 230px;
        height: 230px;

        right: -80px;
        bottom: -110px;

        border-radius: 50%;

        background: rgba(255, 255, 255, .08);
    }

    .hero-content {
        position: relative;
        z-index: 2;
    }

    .hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 7px;

        padding: 7px 12px;

        border-radius: 30px;

        background: rgba(255, 255, 255, .13);

        font-size: 10px;
        font-weight: 800;
    }

    .hero h2 {
        margin-top: 15px;

        font-size: 25px;
        font-weight: 800;
    }

    .hero p {
        margin-top: 8px;

        max-width: 680px;

        color: rgba(255, 255, 255, .78);

        font-size: 13px;
        line-height: 1.7;
    }

    .hero-stats {
        display: flex;
        gap: 25px;
        margin-top: 23px;
    }

    .hero-stat strong {
        display: block;
        font-size: 20px;
    }

    .hero-stat span {
        color: rgba(255, 255, 255, .7);
        font-size: 10px;
    }

    /* ================= FILTER ================= */

    .filter-bar {
        display: flex;
        align-items: center;
        gap: 10px;

        margin-bottom: 20px;

        overflow-x: auto;
    }

    .filter-btn {
        border: 1px solid #e2e6ef;

        background: white;

        padding: 9px 14px;

        border-radius: 9px;

        color: #697286;

        font-size: 11px;
        font-weight: 700;

        white-space: nowrap;
    }

    .filter-btn.active,
    .filter-btn:hover {
        background: #3155ff;
        border-color: #3155ff;
        color: white;
    }

    /* ================= PROJECT GRID ================= */

    .project-grid {
        display: grid;

        grid-template-columns:
            repeat(3, 1fr);

        gap: 17px;

        margin-bottom: 30px;
    }

    .project-card {
        background: white;

        border: 1px solid #e7eaf1;

        border-radius: 16px;

        padding: 20px;

        transition: .2s;

        position: relative;
    }

    .project-card:hover {
        transform: translateY(-4px);

        box-shadow:
            0 15px 30px rgba(15, 23, 42, .07);

        border-color: #d7def5;
    }

    .project-icon {
        width: 45px;
        height: 45px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 12px;

        background: #eef2ff;

        color: #3155ff;
    }

    .project-level {
        position: absolute;

        top: 20px;
        right: 20px;

        padding: 5px 9px;

        border-radius: 20px;

        background: #f1f3f8;

        color: #737c8e;

        font-size: 9px;
        font-weight: 800;
    }

    .project-card h3 {
        margin-top: 15px;

        font-size: 15px;
    }

    .project-card p {
        margin-top: 7px;

        color: #7b8495;

        font-size: 11px;

        line-height: 1.6;
    }

    .tags {
        display: flex;
        flex-wrap: wrap;

        gap: 6px;

        margin-top: 13px;
    }

    .tag {
        padding: 5px 8px;

        border-radius: 6px;

        background: #f3f5fa;

        color: #667085;

        font-size: 9px;
        font-weight: 700;
    }

    .project-bottom {
        display: flex;

        justify-content: space-between;

        align-items: center;

        margin-top: 18px;

        padding-top: 15px;

        border-top: 1px solid #edf0f5;
    }

    .project-meta {
        color: #8991a2;

        font-size: 9px;
    }

    .start-project {
        border: none;

        background: #3155ff;

        color: white;

        padding: 8px 11px;

        border-radius: 8px;

        font-size: 10px;

        font-weight: 700;
    }

    .start-project:hover {
        background: #2447ed;
    }

    /* ================= WORKSPACE ================= */

    .workspace {
        display: none;

        grid-template-columns:
            1.2fr .8fr;

        gap: 20px;

        margin-top: 25px;
    }

    .workspace.show {
        display: grid;
    }

    .workspace-card {
        background: white;

        border: 1px solid #e7eaf1;

        border-radius: 17px;

        overflow: hidden;
    }

    .workspace-header {
        padding: 18px 20px;

        border-bottom: 1px solid #edf0f5;

        display: flex;

        justify-content: space-between;

        align-items: center;
    }

    .workspace-header h3 {
        font-size: 15px;
    }

    .workspace-header span {
        color: #8991a2;

        font-size: 10px;
    }

    .workspace-body {
        padding: 20px;
    }

    /* ================= BRIEF ================= */

    .brief-title {
        font-size: 19px;
        font-weight: 800;
    }

    .brief-desc {
        margin-top: 8px;

        color: #737c8d;

        font-size: 12px;

        line-height: 1.7;
    }

    .requirement {
        margin-top: 20px;
    }

    .requirement h4 {
        font-size: 13px;
    }

    .requirement ul {
        margin-top: 10px;

        padding-left: 20px;

        color: #687184;

        font-size: 11px;

        line-height: 2;
    }

    .skill-needed {
        display: flex;
        flex-wrap: wrap;

        gap: 7px;

        margin-top: 15px;
    }

    .skill-pill {
        padding: 6px 9px;

        background: #eef2ff;

        color: #3155ff;

        border-radius: 7px;

        font-size: 9px;

        font-weight: 700;
    }

    /* ================= SUBMIT ================= */

    .submit-area {
        margin-top: 22px;
    }

    .submit-area label {
        display: block;

        margin-bottom: 8px;

        font-size: 12px;

        font-weight: 800;
    }

    textarea {
        width: 100%;

        min-height: 220px;

        resize: vertical;

        border: 1px solid #dfe4ed;

        border-radius: 11px;

        padding: 14px;

        outline: none;

        color: #263148;

        font-size: 11px;

        line-height: 1.7;
    }

    textarea:focus {
        border-color: #3155ff;

        box-shadow:
            0 0 0 3px rgba(49, 85, 255, .08);
    }

    .submit-buttons {
        display: flex;

        gap: 9px;

        margin-top: 12px;
    }

    .analyze-btn {
        display: inline-flex;

        align-items: center;

        justify-content: center;

        gap: 7px;

        border: none;

        padding: 11px 16px;

        border-radius: 9px;

        background: #3155ff;

        color: white;

        font-size: 11px;

        font-weight: 800;
    }

    .reset-btn {
        border: 1px solid #e1e5ed;

        padding: 11px 16px;

        border-radius: 9px;

        background: white;

        color: #667085;

        font-size: 11px;

        font-weight: 700;
    }

    /* ================= AI REVIEW ================= */

    .ai-review {
        display: none;
    }

    .ai-review.show {
        display: block;
    }

    .ai-header {
        display: flex;

        align-items: center;

        gap: 11px;

        padding-bottom: 17px;

        border-bottom: 1px solid #edf0f5;
    }

    .ai-icon {
        width: 42px;
        height: 42px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 12px;

        background:
            linear-gradient(135deg,
                #3155ff,
                #7b5cff);

        color: white;
    }

    .ai-header h3 {
        font-size: 14px;
    }

    .ai-header p {
        margin-top: 3px;

        color: #8991a2;

        font-size: 9px;
    }

    /* ================= SCORE ================= */

    .score-box {
        margin-top: 20px;

        padding: 18px;

        border-radius: 13px;

        background:
            linear-gradient(135deg,
                #f0f3ff,
                #f8f9ff);

        text-align: center;
    }

    .score-label {
        color: #737c8d;

        font-size: 10px;

        font-weight: 700;
    }

    .score {
        margin-top: 5px;

        font-size: 40px;

        font-weight: 900;

        color: #3155ff;
    }

    .score-message {
        margin-top: 3px;

        color: #536078;

        font-size: 10px;
    }

    /* ================= ANALYSIS ITEMS ================= */

    .analysis-list {
        margin-top: 20px;
    }

    .analysis-item {
        display: flex;

        gap: 10px;

        padding: 12px;

        margin-bottom: 9px;

        border-radius: 10px;

        background: #f8f9fc;
    }

    .analysis-icon {
        width: 27px;
        height: 27px;

        flex-shrink: 0;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 7px;
    }

    .analysis-icon.good {
        background: #e8faf3;
        color: #0f9f70;
    }

    .analysis-icon.warning {
        background: #fff7df;
        color: #c88700;
    }

    .analysis-icon.bad {
        background: #fff0f0;
        color: #dc3d3d;
    }

    .analysis-item strong {
        display: block;

        font-size: 10px;
    }

    .analysis-item p {
        margin-top: 3px;

        color: #7b8495;

        font-size: 9px;

        line-height: 1.5;
    }

    /* ================= RECOMMENDATION ================= */

    .recommendation {
        margin-top: 18px;

        padding: 15px;

        border-radius: 11px;

        background: #f7f8fc;

        border: 1px solid #edf0f5;
    }

    .recommendation h4 {
        display: flex;

        align-items: center;

        gap: 7px;

        font-size: 11px;
    }

    .recommendation p {
        margin-top: 7px;

        color: #737c8d;

        font-size: 10px;

        line-height: 1.6;
    }

    /* ================= THINKING ================= */

    .thinking {
        display: none;

        align-items: center;

        gap: 9px;

        margin-top: 20px;

        padding: 12px;

        border-radius: 10px;

        background: #f5f7ff;

        color: #536078;

        font-size: 10px;
    }

    .thinking.show {
        display: flex;
    }

    .dots {
        display: flex;

        gap: 3px;
    }

    .dots span {
        width: 5px;
        height: 5px;

        border-radius: 50%;

        background: #3155ff;

        animation: bounce 1.2s infinite;
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
        }

        30% {
            transform: translateY(-5px);
        }

    }

    /* ================= EMPTY ================= */

    .empty-review {
        text-align: center;

        padding: 50px 15px;

        color: #8991a2;
    }

    .empty-review svg {
        margin-bottom: 10px;
    }

    .empty-review p {
        font-size: 10px;
        line-height: 1.6;
    }

    /* ================= RESPONSIVE ================= */

    @media(max-width: 1000px) {

        .project-grid {
            grid-template-columns:
                repeat(2, 1fr);
        }

        .workspace {
            grid-template-columns: 1fr;
        }

    }

    @media(max-width: 650px) {

        .main {
            padding: 25px 16px 50px;
        }

        .page-header {
            align-items: flex-start;
            flex-direction: column;
        }

        .project-grid {
            grid-template-columns: 1fr;
        }

        .hero {
            padding: 23px;
        }

        .hero-stats {
            gap: 15px;
            flex-wrap: wrap;
        }

    }
    </style>

</head>


<body>

    <main class="main">

        <!-- HEADER -->

        <div class="page-header">

            <div class="header-title">

                <h1>
                    Proyek
                </h1>

                <p>
                    Terapkan skill yang sudah kamu pelajari melalui proyek nyata.
                </p>

            </div>

            <a href="{{ url('/dashboard') }}" class="back-btn">

                <i data-lucide="arrow-left" size="15"></i>

                Dashboard

            </a>

        </div>


        <!-- HERO -->

        <section class="hero">

            <div class="hero-content">

                <div class="hero-badge">

                    <i data-lucide="sparkles" size="13"></i>

                    AI PROJECT LAB

                </div>

                <h2>
                    Bangun. Uji. Dapatkan Feedback AI.
                </h2>

                <p>
                    Kerjakan proyek berdasarkan level kemampuanmu.
                    Setelah selesai, AI akan menganalisis hasil pekerjaanmu,
                    memberikan skor, menemukan kesalahan, dan memberikan
                    saran perbaikan seperti mentor pribadi.
                </p>

                <div class="hero-stats">

                    <div class="hero-stat">

                        <strong>12+</strong>

                        <span>Proyek</span>

                    </div>

                    <div class="hero-stat">

                        <strong>4</strong>

                        <span>Level</span>

                    </div>

                    <div class="hero-stat">

                        <strong>AI</strong>

                        <span>Project Review</span>

                    </div>

                </div>

            </div>

        </section>


        <!-- FILTER -->

        <div class="filter-bar">

            <button class="filter-btn active" onclick="filterProjects('all', this)">
                Semua
            </button>

            <button class="filter-btn" onclick="filterProjects('frontend', this)">
                Frontend
            </button>

            <button class="filter-btn" onclick="filterProjects('backend', this)">
                Backend
            </button>

            <button class="filter-btn" onclick="filterProjects('fullstack', this)">
                Full Stack
            </button>

            <button class="filter-btn" onclick="filterProjects('uiux', this)">
                UI/UX
            </button>

        </div>


        <!-- PROJECTS -->

        <div class="project-grid">


            <!-- PROJECT 1 -->

            <div class="project-card" data-category="frontend">

                <div class="project-icon">

                    <i data-lucide="layout-dashboard"></i>

                </div>

                <span class="project-level">
                    BEGINNER
                </span>

                <h3>
                    Personal Portfolio
                </h3>

                <p>
                    Buat website portfolio pribadi untuk menampilkan
                    profil, skill, project dan pengalamanmu.
                </p>

                <div class="tags">

                    <span class="tag">HTML</span>
                    <span class="tag">CSS</span>
                    <span class="tag">JavaScript</span>

                </div>

                <div class="project-bottom">

                    <span class="project-meta">
                        ⏱ 3-5 Jam
                    </span>

                    <button class="start-project" onclick="openProject(
                        'Personal Portfolio',
                        'Buat sebuah website portfolio profesional yang memiliki halaman profil, daftar skill, project dan kontak.',
                        'HTML, CSS, JavaScript',
                        [
                            'Memiliki halaman profil pengguna',
                            'Menampilkan minimal 4 skill',
                            'Menampilkan minimal 3 project',
                            'Memiliki bagian kontak',
                            'Responsive di desktop dan mobile'
                        ]
                    )">

                        Kerjakan

                        <i data-lucide="arrow-right" size="12"></i>

                    </button>

                </div>

            </div>


            <!-- PROJECT 2 -->

            <div class="project-card" data-category="frontend">

                <div class="project-icon">

                    <i data-lucide="shopping-cart"></i>

                </div>

                <span class="project-level">
                    BEGINNER
                </span>

                <h3>
                    Mini E-Commerce
                </h3>

                <p>
                    Buat tampilan toko online sederhana dengan daftar
                    produk, keranjang dan halaman checkout.
                </p>

                <div class="tags">

                    <span class="tag">HTML</span>
                    <span class="tag">CSS</span>
                    <span class="tag">JS</span>

                </div>

                <div class="project-bottom">

                    <span class="project-meta">
                        ⏱ 5-8 Jam
                    </span>

                    <button class="start-project" onclick="openProject(
                        'Mini E-Commerce',
                        'Bangun website toko online sederhana dengan katalog produk dan sistem keranjang.',
                        'HTML, CSS, JavaScript',
                        [
                            'Menampilkan daftar produk',
                            'Memiliki tombol tambah keranjang',
                            'Jumlah produk dapat berubah',
                            'Total harga dihitung otomatis',
                            'Memiliki halaman checkout'
                        ]
                    )">

                        Kerjakan

                        <i data-lucide="arrow-right" size="12"></i>

                    </button>

                </div>

            </div>


            <!-- PROJECT 3 -->

            <div class="project-card" data-category="backend">

                <div class="project-icon">

                    <i data-lucide="server"></i>

                </div>

                <span class="project-level">
                    INTERMEDIATE
                </span>

                <h3>
                    REST API Management
                </h3>

                <p>
                    Buat REST API sederhana untuk mengelola data pengguna
                    dengan operasi CRUD.
                </p>

                <div class="tags">

                    <span class="tag">Laravel</span>
                    <span class="tag">MySQL</span>
                    <span class="tag">API</span>

                </div>

                <div class="project-bottom">

                    <span class="project-meta">
                        ⏱ 8-12 Jam
                    </span>

                    <button class="start-project" onclick="openProject(
                        'REST API Management',
                        'Bangun REST API untuk mengelola data pengguna menggunakan Laravel dan database.',
                        'Laravel, PHP, MySQL, REST API',
                        [
                            'Membuat endpoint GET',
                            'Membuat endpoint POST',
                            'Membuat endpoint PUT',
                            'Membuat endpoint DELETE',
                            'Validasi data pengguna',
                            'Menggunakan response JSON'
                        ]
                    )">

                        Kerjakan

                        <i data-lucide="arrow-right" size="12"></i>

                    </button>

                </div>

            </div>


            <!-- PROJECT 4 -->

            <div class="project-card" data-category="fullstack">

                <div class="project-icon">

                    <i data-lucide="layers-3"></i>

                </div>

                <span class="project-level">
                    ADVANCED
                </span>

                <h3>
                    Learning Management System
                </h3>

                <p>
                    Bangun platform pembelajaran sederhana dengan user,
                    materi, progress dan dashboard.
                </p>

                <div class="tags">

                    <span class="tag">Laravel</span>
                    <span class="tag">MySQL</span>
                    <span class="tag">Blade</span>

                </div>

                <div class="project-bottom">

                    <span class="project-meta">
                        ⏱ 15-25 Jam
                    </span>

                    <button class="start-project" onclick="openProject(
                        'Learning Management System',
                        'Buat platform belajar dengan sistem pengguna, materi pembelajaran dan progress belajar.',
                        'Laravel, MySQL, Blade, JavaScript',
                        [
                            'Login dan register',
                            'Dashboard pengguna',
                            'Daftar materi',
                            'Progress belajar',
                            'Database terstruktur',
                            'Admin dapat mengelola materi'
                        ]
                    )">

                        Kerjakan

                        <i data-lucide="arrow-right" size="12"></i>

                    </button>

                </div>

            </div>


            <!-- PROJECT 5 -->

            <div class="project-card" data-category="uiux">

                <div class="project-icon">

                    <i data-lucide="figma"></i>

                </div>

                <span class="project-level">
                    INTERMEDIATE
                </span>

                <h3>
                    Career App UI
                </h3>

                <p>
                    Rancang UI aplikasi pencarian karier yang modern,
                    mudah digunakan dan responsive.
                </p>

                <div class="tags">

                    <span class="tag">UI/UX</span>
                    <span class="tag">Figma</span>
                    <span class="tag">Prototype</span>

                </div>

                <div class="project-bottom">

                    <span class="project-meta">
                        ⏱ 6-10 Jam
                    </span>

                    <button class="start-project" onclick="openProject(
                        'Career App UI',
                        'Rancang interface aplikasi career platform yang membantu pengguna menemukan peluang karier.',
                        'UI/UX, Figma, Design System',
                        [
                            'Membuat user flow',
                            'Membuat wireframe',
                            'Membuat high fidelity design',
                            'Membuat prototype',
                            'Menerapkan design system'
                        ]
                    )">

                        Kerjakan

                        <i data-lucide="arrow-right" size="12"></i>

                    </button>

                </div>

            </div>


            <!-- PROJECT 6 -->

            <div class="project-card" data-category="fullstack">

                <div class="project-icon">

                    <i data-lucide="bot"></i>

                </div>

                <span class="project-level">
                    EXPERT
                </span>

                <h3>
                    AI Career Assistant
                </h3>

                <p>
                    Buat aplikasi career assistant yang membantu pengguna
                    mencari roadmap dan rekomendasi skill.
                </p>

                <div class="tags">

                    <span class="tag">Laravel</span>
                    <span class="tag">AI</span>
                    <span class="tag">API</span>

                </div>

                <div class="project-bottom">

                    <span class="project-meta">
                        ⏱ 20+ Jam
                    </span>

                    <button class="start-project" onclick="openProject(
                        'AI Career Assistant',
                        'Bangun aplikasi AI yang membantu pengguna menentukan jalur karier berdasarkan skill dan tujuan mereka.',
                        'Laravel, JavaScript, AI API, MySQL',
                        [
                            'User dapat memasukkan skill',
                            'AI memberikan rekomendasi karier',
                            'AI memberikan roadmap',
                            'Data tersimpan di database',
                            'Memiliki dashboard pengguna',
                            'Memiliki fitur chat AI'
                        ]
                    )">

                        Kerjakan

                        <i data-lucide="arrow-right" size="12"></i>

                    </button>

                </div>

            </div>

        </div>


        <!-- WORKSPACE -->

        <section class="workspace" id="workspace">


            <!-- LEFT -->

            <div class="workspace-card">

                <div class="workspace-header">

                    <h3>
                        Project Workspace
                    </h3>

                    <span id="projectLevel">
                        Project
                    </span>

                </div>


                <div class="workspace-body">

                    <div class="brief-title" id="projectTitle">
                        Project
                    </div>

                    <p class="brief-desc" id="projectDescription">
                        -
                    </p>


                    <div class="requirement">

                        <h4>
                            Requirement
                        </h4>

                        <ul id="requirements">
                        </ul>

                    </div>


                    <div class="requirement">

                        <h4>
                            Skill yang digunakan
                        </h4>

                        <div class="skill-needed" id="skills">
                        </div>

                    </div>


                    <div class="submit-area">

                        <label>
                            Kirim hasil pekerjaanmu
                        </label>

                        <textarea id="projectAnswer" placeholder="Tempel kode, jawaban, penjelasan project, atau solusi yang kamu buat di sini...

Contoh:

Saya membuat project menggunakan Laravel.
Saya membuat authentication,
database users,
dashboard,
dan CRUD data project."></textarea>


                        <div class="submit-buttons">

                            <button class="analyze-btn" onclick="analyzeProject()">

                                <i data-lucide="sparkles" size="14"></i>

                                Analisis dengan AI

                            </button>

                            <button class="reset-btn" onclick="resetProject()">

                                Reset

                            </button>

                        </div>


                        <div class="thinking" id="thinking">

                            <div class="dots">

                                <span></span>
                                <span></span>
                                <span></span>

                            </div>

                            AI sedang menganalisis project kamu...

                        </div>

                    </div>

                </div>

            </div>


            <!-- RIGHT -->

            <div class="workspace-card">

                <div class="workspace-header">

                    <h3>
                        AI Project Reviewer
                    </h3>

                    <span>
                        AI Analysis
                    </span>

                </div>


                <div class="workspace-body">


                    <div class="ai-review" id="aiReview">

                        <div class="ai-header">

                            <div class="ai-icon">

                                <i data-lucide="brain-circuit"></i>

                            </div>

                            <div>

                                <h3>
                                    SkillCareerAI Reviewer
                                </h3>

                                <p>
                                    Analisis otomatis hasil pekerjaanmu
                                </p>

                            </div>

                        </div>


                        <div class="score-box">

                            <div class="score-label">
                                PROJECT SCORE
                            </div>

                            <div class="score" id="score">
                                0
                            </div>

                            <div class="score-message" id="scoreMessage">
                                -
                            </div>

                        </div>


                        <div class="analysis-list" id="analysisList">
                        </div>


                        <div class="recommendation">

                            <h4>

                                <i data-lucide="lightbulb" size="13"></i>

                                Rekomendasi AI

                            </h4>

                            <p id="recommendationText">
                                -
                            </p>

                        </div>

                    </div>


                    <div class="empty-review" id="emptyReview">

                        <i data-lucide="scan-search" size="35"></i>

                        <p>
                            Belum ada analisis.<br>
                            Kirim hasil project kamu dan AI
                            akan memberikan feedback.
                        </p>

                    </div>


                </div>

            </div>

        </section>

    </main>


    <script>
    lucide.createIcons();


    let selectedProject = {};


    /* ================= FILTER ================= */

    function filterProjects(category, button) {

        document
            .querySelectorAll('.filter-btn')
            .forEach(btn => {
                btn.classList.remove('active');
            });

        button.classList.add('active');


        document
            .querySelectorAll('.project-card')
            .forEach(card => {

                if (
                    category === 'all' ||
                    card.dataset.category === category
                ) {

                    card.style.display = '';

                } else {

                    card.style.display = 'none';

                }

            });

    }


    /* ================= OPEN PROJECT ================= */

    function openProject(
        title,
        description,
        skills,
        requirements
    ) {

        selectedProject = {
            title,
            description,
            skills,
            requirements
        };


        document
            .getElementById('workspace')
            .classList.add('show');


        document
            .getElementById('projectTitle')
            .innerText = title;


        document
            .getElementById('projectDescription')
            .innerText = description;


        document
            .getElementById('projectLevel')
            .innerText = 'ACTIVE PROJECT';


        const req =
            document.getElementById('requirements');

        req.innerHTML = '';


        requirements.forEach(item => {

            const li =
                document.createElement('li');

            li.innerText = item;

            req.appendChild(li);

        });


        const skillsBox =
            document.getElementById('skills');

        skillsBox.innerHTML = '';


        skills
            .split(',')
            .forEach(skill => {

                const span =
                    document.createElement('span');

                span.className = 'skill-pill';

                span.innerText =
                    skill.trim();

                skillsBox.appendChild(span);

            });


        document
            .getElementById('projectAnswer')
            .value = '';


        document
            .getElementById('aiReview')
            .classList.remove('show');


        document
            .getElementById('emptyReview')
            .style.display = 'block';


        document
            .getElementById('workspace')
            .scrollIntoView({
                behavior: 'smooth'
            });


        lucide.createIcons();

    }


    /* ================= AI ANALYSIS ================= */

    function analyzeProject() {

        const answer =
            document
            .getElementById('projectAnswer')
            .value
            .trim();


        if (!answer) {

            alert(
                'Isi hasil project kamu terlebih dahulu.'
            );

            return;

        }


        const thinking =
            document.getElementById('thinking');

        thinking.classList.add('show');


        document
            .getElementById('aiReview')
            .classList.remove('show');


        document
            .getElementById('emptyReview')
            .style.display = 'none';


        setTimeout(() => {

            generateAnalysis(answer);

            thinking.classList.remove('show');

        }, 1800);

    }


    /* ================= GENERATE ANALYSIS ================= */

    function generateAnalysis(answer) {

        const text =
            answer.toLowerCase();


        let score = 55;

        let analysis = [];


        /* HTML */

        if (
            text.includes('html') ||
            text.includes('<html') ||
            text.includes('<div')
        ) {

            score += 7;

            analysis.push({
                type: 'good',
                title: 'Struktur HTML',
                message: 'AI menemukan indikasi penggunaan struktur HTML. Struktur dasar sudah mengarah dengan baik.'
            });

        } else {

            analysis.push({
                type: 'warning',
                title: 'Struktur HTML',
                message: 'Belum terlihat struktur HTML yang jelas. Pastikan project memiliki semantic structure yang rapi.'
            });

        }


        /* CSS */

        if (
            text.includes('css') ||
            text.includes('style')
        ) {

            score += 7;

            analysis.push({
                type: 'good',
                title: 'Styling',
                message: 'Penggunaan CSS terdeteksi. Pastikan layout tetap responsive pada berbagai ukuran layar.'
            });

        } else {

            analysis.push({
                type: 'warning',
                title: 'Styling',
                message: 'Belum terlihat implementasi styling yang jelas.'
            });

        }


        /* JAVASCRIPT */

        if (
            text.includes('javascript') ||
            text.includes('javascript') ||
            text.includes('js')
        ) {

            score += 8;

            analysis.push({
                type: 'good',
                title: 'Interaktivitas',
                message: 'JavaScript terdeteksi. Tambahkan validasi dan interaksi yang membuat aplikasi lebih dinamis.'
            });

        } else {

            analysis.push({
                type: 'warning',
                title: 'Interaktivitas',
                message: 'Belum terlihat penggunaan JavaScript. Pertimbangkan menambahkan interaksi pengguna.'
            });

        }


        /* DATABASE */

        if (
            text.includes('database') ||
            text.includes('mysql') ||
            text.includes('migration')
        ) {

            score += 8;

            analysis.push({
                type: 'good',
                title: 'Database',
                message: 'Implementasi database terdeteksi. Pastikan relasi dan struktur tabel sudah efisien.'
            });

        } else {

            analysis.push({
                type: 'warning',
                title: 'Database',
                message: 'Belum terlihat penggunaan database.'
            });

        }


        /* LARAVEL */

        if (
            text.includes('laravel') ||
            text.includes('controller') ||
            text.includes('blade')
        ) {

            score += 8;

            analysis.push({
                type: 'good',
                title: 'Backend',
                message: 'Komponen Laravel/backend terdeteksi. Pastikan logic dipisahkan dengan baik antara controller, model dan view.'
            });

        }


        /* API */

        if (
            text.includes('api') ||
            text.includes('json')
        ) {

            score += 5;

            analysis.push({
                type: 'good',
                title: 'API',
                message: 'Implementasi API/JSON terdeteksi. Tambahkan validasi dan error handling agar API lebih aman.'
            });

        }


        /* QUALITY */

        if (answer.length > 500) {

            score += 5;

            analysis.push({
                type: 'good',
                title: 'Kelengkapan',
                message: 'Penjelasan project cukup detail sehingga AI dapat melakukan analisis dengan lebih baik.'
            });

        } else {

            analysis.push({
                type: 'warning',
                title: 'Detail Project',
                message: 'Penjelasan masih cukup singkat. Tambahkan struktur folder, fitur, teknologi dan cara kerja project.'
            });

        }


        if (score > 100) {
            score = 100;
        }


        /* SCORE MESSAGE */

        let message;


        if (score >= 85) {

            message =
                'Excellent! Project kamu sudah sangat baik.';

        } else if (score >= 70) {

            message =
                'Good! Project sudah berjalan dengan baik, tetapi masih ada beberapa hal yang dapat ditingkatkan.';

        } else if (score >= 50) {

            message =
                'Cukup baik. Masih ada beberapa bagian penting yang perlu diperbaiki.';

        } else {

            message =
                'Project masih membutuhkan banyak perbaikan.';

        }


        document
            .getElementById('score')
            .innerText = score;


        document
            .getElementById('scoreMessage')
            .innerText = message;


        const list =
            document.getElementById('analysisList');

        list.innerHTML = '';


        analysis.forEach(item => {

            const div =
                document.createElement('div');

            div.className =
                'analysis-item';


            let icon =
                item.type === 'good' ?
                'check-circle' :
                item.type === 'warning' ?
                'alert-triangle' :
                'x-circle';


            div.innerHTML = `

                <div class="analysis-icon ${item.type}">

                    <i data-lucide="${icon}" size="14"></i>

                </div>

                <div>

                    <strong>
                        ${item.title}
                    </strong>

                    <p>
                        ${item.message}
                    </p>

                </div>

            `;


            list.appendChild(div);

        });


        /* RECOMMENDATION */

        let recommendation;


        if (score >= 85) {

            recommendation =
                'Project kamu sudah berada di level yang bagus. Langkah berikutnya adalah menambahkan fitur yang lebih kompleks, meningkatkan keamanan, dan membuat dokumentasi project agar siap dimasukkan ke portfolio.';

        } else if (score >= 70) {

            recommendation =
                'Fokuskan perbaikan pada bagian yang masih mendapatkan warning. Setelah itu tambahkan validasi, responsive design, error handling dan dokumentasi agar project lebih profesional.';

        } else {

            recommendation =
                'Jangan langsung mengejar fitur yang banyak. Fokus terlebih dahulu pada struktur project, requirement utama dan fungsi dasar. Setelah semuanya berjalan, baru tambahkan fitur tambahan.';

        }


        document
            .getElementById('recommendationText')
            .innerText = recommendation;


        document
            .getElementById('aiReview')
            .classList.add('show');


        document
            .getElementById('emptyReview')
            .style.display = 'none';


        lucide.createIcons();

    }


    /* ================= RESET ================= */

    function resetProject() {

        document
            .getElementById('projectAnswer')
            .value = '';


        document
            .getElementById('aiReview')
            .classList.remove('show');


        document
            .getElementById('emptyReview')
            .style.display = 'block';

    }
    </script>


</body>

</html>