{{-- =========================================================
     COMMUNITY PAGE - SKILLCAREER AI
     WhatsApp Group + WhatsApp Channel
========================================================= --}}

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Community - SkillCareer AI</title>

    <meta name="description"
        content="Temukan komunitas belajar, networking, dan pengembangan karier bersama SkillCareer AI.">

    {{-- Inter Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    {{-- Lucide --}}
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
    /* =========================================================
           RESET
        ========================================================= */

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        color: #172033;
        background: #f8faff;
        min-height: 100vh;
    }

    a {
        text-decoration: none;
        color: inherit;
    }

    button,
    input {
        font-family: inherit;
    }

    button {
        border: none;
    }

    /* =========================================================
           HERO
        ========================================================= */

    .community-hero {
        position: relative;
        overflow: hidden;
        padding: 92px 24px 70px;
        text-align: center;
        background:
            radial-gradient(circle at 50% -20%,
                rgba(49, 85, 255, .14),
                transparent 45%),
            linear-gradient(180deg,
                #ffffff 0%,
                #f8faff 100%);
    }

    .hero-orb {
        position: absolute;
        border-radius: 50%;
        pointer-events: none;
        filter: blur(2px);
    }

    .hero-orb.one {
        width: 260px;
        height: 260px;
        top: -140px;
        left: -100px;
        background: rgba(49, 85, 255, .06);
    }

    .hero-orb.two {
        width: 320px;
        height: 320px;
        top: -180px;
        right: -120px;
        background: rgba(112, 72, 255, .06);
    }

    .hero-content {
        position: relative;
        z-index: 2;
        max-width: 850px;
        margin: auto;
    }

    .community-label {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 14px;
        border: 1px solid #dfe5ff;
        border-radius: 50px;
        background: rgba(245, 247, 255, .92);
        color: #3155ff;
        font-size: 10px;
        font-weight: 800;
        letter-spacing: .7px;
    }

    .label-dot {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #3155ff;
        box-shadow: 0 0 0 5px rgba(49, 85, 255, .09);
    }

    .community-hero h1 {
        margin-top: 22px;
        font-size: clamp(38px, 5vw, 62px);
        line-height: 1.08;
        letter-spacing: -3px;
        font-weight: 800;
        color: #172033;
    }

    .gradient-text {
        background: linear-gradient(135deg, #3155ff, #7048ff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .community-hero-description {
        max-width: 650px;
        margin: 20px auto 0;
        color: #7c8597;
        font-size: 14px;
        line-height: 1.8;
    }

    /* =========================================================
           HERO STATS
        ========================================================= */

    .hero-stats {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 12px;
        margin-top: 36px;
    }

    .hero-stat {
        min-width: 145px;
        padding: 15px 22px;
        border: 1px solid #e5e9f2;
        border-radius: 14px;
        background: rgba(255, 255, 255, .85);
        box-shadow: 0 10px 30px rgba(35, 45, 80, .045);
    }

    .hero-stat strong {
        display: block;
        font-size: 20px;
        font-weight: 800;
        color: #3155ff;
    }

    .hero-stat span {
        display: block;
        margin-top: 4px;
        color: #929aaa;
        font-size: 9px;
        font-weight: 600;
    }

    /* =========================================================
           MAIN
        ========================================================= */

    .community-main {
        max-width: 1180px;
        margin: auto;
        padding: 0 24px 90px;
    }

    /* =========================================================
           SEARCH AREA
        ========================================================= */

    .community-toolbar {
        position: relative;
        z-index: 5;
        margin-top: -18px;
        padding: 22px;
        border: 1px solid #e5e9f2;
        border-radius: 20px;
        background: rgba(255, 255, 255, .94);
        box-shadow: 0 18px 50px rgba(35, 45, 80, .07);
        backdrop-filter: blur(16px);
    }

    .search-wrapper {
        position: relative;
        max-width: 680px;
        margin: auto;
    }

    .search-icon {
        position: absolute;
        left: 17px;
        top: 50%;
        width: 18px;
        height: 18px;
        transform: translateY(-50%);
        color: #99a2b4;
        pointer-events: none;
    }

    .search-input {
        width: 100%;
        height: 52px;
        padding: 0 48px;
        border: 1px solid #e0e5ef;
        border-radius: 13px;
        outline: none;
        background: #f9faff;
        color: #172033;
        font-size: 12px;
        transition: .25s ease;
    }

    .search-input::placeholder {
        color: #a1a8b7;
    }

    .search-input:focus {
        border-color: #b8c3ff;
        background: #fff;
        box-shadow: 0 0 0 4px rgba(49, 85, 255, .06);
    }

    .clear-search {
        position: absolute;
        display: none;
        align-items: center;
        justify-content: center;
        right: 12px;
        top: 50%;
        width: 30px;
        height: 30px;
        transform: translateY(-50%);
        border-radius: 8px;
        background: #eef1f8;
        color: #778196;
        cursor: pointer;
    }

    .clear-search.show {
        display: flex;
    }

    .clear-search svg {
        width: 14px;
        height: 14px;
    }

    /* =========================================================
           FILTERS
        ========================================================= */

    .filter-title {
        margin-top: 22px;
        margin-bottom: 10px;
        text-align: center;
        color: #929aaa;
        font-size: 9px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: .7px;
    }

    .filter-wrapper {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 8px;
    }

    .filter-btn {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 9px 13px;
        border: 1px solid #e0e5ef;
        border-radius: 50px;
        background: #fff;
        color: #6e7789;
        font-size: 9px;
        font-weight: 700;
        cursor: pointer;
        transition: .25s ease;
    }

    .filter-btn svg {
        width: 13px;
        height: 13px;
    }

    .filter-btn:hover {
        border-color: #cbd3ff;
        color: #3155ff;
    }

    .filter-btn.active {
        border-color: #3155ff;
        background: linear-gradient(135deg, #3155ff, #7048ff);
        color: #fff;
        box-shadow: 0 8px 20px rgba(49, 85, 255, .16);
    }

    /* =========================================================
           COMMUNITY SECTION
        ========================================================= */

    .community-section {
        margin-top: 55px;
    }

    .section-heading {
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
        gap: 20px;
        margin-bottom: 22px;
    }

    .heading-left h2 {
        font-size: 25px;
        letter-spacing: -.9px;
        font-weight: 800;
    }

    .heading-left p {
        margin-top: 6px;
        color: #8d96a8;
        font-size: 11px;
        line-height: 1.6;
    }

    .community-count {
        color: #8b94a6;
        font-size: 10px;
        font-weight: 700;
        white-space: nowrap;
    }

    /* =========================================================
           COMMUNITY GRID
        ========================================================= */

    .community-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 17px;
    }

    /* =========================================================
           CARD
        ========================================================= */

    .community-card {
        position: relative;
        overflow: hidden;
        padding: 21px;
        border: 1px solid #e4e8f1;
        border-radius: 18px;
        background: #fff;
        box-shadow: 0 10px 30px rgba(35, 45, 80, .045);
        transition:
            transform .3s ease,
            border-color .3s ease,
            box-shadow .3s ease;
    }

    .community-card::after {
        content: "";
        position: absolute;
        width: 120px;
        height: 120px;
        right: -60px;
        top: -60px;
        border-radius: 50%;
        background: rgba(49, 85, 255, .045);
        pointer-events: none;
    }

    .community-card:hover {
        transform: translateY(-6px);
        border-color: #d2d9ff;
        box-shadow: 0 22px 45px rgba(35, 45, 80, .095);
    }

    .card-top {
        position: relative;
        z-index: 2;
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        gap: 10px;
    }

    /* =========================================================
           COMMUNITY ICON
        ========================================================= */

    .community-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 48px;
        height: 48px;
        border-radius: 14px;
        flex-shrink: 0;
        color: #fff;
        background: linear-gradient(135deg, #3155ff, #7048ff);
        box-shadow: 0 10px 24px rgba(49, 85, 255, .17);
    }

    .community-icon svg {
        width: 23px;
        height: 23px;
    }

    /* Different icon backgrounds */

    .icon-green {
        background: linear-gradient(135deg, #16b77d, #0a9c69);
        box-shadow: 0 10px 24px rgba(16, 185, 129, .16);
    }

    .icon-purple {
        background: linear-gradient(135deg, #8057ff, #a24cff);
        box-shadow: 0 10px 24px rgba(128, 87, 255, .16);
    }

    .icon-orange {
        background: linear-gradient(135deg, #ff9a3d, #f47722);
        box-shadow: 0 10px 24px rgba(244, 119, 34, .16);
    }

    .icon-dark {
        background: linear-gradient(135deg, #283650, #465575);
        box-shadow: 0 10px 24px rgba(40, 54, 80, .16);
    }

    /* =========================================================
           TYPE BADGE
        ========================================================= */

    .type-badge {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        padding: 6px 9px;
        border-radius: 50px;
        font-size: 8px;
        font-weight: 800;
    }

    .type-badge svg {
        width: 11px;
        height: 11px;
    }

    .type-group {
        color: #0d9d69;
        background: #eafaf3;
    }

    .type-channel {
        color: #3155ff;
        background: #eef1ff;
    }

    /* =========================================================
           CARD CONTENT
        ========================================================= */

    .community-card h3 {
        margin-top: 18px;
        font-size: 15px;
        line-height: 1.35;
        letter-spacing: -.3px;
        font-weight: 800;
    }

    .community-description {
        min-height: 54px;
        margin-top: 8px;
        color: #7d8799;
        font-size: 10.5px;
        line-height: 1.7;
    }

    /* =========================================================
           META
        ========================================================= */

    .community-meta {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 7px;
        margin-top: 15px;
    }

    .category-tag {
        padding: 5px 8px;
        border-radius: 6px;
        background: #f0f3ff;
        color: #3155ff;
        font-size: 7.5px;
        font-weight: 800;
        letter-spacing: .2px;
    }

    .member-count {
        display: inline-flex;
        align-items: center;
        gap: 4px;
        color: #969eae;
        font-size: 8.5px;
        font-weight: 650;
    }

    .member-count svg {
        width: 11px;
        height: 11px;
    }

    /* =========================================================
           BUTTON
        ========================================================= */

    .join-button {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        width: 100%;
        margin-top: 18px;
        padding: 11px;
        border-radius: 10px;
        color: #fff;
        background: linear-gradient(135deg, #3155ff, #5b45ff);
        font-size: 9px;
        font-weight: 800;
        transition: .25s ease;
    }

    .join-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 24px rgba(49, 85, 255, .18);
    }

    .join-button svg {
        width: 14px;
        height: 14px;
    }

    .channel-button {
        background: linear-gradient(135deg, #3155ff, #7048ff);
    }

    .group-button {
        background: linear-gradient(135deg, #11ae77, #0a9b67);
    }

    /* =========================================================
           EMPTY STATE
        ========================================================= */

    .empty-state {
        display: none;
        text-align: center;
        padding: 70px 20px;
    }

    .empty-state.show {
        display: block;
    }

    .empty-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 58px;
        height: 58px;
        margin: auto;
        border-radius: 17px;
        background: #eef2ff;
        color: #3155ff;
    }

    .empty-icon svg {
        width: 24px;
        height: 24px;
    }

    .empty-state h3 {
        margin-top: 16px;
        color: #30394c;
        font-size: 16px;
        font-weight: 800;
    }

    .empty-state p {
        max-width: 400px;
        margin: 7px auto 0;
        color: #929aaa;
        font-size: 10px;
        line-height: 1.7;
    }

    /* =========================================================
           COMMUNITY INFO
        ========================================================= */

    .info-section {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 18px;
        margin-top: 55px;
    }

    .info-card {
        display: flex;
        align-items: flex-start;
        gap: 15px;
        padding: 21px;
        border: 1px solid #e4e8f1;
        border-radius: 17px;
        background: #fff;
        box-shadow: 0 10px 30px rgba(35, 45, 80, .04);
    }

    .info-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 42px;
        height: 42px;
        flex-shrink: 0;
        border-radius: 12px;
        background: #eef1ff;
        color: #3155ff;
    }

    .info-icon svg {
        width: 20px;
        height: 20px;
    }

    .info-card h3 {
        font-size: 13px;
        font-weight: 800;
    }

    .info-card p {
        margin-top: 6px;
        color: #8790a2;
        font-size: 10px;
        line-height: 1.7;
    }

    /* =========================================================
           CTA
        ========================================================= */

    .community-cta {
        position: relative;
        overflow: hidden;
        margin-top: 55px;
        padding: 45px 30px;
        text-align: center;
        border-radius: 24px;
        background: linear-gradient(135deg,
                #172b78 0%,
                #3155ff 55%,
                #7048ff 100%);
        box-shadow: 0 25px 60px rgba(49, 85, 255, .18);
    }

    .community-cta::before {
        content: "";
        position: absolute;
        width: 280px;
        height: 280px;
        right: -120px;
        top: -160px;
        border-radius: 50%;
        background: rgba(255, 255, 255, .08);
    }

    .community-cta::after {
        content: "";
        position: absolute;
        width: 180px;
        height: 180px;
        left: -90px;
        bottom: -110px;
        border-radius: 50%;
        background: rgba(255, 255, 255, .06);
    }

    .cta-content {
        position: relative;
        z-index: 2;
    }

    .community-cta h2 {
        color: #fff;
        font-size: 26px;
        letter-spacing: -.8px;
        font-weight: 800;
    }

    .community-cta p {
        max-width: 570px;
        margin: 10px auto 0;
        color: rgba(255, 255, 255, .76);
        font-size: 10.5px;
        line-height: 1.7;
    }

    .cta-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        margin-top: 22px;
        padding: 11px 18px;
        border-radius: 10px;
        background: #fff;
        color: #3155ff;
        font-size: 9px;
        font-weight: 800;
        transition: .25s ease;
    }

    .cta-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, .12);
    }

    .cta-button svg {
        width: 13px;
        height: 13px;
    }

    /* =========================================================
           FOOTER
        ========================================================= */

    .footer {
        padding: 30px 20px;
        border-top: 1px solid #e5e9f1;
        text-align: center;
        background: #fff;
    }

    .footer p {
        color: #9aa1af;
        font-size: 9px;
    }

    .footer strong {
        color: #3155ff;
    }

    /* =========================================================
           MOBILE
        ========================================================= */

    @media (max-width: 1000px) {

        .community-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .info-section {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 680px) {

        .community-hero {
            padding: 70px 18px 55px;
        }

        .community-hero h1 {
            font-size: 39px;
            letter-spacing: -2px;
        }

        .community-hero-description {
            font-size: 12px;
        }

        .hero-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 8px;
        }

        .hero-stat {
            min-width: 0;
            padding: 13px 7px;
        }

        .hero-stat strong {
            font-size: 17px;
        }

        .hero-stat span {
            font-size: 7px;
        }

        .community-main {
            padding: 0 16px 65px;
        }

        .community-toolbar {
            padding: 16px;
        }

        .filter-wrapper {
            justify-content: flex-start;
            flex-wrap: nowrap;
            overflow-x: auto;
            padding-bottom: 4px;
        }

        .filter-wrapper::-webkit-scrollbar {
            display: none;
        }

        .filter-btn {
            flex-shrink: 0;
            white-space: nowrap;
        }

        .section-heading {
            align-items: flex-start;
            flex-direction: column;
            gap: 5px;
        }

        .community-grid {
            grid-template-columns: 1fr;
        }

        .community-card {
            padding: 20px;
        }

        .community-cta {
            padding: 38px 20px;
        }

        .community-cta h2 {
            font-size: 22px;
        }
    }

    @media (max-width: 400px) {

        .community-hero h1 {
            font-size: 34px;
        }

        .hero-stats {
            grid-template-columns: 1fr;
            max-width: 230px;
            margin-left: auto;
            margin-right: auto;
        }
    }
    </style>
</head>

<body>

    {{-- =========================================================
         NAVBAR
         Menggunakan navbar utama dari components
    ========================================================= --}}

    @include('components.navbar')


    {{-- =========================================================
         HERO
    ========================================================= --}}

    <section class="community-hero">

        <div class="hero-orb one"></div>
        <div class="hero-orb two"></div>

        <div class="hero-content">

            <div class="community-label">
                <span class="label-dot"></span>
                SKILLCAREER AI COMMUNITY
            </div>

            <h1>
                Belajar Bersama.
                <br>
                <span class="gradient-text">Berkembang Lebih Jauh.</span>
            </h1>

            <p class="community-hero-description">
                Temukan komunitas yang sesuai dengan bidangmu.
                Berdiskusi, berbagi pengalaman, menemukan peluang,
                dan membangun koneksi bersama orang-orang dengan
                minat yang sama.
            </p>

            <div class="hero-stats">

                <div class="hero-stat">
                    <strong>10+</strong>
                    <span>Komunitas</span>
                </div>

                <div class="hero-stat">
                    <strong>5K+</strong>
                    <span>Target Anggota</span>
                </div>

                <div class="hero-stat">
                    <strong>24/7</strong>
                    <span>Networking</span>
                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
         MAIN
    ========================================================= --}}

    <main class="community-main">


        {{-- =====================================================
             SEARCH + FILTER
        ====================================================== --}}

        <section class="community-toolbar">

            <div class="search-wrapper">

                <i data-lucide="search" class="search-icon"></i>

                <input type="text" id="communitySearch" class="search-input"
                    placeholder="Cari komunitas, bidang, teknologi, atau topik..." autocomplete="off">

                <button type="button" id="clearSearch" class="clear-search" aria-label="Hapus pencarian">

                    <i data-lucide="x"></i>

                </button>

            </div>


            <div class="filter-title">
                Jelajahi berdasarkan bidang
            </div>


            <div class="filter-wrapper">

                <button class="filter-btn active" data-filter="all">
                    <i data-lucide="layers"></i>
                    Semua
                </button>

                <button class="filter-btn" data-filter="web">
                    <i data-lucide="code-2"></i>
                    Web Development
                </button>

                <button class="filter-btn" data-filter="uiux">
                    <i data-lucide="figma"></i>
                    UI/UX
                </button>

                <button class="filter-btn" data-filter="mobile">
                    <i data-lucide="smartphone"></i>
                    Mobile
                </button>

                <button class="filter-btn" data-filter="ai">
                    <i data-lucide="brain"></i>
                    AI & Data
                </button>

                <button class="filter-btn" data-filter="cyber">
                    <i data-lucide="shield-check"></i>
                    Cyber Security
                </button>

                <button class="filter-btn" data-filter="digital">
                    <i data-lucide="megaphone"></i>
                    Digital
                </button>

                <button class="filter-btn" data-filter="career">
                    <i data-lucide="briefcase-business"></i>
                    Career
                </button>

            </div>

        </section>


        {{-- =====================================================
             COMMUNITY LIST
        ====================================================== --}}

        <section class="community-section">

            <div class="section-heading">

                <div class="heading-left">

                    <h2>
                        Jelajahi Komunitas
                    </h2>

                    <p>
                        Pilih grup atau saluran yang paling sesuai dengan perjalananmu.
                    </p>

                </div>

                <span class="community-count" id="communityCount">
                    10 komunitas tersedia
                </span>

            </div>


            <div class="community-grid" id="communityGrid">


                {{-- =================================================
                     1. WEB DEVELOPMENT GROUP
                ================================================== --}}

                <article class="community-card" data-category="web"
                    data-name="web development indonesia html css javascript frontend backend laravel php">

                    <div class="card-top">

                        <div class="community-icon">

                            <i data-lucide="code-2"></i>

                        </div>

                        <div class="type-badge type-group">

                            <i data-lucide="users"></i>
                            WhatsApp Group

                        </div>

                    </div>


                    <h3>
                        Web Development Indonesia
                    </h3>


                    <p class="community-description">
                        Tempat berdiskusi tentang HTML, CSS, JavaScript,
                        PHP, Laravel, frontend, backend, dan teknologi web.
                    </p>


                    <div class="community-meta">

                        <span class="category-tag">
                            WEB DEVELOPMENT
                        </span>

                        <span class="member-count">
                            <i data-lucide="users"></i>
                            2.4K anggota
                        </span>

                    </div>


                    {{-- GANTI LINK INI DENGAN LINK GROUP ASLI --}}
                    <a href="https://chat.whatsapp.com/CONTOH_WEB_DEVELOPMENT" target="_blank" rel="noopener noreferrer"
                        class="join-button group-button">

                        Gabung Group

                        <i data-lucide="arrow-up-right"></i>

                    </a>

                </article>


                {{-- =================================================
                     2. FRONTEND CHANNEL
                ================================================== --}}

                <article class="community-card" data-category="web"
                    data-name="frontend developer javascript react next js typescript web">

                    <div class="card-top">

                        <div class="community-icon icon-purple">
                            <i data-lucide="code-2"></i>
                        </div>

                        <div class="type-badge type-channel">

                            <i data-lucide="megaphone"></i>
                            WhatsApp Channel

                        </div>

                    </div>


                    <h3>
                        Frontend Developer Hub
                    </h3>


                    <p class="community-description">
                        Update dan insight seputar frontend modern,
                        JavaScript, React, Next.js, TypeScript, dan UI web.
                    </p>


                    <div class="community-meta">

                        <span class="category-tag">
                            FRONTEND
                        </span>

                        <span class="member-count">
                            <i data-lucide="users"></i>
                            1.8K followers
                        </span>

                    </div>


                    {{-- GANTI LINK INI DENGAN LINK CHANNEL ASLI --}}
                    <a href="https://whatsapp.com/channel/CONTOH_FRONTEND" target="_blank" rel="noopener noreferrer"
                        class="join-button channel-button">

                        Follow Channel

                        <i data-lucide="arrow-up-right"></i>

                    </a>

                </article>


                {{-- =================================================
                     3. UI UX GROUP
                ================================================== --}}

                <article class="community-card" data-category="uiux"
                    data-name="ui ux design figma product design designer portfolio">

                    <div class="card-top">

                        <div class="community-icon icon-orange">

                            <i data-lucide="palette"></i>

                        </div>

                        <div class="type-badge type-group">

                            <i data-lucide="users"></i>
                            WhatsApp Group

                        </div>

                    </div>


                    <h3>
                        UI/UX Designer Community
                    </h3>


                    <p class="community-description">
                        Ruang diskusi untuk UI/UX, Figma, design system,
                        product design, portfolio, dan creative workflow.
                    </p>


                    <div class="community-meta">

                        <span class="category-tag">
                            UI / UX
                        </span>

                        <span class="member-count">
                            <i data-lucide="users"></i>
                            1.6K anggota
                        </span>

                    </div>


                    {{-- GANTI LINK --}}
                    <a href="https://chat.whatsapp.com/CONTOH_UIUX" target="_blank" rel="noopener noreferrer"
                        class="join-button group-button">

                        Gabung Group

                        <i data-lucide="arrow-up-right"></i>

                    </a>

                </article>


                {{-- =================================================
                     4. MOBILE DEVELOPMENT GROUP
                ================================================== --}}

                <article class="community-card" data-category="mobile"
                    data-name="mobile developer android flutter kotlin react native ios">

                    <div class="card-top">

                        <div class="community-icon icon-green">

                            <i data-lucide="smartphone"></i>

                        </div>

                        <div class="type-badge type-group">

                            <i data-lucide="users"></i>
                            WhatsApp Group

                        </div>

                    </div>


                    <h3>
                        Mobile Developer Indonesia
                    </h3>


                    <p class="community-description">
                        Belajar dan berdiskusi tentang Android,
                        Flutter, Kotlin, React Native, dan pengembangan aplikasi.
                    </p>


                    <div class="community-meta">

                        <span class="category-tag">
                            MOBILE
                        </span>

                        <span class="member-count">
                            <i data-lucide="users"></i>
                            1.2K anggota
                        </span>

                    </div>


                    {{-- GANTI LINK --}}
                    <a href="https://chat.whatsapp.com/CONTOH_MOBILE" target="_blank" rel="noopener noreferrer"
                        class="join-button group-button">

                        Gabung Group

                        <i data-lucide="arrow-up-right"></i>

                    </a>

                </article>


                {{-- =================================================
                     5. AI CHANNEL
                ================================================== --}}

                <article class="community-card" data-category="ai"
                    data-name="ai artificial intelligence machine learning generative ai prompt engineering">

                    <div class="card-top">

                        <div class="community-icon">

                            <i data-lucide="brain"></i>

                        </div>

                        <div class="type-badge type-channel">

                            <i data-lucide="megaphone"></i>
                            WhatsApp Channel

                        </div>

                    </div>


                    <h3>
                        AI & Machine Learning
                    </h3>


                    <p class="community-description">
                        Update AI, machine learning, generative AI,
                        prompt engineering, tools, dan perkembangan teknologi.
                    </p>


                    <div class="community-meta">

                        <span class="category-tag">
                            AI & DATA
                        </span>

                        <span class="member-count">
                            <i data-lucide="users"></i>
                            2.1K followers
                        </span>

                    </div>


                    {{-- GANTI LINK --}}
                    <a href="https://whatsapp.com/channel/CONTOH_AI" target="_blank" rel="noopener noreferrer"
                        class="join-button channel-button">

                        Follow Channel

                        <i data-lucide="arrow-up-right"></i>

                    </a>

                </article>


                {{-- =================================================
                     6. DATA GROUP
                ================================================== --}}

                <article class="community-card" data-category="ai"
                    data-name="data science data analyst python sql statistics machine learning">

                    <div class="card-top">

                        <div class="community-icon icon-purple">

                            <i data-lucide="chart-no-axes-combined"></i>

                        </div>

                        <div class="type-badge type-group">

                            <i data-lucide="users"></i>
                            WhatsApp Group

                        </div>

                    </div>


                    <h3>
                        Data Science & Analytics
                    </h3>


                    <p class="community-description">
                        Komunitas untuk Python, SQL, data analysis,
                        visualization, statistics, dan machine learning.
                    </p>


                    <div class="community-meta">

                        <span class="category-tag">
                            DATA
                        </span>

                        <span class="member-count">
                            <i data-lucide="users"></i>
                            1.1K anggota
                        </span>

                    </div>


                    {{-- GANTI LINK --}}
                    <a href="https://chat.whatsapp.com/CONTOH_DATA" target="_blank" rel="noopener noreferrer"
                        class="join-button group-button">

                        Gabung Group

                        <i data-lucide="arrow-up-right"></i>

                    </a>

                </article>


                {{-- =================================================
                     7. CYBER SECURITY GROUP
                ================================================== --}}

                <article class="community-card" data-category="cyber"
                    data-name="cyber security ethical hacking network security ctf security">

                    <div class="card-top">

                        <div class="community-icon icon-dark">

                            <i data-lucide="shield-check"></i>

                        </div>

                        <div class="type-badge type-group">

                            <i data-lucide="users"></i>
                            WhatsApp Group

                        </div>

                    </div>


                    <h3>
                        Cyber Security Hub
                    </h3>


                    <p class="community-description">
                        Diskusi keamanan siber, ethical hacking,
                        network security, CTF, dan cybersecurity awareness.
                    </p>


                    <div class="community-meta">

                        <span class="category-tag">
                            CYBER SECURITY
                        </span>

                        <span class="member-count">
                            <i data-lucide="users"></i>
                            980 anggota
                        </span>

                    </div>


                    {{-- GANTI LINK --}}
                    <a href="https://chat.whatsapp.com/CONTOH_CYBER" target="_blank" rel="noopener noreferrer"
                        class="join-button group-button">

                        Gabung Group

                        <i data-lucide="arrow-up-right"></i>

                    </a>

                </article>


                {{-- =================================================
                     8. DIGITAL MARKETING CHANNEL
                ================================================== --}}

                <article class="community-card" data-category="digital"
                    data-name="digital marketing social media marketing seo branding content marketing">

                    <div class="card-top">

                        <div class="community-icon icon-orange">

                            <i data-lucide="megaphone"></i>

                        </div>

                        <div class="type-badge type-channel">

                            <i data-lucide="megaphone"></i>
                            WhatsApp Channel

                        </div>

                    </div>


                    <h3>
                        Digital Marketing Hub
                    </h3>


                    <p class="community-description">
                        Insight tentang SEO, social media,
                        content marketing, branding, dan strategi digital.
                    </p>


                    <div class="community-meta">

                        <span class="category-tag">
                            DIGITAL MARKETING
                        </span>

                        <span class="member-count">
                            <i data-lucide="users"></i>
                            870 followers
                        </span>

                    </div>


                    {{-- GANTI LINK --}}
                    <a href="https://whatsapp.com/channel/CONTOH_MARKETING" target="_blank" rel="noopener noreferrer"
                        class="join-button channel-button">

                        Follow Channel

                        <i data-lucide="arrow-up-right"></i>

                    </a>

                </article>


                {{-- =================================================
                     9. CAREER GROUP
                ================================================== --}}

                <article class="community-card" data-category="career"
                    data-name="career job freelance freelancer remote work portfolio cv interview">

                    <div class="card-top">

                        <div class="community-icon icon-green">

                            <i data-lucide="briefcase-business"></i>

                        </div>

                        <div class="type-badge type-group">

                            <i data-lucide="users"></i>
                            WhatsApp Group

                        </div>

                    </div>


                    <h3>
                        Freelancer & Career Hub
                    </h3>


                    <p class="community-description">
                        Berbagi peluang freelance, remote work,
                        portfolio, CV, interview, dan pengalaman dunia kerja.
                    </p>


                    <div class="community-meta">

                        <span class="category-tag">
                            CAREER
                        </span>

                        <span class="member-count">
                            <i data-lucide="users"></i>
                            1.5K anggota
                        </span>

                    </div>


                    {{-- GANTI LINK --}}
                    <a href="https://chat.whatsapp.com/CONTOH_CAREER" target="_blank" rel="noopener noreferrer"
                        class="join-button group-button">

                        Gabung Group

                        <i data-lucide="arrow-up-right"></i>

                    </a>

                </article>


                {{-- =================================================
                     10. STUDENT COMMUNITY
                ================================================== --}}

                <article class="community-card" data-category="career"
                    data-name="student pelajar siswa smk sma belajar career education teknologi">

                    <div class="card-top">

                        <div class="community-icon">

                            <i data-lucide="graduation-cap"></i>

                        </div>

                        <div class="type-badge type-channel">

                            <i data-lucide="megaphone"></i>
                            WhatsApp Channel

                        </div>

                    </div>


                    <h3>
                        SkillCareer Student
                    </h3>


                    <p class="community-description">
                        Informasi belajar, tips karier, peluang project,
                        teknologi, dan pengembangan skill untuk pelajar.
                    </p>


                    <div class="community-meta">

                        <span class="category-tag">
                            STUDENT
                        </span>

                        <span class="member-count">
                            <i data-lucide="users"></i>
                            1K+ followers
                        </span>

                    </div>


                    {{-- GANTI LINK --}}
                    <a href="https://whatsapp.com/channel/CONTOH_STUDENT" target="_blank" rel="noopener noreferrer"
                        class="join-button channel-button">

                        Follow Channel

                        <i data-lucide="arrow-up-right"></i>

                    </a>

                </article>

            </div>


            {{-- =====================================================
                 EMPTY STATE
            ====================================================== --}}

            <div class="empty-state" id="emptyState">

                <div class="empty-icon">
                    <i data-lucide="search-x"></i>
                </div>

                <h3>
                    Komunitas tidak ditemukan
                </h3>

                <p>
                    Coba gunakan kata kunci lain atau pilih bidang
                    yang berbeda untuk menemukan komunitas yang sesuai.
                </p>

            </div>

        </section>


        {{-- =====================================================
             INFO CARDS
        ====================================================== --}}

        <section class="info-section">

            <div class="info-card">

                <div class="info-icon">
                    <i data-lucide="users"></i>
                </div>

                <div>

                    <h3>
                        WhatsApp Group
                    </h3>

                    <p>
                        Cocok untuk diskusi dua arah, bertanya,
                        berbagi project, bertukar pengalaman,
                        dan networking dengan anggota lain.
                    </p>

                </div>

            </div>


            <div class="info-card">

                <div class="info-icon">
                    <i data-lucide="megaphone"></i>
                </div>

                <div>

                    <h3>
                        WhatsApp Channel
                    </h3>

                    <p>
                        Cocok untuk mendapatkan update,
                        informasi terbaru, peluang, event,
                        dan konten pilihan dari SkillCareer AI.
                    </p>

                </div>

            </div>

        </section>


        {{-- =====================================================
             CTA
        ====================================================== --}}

        <section class="community-cta">

            <div class="cta-content">

                <h2>
                    Belum menemukan komunitasmu?
                </h2>

                <p>
                    SkillCareer AI akan terus mengembangkan komunitas
                    berdasarkan kebutuhan belajar, perkembangan teknologi,
                    dan perjalanan karier para penggunanya.
                </p>

                <a href="{{ url('/') }}" class="cta-button">

                    Kembali ke SkillCareer AI

                    <i data-lucide="arrow-right"></i>

                </a>

            </div>

        </section>

    </main>


    {{-- =========================================================
         FOOTER
    ========================================================= --}}

    <footer class="footer">

        <p>
            © {{ date('Y') }}
            <strong>SkillCareer AI</strong>
            — Belajar. Berkembang. Berkarier.
        </p>

    </footer>


    {{-- =========================================================
         JAVASCRIPT
    ========================================================= --}}

    <script>
    document.addEventListener("DOMContentLoaded", function() {

        /* =====================================================
           LUCIDE
        ====================================================== */

        if (window.lucide) {
            lucide.createIcons();
        }


        /* =====================================================
           ELEMENTS
        ====================================================== */

        const searchInput =
            document.getElementById("communitySearch");

        const clearSearch =
            document.getElementById("clearSearch");

        const filterButtons =
            document.querySelectorAll(".filter-btn");

        const cards =
            document.querySelectorAll(".community-card");

        const emptyState =
            document.getElementById("emptyState");

        const communityCount =
            document.getElementById("communityCount");


        let currentFilter = "all";


        /* =====================================================
           FILTER COMMUNITY
        ====================================================== */

        function filterCommunities() {

            const keyword =
                searchInput.value
                .toLowerCase()
                .trim();

            let visibleCount = 0;


            cards.forEach(function(card) {

                const category =
                    (card.dataset.category || "")
                    .toLowerCase();

                const name =
                    (card.dataset.name || "")
                    .toLowerCase();

                const title =
                    card.querySelector("h3")
                    ?.textContent
                    .toLowerCase() || "";

                const description =
                    card.querySelector(".community-description")
                    ?.textContent
                    .toLowerCase() || "";


                const matchesFilter =
                    currentFilter === "all" ||
                    category === currentFilter;


                const matchesSearch = !keyword ||
                    name.includes(keyword) ||
                    title.includes(keyword) ||
                    description.includes(keyword);


                if (matchesFilter && matchesSearch) {

                    card.style.display = "block";

                    visibleCount++;

                } else {

                    card.style.display = "none";

                }

            });


            /* =================================================
               COUNT
            ================================================== */

            communityCount.textContent =
                visibleCount + " komunitas tersedia";


            /* =================================================
               EMPTY STATE
            ================================================== */

            if (visibleCount === 0) {

                emptyState.classList.add("show");

            } else {

                emptyState.classList.remove("show");

            }


            /* =================================================
               CLEAR BUTTON
            ================================================== */

            if (keyword.length > 0) {

                clearSearch.classList.add("show");

            } else {

                clearSearch.classList.remove("show");

            }

        }


        /* =====================================================
           SEARCH
        ====================================================== */

        searchInput.addEventListener(
            "input",
            filterCommunities
        );


        /* =====================================================
           CLEAR SEARCH
        ====================================================== */

        clearSearch.addEventListener(
            "click",
            function() {

                searchInput.value = "";

                searchInput.focus();

                filterCommunities();

            }
        );


        /* =====================================================
           FILTER BUTTON
        ====================================================== */

        filterButtons.forEach(function(button) {

            button.addEventListener(
                "click",
                function() {

                    filterButtons.forEach(
                        function(btn) {
                            btn.classList.remove("active");
                        }
                    );


                    this.classList.add("active");


                    currentFilter =
                        this.dataset.filter;


                    filterCommunities();

                }
            );

        });


        /* =====================================================
           INITIAL
        ====================================================== */

        filterCommunities();

    });
    </script>

</body>

</html>