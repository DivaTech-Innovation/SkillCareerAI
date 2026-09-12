<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SkillCareer AI - Temukan Kariermu</title>

    <meta name="description"
        content="SkillCareer AI membantu kamu menemukan karier yang cocok, mempelajari skill yang dibutuhkan, dan meraih masa depanmu.">

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

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
        color: #111827;
        background: #ffffff;
        line-height: 1.6;
    }

    a {
        text-decoration: none;
        color: inherit;
    }

    button {
        font-family: inherit;
    }

    .container {
        width: min(1180px, 92%);
        margin: auto;
    }

    /* =====================================================
           NAVBAR
        ===================================================== */

    .navbar {
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1000;
        background: rgba(255, 255, 255, 0.94);
        backdrop-filter: blur(15px);
        transition: .3s ease;
    }

    .navbar.scrolled {
        box-shadow: 0 4px 25px rgba(15, 23, 42, .07);
    }

    .nav-container {
        width: min(1180px, 92%);
        height: 76px;
        margin: auto;

        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    /* Logo */

    .logo {
        display: flex;
        align-items: center;
        gap: 9px;

        font-size: 20px;
        font-weight: 800;
        color: #111827;
    }

    .logo b {
        color: #3155ff;
    }

    .logo-icon {
        width: 34px;
        height: 34px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 10px;

        color: white;

        background:
            linear-gradient(135deg,
                #3155ff,
                #6945ff);

        box-shadow:
            0 6px 18px rgba(49, 85, 255, .25);
    }

    /* Navigation */

    .nav-menu {
        display: flex;
        align-items: center;
        gap: 34px;
    }

    .nav-menu a {
        position: relative;

        color: #374151;
        font-size: 14px;
        font-weight: 500;

        transition: .2s ease;
    }

    .nav-menu a:hover,
    .nav-menu a.active {
        color: #3155ff;
    }

    .nav-menu a.active::after {
        content: '';

        position: absolute;
        left: 0;
        right: 0;
        bottom: -10px;

        height: 2px;

        background: #3155ff;
        border-radius: 5px;
    }

    .nav-actions {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .btn-login {
        padding: 10px 22px;

        color: #3155ff;

        font-size: 14px;
        font-weight: 600;

        border: 1px solid #e1e5ef;
        border-radius: 9px;

        background: white;

        transition: .2s ease;
    }

    .btn-login:hover {
        border-color: #3155ff;
    }

    .btn-primary {
        display: inline-flex;
        align-items: center;
        justify-content: center;

        padding: 12px 22px;

        border-radius: 9px;

        color: white;

        background:
            linear-gradient(135deg,
                #3155ff,
                #5840ef);

        font-size: 14px;
        font-weight: 600;

        box-shadow:
            0 8px 20px rgba(49, 85, 255, .22);

        transition: .25s ease;
    }

    .btn-primary:hover {
        transform: translateY(-2px);

        box-shadow:
            0 12px 25px rgba(49, 85, 255, .3);
    }

    .mobile-menu-btn {
        display: none;

        border: none;
        background: transparent;

        font-size: 25px;
        cursor: pointer;
    }

    /* =====================================================
           HERO
        ===================================================== */

    .hero {
        min-height: 690px;
        padding-top: 76px;

        display: flex;
        align-items: center;

        background:
            radial-gradient(circle at 75% 40%,
                rgba(111, 91, 255, .13),
                transparent 35%),
            linear-gradient(180deg,
                #f8faff 0%,
                #ffffff 100%);

        overflow: hidden;
    }

    .hero-container {
        width: min(1180px, 92%);
        margin: auto;

        display: grid;
        grid-template-columns: 48% 52%;
        align-items: center;

        gap: 20px;
    }

    .hero-content {
        padding-top: 20px;
    }

    .hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 7px;

        padding: 7px 13px;

        border: 1px solid #e4e8f5;
        border-radius: 30px;

        background: white;

        color: #4b5563;

        font-size: 12px;
        font-weight: 500;

        box-shadow:
            0 5px 15px rgba(31, 41, 55, .04);
    }

    .hero-title {
        margin-top: 25px;

        font-size: clamp(40px, 4vw, 58px);
        line-height: 1.12;

        letter-spacing: -2px;

        font-weight: 800;
        color: #10182c;
    }

    .hero-title span {
        color: #3155ff;
    }

    .hero-description {
        max-width: 500px;

        margin-top: 22px;

        font-size: 15px;
        line-height: 1.8;

        color: #667085;
    }

    .hero-buttons {
        display: flex;
        gap: 12px;

        margin-top: 28px;
    }

    .btn-secondary {
        display: inline-flex;
        align-items: center;
        gap: 8px;

        padding: 12px 22px;

        border: 1px solid #e1e5ee;
        border-radius: 9px;

        color: #374151;

        background: white;

        font-size: 14px;
        font-weight: 600;

        transition: .2s ease;
    }

    .btn-secondary:hover {
        border-color: #3155ff;
        color: #3155ff;
    }

    /* Hero Stats */

    .hero-stats {
        display: flex;
        gap: 35px;

        margin-top: 42px;
    }

    .hero-stat {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .stat-icon {
        width: 30px;
        height: 30px;

        display: flex;
        align-items: center;
        justify-content: center;

        color: #3155ff;

        border-radius: 8px;

        background: #eef2ff;
    }

    .hero-stat strong {
        display: block;

        font-size: 16px;
        font-weight: 700;
    }

    .hero-stat small {
        color: #8991a2;
        font-size: 11px;
    }

    /* Hero Visual */

    .hero-visual {
        position: relative;

        min-height: 550px;

        display: flex;
        align-items: center;
        justify-content: center;
    }

    .hero-circle {
        position: absolute;

        width: 470px;
        height: 470px;

        border-radius: 50%;

        background:
            radial-gradient(circle,
                rgba(97, 88, 255, .20),
                rgba(97, 88, 255, .04) 60%,
                transparent 70%);
    }

    .hero-image {
        position: relative;
        z-index: 2;

        width: 450px;
        max-width: 90%;

        object-fit: contain;

        filter:
            drop-shadow(0 25px 35px rgba(30, 41, 59, .15));
    }

    /* Floating Cards */

    .floating-card {
        position: absolute;
        z-index: 4;

        padding: 16px 18px;

        background: rgba(255, 255, 255, .95);

        border: 1px solid #edf0f6;

        border-radius: 12px;

        box-shadow:
            0 15px 35px rgba(15, 23, 42, .10);
    }

    .floating-card h4 {
        font-size: 12px;
        color: #6b7280;
        margin-bottom: 5px;
    }

    .floating-card strong {
        font-size: 16px;
        color: #172033;
    }

    .floating-card.one {
        top: 100px;
        left: 25px;
    }

    .floating-card.two {
        right: 20px;
        top: 180px;
    }

    .floating-card.three {
        left: 35px;
        bottom: 105px;
    }

    .progress {
        width: 110px;
        height: 6px;

        margin-top: 8px;

        overflow: hidden;

        border-radius: 10px;
        background: #edf0f7;
    }

    .progress span {
        display: block;

        width: 68%;
        height: 100%;

        border-radius: inherit;

        background: #36c98f;
    }

    /* =====================================================
           SECTION
        ===================================================== */

    section {
        padding: 85px 0;
    }

    .section-heading {
        text-align: center;
        margin-bottom: 45px;
    }

    .section-label {
        color: #3155ff;

        font-size: 13px;
        font-weight: 700;

        margin-bottom: 8px;
    }

    .section-heading h2 {
        font-size: 32px;
        line-height: 1.2;

        color: #111827;

        letter-spacing: -.8px;
    }

    .section-heading p {
        max-width: 570px;

        margin: 12px auto 0;

        color: #737b8c;
        font-size: 14px;
    }

    /* =====================================================
           FEATURES
        ===================================================== */

    .features {
        background: white;
    }

    .feature-grid {
        display: grid;

        grid-template-columns:
            repeat(6, 1fr);

        gap: 15px;
    }

    .feature-card {
        padding: 23px 18px;

        border: 1px solid #edf0f5;
        border-radius: 12px;

        background: white;

        transition: .25s ease;
    }

    .feature-card:hover {
        transform: translateY(-5px);

        border-color: #dbe2ff;

        box-shadow:
            0 15px 35px rgba(30, 41, 59, .07);
    }

    .feature-icon {
        width: 42px;
        height: 42px;

        display: flex;
        align-items: center;
        justify-content: center;

        margin-bottom: 15px;

        border-radius: 11px;

        background: #eef2ff;
        color: #3155ff;

        font-size: 19px;
    }

    .feature-card h3 {
        font-size: 14px;
        margin-bottom: 7px;
    }

    .feature-card p {
        color: #7a8292;
        font-size: 11px;
        line-height: 1.6;
    }

    .feature-more {
        margin-top: 25px;

        color: #3155ff;

        font-size: 13px;
        font-weight: 600;
    }

    /* =====================================================
           ROADMAP
        ===================================================== */

    .roadmap-section {
        background: #f8faff;
    }

    .roadmap-container {
        display: grid;

        grid-template-columns: 1.4fr .8fr;

        gap: 45px;

        align-items: center;
    }

    .roadmap-steps {
        display: flex;
        justify-content: space-between;

        position: relative;

        margin-bottom: 35px;
    }

    .roadmap-steps::before {
        content: '';

        position: absolute;

        left: 0;
        right: 0;

        top: 18px;

        height: 2px;

        background: #e0e5f2;
    }

    .road-step {
        position: relative;
        z-index: 2;

        display: flex;
        flex-direction: column;
        align-items: center;

        gap: 8px;
    }

    .road-number {
        width: 38px;
        height: 38px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 50%;

        color: white;

        background: #3155ff;

        font-size: 12px;
        font-weight: 700;

        border: 4px solid #f8faff;
    }

    .road-step span {
        font-size: 11px;
        color: #697386;
    }

    .roadmap-info {
        padding: 28px;

        border-radius: 15px;

        background: white;

        border: 1px solid #e8ebf3;

        box-shadow:
            0 15px 30px rgba(15, 23, 42, .04);
    }

    .roadmap-info h3 {
        margin-bottom: 10px;
        font-size: 20px;
    }

    .roadmap-info p {
        color: #737b8c;
        font-size: 13px;
    }

    .roadmap-list {
        margin-top: 20px;

        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .roadmap-list div {
        display: flex;
        align-items: center;
        gap: 10px;

        font-size: 13px;
    }

    .check {
        width: 23px;
        height: 23px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 50%;

        color: #21b981;

        background: #e8faf3;
    }

    /* Community */

    .community-card {
        padding: 35px 30px;

        border-radius: 15px;

        background:
            linear-gradient(145deg,
                #f5f7ff,
                #ffffff);

        border: 1px solid #e5e9f4;
    }

    .community-card h3 {
        font-size: 14px;
        color: #3155ff;
    }

    .community-card h2 {
        margin: 15px 0;

        font-size: 30px;
    }

    .community-grid {
        display: grid;

        grid-template-columns: 1fr 1fr;

        gap: 22px;

        margin-top: 25px;
    }

    .community-grid strong {
        display: block;
        font-size: 20px;
    }

    .community-grid small {
        color: #7b8393;
        font-size: 11px;
    }

    /* =====================================================
           START JOURNEY
        ===================================================== */

    .journey {
        background: white;
    }

    .journey-grid {
        display: grid;

        grid-template-columns:
            repeat(3, 1fr);

        gap: 35px;
    }

    .journey-item {
        text-align: center;
        position: relative;
    }

    .journey-number {
        width: 35px;
        height: 35px;

        display: flex;
        align-items: center;
        justify-content: center;

        margin: 0 auto 15px;

        border-radius: 50%;

        color: white;

        background: #3155ff;

        font-size: 12px;
        font-weight: 700;
    }

    .journey-icon {
        font-size: 30px;
        margin-bottom: 10px;
    }

    .journey-item h3 {
        font-size: 15px;
        margin-bottom: 7px;
    }

    .journey-item p {
        color: #7a8292;
        font-size: 12px;
    }



    /* =====================================================
           CTA
        ===================================================== */

    .cta-wrapper {
        padding: 0 0 70px;
    }

    .cta {
        width: min(1180px, 92%);

        margin: auto;

        padding: 30px 45px;

        display: flex;
        align-items: center;
        justify-content: space-between;

        border-radius: 17px;

        color: white;

        background:
            radial-gradient(circle at 80% 20%,
                rgba(126, 100, 255, .5),
                transparent 35%),
            linear-gradient(110deg,
                #173bc8,
                #3621ad);

        box-shadow:
            0 18px 35px rgba(49, 85, 255, .20);
    }

    .cta-content {
        display: flex;
        align-items: center;
        gap: 17px;
    }

    .cta-icon {
        font-size: 27px;
    }

    .cta h2 {
        font-size: 18px;
    }

    .cta p {
        margin-top: 3px;

        font-size: 12px;

        opacity: .8;
    }

    .cta .btn-primary {
        background: white;
        color: #3155ff;

        box-shadow: none;
    }

    /* =====================================================
           FOOTER
        ===================================================== */

    footer {
        padding: 65px 0 30px;

        color: white;

        background: #071838;
    }

    .footer-grid {
        display: grid;

        grid-template-columns:
            1.5fr 1fr 1fr 1fr 1.5fr;

        gap: 40px;
    }

    .footer-logo {
        font-size: 19px;
        font-weight: 800;
    }

    .footer-logo span {
        color: #5e7cff;
    }

    .footer-description {
        margin-top: 13px;

        max-width: 260px;

        color: #9ca8c0;

        font-size: 12px;
    }

    .footer-column h4 {
        margin-bottom: 17px;

        font-size: 13px;
    }

    .footer-column a {
        display: block;

        margin-bottom: 11px;

        color: #9ca8c0;

        font-size: 12px;
    }

    .footer-column a:hover {
        color: white;
    }

    .newsletter {
        padding: 20px;

        border: 1px solid rgba(255, 255, 255, .08);
        border-radius: 10px;

        background: rgba(255, 255, 255, .025);
    }

    .newsletter h4 {
        font-size: 13px;
    }

    .newsletter p {
        margin: 8px 0 14px;

        color: #8f9bb3;

        font-size: 11px;
    }

    .newsletter-form {
        display: flex;

        padding: 4px;

        background: white;

        border-radius: 8px;
    }

    .newsletter-form input {
        width: 100%;

        border: none;
        outline: none;

        padding: 9px;

        font-size: 11px;
    }

    .newsletter-form button {
        width: 35px;

        border: none;
        border-radius: 6px;

        color: white;

        background: #3155ff;

        cursor: pointer;
    }

    .footer-bottom {
        margin-top: 45px;

        padding-top: 20px;

        text-align: center;

        border-top:
            1px solid rgba(255, 255, 255, .07);

        color: #71809b;

        font-size: 11px;
    }

    /* =====================================================
           RESPONSIVE
        ===================================================== */

    @media (max-width: 1000px) {

        .nav-menu {
            gap: 18px;
        }

        .feature-grid {
            grid-template-columns:
                repeat(3, 1fr);
        }

        .hero-container {
            grid-template-columns: 1fr 1fr;
        }

        .hero-title {
            font-size: 43px;
        }

        .hero-image {
            width: 380px;
        }

        .footer-grid {
            grid-template-columns:
                repeat(3, 1fr);
        }

    }

    @media (max-width: 768px) {

        .nav-menu {
            display: none;

            position: absolute;

            top: 76px;
            left: 0;
            right: 0;

            padding: 20px;

            flex-direction: column;
            align-items: flex-start;

            background: white;

            box-shadow:
                0 15px 25px rgba(15, 23, 42, .08);
        }

        .nav-menu.show {
            display: flex;
        }

        .nav-actions {
            display: none;
        }

        .mobile-menu-btn {
            display: block;
        }

        .hero {
            padding-top: 100px;
        }

        .hero-container {
            grid-template-columns: 1fr;

            text-align: center;
        }

        .hero-description {
            margin-left: auto;
            margin-right: auto;
        }

        .hero-buttons,
        .hero-stats {
            justify-content: center;
        }

        .hero-visual {
            min-height: 420px;
        }

        .hero-image {
            width: 350px;
        }

        .floating-card.one {
            left: 0;
        }

        .floating-card.two {
            right: 0;
        }

        .floating-card.three {
            left: 0;
        }

        .roadmap-container {
            grid-template-columns: 1fr;
        }

        .testimonial-grid {
            grid-template-columns:
                repeat(2, 1fr);
        }

        .footer-grid {
            grid-template-columns:
                repeat(2, 1fr);
        }

        .cta {
            flex-direction: column;
            gap: 25px;

            align-items: flex-start;
        }

    }

    @media (max-width: 500px) {

        .hero-title {
            font-size: 36px;
        }

        .hero-buttons {
            flex-direction: column;
        }

        .hero-stats {
            flex-wrap: wrap;
            gap: 18px;
        }

        .feature-grid,
        .journey-grid,
        .testimonial-grid,
        .footer-grid {
            grid-template-columns: 1fr;
        }

        .roadmap-steps {
            overflow-x: auto;
            gap: 35px;
        }

        .roadmap-steps::before {
            width: 700px;
        }

        .road-step {
            min-width: 70px;
        }

        .floating-card {
            transform: scale(.85);
        }

    }
    </style>

</head>

<body>

    {{-- =====================================================
         NAVBAR
    ====================================================== --}}

    @include('components.navbar')


    {{-- =====================================================
HERO SECTION
===================================================== --}}

    <section class="hero" id="beranda">

        <div class="hero-container">

            {{-- =================================================
        HERO CONTENT
        ================================================== --}}

            <div class="hero-content">

                <div class="hero-badge">
                    <span class="badge-dot"></span>
                    AI-Powered Career Learning Platform
                </div>


                <h1 class="hero-title">

                    Temukan Kariermu.<br>

                    <span>Pelajari Skillnya.</span><br>

                    Raih Masa Depanmu.

                </h1>


                <p class="hero-description">

                    SkillPath AI membantu kamu menemukan karier yang cocok,
                    mempelajari skill yang dibutuhkan, dan siap bekerja
                    dengan bantuan AI Mentor pribadi.

                </p>


                {{-- BUTTON --}}

                <div class="hero-buttons">

                    <a href="{{ route('register') }}" class="btn-primary">

                        Mulai Assessment Gratis

                    </a>


                    <a href="#fitur" class="btn-secondary">

                        Lihat Fitur

                    </a>

                </div>


                {{-- =================================================
            STATS
            ================================================== --}}

                <div class="hero-stats">

                    {{-- USER --}}

                    <div class="hero-stat">

                        <div class="stat-icon stat-user">
                            <i data-lucide="users"></i>
                        </div>
                        <div>

                            <strong class="counter" data-target="10000" data-suffix="K+" data-divider="1000">
                                0
                            </strong>

                            <small>
                                Pengguna Aktif
                            </small>

                        </div>

                    </div>


                    {{-- MATERIAL --}}

                    <div class="hero-stat">

                        <div class="stat-icon stat-material">
                            <i data-lucide="book-open"></i>
                        </div>

                        <div>

                            <strong class="counter" data-target="500" data-suffix="+">
                                0
                            </strong>

                            <small>
                                Materi Belajar
                            </small>

                        </div>

                    </div>


                    {{-- ROADMAP --}}

                    <div class="hero-stat">

                        <div class="floating-icon roadmap-icon">
                            <i data-lucide="map"></i>
                        </div>

                        <div>

                            <strong class="counter" data-target="100" data-suffix="+">
                                0
                            </strong>

                            <small>
                                Roadmap Karier
                            </small>

                        </div>

                    </div>


                    {{-- AI --}}

                    <div class="hero-stat">

                        <div class="stat-icon ai-stat-icon">
                            <i data-lucide="bot"></i>
                        </div>
                        <div>

                            <strong class="ai-stat">
                                AI
                            </strong>

                            <small>
                                Mentor 24/7
                            </small>

                        </div>

                    </div>

                </div>

            </div>





            {{-- =================================================
        HERO VISUAL
        ================================================== --}}

            <div class="hero-visual">

                {{-- BACKGROUND GLOW --}}

                <div class="hero-glow"></div>

                <div class="hero-circle"></div>


                {{-- DECORATIVE ORBIT --}}

                <div class="orbit orbit-one"></div>

                <div class="orbit orbit-two"></div>


                {{-- MAIN IMAGE --}}

                <img src="{{ asset('images/hero-student.png') }}" alt="SkillPath AI Student" class="hero-image">


                {{-- =================================================
            FLOATING CARD 1
            ================================================== --}}

                <div class="floating-card one">

                    <div class="floating-icon match-icon">
                        <i data-lucide="badge-check"></i>
                    </div>

                    <div class="floating-content">

                        <span>
                            AI Career Recommendation
                        </span>

                        <strong>
                            95% Match
                        </strong>

                    </div>

                    <div class="match-ring"></div>

                </div>


                {{-- =================================================
            FLOATING CARD 2
            ================================================== --}}

                <div class="floating-card two">

                    <div class="floating-icon mentor-icon">
                        <i data-lucide="sparkles"></i>
                    </div>

                    <div class="floating-content">

                        <span>
                            AI Mentor
                        </span>

                        <strong>
                            Siap Membantu
                        </strong>

                    </div>

                    <div class="online-indicator">
                        <span></span>
                    </div>

                </div>


                {{-- =================================================
            FLOATING CARD 3
            ================================================== --}}

                <div class="floating-card three">

                    <div class="roadmap-top">

                        <div class="floating-icon roadmap-icon">
                            <i data-lucide="map"></i>
                        </div>

                        <div class="floating-content">

                            <span>
                                Roadmap Belajar
                            </span>

                            <strong>
                                Full Stack Developer
                            </strong>

                        </div>

                    </div>


                    <div class="progress">

                        <span></span>

                    </div>


                    <div class="progress-info">

                        <small>
                            Progress
                        </small>

                        <strong>
                            72%
                        </strong>

                    </div>

                </div>


                {{-- =================================================
            MINI FLOATING CARD
            ================================================== --}}

                <div class="mini-floating-card">

                    <div class="mini-icon">
                        <i data-lucide="zap"></i>
                    </div>

                    <div>

                        <strong>
                            Skill Progress
                        </strong>

                        <span>
                            +24% minggu ini
                        </span>

                    </div>

                </div>


                {{-- DECORATIVE DOTS --}}

                <span class="visual-dot dot-one"></span>

                <span class="visual-dot dot-two"></span>

                <span class="visual-dot dot-three"></span>

            </div>

        </div>

    </section>



    <style>
    /* =====================================================
HERO SECTION
===================================================== */

    .match-icon {
        background: #ecfdf3;
        color: #16a34a;
    }

    .match-icon svg {
        width: 19px !important;
        height: 19px !important;
        display: block !important;
        stroke-width: 2.2;
    }

    .mentor-icon {
        background: #f3f0ff;
        color: #704dff;
    }

    .mentor-icon svg {
        width: 19px !important;
        height: 19px !important;
        display: block !important;
        stroke-width: 2.2;
    }

    .mini-icon {
        width: 36px;
        height: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;

        border-radius: 10px;
        background: #fff7ed;
        color: #f59e0b;
    }

    .mini-icon svg {
        width: 18px !important;
        height: 18px !important;
        display: block !important;
        stroke-width: 2.3;
    }

    .stat-user {
        background: #eef2ff;
        color: #3155ff;
    }

    .stat-user svg {
        width: 20px !important;
        height: 20px !important;
        display: block !important;
        stroke-width: 2.2;
    }

    .stat-material {
        background: #f0fdf4;
        color: #16a34a;
    }

    .stat-material svg {
        width: 20px !important;
        height: 20px !important;
        display: block !important;
        stroke-width: 2.2;
    }

    .roadmap-icon {
        background: #eef2ff;
        color: #3155ff;
    }

    .roadmap-icon svg {
        width: 19px !important;
        height: 19px !important;
        display: block !important;
        stroke-width: 2.2;
    }

    .ai-stat-icon {
        background: linear-gradient(135deg, #eef2ff, #f3efff);
        color: #704dff;
    }

    .ai-stat-icon svg {
        width: 20px;
        height: 20px;
        stroke-width: 2.2;
    }

    .hero {

        position: relative;

        width: 100%;

        height: calc(100vh - 78px);

        min-height: 650px;

        max-height: 760px;

        overflow: hidden;

        padding:
            35px 30px 35px;

        box-sizing: border-box;

        background:

            radial-gradient(circle at 78% 45%,
                rgba(49, 85, 255, .10),
                transparent 34%),

            radial-gradient(circle at 15% 80%,
                rgba(112, 72, 255, .05),
                transparent 30%),

            linear-gradient(180deg,
                #ffffff 0%,
                #f8faff 100%);

    }


    /* =====================================================
HERO CONTAINER
===================================================== */

    .hero-container {

        position: relative;

        z-index: 2;

        width: 100%;

        max-width: 1240px;

        height: 100%;

        margin: 0 auto;

        display: grid;

        grid-template-columns:
            minmax(0, 1fr) minmax(0, 1fr);

        align-items: center;

        gap: 45px;

    }


    /* =====================================================
LEFT CONTENT
===================================================== */

    .hero-content {

        position: relative;

        z-index: 10;

        max-width: 600px;

        padding-left: 5px;

    }


    .hero-badge {

        display: inline-flex;

        align-items: center;

        gap: 8px;

        padding:
            8px 13px;

        margin-bottom: 18px;

        border:
            1px solid #dfe5ff;

        border-radius: 50px;

        background:
            rgba(245, 247, 255, .90);

        color:
            #3155ff;

        font-size:
            11px;

        font-weight:
            800;

        box-shadow:
            0 8px 25px rgba(49, 85, 255, .06);

        animation:
            badgeAppear .8s ease both;

    }


    .badge-dot {

        width: 7px;

        height: 7px;

        flex-shrink: 0;

        border-radius: 50%;

        background:
            #3155ff;

        box-shadow:
            0 0 0 5px rgba(49, 85, 255, .10);

        animation:
            badgePulse 1.7s infinite;

    }


    @keyframes badgePulse {

        0%,
        100% {
            transform: scale(1);
            opacity: 1;
        }

        50% {
            transform: scale(1.25);
            opacity: .65;
        }

    }


    @keyframes badgeAppear {

        from {
            opacity: 0;
            transform: translateY(15px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }

    }


    /* =====================================================
TITLE
===================================================== */

    .hero-title {

        margin: 0;

        color:
            #172033;

        font-size:
            clamp(42px,
                4.3vw,
                58px);

        line-height:
            1.07;

        letter-spacing:
            -2.6px;

        font-weight:
            850;

    }


    .hero-title span {

        background:
            linear-gradient(135deg,
                #3155ff,
                #7048ff);

        -webkit-background-clip:
            text;

        -webkit-text-fill-color:
            transparent;

    }


    /* =====================================================
DESCRIPTION
===================================================== */

    .hero-description {

        max-width: 555px;

        margin-top: 20px;

        color:
            #737d90;

        font-size:
            14px;

        line-height:
            1.75;

    }


    /* =====================================================
BUTTONS
===================================================== */

    .hero-buttons {

        display:
            flex;

        align-items:
            center;

        gap:
            12px;

        margin-top:
            27px;

    }


    .btn-primary {

        display:
            inline-flex;

        align-items:
            center;

        justify-content:
            center;

        gap:
            10px;

        padding:
            13px 18px;

        border-radius:
            11px;

        background:
            linear-gradient(135deg,
                #3155ff,
                #5b45ff);

        color:
            white;

        text-decoration:
            none;

        font-size:
            12px;

        font-weight:
            800;

        box-shadow:
            0 12px 25px rgba(49, 85, 255, .20);

        transition:
            .25s ease;

    }


    .btn-primary:hover {

        transform:
            translateY(-3px);

        box-shadow:
            0 17px 35px rgba(49, 85, 255, .28);

    }


    .btn-arrow {

        font-size:
            17px;

        transition:
            .25s;

    }


    .btn-primary:hover .btn-arrow {

        transform:
            translateX(4px);

    }


    .btn-secondary {

        display:
            inline-flex;

        align-items:
            center;

        gap:
            9px;

        padding:
            13px 17px;

        border:
            1px solid #e0e5ef;

        border-radius:
            11px;

        background:
            white;

        color:
            #596276;

        text-decoration:
            none;

        font-size:
            12px;

        font-weight:
            750;

        transition:
            .25s;

    }


    .btn-secondary:hover {

        border-color:
            #c7d0ff;

        color:
            #3155ff;

        transform:
            translateY(-2px);

    }


    .secondary-icon {

        width:
            7px;

        height:
            7px;

        display:
            flex;

        align-items:
            center;

        justify-content:
            center;

        border-radius:
            50%;

        background:
            #3155ff;

    }


    /* =====================================================
STATS
===================================================== */

    .hero-stats {

        display:
            grid;

        grid-template-columns:
            repeat(4, minmax(0, 1fr));

        gap:
            16px;

        margin-top:
            35px;

    }


    .hero-stat {

        display:
            flex;

        align-items:
            center;

        gap:
            9px;

        min-width:
            0;

    }


    .stat-icon {

        width:
            35px;

        height:
            35px;

        flex-shrink:
            0;

        display:
            flex;

        align-items:
            center;

        justify-content:
            center;

        border-radius:
            10px;

        background:
            #eef2ff;

        color:
            #3155ff;

        font-size:
            16px;

    }


    .hero-stat strong {

        display:
            block;

        color:
            #172033;

        font-size:
            15px;

        font-weight:
            850;

    }


    .hero-stat small {

        display:
            block;

        margin-top:
            2px;

        color:
            #9199aa;

        font-size:
            8.5px;

        white-space:
            nowrap;

    }


    .ai-stat {

        background:
            linear-gradient(135deg,
                #3155ff,
                #7048ff);

        -webkit-background-clip:
            text;

        -webkit-text-fill-color:
            transparent;

    }


    .ai-stat-icon {

        background:
            linear-gradient(135deg,
                #eef2ff,
                #f2edff);

    }


    /* =====================================================
RIGHT HERO VISUAL
===================================================== */

    .hero-visual {

        position:
            relative;

        height:
            100%;

        min-height:
            570px;

        display:
            flex;

        align-items:
            center;

        justify-content:
            center;

    }


    /* =====================================================
GLOW
===================================================== */

    .hero-glow {

        position:
            absolute;

        width:
            390px;

        height:
            390px;

        border-radius:
            50%;

        background:
            radial-gradient(circle,
                rgba(49, 85, 255, .17),
                rgba(112, 72, 255, .06),
                transparent 70%);

        filter:
            blur(10px);

        animation:
            glowFloat 5s ease-in-out infinite;

    }


    @keyframes glowFloat {

        0%,
        100% {
            transform:
                scale(1);
        }

        50% {
            transform:
                scale(1.08);
        }

    }


    /* =====================================================
CIRCLE
===================================================== */

    .hero-circle {

        position:
            absolute;

        width:
            385px;

        height:
            385px;

        border-radius:
            50%;

        background:
            linear-gradient(145deg,
                #eef2ff,
                #f7f5ff);

        border:
            1px solid rgba(49, 85, 255, .08);

        box-shadow:

            inset 0 0 50px rgba(49, 85, 255, .05),

            0 25px 70px rgba(49, 85, 255, .08);

    }


    /* =====================================================
ORBIT
===================================================== */

    .orbit {

        position:
            absolute;

        border:
            1px dashed rgba(49, 85, 255, .17);

        border-radius:
            50%;

        pointer-events:
            none;

    }


    .orbit-one {

        width:
            455px;

        height:
            455px;

        animation:
            orbitRotate 20s linear infinite;

    }


    .orbit-two {

        width:
            510px;

        height:
            310px;

        transform:
            rotate(-25deg);

        border-color:
            rgba(112, 72, 255, .12);

        animation:
            orbitRotateReverse 25s linear infinite;

    }


    @keyframes orbitRotate {

        from {
            transform:
                rotate(0deg);
        }

        to {
            transform:
                rotate(360deg);
        }

    }


    @keyframes orbitRotateReverse {

        from {
            transform:
                rotate(-25deg);
        }

        to {
            transform:
                rotate(-385deg);
        }

    }


    /* =====================================================
MAIN HERO IMAGE
===================================================== */

    .hero-image {

        position:
            relative;

        z-index:
            3;

        width:
            375px;

        max-width:
            76%;

        max-height:
            500px;

        object-fit:
            contain;

        filter:
            drop-shadow(0 25px 35px rgba(30, 40, 80, .15));

        animation:
            studentFloat 5s ease-in-out infinite;

    }


    @keyframes studentFloat {

        0%,
        100% {
            transform:
                translateY(0);
        }

        50% {
            transform:
                translateY(-9px);
        }

    }


    /* =====================================================
FLOATING CARDS
===================================================== */

    .floating-card {

        position:
            absolute;

        z-index:
            7;

        display:
            flex;

        align-items:
            center;

        gap:
            10px;

        padding:
            11px 13px;

        border:
            1px solid rgba(225, 230, 245, .95);

        border-radius:
            14px;

        background:
            rgba(255, 255, 255, .95);

        backdrop-filter:
            blur(14px);

        -webkit-backdrop-filter:
            blur(14px);

        box-shadow:
            0 18px 40px rgba(35, 45, 80, .12);

    }


    /* =====================================================
CARD ONE - TOP LEFT
===================================================== */

    .floating-card.one {

        top:
            105px;

        left:
            2px;

        animation:
            cardFloatOne 4.5s ease-in-out infinite;

    }


    .match-icon {

        width:
            33px;

        height:
            33px;

        flex-shrink:
            0;

        display:
            flex;

        align-items:
            center;

        justify-content:
            center;

        border-radius:
            10px;

        background:
            #e9f9f2;

        color:
            #12a879;

        font-size:
            15px;

        font-weight:
            900;

    }


    .match-ring {

        width:
            22px;

        height:
            22px;

        flex-shrink:
            0;

        margin-left:
            4px;

        border:
            3px solid #e3f4ed;

        border-top-color:
            #12a879;

        border-radius:
            50%;

        animation:
            ringRotate 2s linear infinite;

    }


    @keyframes ringRotate {

        to {
            transform:
                rotate(360deg);
        }

    }


    /* =====================================================
CARD TWO - RIGHT
===================================================== */

    .floating-card.two {

        top:
            235px;

        right:
            -3px;

        animation:
            cardFloatTwo 5s ease-in-out infinite;

    }


    .mentor-icon {

        width:
            33px;

        height:
            33px;

        flex-shrink:
            0;

        display:
            flex;

        align-items:
            center;

        justify-content:
            center;

        border-radius:
            10px;

        background:
            #eef2ff;

        color:
            #3155ff;

        font-size:
            15px;

    }


    .online-indicator {

        position:
            absolute;

        top:
            7px;

        right:
            8px;

    }


    .online-indicator span {

        display:
            block;

        width:
            6px;

        height:
            6px;

        border-radius:
            50%;

        background:
            #15b981;

        box-shadow:
            0 0 0 4px rgba(21, 185, 129, .10);

    }


    /* =====================================================
CARD THREE - BOTTOM LEFT
===================================================== */

    .floating-card.three {

        bottom:
            78px;

        left:
            0;

        width:
            245px;

        display:
            block;

        animation:
            cardFloatThree 5.5s ease-in-out infinite;

    }


    .roadmap-top {

        display:
            flex;

        align-items:
            center;

        gap:
            10px;

    }


    .roadmap-icon {

        width:
            33px;

        height:
            33px;

        flex-shrink:
            0;

        display:
            flex;

        align-items:
            center;

        justify-content:
            center;

        border-radius:
            10px;

        background:
            #f3edff;

        color:
            #7048ff;

    }


    .progress {

        height:
            6px;

        margin-top:
            12px;

        overflow:
            hidden;

        border-radius:
            20px;

        background:
            #edf0f6;

    }


    .progress span {

        display:
            block;

        width:
            72%;

        height:
            100%;

        border-radius:
            inherit;

        background:
            linear-gradient(90deg,
                #3155ff,
                #7048ff);

        animation:
            progressLoad 2s ease forwards;

    }


    .progress-info {

        display:
            flex;

        justify-content:
            space-between;

        margin-top:
            6px;

    }


    .progress-info small {

        color:
            #9aa2b1;

        font-size:
            8px;

    }


    .progress-info strong {

        color:
            #3155ff;

        font-size:
            9px;

    }


    @keyframes progressLoad {

        from {
            width:
                0;
        }

        to {
            width:
                72%;
        }

    }


    /* =====================================================
FLOATING CONTENT
===================================================== */

    .floating-content span {

        display:
            block;

        color:
            #8b94a5;

        font-size:
            8px;

        margin-bottom:
            3px;

    }


    .floating-content strong {

        display:
            block;

        color:
            #20293b;

        font-size:
            10.5px;

    }


    /* =====================================================
MINI CARD
===================================================== */

    .mini-floating-card {

        position:
            absolute;

        z-index:
            7;

        right:
            0;

        bottom:
            120px;

        display:
            flex;

        align-items:
            center;

        gap:
            9px;

        padding:
            9px 11px;

        border:
            1px solid rgba(225, 230, 245, .95);

        border-radius:
            12px;

        background:
            rgba(255, 255, 255, .95);

        backdrop-filter:
            blur(12px);

        box-shadow:
            0 15px 35px rgba(30, 40, 80, .10);

        animation:
            miniFloat 4s ease-in-out infinite;

    }


    .mini-icon {

        width:
            28px;

        height:
            28px;

        display:
            flex;

        align-items:
            center;

        justify-content:
            center;

        border-radius:
            8px;

        background:
            #fff5dc;

        font-size:
            13px;

    }


    .mini-floating-card strong {

        display:
            block;

        color:
            #283146;

        font-size:
            9px;

    }


    .mini-floating-card span {

        display:
            block;

        margin-top:
            2px;

        color:
            #12a879;

        font-size:
            8px;

        font-weight:
            700;

    }


    /* =====================================================
FLOAT ANIMATIONS
===================================================== */

    @keyframes cardFloatOne {

        0%,
        100% {
            transform:
                translateY(0) rotate(-1deg);
        }

        50% {
            transform:
                translateY(-10px) rotate(1deg);
        }

    }


    @keyframes cardFloatTwo {

        0%,
        100% {
            transform:
                translateY(0) rotate(1deg);
        }

        50% {
            transform:
                translateY(9px) rotate(-1deg);
        }

    }


    @keyframes cardFloatThree {

        0%,
        100% {
            transform:
                translateY(0);
        }

        50% {
            transform:
                translateY(-8px);
        }

    }


    @keyframes miniFloat {

        0%,
        100% {
            transform:
                translateY(0);
        }

        50% {
            transform:
                translateY(-7px);
        }

    }


    /* =====================================================
DECORATIVE DOTS
===================================================== */

    .visual-dot {

        position:
            absolute;

        z-index:
            2;

        width:
            7px;

        height:
            7px;

        border-radius:
            50%;

        background:
            #3155ff;

        box-shadow:
            0 0 0 6px rgba(49, 85, 255, .08);

    }


    .dot-one {

        top:
            90px;

        right:
            115px;

        animation:
            dotFloat 3s infinite ease-in-out;

    }


    .dot-two {

        bottom:
            145px;

        right:
            85px;

        background:
            #7048ff;

        animation:
            dotFloat 4s infinite ease-in-out .5s;

    }


    .dot-three {

        top:
            180px;

        left:
            65px;

        background:
            #12a879;

        animation:
            dotFloat 3.5s infinite ease-in-out 1s;

    }


    @keyframes dotFloat {

        0%,
        100% {
            transform:
                translateY(0);
        }

        50% {
            transform:
                translateY(-11px);
        }

    }


    /* =====================================================
TABLET
===================================================== */

    @media (max-width: 1100px) {

        .hero {

            height:
                auto;

            min-height:
                680px;

            max-height:
                none;

            padding:
                45px 20px;

        }


        .hero-container {

            gap:
                25px;

        }


        .hero-title {

            font-size:
                clamp(38px,
                    4.5vw,
                    52px);

        }


        .hero-image {

            width:
                350px;

        }


        .hero-circle {

            width:
                360px;

            height:
                360px;

        }


        .hero-glow {

            width:
                370px;

            height:
                370px;

        }


        .orbit-one {

            width:
                425px;

            height:
                425px;

        }


        .orbit-two {

            width:
                470px;

            height:
                290px;

        }

    }


    /* =====================================================
MOBILE / TABLET
===================================================== */

    @media (max-width: 900px) {

        .hero {

            min-height:
                auto;

            padding:
                85px 20px 65px;

        }


        .hero-container {

            height:
                auto;

            grid-template-columns:
                1fr;

            text-align:
                center;

        }


        .hero-content {

            max-width:
                650px;

            margin:
                0 auto;

        }


        .hero-description {

            margin-left:
                auto;

            margin-right:
                auto;

        }


        .hero-buttons {

            justify-content:
                center;

        }


        .hero-stats {

            justify-content:
                center;

        }


        .hero-visual {

            height:
                560px;

            min-height:
                560px;

            margin-top:
                10px;

        }


        .floating-card.one {

            top:
                75px;

            left:
                5%;

        }


        .floating-card.two {

            top:
                205px;

            right:
                5%;

        }


        .floating-card.three {

            bottom:
                65px;

            left:
                5%;

        }


        .mini-floating-card {

            right:
                5%;

            bottom:
                105px;

        }

    }


    /* =====================================================
SMALL MOBILE
===================================================== */

    @media (max-width: 650px) {

        .hero {

            padding:
                85px 18px 55px;

        }


        .hero-title {

            font-size:
                36px;

            letter-spacing:
                -1.7px;

        }


        .hero-description {

            font-size:
                13px;

            line-height:
                1.7;

        }


        .hero-buttons {

            flex-direction:
                column;

        }


        .btn-primary,
        .btn-secondary {

            width:
                100%;

            justify-content:
                center;

        }


        .hero-stats {

            grid-template-columns:
                repeat(2, 1fr);

            gap:
                17px;

            text-align:
                left;

        }


        .hero-visual {

            height:
                470px;

            min-height:
                470px;

        }


        .hero-circle {

            width:
                310px;

            height:
                310px;

        }


        .hero-glow {

            width:
                330px;

            height:
                330px;

        }


        .orbit-one {

            width:
                360px;

            height:
                360px;

        }


        .orbit-two {

            width:
                390px;

            height:
                250px;

        }


        .hero-image {

            width:
                285px;

            max-height:
                390px;

        }


        .floating-card.one {

            top:
                45px;

            left:
                0;

            transform:
                scale(.84);

            transform-origin:
                left top;

        }


        .floating-card.two {

            top:
                135px;

            right:
                0;

            transform:
                scale(.84);

            transform-origin:
                right top;

        }


        .floating-card.three {

            bottom:
                15px;

            left:
                0;

            width:
                210px;

            transform:
                scale(.88);

            transform-origin:
                left bottom;

        }


        .mini-floating-card {

            right:
                0;

            bottom:
                80px;

            transform:
                scale(.84);

            transform-origin:
                right bottom;

        }


        .floating-content strong {

            font-size:
                10px;

        }


        .visual-dot {

            display:
                none;

        }

    }


    /* =====================================================
VERY SMALL MOBILE
===================================================== */

    @media (max-width: 420px) {

        .hero-title {

            font-size:
                32px;

        }


        .hero-visual {

            height:
                430px;

            min-height:
                430px;

        }


        .hero-circle {

            width:
                280px;

            height:
                280px;

        }


        .hero-glow {

            width:
                300px;

            height:
                300px;

        }


        .hero-image {

            width:
                255px;

        }


        .floating-card.one {

            transform:
                scale(.72);

        }


        .floating-card.two {

            transform:
                scale(.72);

        }


        .floating-card.three {

            transform:
                scale(.75);

        }


        .mini-floating-card {

            transform:
                scale(.72);

        }

    }


    /* =====================================================
REDUCED MOTION
===================================================== */

    @media (prefers-reduced-motion: reduce) {

        *,
        *::before,
        *::after {

            animation-duration:
                .01ms !important;

            animation-iteration-count:
                1 !important;

            scroll-behavior:
                auto !important;

        }

    }
    </style>



    <script>
    /* =====================================================
COUNTER ANIMATION
===================================================== */

    document.addEventListener(
        "DOMContentLoaded",
        function() {

            const counters =
                document.querySelectorAll(".counter");


            let counterStarted = false;


            function startCounters() {

                if (counterStarted) return;

                counterStarted = true;


                counters.forEach(
                    counter => {

                        const target =
                            Number(
                                counter.dataset.target
                            );


                        const suffix =
                            counter.dataset.suffix || "";


                        const divider =
                            Number(
                                counter.dataset.divider || 1
                            );


                        const duration =
                            target >= 10000 ?
                            850 :
                            650;


                        const startTime =
                            performance.now();


                        function updateCounter(
                            currentTime
                        ) {

                            const elapsed =
                                currentTime -
                                startTime;


                            const progress =
                                Math.min(
                                    elapsed / duration,
                                    1
                                );


                            const eased =
                                1 -
                                Math.pow(
                                    1 - progress,
                                    3
                                );


                            const current =
                                Math.floor(
                                    target * eased
                                );


                            if (divider > 1) {

                                const value =
                                    current / divider;


                                counter.textContent =
                                    value >= 10 ?
                                    Math.floor(value) + suffix :
                                    value.toFixed(1) + suffix;

                            } else {

                                counter.textContent =
                                    current.toLocaleString(
                                        "id-ID"
                                    ) + suffix;

                            }


                            if (progress < 1) {

                                requestAnimationFrame(
                                    updateCounter
                                );

                            } else {

                                if (divider > 1) {

                                    counter.textContent =
                                        (target / divider) +
                                        suffix;

                                } else {

                                    counter.textContent =
                                        target.toLocaleString(
                                            "id-ID"
                                        ) + suffix;

                                }

                            }

                        }


                        requestAnimationFrame(
                            updateCounter
                        );

                    }
                );

            }


            const hero =
                document.querySelector(".hero");


            if (
                "IntersectionObserver" in window
            ) {

                const observer =
                    new IntersectionObserver(
                        entries => {

                            entries.forEach(
                                entry => {

                                    if (
                                        entry.isIntersecting
                                    ) {

                                        startCounters();

                                        observer.disconnect();

                                    }

                                }
                            );

                        }, {
                            threshold: .2
                        }
                    );


                observer.observe(hero);

            } else {

                startCounters();

            }

        }
    );
    </script>


    {{-- =====================================================
     FEATURES SECTION
====================================================== --}}

    <section class="features" id="fitur">

        <div class="container">

            {{-- SECTION HEADER --}}
            <div class="section-heading">

                <div class="section-label">
                    <span class="label-dot"></span>
                    Fitur Unggulan Kami
                </div>

                <h2>
                    Semua yang Kamu Butuhkan
                    <span>untuk Berkembang.</span>
                </h2>

                <p>
                    Belajar, mengembangkan skill, menemukan karier,
                    dan mempersiapkan masa depan dalam satu platform.
                </p>

            </div>


            {{-- FEATURE GRID --}}
            <div class="feature-grid">


                {{-- AI ASSESSMENT --}}
                <a href="#roadmap" class="feature-card">

                    <div class="feature-card-top">

                        <div class="feature-icon blue">
                            <svg viewBox="0 0 24 24">
                                <path d="M12 3l2.2 4.8L19 10l-4.8 2.2L12 17l-2.2-4.8L5 10l4.8-2.2L12 3z" />
                                <circle cx="18.5" cy="5.5" r="1.5" />
                            </svg>
                        </div>

                    </div>

                    <h3>AI Assessment</h3>

                    <p>
                        Kenali potensi, minat, dan kemampuanmu
                        untuk menentukan arah karier yang tepat.
                    </p>

                    <div class="feature-link">
                        Lihat Roadmap

                    </div>

                </a>



                {{-- AI MENTOR --}}
                <a href="#ai-mentor" class="feature-card">

                    <div class="feature-card-top">

                        <div class="feature-icon purple">
                            <svg viewBox="0 0 24 24">
                                <rect x="4" y="5" width="16" height="12" rx="3" />
                                <path d="M8 21h8" />
                                <path d="M9 9h.01" />
                                <path d="M15 9h.01" />
                                <path d="M9 13c1.8 1.3 4.2 1.3 6 0" />
                            </svg>
                        </div>



                    </div>

                    <h3>AI Mentor</h3>

                    <p>
                        Teman belajar berbasis AI yang siap membantu
                        menjawab pertanyaan dan membimbing proses belajarmu.
                    </p>

                    <div class="feature-link">
                        Kenali AI Mentor
                    </div>

                </a>



                {{-- ROADMAP --}}
                <a href="#roadmap" class="feature-card">

                    <div class="feature-card-top">

                        <div class="feature-icon violet">
                            <svg viewBox="0 0 24 24">
                                <circle cx="6" cy="18" r="2" />
                                <circle cx="18" cy="6" r="2" />
                                <path d="M8 18h3a4 4 0 0 0 4-4v-2" />
                                <path d="M15 12h3" />
                            </svg>
                        </div>


                    </div>

                    <h3>Roadmap Belajar</h3>

                    <p>
                        Ikuti jalur pembelajaran yang terstruktur
                        sesuai tujuan dan target kariermu.
                    </p>

                    <div class="feature-link">
                        Lihat Roadmap
                    </div>

                </a>



                {{-- DIGITAL LIBRARY --}}
                <a href="#library" class="feature-card">

                    <div class="feature-card-top">

                        <div class="feature-icon indigo">
                            <svg viewBox="0 0 24 24">
                                <path d="M4 5a2 2 0 0 1 2-2h13v17H6a2 2 0 0 0-2 2V5z" />
                                <path d="M6 20h13" />
                                <path d="M8 7h7" />
                                <path d="M8 11h5" />
                            </svg>
                        </div>

                    </div>

                    <h3>Digital Library</h3>

                    <p>
                        Temukan ebook, video, materi pembelajaran,
                        dan latihan untuk meningkatkan skill.
                    </p>

                    <div class="feature-link">
                        Buka Library

                    </div>

                </a>



                {{-- QUIZ --}}
                <a href="#quiz" class="feature-card">

                    <div class="feature-card-top">

                        <div class="feature-icon green">
                            <svg viewBox="0 0 24 24">
                                <path d="M6 4h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z" />
                                <path d="M8 8h8" />
                                <path d="M8 12h5" />
                                <path d="M8 16l1.5 1.5L12 15" />
                            </svg>
                        </div>



                    </div>

                    <h3>Quiz & Evaluasi</h3>

                    <p>
                        Uji pemahamanmu melalui quiz interaktif
                        dan pantau perkembangan skill secara berkala.
                    </p>

                    <div class="feature-link">
                        Mulai Evaluasi

                    </div>

                </a>



                {{-- SERTIFIKAT --}}
                <a href="#sertifikat" class="feature-card">

                    <div class="feature-card-top">

                        <div class="feature-icon orange">
                            <svg viewBox="0 0 24 24">
                                <circle cx="12" cy="9" r="5" />
                                <path d="M9 13l-1 8 4-2 4 2-1-8" />
                                <path d="M10 9l1.2 1.2L14 7.5" />
                            </svg>
                        </div>


                    </div>

                    <h3>Sertifikat Resmi</h3>

                    <p>
                        Dapatkan sertifikat setelah menyelesaikan
                        pembelajaran dan evaluasi yang tersedia.
                    </p>

                    <div class="feature-link">
                        Lihat Sertifikat

                    </div>

                </a>

            </div>

        </div>

    </section>



    <!-- =========================
     WHY SKILLCAREER AI
========================= -->

    <section class="why-section" id="why-us">

        <div class="why-container">

            <!-- Heading -->
            <div class="why-heading">

                <div class="why-label">
                    <span class="why-dot"></span>
                    Kenapa SkillCareer AI?
                </div>

                <h2>
                    Bukan Sekadar Belajar,<br>
                    <strong>Bangun Masa Depanmu.</strong>
                </h2>

                <p>
                    Semua yang kamu butuhkan untuk mengenali potensi,
                    mengembangkan skill, dan mempersiapkan karier ada
                    dalam satu platform.
                </p>

            </div>


            <!-- Main Benefits -->
            <div class="why-box">

                <!-- Item 01 -->
                <div class="why-item">

                    <div class="why-number">
                        01
                    </div>

                    <div class="why-icon">
                        <i data-lucide="compass"></i>
                    </div>

                    <div class="why-content">
                        <h3>Temukan Arah</h3>

                        <p>
                            Kenali minat dan kemampuanmu untuk menemukan
                            pilihan karier yang lebih sesuai.
                        </p>
                    </div>

                </div>


                <!-- Item 02 -->
                <div class="why-item">

                    <div class="why-number">
                        02
                    </div>

                    <div class="why-icon">
                        <i data-lucide="layers-3"></i>
                    </div>

                    <div class="why-content">
                        <h3>Belajar Terstruktur</h3>

                        <p>
                            Ikuti materi dan tahapan belajar yang disusun
                            agar kamu bisa berkembang secara bertahap.
                        </p>
                    </div>

                </div>


                <!-- Item 03 -->
                <div class="why-item">

                    <div class="why-number">
                        03
                    </div>

                    <div class="why-icon">
                        <i data-lucide="sparkles"></i>
                    </div>

                    <div class="why-content">
                        <h3>Didampingi AI</h3>

                        <p>
                            Dapatkan bantuan dari AI Mentor untuk menjawab
                            pertanyaan dan membantu proses belajarmu.
                        </p>
                    </div>

                </div>


                <!-- Item 04 -->
                <div class="why-item">

                    <div class="why-number">
                        04
                    </div>

                    <div class="why-icon">
                        <i data-lucide="rocket"></i>
                    </div>

                    <div class="why-content">
                        <h3>Siap Menuju Karier</h3>

                        <p>
                            Bangun project, kumpulkan pengalaman, dan
                            persiapkan diri untuk dunia kerja.
                        </p>
                    </div>

                </div>

            </div>


            <!-- Bottom Statement -->
            <div class="why-bottom">

                <div class="why-bottom-line"></div>

                <p>
                    <strong>Learn.</strong>
                    <span>Build.</span>
                    <strong>Grow.</strong>
                </p>

                <div class="why-bottom-line"></div>

            </div>

        </div>

    </section>


    <!-- =========================
     CSS
========================= -->

    <style>
    .why-label {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        padding: 8px 15px;
        border-radius: 999px;
        background: #eef2ff;
        border: 1px solid #dbe3ff;
        color: #3155ff;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 0.2px;
        margin-bottom: 16px;
    }

    .why-dot {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #3155ff;
        box-shadow: 0 0 0 4px rgba(49, 85, 255, 0.10);
    }

    /* =========================
       SECTION
    ========================= */

    .why-section {
        padding: 110px 0;

        background: #f8f9fc;
    }

    .why-container {
        width: min(1080px, 90%);
        margin: 0 auto;
    }


    /* =========================
       HEADING
    ========================= */

    .why-heading {
        max-width: 720px;

        margin: 0 auto 55px;

        text-align: center;
    }

    .why-label {
        display: inline-flex;
        align-items: center;
        gap: 8px;

        margin-bottom: 16px;

        font-size: 13px;
        font-weight: 600;

        color: #3155ff;
    }

    .why-label span {
        width: 7px;
        height: 7px;

        border-radius: 50%;

        background: #3155ff;
    }

    .why-heading h2 {
        margin: 0;

        font-size: 40px;
        line-height: 1.2;
        letter-spacing: -1px;

        font-weight: 700;

        color: #151823;
    }

    .why-heading h2 strong {
        color: #3155ff;
    }

    .why-heading p {
        max-width: 620px;

        margin: 18px auto 0;

        font-size: 15px;
        line-height: 1.75;

        color: #6b7280;
    }


    /* =========================
       MAIN BOX
    ========================= */

    .why-box {
        display: grid;

        grid-template-columns: repeat(2, 1fr);

        background: #ffffff;

        border: 1px solid #e4e7ec;

        border-radius: 18px;

        overflow: hidden;

        box-shadow:
            0 12px 40px rgba(15, 23, 42, 0.05);
    }


    /* =========================
       ITEM
    ========================= */

    .why-item {
        position: relative;

        display: grid;

        grid-template-columns: 35px 48px 1fr;

        align-items: start;

        gap: 17px;

        min-height: 190px;

        padding: 30px;

        transition: .25s ease;
    }


    /* Vertical divider */

    .why-item:nth-child(odd) {
        border-right: 1px solid #e8ebf0;
    }


    /* Horizontal divider */

    .why-item:nth-child(-n+2) {
        border-bottom: 1px solid #e8ebf0;
    }


    /* Hover */

    .why-item:hover {
        background: #fbfcff;
    }


    /* =========================
       NUMBER
    ========================= */

    .why-number {
        padding-top: 4px;

        font-size: 11px;
        font-weight: 700;

        color: #a0a6b1;
    }


    /* =========================
       ICON
    ========================= */

    .why-icon {
        width: 48px;
        height: 48px;

        display: flex;
        align-items: center;
        justify-content: center;

        border: 1px solid #dfe4ff;

        border-radius: 11px;

        background: #f1f4ff;

        color: #3155ff;

        transition: .25s ease;
    }

    .why-icon svg {
        width: 21px;
        height: 21px;

        stroke-width: 1.8;
    }

    .why-item:hover .why-icon {
        background: #3155ff;

        color: #ffffff;

        border-color: #3155ff;
    }


    /* =========================
       CONTENT
    ========================= */

    .why-content {
        padding-top: 2px;
    }

    .why-content h3 {
        margin: 0 0 8px;

        font-size: 16px;
        font-weight: 650;

        color: #171923;
    }

    .why-content p {
        max-width: 320px;

        margin: 0;

        font-size: 13px;
        line-height: 1.7;

        color: #6b7280;
    }


    /* =========================
       BOTTOM
    ========================= */

    .why-bottom {
        display: flex;

        align-items: center;

        gap: 20px;

        max-width: 500px;

        margin: 42px auto 0;
    }

    .why-bottom-line {
        flex: 1;

        height: 1px;

        background: #dfe3e9;
    }

    .why-bottom p {
        margin: 0;

        white-space: nowrap;

        font-size: 13px;

        letter-spacing: 1px;

        color: #9aa0aa;
    }

    .why-bottom p strong {
        color: #3155ff;
        font-weight: 600;
    }

    .why-bottom p span {
        margin: 0 5px;
    }


    /* =========================
       TABLET
    ========================= */

    @media (max-width: 800px) {

        .why-heading h2 {
            font-size: 34px;
        }

        .why-item {
            grid-template-columns: 30px 45px 1fr;

            gap: 14px;

            padding: 25px;
        }

    }


    /* =========================
       MOBILE
    ========================= */

    @media (max-width: 600px) {

        .why-section {
            padding: 75px 0;
        }

        .why-heading {
            margin-bottom: 35px;
        }

        .why-heading h2 {
            font-size: 29px;

            letter-spacing: -.5px;
        }

        .why-heading p {
            font-size: 14px;
        }

        .why-box {
            grid-template-columns: 1fr;

            border-radius: 14px;
        }

        .why-item {
            grid-template-columns: 28px 45px 1fr;

            min-height: auto;

            padding: 23px 20px;
        }

        .why-item:nth-child(odd) {
            border-right: none;
        }

        .why-item:nth-child(-n+2) {
            border-bottom: none;
        }

        .why-item:not(:last-child) {
            border-bottom: 1px solid #e8ebf0;
        }

        .why-icon {
            width: 45px;
            height: 45px;
        }

        .why-content h3 {
            font-size: 15px;
        }

        .why-content p {
            font-size: 12px;
        }

        .why-bottom {
            margin-top: 30px;
        }

    }
    </style>


    <!-- =========================
     LUCIDE ICON
========================= -->

    <script>
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
    </script>


    {{-- ========================================
     DARI SKILL MENJADI PROJECT NYATA
======================================== --}}
    <section class="skill-project-section" id="skill-project">

        <div class="container">

            {{-- HEADER --}}
            <div class="skill-project-heading">

                <div class="section-label">
                    <span class="label-dot"></span>
                    Skill to Project
                </div>

                <h2>
                    Dari Skill Menjadi
                    <span>Project Nyata.</span>
                </h2>

                <p>
                    Jangan berhenti setelah memahami materi.
                    Terapkan kemampuanmu melalui project nyata yang
                    bisa menjadi bagian dari portfolio dan perjalanan kariermu.
                </p>

            </div>


            {{-- PROCESS --}}
            <div class="skill-project-process">

                {{-- STEP 01 --}}
                <div class="skill-project-step">

                    <div class="skill-project-top">
                        <span class="skill-project-number">01</span>

                        <div class="skill-project-icon">
                            <i data-lucide="book-open"></i>
                        </div>
                    </div>

                    <div class="skill-project-text">
                        <span>PELAJARI</span>

                        <h3>Bangun Fondasi Skill</h3>

                        <p>
                            Pelajari dasar dan konsep penting sesuai
                            dengan jalur karier yang kamu pilih.
                        </p>
                    </div>

                </div>


                {{-- CONNECTOR --}}
                <div class="skill-project-connector">
                    <span></span>
                </div>


                {{-- STEP 02 --}}
                <div class="skill-project-step">

                    <div class="skill-project-top">
                        <span class="skill-project-number">02</span>

                        <div class="skill-project-icon">
                            <i data-lucide="code-2"></i>
                        </div>
                    </div>

                    <div class="skill-project-text">
                        <span>PRAKTIK</span>

                        <h3>Asah Lewat Praktik</h3>

                        <p>
                            Uji kemampuanmu melalui latihan dan studi
                            kasus yang relevan dengan dunia nyata.
                        </p>
                    </div>

                </div>


                {{-- CONNECTOR --}}
                <div class="skill-project-connector">
                    <span></span>
                </div>


                {{-- STEP 03 --}}
                <div class="skill-project-step">

                    <div class="skill-project-top">
                        <span class="skill-project-number">03</span>

                        <div class="skill-project-icon">
                            <i data-lucide="layers-3"></i>
                        </div>
                    </div>

                    <div class="skill-project-text">
                        <span>BUILD</span>

                        <h3>Buat Project Nyata</h3>

                        <p>
                            Ubah kemampuanmu menjadi sebuah karya
                            yang dapat menunjukkan skill yang kamu miliki.
                        </p>
                    </div>

                </div>


                {{-- CONNECTOR --}}
                <div class="skill-project-connector">
                    <span></span>
                </div>


                {{-- STEP 04 --}}
                <div class="skill-project-step">

                    <div class="skill-project-top">
                        <span class="skill-project-number">04</span>

                        <div class="skill-project-icon">
                            <i data-lucide="folder-kanban"></i>
                        </div>
                    </div>

                    <div class="skill-project-text">
                        <span>PORTFOLIO</span>

                        <h3>Bangun Portfolio</h3>

                        <p>
                            Kumpulkan project terbaikmu sebagai bukti
                            kemampuan dan pengalaman yang kamu bangun.
                        </p>
                    </div>

                </div>


                {{-- CONNECTOR --}}
                <div class="skill-project-connector">
                    <span></span>
                </div>


                {{-- STEP 05 --}}
                <div class="skill-project-step">

                    <div class="skill-project-top">
                        <span class="skill-project-number">05</span>

                        <div class="skill-project-icon">
                            <i data-lucide="briefcase-business"></i>
                        </div>
                    </div>

                    <div class="skill-project-text">
                        <span>CAREER</span>

                        <h3>Siap Menuju Karier</h3>

                        <p>
                            Jadikan skill dan portfolio sebagai bekal
                            untuk melangkah menuju dunia profesional.
                        </p>
                    </div>

                </div>

            </div>


            {{-- BOTTOM MESSAGE --}}
            <div class="skill-project-footer">

                <div class="skill-project-footer-line"></div>

                <div class="skill-project-footer-content">
                    <i data-lucide="arrow-up-right"></i>

                    <span>
                        Setiap skill yang kamu pelajari adalah langkah
                        menuju masa depan.
                    </span>
                </div>

                <div class="skill-project-footer-line"></div>

            </div>

        </div>

    </section>


    <style>
    /* ========================================
   SKILL PROJECT SECTION
======================================== */

    .skill-project-section {
        padding: 110px 0;
        background: #ffffff;
    }


    /* ========================================
   HEADING
======================================== */

    .skill-project-heading {
        max-width: 720px;
        margin: 0 auto 70px;
        text-align: center;
    }

    .skill-project-heading .section-label {
        justify-content: center;
    }

    .skill-project-heading h2 {
        margin: 14px 0 18px;
    }

    .skill-project-heading h2 span {
        color: #3155ff;
    }

    .skill-project-heading p {
        max-width: 650px;
        margin: 0 auto;
        color: #68728a;
        font-size: 15px;
        line-height: 1.8;
    }


    /* ========================================
   PROCESS
======================================== */

    .skill-project-process {
        display: grid;

        grid-template-columns:
            1fr 55px 1fr 55px 1fr 55px 1fr 55px 1fr;

        align-items: center;

        max-width: 1250px;
        margin: 0 auto;
    }


    /* ========================================
   STEP CARD
======================================== */

    .skill-project-step {
        min-height: 270px;

        padding: 28px 24px;

        background: #ffffff;

        border: 1px solid #e4e8f0;
        border-radius: 18px;

        transition:
            transform .3s ease,
            border-color .3s ease,
            box-shadow .3s ease;
    }

    .skill-project-step:hover {
        transform: translateY(-6px);

        border-color: #cbd4ff;

        box-shadow:
            0 16px 35px rgba(49, 85, 255, .08);
    }


    /* ========================================
   TOP
======================================== */

    .skill-project-top {
        display: flex;
        align-items: center;
        justify-content: space-between;

        margin-bottom: 30px;
    }


    /* NUMBER */

    .skill-project-number {
        font-size: 12px;
        font-weight: 800;

        color: #a2aabd;

        letter-spacing: .08em;
    }


    /* ICON */

    .skill-project-icon {
        width: 52px;
        height: 52px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 14px;

        background: #f0f3ff;
        color: #3155ff;

        transition:
            background .3s ease,
            color .3s ease;
    }

    .skill-project-icon svg {
        width: 23px;
        height: 23px;

        stroke-width: 1.8;
    }

    .skill-project-step:hover .skill-project-icon {
        background: #3155ff;
        color: #ffffff;
    }


    /* ========================================
   TEXT
======================================== */

    .skill-project-text>span {
        display: block;

        margin-bottom: 9px;

        font-size: 10px;
        font-weight: 800;

        letter-spacing: .13em;

        color: #3155ff;
    }

    .skill-project-text h3 {
        margin: 0 0 12px;

        font-size: 17px;
        line-height: 1.4;

        color: #172033;
    }

    .skill-project-text p {
        margin: 0;

        font-size: 13px;
        line-height: 1.7;

        color: #758096;
    }


    /* ========================================
   CONNECTOR
======================================== */

    .skill-project-connector {
        display: flex;

        align-items: center;
        justify-content: center;
    }

    .skill-project-connector span {
        position: relative;

        display: block;

        width: 100%;
        height: 1px;

        background: #dce2ec;
    }

    .skill-project-connector span::after {
        content: "";

        position: absolute;

        right: 0;
        top: 50%;

        width: 7px;
        height: 7px;

        border-top: 1px solid #aeb7c9;
        border-right: 1px solid #aeb7c9;

        transform:
            translateY(-50%) rotate(45deg);
    }


    /* ========================================
   FOOTER
======================================== */

    .skill-project-footer {
        display: flex;

        align-items: center;
        justify-content: center;

        gap: 20px;

        margin-top: 55px;
    }

    .skill-project-footer-line {
        width: 180px;
        height: 1px;

        background: #e3e7ef;
    }

    .skill-project-footer-content {
        display: flex;

        align-items: center;

        gap: 9px;

        max-width: 430px;

        text-align: center;

        font-size: 12px;
        font-weight: 600;

        color: #7a8498;
    }

    .skill-project-footer-content svg {
        flex-shrink: 0;

        width: 16px;
        height: 16px;

        color: #3155ff;
    }


    /* ========================================
   TABLET
======================================== */

    @media (max-width: 1100px) {

        .skill-project-process {
            grid-template-columns: repeat(2, 1fr);

            gap: 18px;
        }

        .skill-project-connector {
            display: none;
        }

        .skill-project-step {
            min-height: 250px;
        }
    }


    /* ========================================
   MOBILE
======================================== */

    @media (max-width: 650px) {

        .skill-project-section {
            padding: 80px 0;
        }

        .skill-project-heading {
            margin-bottom: 45px;
        }

        .skill-project-heading h2 {
            font-size: 30px;
        }

        .skill-project-heading p {
            font-size: 14px;
        }

        .skill-project-process {
            grid-template-columns: 1fr;

            gap: 14px;
        }

        .skill-project-step {
            min-height: auto;

            padding: 25px 22px;
        }

        .skill-project-footer {
            margin-top: 40px;
        }

        .skill-project-footer-line {
            display: none;
        }

    }
    </style>


    <script>
    lucide.createIcons();
    </script>

    {{-- =====================================================
     JOURNEY SECTION
====================================================== --}}

    <section class="journey" id="mulai">

        {{-- BACKGROUND DECORATION --}}
        <div class="journey-bg-glow"></div>
        <div class="journey-grid-bg"></div>

        <div class="container">

            {{-- =================================================
             SECTION HEADING
        ================================================== --}}

            <div class="section-heading journey-heading">

                <div class="section-label journey-label">

                    <span class="label-dot"></span>

                    Perjalanan Kariermu

                </div>


                <h2>

                    Dari Belajar

                    <span>Menuju Karier.</span>

                </h2>


                <p>

                    Bangun kemampuanmu secara bertahap melalui
                    perjalanan belajar yang terarah, terstruktur,
                    dan dirancang untuk mempersiapkanmu menuju
                    dunia kerja.

                </p>

            </div>



            {{-- =================================================
             JOURNEY AREA
        ================================================== --}}

            <div class="journey-wrapper">


                {{-- CONNECTING LINE --}}

                <div class="journey-line">

                    <div class="journey-line-track"></div>

                    <div class="journey-line-progress"></div>

                </div>



                {{-- =================================================
                 JOURNEY CARDS
            ================================================== --}}

                <div class="journey-grid">


                    {{-- =================================================
                     STEP 01
                ================================================== --}}

                    <a href="#fitur" class="journey-card">

                        {{-- TOP --}}

                        <div class="journey-top">

                            <span class="journey-number">
                                01
                            </span>

                            <span class="journey-step">
                                STEP 01
                            </span>

                        </div>



                        {{-- ICON --}}

                        <div class="journey-icon-area">

                            <div class="journey-icon blue-icon">

                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                    stroke-linecap="round" stroke-linejoin="round">

                                    <rect x="5" y="3" width="14" height="18" rx="2" />

                                    <path d="M8 7h8" />

                                    <path d="M8 11h5" />

                                    <path d="M8 15h6" />

                                    <path d="M8 18h3" />

                                </svg>

                            </div>

                            <div class="journey-icon-shadow blue-shadow"></div>

                        </div>



                        {{-- CONTENT --}}

                        <div class="journey-content">

                            <span class="journey-mini-label">
                                EXPLORE
                            </span>

                            <h3>
                                Kenali Dirimu
                            </h3>

                            <p>

                                Temukan minat, kemampuan, dan bidang
                                yang paling sesuai dengan potensi
                                serta tujuan kariermu.

                            </p>

                        </div>



                        {{-- ACTION --}}

                        <div class="journey-action">

                            <span>
                                Jelajahi Fitur
                            </span>

                            <span class="journey-arrow">
                                →
                            </span>

                        </div>

                    </a>



                    {{-- =================================================
                     STEP 02
                ================================================== --}}

                    <a href="#roadmap" class="journey-card journey-featured">

                        {{-- FEATURED BADGE --}}




                        {{-- TOP --}}

                        <div class="journey-top">

                            <span class="journey-number">
                                02
                            </span>

                            <span class="journey-step">
                                STEP 02
                            </span>

                        </div>



                        {{-- ICON --}}

                        <div class="journey-icon-area">

                            <div class="journey-icon purple-icon">

                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                    stroke-linecap="round" stroke-linejoin="round">

                                    <circle cx="12" cy="12" r="8" />

                                    <path d="M8.5 12l2.4 2.4L16 9.2" />

                                </svg>

                            </div>

                            <div class="journey-icon-shadow purple-shadow"></div>

                        </div>



                        {{-- CONTENT --}}

                        <div class="journey-content">

                            <span class="journey-mini-label purple-label">
                                DIRECTION
                            </span>

                            <h3>
                                Dapatkan Arah
                            </h3>

                            <p>

                                Gunakan rekomendasi dan roadmap
                                untuk menentukan skill yang perlu
                                kamu pelajari berikutnya.

                            </p>

                        </div>



                        {{-- ACTION --}}

                        <div class="journey-action">

                            <span>
                                Lihat Roadmap
                            </span>

                            <span class="journey-arrow">
                                →
                            </span>

                        </div>

                    </a>



                    {{-- =================================================
                     STEP 03
                ================================================== --}}

                    <a href="{{ route('career') }}" class="journey-card">

                        {{-- TOP --}}

                        <div class="journey-top">

                            <span class="journey-number">
                                03
                            </span>

                            <span class="journey-step">
                                STEP 03
                            </span>

                        </div>



                        {{-- ICON --}}

                        <div class="journey-icon-area">

                            <div class="journey-icon green-icon">

                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                    stroke-linecap="round" stroke-linejoin="round">

                                    <path d="M5 19L19 5" />

                                    <path d="M9 5h10v10" />

                                    <path d="M5 9V5h4" />

                                    <circle cx="6" cy="18" r="1.5" />

                                </svg>

                            </div>

                            <div class="journey-icon-shadow green-shadow"></div>

                        </div>



                        {{-- CONTENT --}}

                        <div class="journey-content">

                            <span class="journey-mini-label green-label">
                                CAREER
                            </span>

                            <h3>
                                Bangun Masa Depan
                            </h3>

                            <p>

                                Kembangkan skill, bangun project,
                                dan temukan peluang untuk melangkah
                                menuju dunia kerja.

                            </p>

                        </div>



                        {{-- ACTION --}}

                        <div class="journey-action">

                            <span>
                                Jelajahi Career Hub
                            </span>

                            <span class="journey-arrow">
                                →
                            </span>

                        </div>

                    </a>

                </div>



            </div>

        </div>

        </div>

        </div>

        </div>

    </section>



    <style>
    /* =====================================================
   JOURNEY SECTION
===================================================== */

    .journey {

        position: relative;

        overflow: hidden;

        padding: 115px 30px 125px;

        background:
            linear-gradient(180deg,
                #ffffff 0%,
                #f8faff 48%,
                #ffffff 100%);

    }


    /* =====================================================
   BACKGROUND
===================================================== */

    .journey-bg-glow {

        position: absolute;

        width: 620px;
        height: 620px;

        top: 50%;
        left: 50%;

        transform:
            translate(-50%, -50%);

        border-radius: 50%;

        background:
            radial-gradient(circle,
                rgba(49, 85, 255, .07),
                rgba(112, 72, 255, .035),
                transparent 70%);

        pointer-events: none;

    }


    .journey-grid-bg {

        position: absolute;

        inset: 0;

        opacity: .45;

        background-image:

            linear-gradient(rgba(49, 85, 255, .035) 1px,
                transparent 1px),

            linear-gradient(90deg,
                rgba(49, 85, 255, .035) 1px,
                transparent 1px);

        background-size:
            55px 55px;

        mask-image:
            linear-gradient(to bottom,
                transparent,
                black 20%,
                black 80%,
                transparent);

        pointer-events: none;

    }


    /* =====================================================
   CONTAINER
===================================================== */

    .journey .container {

        position: relative;

        z-index: 2;

        max-width: 1200px;

        margin: 0 auto;

    }


    /* =====================================================
   HEADING
===================================================== */

    .journey-heading {

        max-width: 760px;

        margin:
            0 auto 75px;

        text-align: center;

    }


    .journey-label {

        margin-bottom: 16px;

    }


    .journey-heading h2 {

        margin: 0;

        color: #172033;

        font-size:
            clamp(38px,
                4.5vw,
                56px);

        line-height: 1.08;

        letter-spacing: -2.5px;

        font-weight: 850;

    }


    .journey-heading h2 span {

        display: inline-block;

        color: #3155ff;

        background:
            linear-gradient(135deg,
                #3155ff,
                #7048ff);

        -webkit-background-clip: text;

        -webkit-text-fill-color: transparent;

    }


    .journey-heading p {

        max-width: 650px;

        margin:
            20px auto 0;

        color: #7b8496;

        font-size: 14px;

        line-height: 1.8;

    }


    /* =====================================================
   WRAPPER
===================================================== */

    .journey-wrapper {

        position: relative;

    }


    /* =====================================================
   CONNECTING LINE
===================================================== */

    .journey-line {

        position: absolute;

        top: 48px;

        left: 16.5%;

        right: 16.5%;

        height: 2px;

        z-index: 0;

    }


    .journey-line-track {

        position: absolute;

        inset: 0;

        border-radius: 10px;

        background:
            #e6eaf4;

    }


    .journey-line-progress {

        position: absolute;

        top: 0;

        left: 0;

        width: 58%;

        height: 100%;

        border-radius: 10px;

        background:
            linear-gradient(90deg,
                #3155ff,
                #7048ff,
                #12a879);

        box-shadow:
            0 0 12px rgba(49, 85, 255, .18);

    }


    /* =====================================================
   GRID
===================================================== */

    .journey-grid {

        position: relative;

        z-index: 2;

        display: grid;

        grid-template-columns:
            repeat(3, 1fr);

        gap: 24px;

        align-items: stretch;

    }


    /* =====================================================
   CARD
===================================================== */

    .journey-card {

        position: relative;

        min-height: 455px;

        display: flex;

        flex-direction: column;

        padding: 27px;

        border:
            1px solid #e4e8f2;

        border-radius: 24px;

        background:
            rgba(255, 255, 255, .94);

        box-shadow:
            0 18px 50px rgba(31, 43, 78, .07);

        text-decoration: none;

        overflow: hidden;

        transition:
            transform .35s ease,
            box-shadow .35s ease,
            border-color .35s ease;

    }


    .journey-card::before {

        content: "";

        position: absolute;

        top: 0;
        left: 0;

        width: 100%;
        height: 3px;

        background:
            linear-gradient(90deg,
                transparent,
                #3155ff,
                transparent);

        opacity: 0;

        transition: .35s;

    }


    .journey-card:hover {

        transform:
            translateY(-10px);

        border-color:
            #d5dcf7;

        box-shadow:
            0 28px 65px rgba(31, 43, 78, .12);

    }


    .journey-card:hover::before {

        opacity: 1;

    }


    /* =====================================================
   FEATURED CARD
===================================================== */

    .journey-featured {

        transform:
            translateY(-18px);

        border-color:
            #d7ddff;

        background:
            linear-gradient(145deg,
                #ffffff,
                #f8f9ff);

        box-shadow:
            0 28px 70px rgba(49, 85, 255, .12);

    }


    .journey-featured:hover {

        transform:
            translateY(-27px);

    }


    .journey-featured::before {

        opacity: 1;

        background:
            linear-gradient(90deg,
                transparent,
                #3155ff,
                #7048ff,
                transparent);

    }


    /* =====================================================
   FEATURED BADGE
===================================================== */

    .journey-featured-badge {

        position: absolute;

        top: 20px;
        right: 20px;

        padding:
            6px 9px;

        border-radius: 30px;

        background:
            #eef1ff;

        color:
            #3155ff;

        font-size: 7px;

        font-weight: 850;

        letter-spacing:
            .7px;

    }


    /* =====================================================
   CARD TOP
===================================================== */

    .journey-top {

        display: flex;

        align-items: center;

        justify-content: space-between;

    }


    .journey-number {

        color:
            #dce2f0;

        font-size:
            34px;

        line-height: 1;

        font-weight:
            900;

        letter-spacing:
            -1px;

    }


    .journey-step {

        padding:
            6px 9px;

        border-radius:
            7px;

        background:
            #f5f7fb;

        color:
            #8d96a8;

        font-size:
            8px;

        font-weight:
            850;

        letter-spacing:
            1px;

    }


    /* =====================================================
   ICON
===================================================== */

    .journey-icon-area {

        position: relative;

        width: 70px;
        height: 70px;

        margin-top: 35px;

    }


    .journey-icon {

        position: relative;

        z-index: 2;

        width: 62px;
        height: 62px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 18px;

        font-size: 0;

    }


    .journey-icon svg {

        width: 28px;
        height: 28px;

    }


    .blue-icon {

        background:
            linear-gradient(145deg,
                #edf2ff,
                #e1e7ff);

        color:
            #3155ff;

    }


    .purple-icon {

        background:
            linear-gradient(145deg,
                #f2edff,
                #e8e0ff);

        color:
            #7048ff;

    }


    .green-icon {

        background:
            linear-gradient(145deg,
                #e9fbf4,
                #dcf7ec);

        color:
            #12a879;

    }


    /* =====================================================
   ICON GLOW
===================================================== */

    .journey-icon-shadow {

        position: absolute;

        width: 50px;
        height: 50px;

        left: 7px;
        top: 9px;

        border-radius: 50%;

        filter: blur(18px);

        opacity: .5;

    }


    .blue-shadow {

        background:
            rgba(49, 85, 255, .22);

    }


    .purple-shadow {

        background:
            rgba(112, 72, 255, .22);

    }


    .green-shadow {

        background:
            rgba(18, 168, 121, .22);

    }


    /* =====================================================
   CONTENT
===================================================== */

    .journey-content {

        margin-top: 25px;

    }


    .journey-mini-label {

        color:
            #3155ff;

        font-size:
            8px;

        font-weight:
            850;

        letter-spacing:
            1.4px;

    }


    .purple-label {

        color:
            #7048ff;

    }


    .green-label {

        color:
            #12a879;

    }


    .journey-content h3 {

        margin:
            8px 0 11px;

        color:
            #172033;

        font-size:
            22px;

        line-height:
            1.2;

        letter-spacing:
            -.6px;

        font-weight:
            800;

    }


    .journey-content p {

        margin: 0;

        color:
            #7c8597;

        font-size:
            12px;

        line-height:
            1.75;

    }


    /* =====================================================
   ACTION
===================================================== */

    .journey-action {

        display:
            flex;

        align-items:
            center;

        justify-content:
            space-between;

        margin-top:
            auto;

        padding-top:
            25px;

        border-top:
            1px solid #edf0f5;

        color:
            #657087;

        font-size:
            10px;

        font-weight:
            800;

    }


    .journey-arrow {

        width:
            30px;

        height:
            30px;

        display:
            flex;

        align-items:
            center;

        justify-content:
            center;

        border-radius:
            9px;

        background:
            #f1f4ff;

        color:
            #3155ff;

        font-size:
            15px;

        transition:
            .3s ease;

    }


    .journey-card:hover .journey-arrow {

        transform:
            translateX(4px);

        background:
            #3155ff;

        color:
            #ffffff;

    }


    /* =====================================================
   BOTTOM INFO
===================================================== */

    .journey-bottom {

        margin-top:
            65px;

    }


    .journey-bottom-line {

        width:
            100%;

        height:
            1px;

        background:
            linear-gradient(90deg,
                transparent,
                #e1e5ee,
                transparent);

    }


    .journey-bottom-content {

        display:
            grid;

        grid-template-columns:
            repeat(3, 1fr);

        gap:
            30px;

        padding-top:
            30px;

    }


    .journey-bottom-item {

        display:
            flex;

        align-items:
            center;

        justify-content:
            center;

        gap:
            12px;

    }


    .journey-bottom-icon {

        width:
            38px;

        height:
            38px;

        display:
            flex;

        align-items:
            center;

        justify-content:
            center;

        border-radius:
            11px;

        background:
            #eef2ff;

        color:
            #3155ff;

    }


    .journey-bottom-icon svg {

        width:
            18px;

        height:
            18px;

    }


    .purple-bottom {

        background:
            #f1edff;

        color:
            #7048ff;

    }


    .green-bottom {

        background:
            #e9faf4;

        color:
            #12a879;

    }


    .journey-bottom-item strong {

        display:
            block;

        color:
            #30394d;

        font-size:
            11px;

        font-weight:
            800;

    }


    .journey-bottom-item small {

        display:
            block;

        margin-top:
            3px;

        color:
            #969eae;

        font-size:
            9px;

    }


    /* =====================================================
   TABLET
===================================================== */

    @media (max-width: 1000px) {

        .journey {

            padding:
                90px 20px 100px;

        }


        .journey-heading {

            margin-bottom:
                60px;

        }


        .journey-grid {

            gap:
                18px;

        }


        .journey-card {

            min-height:
                430px;

            padding:
                22px;

        }


        .journey-featured {

            transform:
                translateY(-10px);

        }


        .journey-featured:hover {

            transform:
                translateY(-18px);

        }


        .journey-line {

            left:
                16%;

            right:
                16%;

        }


        .journey-bottom-content {

            gap:
                15px;

        }

    }


    /* =====================================================
   MOBILE
===================================================== */

    @media (max-width: 760px) {

        .journey {

            padding:
                80px 18px 85px;

        }


        .journey-heading {

            margin-bottom:
                45px;

        }


        .journey-heading h2 {

            font-size:
                38px;

            letter-spacing:
                -1.8px;

        }


        .journey-heading p {

            font-size:
                13px;

        }


        .journey-line {

            display:
                none;

        }


        .journey-grid {

            grid-template-columns:
                1fr;

            gap:
                18px;

        }


        .journey-card {

            min-height:
                auto;

            padding:
                24px;

        }


        .journey-featured {

            transform:
                none;

        }


        .journey-featured:hover {

            transform:
                translateY(-8px);

        }


        .journey-card:hover {

            transform:
                translateY(-8px);

        }


        .journey-icon-area {

            margin-top:
                28px;

        }


        .journey-bottom {

            margin-top:
                45px;

        }


        .journey-bottom-content {

            grid-template-columns:
                1fr;

            gap:
                15px;

        }


        .journey-bottom-item {

            justify-content:
                flex-start;

            padding:
                10px 5px;

        }

    }


    /* =====================================================
   SMALL MOBILE
===================================================== */

    @media (max-width: 480px) {

        .journey {

            padding:
                70px 15px 75px;

        }


        .journey-heading h2 {

            font-size:
                34px;

        }


        .journey-heading p {

            font-size:
                12px;

            line-height:
                1.7;

        }


        .journey-card {

            border-radius:
                20px;

            padding:
                21px;

        }


        .journey-content h3 {

            font-size:
                20px;

        }


        .journey-content p {

            font-size:
                11px;

        }


        .journey-featured-badge {

            top:
                17px;

            right:
                17px;

        }

    }


    /* =====================================================
   REDUCED MOTION
===================================================== */

    @media (prefers-reduced-motion: reduce) {

        .journey-card,
        .journey-arrow {

            transition:
                none !important;

        }

    }
    </style>






    <style>
    /* =====================================================
   JOURNEY
===================================================== */

    .journey {

        position: relative;

        overflow: hidden;

        padding:
            110px 0 100px;

        background:
            linear-gradient(180deg,
                #ffffff 0%,
                #f8faff 50%,
                #ffffff 100%);

    }


    /* =====================================================
   BACKGROUND
===================================================== */

    .journey-bg-glow {

        position: absolute;

        width: 650px;

        height: 650px;

        left: 50%;

        top: 40%;

        transform:
            translate(-50%, -50%);

        border-radius: 50%;

        background:
            radial-gradient(circle,
                rgba(49, 85, 255, .07),
                rgba(112, 72, 255, .035),
                transparent 70%);

        pointer-events: none;

    }


    .journey-grid-bg {

        position: absolute;

        inset: 0;

        opacity: .35;

        background-image:
            linear-gradient(rgba(49, 85, 255, .035) 1px,
                transparent 1px),
            linear-gradient(90deg,
                rgba(49, 85, 255, .035) 1px,
                transparent 1px);

        background-size:
            55px 55px;

        mask-image:
            linear-gradient(to bottom,
                transparent,
                black 20%,
                black 80%,
                transparent);

        pointer-events: none;

    }


    /* =====================================================
   CONTAINER
===================================================== */

    .journey .container {

        position: relative;

        z-index: 2;

        width: min(1180px,
                calc(100% - 40px));

        margin:
            0 auto;

    }


    /* =====================================================
   HEADING
===================================================== */

    .journey-heading {

        max-width: 720px;

        margin:
            0 auto 65px;

        text-align: center;

    }


    .journey-heading .section-label {

        display: inline-flex;

        align-items: center;

        gap: 8px;

        padding:
            8px 14px;

        border:
            1px solid #dfe5ff;

        border-radius:
            50px;

        background:
            rgba(245, 247, 255, .9);

        color:
            #3155ff;

        font-size:
            11px;

        font-weight:
            800;

        letter-spacing:
            .2px;

    }


    .label-dot {

        width:
            7px;

        height:
            7px;

        border-radius:
            50%;

        background:
            #3155ff;

        box-shadow:
            0 0 0 5px rgba(49, 85, 255, .09);

    }


    .journey-heading h2 {

        margin:
            18px 0 14px;

        color:
            #172033;

        font-size:
            clamp(34px,
                4vw,
                48px);

        line-height:
            1.1;

        letter-spacing:
            -1.8px;

        font-weight:
            850;

    }


    .journey-heading h2 span {

        background:
            linear-gradient(135deg,
                #3155ff,
                #7048ff);

        -webkit-background-clip:
            text;

        -webkit-text-fill-color:
            transparent;

    }


    .journey-heading p {

        max-width:
            600px;

        margin:
            0 auto;

        color:
            #7b8497;

        font-size:
            14px;

        line-height:
            1.8;

    }


    /* =====================================================
   JOURNEY WRAPPER
===================================================== */

    .journey-wrapper {

        position: relative;

    }


    /* =====================================================
   CONNECTOR
===================================================== */

    .journey-line {

        position: absolute;

        top:
            52px;

        left:
            16.66%;

        width:
            66.68%;

        height:
            2px;

        background:
            #e3e8f7;

        z-index:
            0;

    }


    .journey-line-progress {

        width:
            100%;

        height:
            100%;

        background:
            linear-gradient(90deg,
                #3155ff,
                #7048ff,
                #15b981);

        transform-origin:
            left;

        animation:
            journeyLineLoad 1.5s ease forwards;

    }


    @keyframes journeyLineLoad {

        from {
            transform:
                scaleX(0);
        }

        to {
            transform:
                scaleX(1);
        }

    }


    /* =====================================================
   GRID
===================================================== */

    .journey-grid {

        position: relative;

        z-index: 2;

        display:
            grid;

        grid-template-columns:
            repeat(3, 1fr);

        gap:
            24px;

    }


    /* =====================================================
   CARD
===================================================== */

    .journey-card {

        position: relative;

        display:
            flex;

        flex-direction:
            column;

        min-height:
            390px;

        padding:
            28px;

        border:
            1px solid #e5e9f3;

        border-radius:
            24px;

        background:
            rgba(255,
                255,
                255,
                .92);

        box-shadow:
            0 18px 50px rgba(25,
                38,
                75,
                .06);

        text-decoration:
            none;

        transition:
            .35s ease;

        backdrop-filter:
            blur(12px);

        -webkit-backdrop-filter:
            blur(12px);

    }


    .journey-card::before {

        content:
            "";

        position:
            absolute;

        inset:
            0;

        border-radius:
            inherit;

        padding:
            1px;

        background:
            linear-gradient(135deg,
                transparent,
                rgba(49, 85, 255, .35),
                transparent);

        -webkit-mask:
            linear-gradient(#fff 0 0) content-box,
            linear-gradient(#fff 0 0);

        -webkit-mask-composite:
            xor;

        mask-composite:
            exclude;

        opacity:
            0;

        transition:
            .35s ease;

    }


    .journey-card:hover {

        transform:
            translateY(-10px);

        border-color:
            #d4dcff;

        box-shadow:
            0 28px 65px rgba(49,
                85,
                255,
                .13);

    }


    .journey-card:hover::before {

        opacity:
            1;

    }


    /* =====================================================
   FEATURED CARD
===================================================== */

    .journey-card.featured {

        border-color:
            #d7ddff;

        background:
            linear-gradient(145deg,
                #ffffff,
                #f8f8ff);

        box-shadow:
            0 25px 65px rgba(78,
                70,
                255,
                .10);

    }


    /* =====================================================
   CARD TOP
===================================================== */

    .journey-top {

        display:
            flex;

        align-items:
            center;

        justify-content:
            space-between;

    }


    .journey-number {

        color:
            #d8def0;

        font-size:
            25px;

        line-height:
            1;

        font-weight:
            900;

        letter-spacing:
            -1px;

    }


    .journey-step {

        color:
            #9aa3b5;

        font-size:
            9px;

        font-weight:
            850;

        letter-spacing:
            1.4px;

    }


    /* =====================================================
   ICON
===================================================== */

    .journey-icon-wrapper {

        position:
            relative;

        width:
            64px;

        height:
            64px;

        margin:
            25px 0 20px;

    }


    .journey-icon {

        position:
            relative;

        z-index:
            2;

        width:
            64px;

        height:
            64px;

        display:
            flex;

        align-items:
            center;

        justify-content:
            center;

        border-radius:
            18px;

        background:
            linear-gradient(145deg,
                #edf2ff,
                #f6f8ff);

        color:
            #3155ff;

        box-shadow:
            inset 0 0 0 1px rgba(49, 85, 255, .08);

        transition:
            .35s ease;

    }


    .journey-icon svg {

        width:
            28px;

        height:
            28px;

    }


    .journey-icon.purple {

        background:
            linear-gradient(145deg,
                #f1edff,
                #faf8ff);

        color:
            #7048ff;

    }


    .journey-icon.green {

        background:
            linear-gradient(145deg,
                #e9faf4,
                #f7fffc);

        color:
            #12a879;

    }


    .journey-icon-glow {

        position:
            absolute;

        inset:
            -8px;

        border-radius:
            24px;

        background:
            rgba(49,
                85,
                255,
                .10);

        filter:
            blur(14px);

        opacity:
            .6;

        transition:
            .35s ease;

    }


    .purple-glow {

        background:
            rgba(112,
                72,
                255,
                .10);

    }


    .green-glow {

        background:
            rgba(18,
                168,
                121,
                .10);

    }


    .journey-card:hover .journey-icon {

        transform:
            translateY(-3px) scale(1.05);

    }


    .journey-card:hover .journey-icon-glow {

        opacity:
            1;

        transform:
            scale(1.15);

    }


    /* =====================================================
   CONTENT
===================================================== */

    .journey-content {

        flex:
            1;

    }


    .journey-mini-label {

        display:
            block;

        margin-bottom:
            8px;

        color:
            #3155ff;

        font-size:
            9px;

        font-weight:
            850;

        letter-spacing:
            1px;

    }


    .journey-card:nth-child(2) .journey-mini-label {

        color:
            #7048ff;

    }


    .journey-card:nth-child(3) .journey-mini-label {

        color:
            #12a879;

    }


    .journey-content h3 {

        margin:
            0 0 10px;

        color:
            #182135;

        font-size:
            20px;

        font-weight:
            850;

        letter-spacing:
            -.5px;

    }


    .journey-content p {

        margin:
            0;

        color:
            #7c8597;

        font-size:
            12px;

        line-height:
            1.8;

    }


    /* =====================================================
   ACTION
===================================================== */

    .journey-action {

        display:
            flex;

        align-items:
            center;

        justify-content:
            space-between;

        margin-top:
            25px;

        padding-top:
            18px;

        border-top:
            1px solid #edf0f6;

        color:
            #3155ff;

        font-size:
            11px;

        font-weight:
            800;

    }


    .journey-arrow {

        width:
            28px;

        height:
            28px;

        display:
            flex;

        align-items:
            center;

        justify-content:
            center;

        border-radius:
            50%;

        background:
            #eef2ff;

        font-size:
            16px;

        transition:
            .3s ease;

    }


    .journey-card:hover .journey-arrow {

        transform:
            translateX(5px);

        background:
            #3155ff;

        color:
            white;

    }


    /* =====================================================
   BOTTOM CTA
===================================================== */

    .journey-bottom {

        display:
            flex;

        align-items:
            center;

        gap:
            18px;

        margin-top:
            35px;

        padding:
            18px 22px;

        border:
            1px solid #dfe5ff;

        border-radius:
            18px;

        background:
            linear-gradient(135deg,
                #f5f7ff,
                #fbfaff);

    }


    .journey-bottom-icon {

        width:
            42px;

        height:
            42px;

        flex-shrink:
            0;

        display:
            flex;

        align-items:
            center;

        justify-content:
            center;

        border-radius:
            12px;

        background:
            linear-gradient(135deg,
                #3155ff,
                #7048ff);

        color:
            white;

        box-shadow:
            0 10px 25px rgba(49,
                85,
                255,
                .22);

    }


    .journey-bottom-icon svg {

        width:
            21px;

        height:
            21px;

    }


    .journey-bottom-text {

        flex:
            1;

    }


    .journey-bottom-text strong {

        display:
            block;

        color:
            #182135;

        font-size:
            13px;

        font-weight:
            850;

    }


    .journey-bottom-text span {

        display:
            block;

        margin-top:
            3px;

        color:
            #8992a5;

        font-size:
            10px;

    }


    .journey-bottom-button {

        display:
            inline-flex;

        align-items:
            center;

        gap:
            9px;

        padding:
            11px 16px;

        border-radius:
            10px;

        background:
            white;

        color:
            #3155ff;

        border:
            1px solid #dce3ff;

        text-decoration:
            none;

        font-size:
            10px;

        font-weight:
            850;

        transition:
            .25s ease;

    }


    .journey-bottom-button:hover {

        background:
            #3155ff;

        color:
            white;

        border-color:
            #3155ff;

        transform:
            translateY(-2px);

    }


    /* =====================================================
   TABLET
===================================================== */

    @media (max-width: 900px) {

        .journey {

            padding:
                85px 0;

        }


        .journey-grid {

            grid-template-columns:
                1fr;

            gap:
                20px;

        }


        .journey-line {

            display:
                none;

        }


        .journey-card {

            min-height:
                auto;

        }

    }


    /* =====================================================
   MOBILE
===================================================== */

    @media (max-width: 600px) {

        .journey {

            padding:
                70px 0;

        }


        .journey .container {

            width:
                calc(100% - 30px);

        }


        .journey-heading {

            margin-bottom:
                40px;

        }


        .journey-heading h2 {

            font-size:
                32px;

        }


        .journey-heading p {

            font-size:
                12px;

        }


        .journey-card {

            padding:
                22px;

            border-radius:
                20px;

        }


        .journey-icon-wrapper,
        .journey-icon {

            width:
                58px;

            height:
                58px;

        }


        .journey-icon svg {

            width:
                25px;

            height:
                25px;

        }


        .journey-bottom {

            flex-wrap:
                wrap;

        }


        .journey-bottom-text {

            min-width:
                calc(100% - 65px);

        }


        .journey-bottom-button {

            width:
                100%;

            justify-content:
                center;

        }

    }


    /* =====================================================
   REDUCED MOTION
===================================================== */

    @media (prefers-reduced-motion: reduce) {

        .journey-line-progress {

            animation:
                none;

        }


        .journey-card,
        .journey-icon,
        .journey-arrow {

            transition:
                none;

        }

    }
    </style>


    <style>
    /* =====================================================
   GLOBAL SECTION
===================================================== */

    .features,
    .roadmap-section,
    .journey,
    .extra-section {

        position: relative;

        padding: 90px 20px;

        background: #ffffff;

        overflow: hidden;

    }


    .container {

        width: min(1200px, 100%);

        margin: auto;

    }


    /* =====================================================
   SECTION HEADING
===================================================== */

    .section-heading {

        max-width: 700px;

        margin: 0 auto 55px;

        text-align: center;

    }


    .section-label {

        display: inline-flex;

        align-items: center;

        gap: 8px;

        padding: 7px 13px;

        border: 1px solid #e0e6ff;

        border-radius: 30px;

        background: #f7f8ff;

        color: #3155ff;

        font-size: 11px;

        font-weight: 800;

        margin-bottom: 16px;

    }


    .label-dot {

        width: 7px;

        height: 7px;

        border-radius: 50%;

        background: #3155ff;

        box-shadow: 0 0 0 5px rgba(49, 85, 255, .10);

    }


    .purple-dot {

        background: #7048ff;

        box-shadow: 0 0 0 5px rgba(112, 72, 255, .10);

    }


    .section-heading h2 {

        margin: 0;

        color: #172033;

        font-size: clamp(30px, 4vw, 46px);

        line-height: 1.12;

        letter-spacing: -1.8px;

        font-weight: 850;

    }


    .section-heading h2 span {

        color: #3155ff;

    }


    .section-heading p {

        max-width: 620px;

        margin: 18px auto 0;

        color: #7b8497;

        font-size: 14px;

        line-height: 1.8;

    }


    /* =====================================================
   FEATURES
===================================================== */

    .feature-grid {

        display: grid;

        grid-template-columns:
            repeat(3, 1fr);

        gap: 18px;

    }


    .feature-card {

        position: relative;

        display: block;

        padding: 24px;

        min-height: 225px;

        border: 1px solid #e7ebf4;

        border-radius: 20px;

        background:
            linear-gradient(145deg,
                #ffffff,
                #fafbff);

        text-decoration: none;

        overflow: hidden;

        transition:
            transform .3s ease,
            border-color .3s ease,
            box-shadow .3s ease;

    }


    .feature-card::before {

        content: "";

        position: absolute;

        width: 150px;

        height: 150px;

        right: -70px;

        top: -70px;

        border-radius: 50%;

        background:
            rgba(49, 85, 255, .05);

        transition: .3s;

    }


    .feature-card:hover {

        transform:
            translateY(-7px);

        border-color:
            #cfd7ff;

        box-shadow:
            0 22px 50px rgba(37, 50, 100, .10);

    }


    .feature-card:hover::before {

        transform: scale(1.4);

    }


    .feature-card-top {

        display: flex;

        align-items: center;

        justify-content: space-between;

    }


    .feature-icon {

        width: 47px;

        height: 47px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 14px;

    }


    .feature-icon svg {

        width: 23px;

        height: 23px;

        fill: none;

        stroke: currentColor;

        stroke-width: 1.8;

        stroke-linecap: round;

        stroke-linejoin: round;

    }


    .feature-icon.blue {

        color: #3155ff;

        background: #edf1ff;

    }


    .feature-icon.purple {

        color: #7048ff;

        background: #f1edff;

    }


    .feature-icon.violet {

        color: #684cff;

        background: #f0edff;

    }


    .feature-icon.indigo {

        color: #4765ff;

        background: #edf0ff;

    }


    .feature-icon.green {

        color: #12a879;

        background: #eaf9f3;

    }


    .feature-icon.orange {

        color: #ed9b21;

        background: #fff5e5;

    }


    .feature-arrow {

        width: 30px;

        height: 30px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 50%;

        background: #f5f7fc;

        color: #8790a4;

        font-size: 14px;

        transition: .25s;

    }


    .feature-card:hover .feature-arrow {

        color: #3155ff;

        background: #edf1ff;

        transform:
            translate(2px, -2px);

    }


    .feature-card h3 {

        margin: 21px 0 9px;

        color: #1c2538;

        font-size: 16px;

        font-weight: 800;

    }


    .feature-card p {

        margin: 0;

        color: #7c8598;

        font-size: 12px;

        line-height: 1.7;

    }


    .feature-link {

        position: absolute;

        bottom: 21px;

        left: 24px;

        display: flex;

        align-items: center;

        gap: 7px;

        color: #3155ff;

        font-size: 10px;

        font-weight: 800;

    }


    .feature-link span {

        transition: .25s;

    }


    .feature-card:hover .feature-link span {

        transform:
            translateX(4px);

    }


    .feature-more-wrap {

        text-align: center;

        margin-top: 32px;

    }


    .feature-more {

        display: inline-flex;

        align-items: center;

        gap: 8px;

        color: #3155ff;

        font-size: 12px;

        font-weight: 800;

        text-decoration: none;

    }


    .feature-more span {

        transition: .2s;

    }


    .feature-more:hover span {

        transform:
            translateX(5px);

    }


    /* =====================================================
   ROADMAP
===================================================== */

    .roadmap-section {

        background:
            linear-gradient(180deg,
                #f9faff,
                #ffffff);

    }


    .roadmap-wrapper {

        display: grid;

        grid-template-columns:
            1.55fr .85fr;

        gap: 24px;

    }


    .roadmap-main {

        padding: 30px;

        border: 1px solid #e5e9f3;

        border-radius: 24px;

        background: white;

        box-shadow:
            0 20px 55px rgba(38, 48, 90, .06);

    }


    .roadmap-header {

        display: flex;

        align-items: flex-start;

        justify-content: space-between;

        gap: 20px;

    }


    .roadmap-tag {

        display: inline-block;

        padding: 5px 9px;

        border-radius: 6px;

        background: #eef1ff;

        color: #3155ff;

        font-size: 8px;

        font-weight: 900;

        letter-spacing: .6px;

    }


    .roadmap-header h3 {

        margin: 11px 0 6px;

        color: #172033;

        font-size: 22px;

    }


    .roadmap-header p {

        margin: 0;

        color: #818a9d;

        font-size: 12px;

    }


    .roadmap-progress {

        text-align: right;

    }


    .roadmap-progress strong {

        display: block;

        color: #3155ff;

        font-size: 25px;

    }


    .roadmap-progress span {

        color: #969eae;

        font-size: 9px;

    }


    .roadmap-progress-bar {

        height: 7px;

        margin: 25px 0 30px;

        border-radius: 20px;

        background: #edf0f6;

        overflow: hidden;

    }


    .roadmap-progress-bar span {

        display: block;

        width: 72%;

        height: 100%;

        border-radius: inherit;

        background:
            linear-gradient(90deg,
                #3155ff,
                #7048ff);

    }


    .roadmap-steps {

        display: flex;

        align-items: center;

        justify-content: space-between;

    }


    .road-step {

        display: flex;

        align-items: center;

        gap: 8px;

    }


    .road-number {

        width: 36px;

        height: 36px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 11px;

        background: #f1f3f8;

        color: #9ba3b2;

        font-size: 10px;

        font-weight: 900;

    }


    .road-step.active .road-number {

        color: white;

        background:
            linear-gradient(135deg,
                #3155ff,
                #7048ff);

        box-shadow:
            0 7px 18px rgba(49, 85, 255, .20);

    }


    .road-step strong {

        display: block;

        color: #343d50;

        font-size: 10px;

    }


    .road-step small {

        display: block;

        margin-top: 3px;

        color: #9aa2b1;

        font-size: 8px;

    }


    .road-line {

        width: 30px;

        height: 1px;

        background: #e2e6ee;

    }


    .roadmap-skills {

        display: flex;

        flex-wrap: wrap;

        gap: 7px;

        margin-top: 30px;

    }


    .roadmap-skills span {

        padding: 7px 10px;

        border-radius: 7px;

        background: #f5f7fb;

        color: #667084;

        font-size: 9px;

        font-weight: 700;

    }


    .roadmap-button,
    .extra-button,
    .community-button {

        display: inline-flex;

        align-items: center;

        gap: 9px;

        margin-top: 25px;

        padding: 11px 15px;

        border-radius: 9px;

        background: #3155ff;

        color: white;

        text-decoration: none;

        font-size: 10px;

        font-weight: 800;

        transition: .25s;

    }


    .roadmap-button:hover,
    .extra-button:hover,
    .community-button:hover {

        transform:
            translateY(-2px);

        box-shadow:
            0 10px 25px rgba(49, 85, 255, .20);

    }


    /* =====================================================
   COMMUNITY
===================================================== */

    .community-card {

        position: relative;

        padding: 30px;

        border-radius: 24px;

        background:
            linear-gradient(145deg,
                #101d4c,
                #182c70);

        overflow: hidden;

        color: white;

    }


    .community-glow {

        position: absolute;

        width: 180px;

        height: 180px;

        right: -70px;

        top: -70px;

        border-radius: 50%;

        background:
            rgba(91, 93, 255, .35);

        filter: blur(10px);

    }


    .community-label {

        color: #9eafff;

        font-size: 9px;

        font-weight: 900;

        letter-spacing: 1px;

    }


    .community-card h3 {

        position: relative;

        margin: 18px 0 12px;

        font-size: 25px;

        line-height: 1.2;

    }


    .community-card h3 span {

        color: #7087ff;

    }


    .community-card>p {

        position: relative;

        color: #bdc6df;

        font-size: 11px;

        line-height: 1.7;

    }


    .community-stats {

        position: relative;

        display: grid;

        grid-template-columns: repeat(2, 1fr);

        gap: 18px;

        margin-top: 30px;

    }


    .community-stats strong {

        display: block;

        color: white;

        font-size: 20px;

    }


    .community-stats span {

        display: block;

        margin-top: 4px;

        color: #9da9c8;

        font-size: 8px;

    }


    .community-button {

        background: white;

        color: #3155ff;

    }


    /* =====================================================
   EXTRA SECTIONS
===================================================== */

    .extra-section {

        padding-top: 30px;

        padding-bottom: 30px;

    }


    .extra-card,
    .quiz-card,
    .certificate-card {

        position: relative;

        display: flex;

        align-items: center;

        gap: 30px;

        padding: 40px;

        border: 1px solid #e5e9f3;

        border-radius: 25px;

        background:
            linear-gradient(135deg,
                #f8f9ff,
                #ffffff);

        overflow: hidden;

    }


    .extra-card.reverse {

        background:
            linear-gradient(135deg,
                #ffffff,
                #f8f9ff);

    }


    .extra-icon {

        flex-shrink: 0;

        width: 75px;

        height: 75px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 20px;

    }


    .extra-icon svg,
    .certificate-icon svg {

        width: 35px;

        height: 35px;

        fill: none;

        stroke: currentColor;

        stroke-width: 1.7;

        stroke-linecap: round;

        stroke-linejoin: round;

    }


    .extra-card span,
    .quiz-content>span,
    .certificate-card span {

        color: #3155ff;

        font-size: 9px;

        font-weight: 900;

        letter-spacing: 1px;

    }


    .extra-card h2,
    .quiz-content h2,
    .certificate-card h2 {

        margin: 10px 0;

        color: #172033;

        font-size: 30px;

        line-height: 1.15;

    }


    .extra-card p,
    .quiz-content p,
    .certificate-card p {

        max-width: 600px;

        margin: 0;

        color: #7c8598;

        font-size: 12px;

        line-height: 1.8;

    }


    /* =====================================================
   QUIZ
===================================================== */

    .quiz-card {

        background:
            linear-gradient(135deg,
                #111d4d,
                #24398d);

    }


    .quiz-content h2 {

        color: white;

    }


    .quiz-content p {

        color: #c5cce2;

    }


    .quiz-visual {

        margin-left: auto;

    }


    .quiz-score {

        width: 220px;

        padding: 25px;

        border:
            1px solid rgba(255, 255, 255, .15);

        border-radius: 18px;

        background:
            rgba(255, 255, 255, .08);

        backdrop-filter: blur(10px);

    }


    .quiz-score small {

        color: #aeb9dc;

        font-size: 9px;

    }


    .quiz-score strong {

        display: block;

        margin: 8px 0;

        color: white;

        font-size: 40px;

    }


    .quiz-score>div {

        height: 6px;

        border-radius: 10px;

        background:
            rgba(255, 255, 255, .15);

        overflow: hidden;

    }


    .quiz-score>div span {

        display: block;

        width: 86%;

        height: 100%;

        background:
            linear-gradient(90deg,
                #6d8aff,
                #9c7bff);

    }


    /* =====================================================
   CERTIFICATE
===================================================== */

    .certificate-icon {

        flex-shrink: 0;

        width: 80px;

        height: 80px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 22px;

        color: #d99520;

        background: #fff4df;

    }


    /* =====================================================
   JOURNEY
===================================================== */

    .journey {

        background:
            #f8f9fc;

    }


    .journey-grid {

        display: grid;

        grid-template-columns:
            repeat(3, 1fr);

        gap: 20px;

    }


    .journey-item {

        position: relative;

        padding: 30px;

        border: 1px solid #e5e9f2;

        border-radius: 20px;

        background: white;

        transition: .3s;

    }


    .journey-item:hover {

        transform:
            translateY(-6px);

        box-shadow:
            0 20px 45px rgba(40, 50, 90, .08);

    }


    .journey-number {

        position: absolute;

        top: 20px;

        right: 22px;

        color: #e3e7f0;

        font-size: 28px;

        font-weight: 900;

    }


    .journey-icon {

        width: 52px;

        height: 52px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 15px;

        color: #3155ff;

        background: #edf1ff;

    }


    .journey-icon svg {

        width: 25px;

        height: 25px;

        fill: none;

        stroke: currentColor;

        stroke-width: 1.8;

        stroke-linecap: round;

        stroke-linejoin: round;

    }


    .journey-icon.purple {

        color: #7048ff;

        background: #f1edff;

    }


    .journey-icon.green {

        color: #12a879;

        background: #eaf9f3;

    }


    .journey-label {

        display: block;

        margin-top: 25px;

        color: #3155ff;

        font-size: 8px;

        font-weight: 900;

        letter-spacing: 1px;

    }


    .journey-item h3 {

        margin: 8px 0;

        color: #1d2639;

        font-size: 17px;

    }


    .journey-item p {

        margin: 0;

        color: #7c8598;

        font-size: 11px;

        line-height: 1.8;

    }


    /* =====================================================
   RESPONSIVE
===================================================== */

    @media (max-width: 1000px) {

        .feature-grid {

            grid-template-columns:
                repeat(2, 1fr);

        }


        .roadmap-wrapper {

            grid-template-columns: 1fr;

        }

    }


    @media (max-width: 750px) {

        .features,
        .roadmap-section,
        .journey,
        .extra-section {

            padding:
                65px 18px;

        }


        .feature-grid,
        .journey-grid {

            grid-template-columns: 1fr;

        }


        .roadmap-steps {

            flex-wrap: wrap;

            gap: 18px;

            justify-content: flex-start;

        }


        .road-line {

            display: none;

        }


        .extra-card,
        .quiz-card,
        .certificate-card {

            flex-direction: column;

            align-items: flex-start;

            padding: 28px;

        }


        .quiz-visual {

            margin-left: 0;

            width: 100%;

        }


        .quiz-score {

            width: auto;

        }

    }


    @media (max-width: 500px) {

        .section-heading h2 {

            font-size: 31px;

        }


        .roadmap-main {

            padding: 22px;

        }


        .roadmap-header {

            flex-direction: column;

        }


        .roadmap-progress {

            text-align: left;

        }


        .community-card {

            padding: 25px;

        }


        .community-card h3 {

            font-size: 23px;

        }

    }
    </style>

    {{-- ========================================
     FAQ SECTION
======================================== --}}
    <section class="faq-section" id="faq">

        <div class="container">

            {{-- HEADER --}}
            <div class="faq-heading">

                <div class="section-label">
                    <span class="label-dot"></span>
                    FAQ
                </div>

                <h2>
                    Punya Pertanyaan?
                    <span>Kami Punya Jawabannya.</span>
                </h2>

                <p>
                    Temukan jawaban dari beberapa pertanyaan umum
                    tentang SkillCareer AI.
                </p>

            </div>


            {{-- FAQ LIST --}}
            <div class="faq-list">

                {{-- 01 --}}
                <div class="faq-item active">

                    <button class="faq-question" type="button">

                        <div class="faq-left">

                            <span class="faq-number">01</span>

                            <span class="faq-title">
                                Apa itu SkillCareer AI?
                            </span>

                        </div>

                        <span class="faq-arrow">
                            <i data-lucide="chevron-down"></i>
                        </span>

                    </button>

                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            SkillCareer AI adalah platform pembelajaran
                            yang membantu kamu menemukan arah belajar,
                            mengembangkan skill, membuat project, dan
                            mempersiapkan diri menuju dunia karier.
                        </div>
                    </div>

                </div>


                {{-- 02 --}}
                <div class="faq-item">

                    <button class="faq-question" type="button">

                        <div class="faq-left">

                            <span class="faq-number">02</span>

                            <span class="faq-title">
                                Apakah saya harus sudah memiliki skill tertentu?
                            </span>

                        </div>

                        <span class="faq-arrow">
                            <i data-lucide="chevron-down"></i>
                        </span>

                    </button>

                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Tidak. Kamu dapat memulai dari dasar dan
                            berkembang secara bertahap sesuai dengan
                            jalur pembelajaran yang kamu pilih.
                        </div>
                    </div>

                </div>


                {{-- 03 --}}
                <div class="faq-item">

                    <button class="faq-question" type="button">

                        <div class="faq-left">

                            <span class="faq-number">03</span>

                            <span class="faq-title">
                                Bagaimana AI Mentor membantu saya?
                            </span>

                        </div>

                        <span class="faq-arrow">
                            <i data-lucide="chevron-down"></i>
                        </span>

                    </button>

                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            AI Mentor membantu memberikan arahan belajar,
                            menjelaskan materi, membantu memahami konsep,
                            serta memberikan saran ketika kamu mengalami
                            kesulitan dalam proses belajar.
                        </div>
                    </div>

                </div>


                {{-- 04 --}}
                <div class="faq-item">

                    <button class="faq-question" type="button">

                        <div class="faq-left">

                            <span class="faq-number">04</span>

                            <span class="faq-title">
                                Apakah saya bisa membuat project sendiri?
                            </span>

                        </div>

                        <span class="faq-arrow">
                            <i data-lucide="chevron-down"></i>
                        </span>

                    </button>

                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Tentu. Kamu dapat menerapkan skill yang telah
                            dipelajari melalui berbagai project dan
                            menjadikannya sebagai bagian dari portfolio.
                        </div>
                    </div>

                </div>


                {{-- 05 --}}
                <div class="faq-item">

                    <button class="faq-question" type="button">

                        <div class="faq-left">

                            <span class="faq-number">05</span>

                            <span class="faq-title">
                                Jalur karier apa saja yang tersedia?
                            </span>

                        </div>

                        <span class="faq-arrow">
                            <i data-lucide="chevron-down"></i>
                        </span>

                    </button>

                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            SkillCareer AI dapat digunakan untuk berbagai
                            jalur di bidang teknologi dan digital seperti
                            Full Stack Development, UI/UX Design,
                            Mobile Development, dan bidang digital lainnya.
                        </div>
                    </div>

                </div>


                {{-- 06 --}}
                <div class="faq-item">

                    <button class="faq-question" type="button">

                        <div class="faq-left">

                            <span class="faq-number">06</span>

                            <span class="faq-title">
                                Apakah tersedia Career Hub?
                            </span>

                        </div>

                        <span class="faq-arrow">
                            <i data-lucide="chevron-down"></i>
                        </span>

                    </button>

                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Ya. Career Hub membantu kamu menemukan
                            informasi dan peluang karier yang sesuai
                            dengan skill yang sedang kamu bangun.
                        </div>
                    </div>

                </div>


                {{-- 07 --}}
                <div class="faq-item">

                    <button class="faq-question" type="button">

                        <div class="faq-left">

                            <span class="faq-number">07</span>

                            <span class="faq-title">
                                Apakah tersedia sertifikat?
                            </span>

                        </div>

                        <span class="faq-arrow">
                            <i data-lucide="chevron-down"></i>
                        </span>

                    </button>

                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Sertifikat dapat menjadi bagian dari fitur
                            pembelajaran sebagai bukti penyelesaian
                            materi atau jalur pembelajaran tertentu.
                        </div>
                    </div>

                </div>


                {{-- 08 --}}
                <div class="faq-item">

                    <button class="faq-question" type="button">

                        <div class="faq-left">

                            <span class="faq-number">08</span>

                            <span class="faq-title">
                                Apakah SkillCareer AI cocok untuk pelajar?
                            </span>

                        </div>

                        <span class="faq-arrow">
                            <i data-lucide="chevron-down"></i>
                        </span>

                    </button>

                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Cocok. Platform ini dirancang agar proses
                            belajar dapat dilakukan secara bertahap,
                            sehingga kamu dapat membangun skill sekaligus
                            mempersiapkan portfolio dan karier.
                        </div>
                    </div>

                </div>

            </div>


            {{-- SMALL CTA --}}
            <div class="faq-footer">

                <div class="faq-footer-left">


                    <div class="faq-footer-text">
                        <strong>Masih punya pertanyaan?</strong>
                        <span>Jelajahi lebih banyak tentang SkillCareer AI.</span>
                    </div>

                </div>

                <a href="#fitur" class="faq-footer-button">
                    Jelajahi Fitur
                    <i data-lucide="arrow-up-right"></i>
                </a>

            </div>

        </div>

    </section>

    <script src="https://unpkg.com/lucide@latest"></script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        lucide.createIcons();
    });
    </script>


    <style>
    /* FAQ ARROW */
    .faq-arrow {
        width: 32px;
        height: 32px;
        min-width: 32px;
        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 50%;
        background: #eef2ff;
        color: #3155ff;

        flex-shrink: 0;
        transition: all .25s ease;
    }

    .faq-arrow svg {
        width: 17px !important;
        height: 17px !important;

        display: block !important;
        visibility: visible !important;
        opacity: 1 !important;

        stroke: currentColor !important;
        stroke-width: 2.5;
    }

    /* Saat FAQ dibuka */
    .faq-item.active .faq-arrow {
        background: #3155ff;
        color: #ffffff;
        transform: rotate(180deg);
    }

    /* ========================================
   FAQ SECTION
======================================== */

    .faq-section {
        padding: 90px 0;
        background: #f8faff;
    }


    /* ========================================
   HEADING
======================================== */

    .faq-heading {
        max-width: 680px;
        margin: 0 auto 45px;
        text-align: center;
    }

    .faq-heading .section-label {
        justify-content: center;
    }

    .faq-heading h2 {
        margin: 12px 0 14px;

        font-size: 36px;
        line-height: 1.2;
        letter-spacing: -.025em;

        color: #172033;
    }

    .faq-heading h2 span {
        color: #3155ff;
    }

    .faq-heading p {
        max-width: 570px;

        margin: 0 auto;

        font-size: 14px;
        line-height: 1.7;

        color: #68728a;
    }


    /* ========================================
   FAQ LIST
======================================== */

    .faq-list {
        max-width: 820px;

        margin: 0 auto;

        background: #ffffff;

        border: 1px solid #e3e7ef;
        border-radius: 16px;

        overflow: hidden;
    }


    /* ========================================
   ITEM
======================================== */

    .faq-item {
        border-bottom: 1px solid #e9edf3;
    }

    .faq-item:last-child {
        border-bottom: none;
    }


    /* ========================================
   QUESTION
======================================== */

    .faq-question {
        width: 100%;

        min-height: 64px;

        display: flex;
        align-items: center;
        justify-content: space-between;

        gap: 20px;

        padding: 16px 22px;

        border: none;

        background: #ffffff;

        cursor: pointer;

        text-align: left;

        transition: background .2s ease;
    }

    .faq-question:hover {
        background: #fbfcff;
    }


    /* ========================================
   LEFT
======================================== */

    .faq-left {
        display: flex;
        align-items: center;

        gap: 15px;

        min-width: 0;
    }


    /* ========================================
   NUMBER
======================================== */

    .faq-number {
        width: 25px;

        flex-shrink: 0;

        font-size: 10px;
        font-weight: 800;

        letter-spacing: .07em;

        color: #a8b0bf;
    }


    /* ========================================
   TITLE
======================================== */

    .faq-title {
        font-size: 14px;
        font-weight: 600;

        line-height: 1.45;

        color: #20283a;

        transition: color .2s ease;
    }

    .faq-question:hover .faq-title {
        color: #3155ff;
    }

    .faq-item.active .faq-title {
        color: #3155ff;
    }


    /* ========================================
   ARROW
======================================== */

    .faq-arrow {
        width: 30px;
        height: 30px;

        flex-shrink: 0;

        display: flex;
        align-items: center;
        justify-content: center;

        border: 1px solid #dce2eb;

        border-radius: 50%;

        color: #667085;

        transition:
            transform .3s ease,
            background .25s ease,
            border-color .25s ease,
            color .25s ease;
    }

    .faq-arrow svg {
        width: 15px;
        height: 15px;

        stroke-width: 2;
    }


    /* HOVER */

    .faq-question:hover .faq-arrow {
        color: #3155ff;
        border-color: #cbd4ff;
    }


    /* OPEN */

    .faq-item.active .faq-arrow {
        transform: rotate(180deg);

        background: #3155ff;

        border-color: #3155ff;

        color: #ffffff;
    }


    /* ========================================
   ANSWER
======================================== */

    .faq-answer {
        display: grid;

        grid-template-rows: 0fr;

        transition:
            grid-template-rows .3s ease;
    }

    .faq-answer-content {
        overflow: hidden;

        padding: 0 70px 0 62px;

        font-size: 13px;

        line-height: 1.7;

        color: #748095;

        opacity: 0;

        transition:
            opacity .2s ease,
            padding .3s ease;
    }

    .faq-item.active .faq-answer {
        grid-template-rows: 1fr;
    }

    .faq-item.active .faq-answer-content {
        padding-bottom: 18px;

        opacity: 1;
    }


    /* ========================================
   FOOTER
======================================== */

    .faq-footer {
        max-width: 820px;

        margin: 18px auto 0;

        padding: 14px 17px;

        display: flex;
        align-items: center;
        justify-content: space-between;

        gap: 18px;

        background: #ffffff;

        border: 1px solid #e3e7ef;

        border-radius: 13px;
    }


    /* LEFT */

    .faq-footer-left {
        display: flex;
        align-items: center;

        gap: 11px;
    }

    .faq-footer-icon {
        width: 35px;
        height: 35px;

        flex-shrink: 0;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 9px;

        background: #eef2ff;

        color: #3155ff;
    }

    .faq-footer-icon svg {
        width: 17px;
        height: 17px;
    }


    /* TEXT */

    .faq-footer-text {
        display: flex;
        flex-direction: column;

        gap: 2px;
    }

    .faq-footer-text strong {
        font-size: 12px;

        color: #172033;
    }

    .faq-footer-text span {
        font-size: 11px;

        color: #7c8597;
    }


    /* BUTTON */

    .faq-footer-button {
        display: inline-flex;
        align-items: center;

        gap: 6px;

        padding: 9px 13px;

        border-radius: 8px;

        background: #3155ff;

        color: #ffffff;

        font-size: 11px;
        font-weight: 700;

        text-decoration: none;

        transition:
            transform .2s ease,
            box-shadow .2s ease;
    }

    .faq-footer-button svg {
        width: 13px;
        height: 13px;
    }

    .faq-footer-button:hover {
        transform: translateY(-1px);

        box-shadow:
            0 7px 16px rgba(49, 85, 255, .18);
    }


    /* ========================================
   MOBILE
======================================== */

    @media (max-width: 650px) {

        .faq-section {
            padding: 70px 0;
        }

        .faq-heading {
            margin-bottom: 35px;
        }

        .faq-heading h2 {
            font-size: 29px;
        }

        .faq-heading p {
            font-size: 13px;
        }

        .faq-question {
            min-height: 58px;

            padding: 14px 15px;

            gap: 12px;
        }

        .faq-left {
            gap: 10px;
        }

        .faq-number {
            width: 22px;
        }

        .faq-title {
            font-size: 13px;
        }

        .faq-arrow {
            width: 27px;
            height: 27px;
        }

        .faq-arrow svg {
            width: 14px;
            height: 14px;
        }

        .faq-answer-content {
            padding-left: 15px;
            padding-right: 15px;
        }

        .faq-item.active .faq-answer-content {
            padding-bottom: 17px;
        }

        .faq-footer {
            flex-direction: column;
            align-items: stretch;

            padding: 14px;
        }

        .faq-footer-button {
            justify-content: center;
        }

    }
    </style>


    <script>
    document.addEventListener('DOMContentLoaded', function() {

        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach(function(item) {

            const button = item.querySelector('.faq-question');

            button.addEventListener('click', function() {

                const isOpen = item.classList.contains('active');

                // Tutup semua
                faqItems.forEach(function(otherItem) {
                    otherItem.classList.remove('active');
                });

                // Buka yang diklik
                if (!isOpen) {
                    item.classList.add('active');
                }

            });

        });

        lucide.createIcons();

    });
    </script>


    {{-- =========================================================
    TESTIMONIAL - HTML + CSS ONLY
========================================================= --}}

    <section class="testimonial-section" id="testimoni">

        <div class="testimonial-container">

            {{-- HEADER --}}
            <div class="testimonial-heading">

                <div class="testimonial-label">
                    <span></span>
                    TESTIMONI PENGGUNA
                </div>

                <h2>
                    Apa Kata Mereka Tentang
                    <strong>SkillCareer AI?</strong>
                </h2>

                <p>
                    Dengarkan pengalaman pengguna yang sedang membangun
                    skill, mengembangkan project, dan mempersiapkan karier
                    bersama SkillCareer AI.
                </p>

            </div>


            {{-- MAIN --}}
            <div class="testimonial-layout">


                {{-- =================================================
                LEFT : FORM / INFO
            ================================================== --}}

                <div class="testimonial-info-card">



                    <span class="testimonial-small-label">
                        SHARE YOUR EXPERIENCE
                    </span>

                    <h3>
                        Punya pengalaman
                        <span>bersama SkillCareer AI?</span>
                    </h3>

                    <p>
                        Ceritakan pengalamanmu setelah menggunakan
                        SkillCareer AI. Pendapatmu dapat membantu pengguna
                        lain menemukan arah belajar dan karier mereka.
                    </p>


                    {{-- RATING DISPLAY --}}

                    <div class="rating-box">

                        <div class="rating-stars">
                            <i data-lucide="star"></i>
                            <i data-lucide="star"></i>
                            <i data-lucide="star"></i>
                            <i data-lucide="star"></i>
                            <i data-lucide="star"></i>
                        </div>

                        <div class="rating-text">
                            <strong>5.0</strong>
                            <span>Pengalaman pengguna</span>
                        </div>

                    </div>


                    {{-- SIMPLE COMMENT FORM --}}

                    <form class="testimonial-form">

                        <div class="form-field">

                            <label>
                                Nama
                            </label>

                            <input type="text" placeholder="Masukkan nama kamu">

                        </div>


                        <div class="form-field">

                            <label>
                                Testimoni
                            </label>

                            <textarea rows="4" placeholder="Ceritakan pengalaman kamu..."></textarea>

                        </div>


                        <button type="button" class="testimonial-button">

                            <i data-lucide="send"></i>

                            Kirim Testimoni

                        </button>

                    </form>


                    <div class="testimonial-note">

                        <i data-lucide="shield-check"></i>

                        <span>
                            Testimoni akan ditampilkan setelah melalui proses
                            pengecekan.
                        </span>

                    </div>

                </div>



                {{-- =================================================
                RIGHT : TESTIMONIAL WALL
            ================================================== --}}

                <div class="testimonial-wall">


                    <div class="wall-header">

                        <div>

                            <span>
                                COMMUNITY VOICES
                            </span>

                            <h3>
                                Cerita dari pengguna kami
                            </h3>

                        </div>

                        <div class="live-status">

                            <span></span>

                            LIVE

                        </div>

                    </div>



                    {{-- =================================================
                    VERTICAL REVIEWS
                ================================================== --}}

                    <div class="reviews-window">

                        <div class="reviews-columns">


                            {{-- COLUMN KIRI - NAIK --}}

                            <div class="reviews-track track-up">

                                {{-- SET 1 --}}

                                <article class="review-card">

                                    <div class="review-header">

                                        <div class="review-profile">

                                            <div class="review-avatar avatar-blue">
                                                AP
                                            </div>

                                            <div>

                                                <strong>
                                                    Andi Pratama
                                                </strong>

                                                <small>
                                                    Siswa SMK
                                                </small>

                                            </div>

                                        </div>

                                        <div class="review-stars">
                                            ★★★★★
                                        </div>

                                    </div>

                                    <p>
                                        SkillCareer AI membantu saya memahami
                                        skill yang harus saya pelajari dan membuat
                                        proses belajar terasa lebih terarah.
                                    </p>

                                    <div class="review-footer">
                                        <i data-lucide="badge-check"></i>
                                        Pengguna terverifikasi
                                    </div>

                                </article>


                                <article class="review-card">

                                    <div class="review-header">

                                        <div class="review-profile">

                                            <div class="review-avatar avatar-purple">
                                                RA
                                            </div>

                                            <div>

                                                <strong>
                                                    Rina Aprilia
                                                </strong>

                                                <small>
                                                    UI/UX Designer
                                                </small>

                                            </div>

                                        </div>

                                        <div class="review-stars">
                                            ★★★★★
                                        </div>

                                    </div>

                                    <p>
                                        Roadmap belajarnya sangat membantu saya
                                        menentukan langkah berikutnya tanpa harus
                                        bingung mulai dari mana.
                                    </p>

                                    <div class="review-footer">
                                        <i data-lucide="badge-check"></i>
                                        Pengguna terverifikasi
                                    </div>

                                </article>


                                <article class="review-card">

                                    <div class="review-header">

                                        <div class="review-profile">

                                            <div class="review-avatar avatar-green">
                                                BS
                                            </div>

                                            <div>

                                                <strong>
                                                    Budi Santoso
                                                </strong>

                                                <small>
                                                    Junior Developer
                                                </small>

                                            </div>

                                        </div>

                                        <div class="review-stars">
                                            ★★★★★
                                        </div>

                                    </div>

                                    <p>
                                        AI Mentor membuat saya lebih mudah mencari
                                        solusi ketika mengalami kesulitan saat
                                        belajar programming.
                                    </p>

                                    <div class="review-footer">
                                        <i data-lucide="badge-check"></i>
                                        Pengguna terverifikasi
                                    </div>

                                </article>


                                <article class="review-card">

                                    <div class="review-header">

                                        <div class="review-profile">

                                            <div class="review-avatar avatar-orange">
                                                DL
                                            </div>

                                            <div>

                                                <strong>
                                                    Dewi Lestari
                                                </strong>

                                                <small>
                                                    Frontend Developer
                                                </small>

                                            </div>

                                        </div>

                                        <div class="review-stars">
                                            ★★★★★
                                        </div>

                                    </div>

                                    <p>
                                        Saya jadi lebih percaya diri karena
                                        pembelajaran dan project di SkillCareer AI
                                        terasa lebih terstruktur.
                                    </p>

                                    <div class="review-footer">
                                        <i data-lucide="badge-check"></i>
                                        Pengguna terverifikasi
                                    </div>

                                </article>


                                {{-- DUPLICATE --}}

                                <article class="review-card">

                                    <div class="review-header">

                                        <div class="review-profile">

                                            <div class="review-avatar avatar-blue">
                                                AP
                                            </div>

                                            <div>

                                                <strong>
                                                    Andi Pratama
                                                </strong>

                                                <small>
                                                    Siswa SMK
                                                </small>

                                            </div>

                                        </div>

                                        <div class="review-stars">
                                            ★★★★★
                                        </div>

                                    </div>

                                    <p>
                                        SkillCareer AI membantu saya memahami
                                        skill yang harus saya pelajari dan membuat
                                        proses belajar terasa lebih terarah.
                                    </p>

                                    <div class="review-footer">
                                        <i data-lucide="badge-check"></i>
                                        Pengguna terverifikasi
                                    </div>

                                </article>


                                <article class="review-card">

                                    <div class="review-header">

                                        <div class="review-profile">

                                            <div class="review-avatar avatar-purple">
                                                RA
                                            </div>

                                            <div>

                                                <strong>
                                                    Rina Aprilia
                                                </strong>

                                                <small>
                                                    UI/UX Designer
                                                </small>

                                            </div>

                                        </div>

                                        <div class="review-stars">
                                            ★★★★★
                                        </div>

                                    </div>

                                    <p>
                                        Roadmap belajarnya sangat membantu saya
                                        menentukan langkah berikutnya tanpa harus
                                        bingung mulai dari mana.
                                    </p>

                                    <div class="review-footer">
                                        <i data-lucide="badge-check"></i>
                                        Pengguna terverifikasi
                                    </div>

                                </article>


                                <article class="review-card">

                                    <div class="review-header">

                                        <div class="review-profile">

                                            <div class="review-avatar avatar-green">
                                                BS
                                            </div>

                                            <div>

                                                <strong>
                                                    Budi Santoso
                                                </strong>

                                                <small>
                                                    Junior Developer
                                                </small>

                                            </div>

                                        </div>

                                        <div class="review-stars">
                                            ★★★★★
                                        </div>

                                    </div>

                                    <p>
                                        AI Mentor membuat saya lebih mudah mencari
                                        solusi ketika mengalami kesulitan saat
                                        belajar programming.
                                    </p>

                                    <div class="review-footer">
                                        <i data-lucide="badge-check"></i>
                                        Pengguna terverifikasi
                                    </div>

                                </article>


                                <article class="review-card">

                                    <div class="review-header">

                                        <div class="review-profile">

                                            <div class="review-avatar avatar-orange">
                                                DL
                                            </div>

                                            <div>

                                                <strong>
                                                    Dewi Lestari
                                                </strong>

                                                <small>
                                                    Frontend Developer
                                                </small>

                                            </div>

                                        </div>

                                        <div class="review-stars">
                                            ★★★★★
                                        </div>

                                    </div>

                                    <p>
                                        Saya jadi lebih percaya diri karena
                                        pembelajaran dan project di SkillCareer AI
                                        terasa lebih terstruktur.
                                    </p>

                                    <div class="review-footer">
                                        <i data-lucide="badge-check"></i>
                                        Pengguna terverifikasi
                                    </div>

                                </article>

                            </div>



                            {{-- COLUMN KANAN - TURUN --}}

                            <div class="reviews-track track-down">

                                <article class="review-card">

                                    <div class="review-header">

                                        <div class="review-profile">

                                            <div class="review-avatar avatar-dark">
                                                FR
                                            </div>

                                            <div>

                                                <strong>
                                                    Fajar Ramadhan
                                                </strong>

                                                <small>
                                                    Full Stack Developer
                                                </small>

                                            </div>

                                        </div>

                                        <div class="review-stars">
                                            ★★★★★
                                        </div>

                                    </div>

                                    <p>
                                        Platform yang praktis untuk membantu saya
                                        menentukan skill dan membangun portfolio
                                        sebelum masuk dunia kerja.
                                    </p>

                                    <div class="review-footer">
                                        <i data-lucide="badge-check"></i>
                                        Pengguna terverifikasi
                                    </div>

                                </article>


                                <article class="review-card">

                                    <div class="review-header">

                                        <div class="review-profile">

                                            <div class="review-avatar avatar-pink">
                                                SP
                                            </div>

                                            <div>

                                                <strong>
                                                    Salsa Putri
                                                </strong>

                                                <small>
                                                    Digital Marketing
                                                </small>

                                            </div>

                                        </div>

                                        <div class="review-stars">
                                            ★★★★★
                                        </div>

                                    </div>

                                    <p>
                                        Saya suka karena materi dan roadmap-nya
                                        tidak terasa membingungkan untuk pemula.
                                    </p>

                                    <div class="review-footer">
                                        <i data-lucide="badge-check"></i>
                                        Pengguna terverifikasi
                                    </div>

                                </article>


                                <article class="review-card">

                                    <div class="review-header">

                                        <div class="review-profile">

                                            <div class="review-avatar avatar-blue">
                                                AR
                                            </div>

                                            <div>

                                                <strong>
                                                    Arya Rizky
                                                </strong>

                                                <small>
                                                    Backend Developer
                                                </small>

                                            </div>

                                        </div>

                                        <div class="review-stars">
                                            ★★★★★
                                        </div>

                                    </div>

                                    <p>
                                        Project yang diberikan membuat saya tidak
                                        hanya belajar teori tetapi juga langsung
                                        mencoba membuat sesuatu.
                                    </p>

                                    <div class="review-footer">
                                        <i data-lucide="badge-check"></i>
                                        Pengguna terverifikasi
                                    </div>

                                </article>


                                <article class="review-card">

                                    <div class="review-header">

                                        <div class="review-profile">

                                            <div class="review-avatar avatar-purple">
                                                NS
                                            </div>

                                            <div>

                                                <strong>
                                                    Nadia Sari
                                                </strong>

                                                <small>
                                                    Product Designer
                                                </small>

                                            </div>

                                        </div>

                                        <div class="review-stars">
                                            ★★★★★
                                        </div>

                                    </div>

                                    <p>
                                        SkillCareer AI membantu saya mengetahui
                                        apa yang perlu ditingkatkan sebelum
                                        membuat portfolio.
                                    </p>

                                    <div class="review-footer">
                                        <i data-lucide="badge-check"></i>
                                        Pengguna terverifikasi
                                    </div>

                                </article>


                                {{-- DUPLICATE --}}

                                <article class="review-card">

                                    <div class="review-header">

                                        <div class="review-profile">

                                            <div class="review-avatar avatar-dark">
                                                FR
                                            </div>

                                            <div>

                                                <strong>
                                                    Fajar Ramadhan
                                                </strong>

                                                <small>
                                                    Full Stack Developer
                                                </small>

                                            </div>

                                        </div>

                                        <div class="review-stars">
                                            ★★★★★
                                        </div>

                                    </div>

                                    <p>
                                        Platform yang praktis untuk membantu saya
                                        menentukan skill dan membangun portfolio
                                        sebelum masuk dunia kerja.
                                    </p>

                                    <div class="review-footer">
                                        <i data-lucide="badge-check"></i>
                                        Pengguna terverifikasi
                                    </div>

                                </article>


                                <article class="review-card">

                                    <div class="review-header">

                                        <div class="review-profile">

                                            <div class="review-avatar avatar-pink">
                                                SP
                                            </div>

                                            <div>

                                                <strong>
                                                    Salsa Putri
                                                </strong>

                                                <small>
                                                    Digital Marketing
                                                </small>

                                            </div>

                                        </div>

                                        <div class="review-stars">
                                            ★★★★★
                                        </div>

                                    </div>

                                    <p>
                                        Saya suka karena materi dan roadmap-nya
                                        tidak terasa membingungkan untuk pemula.
                                    </p>

                                    <div class="review-footer">
                                        <i data-lucide="badge-check"></i>
                                        Pengguna terverifikasi
                                    </div>

                                </article>


                                <article class="review-card">

                                    <div class="review-header">

                                        <div class="review-profile">

                                            <div class="review-avatar avatar-blue">
                                                AR
                                            </div>

                                            <div>

                                                <strong>
                                                    Arya Rizky
                                                </strong>

                                                <small>
                                                    Backend Developer
                                                </small>

                                            </div>

                                        </div>

                                        <div class="review-stars">
                                            ★★★★★
                                        </div>

                                    </div>

                                    <p>
                                        Project yang diberikan membuat saya tidak
                                        hanya belajar teori tetapi juga langsung
                                        mencoba membuat sesuatu.
                                    </p>

                                    <div class="review-footer">
                                        <i data-lucide="badge-check"></i>
                                        Pengguna terverifikasi
                                    </div>

                                </article>


                                <article class="review-card">

                                    <div class="review-header">

                                        <div class="review-profile">

                                            <div class="review-avatar avatar-purple">
                                                NS
                                            </div>

                                            <div>

                                                <strong>
                                                    Nadia Sari
                                                </strong>

                                                <small>
                                                    Product Designer
                                                </small>

                                            </div>

                                        </div>

                                        <div class="review-stars">
                                            ★★★★★
                                        </div>

                                    </div>

                                    <p>
                                        SkillCareer AI membantu saya mengetahui
                                        apa yang perlu ditingkatkan sebelum
                                        membuat portfolio.
                                    </p>

                                    <div class="review-footer">
                                        <i data-lucide="badge-check"></i>
                                        Pengguna terverifikasi
                                    </div>

                                </article>

                            </div>

                        </div>

                    </div>


                    <div class="wall-bottom">

                        <div class="wall-dots">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                        <span>
                            Scroll otomatis
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <style>
    /* =========================================================
   TESTIMONIAL SECTION
========================================================= */

    .testimonial-section {
        padding: 105px 24px;
        background: #f8faff;
        overflow: hidden;
    }


    .testimonial-container {
        max-width: 1180px;
        margin: auto;
    }


    /* =========================================================
   HEADING
========================================================= */

    .testimonial-heading {
        max-width: 700px;
        margin: 0 auto 48px;
        text-align: center;
    }


    .testimonial-label {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 13px;
        border: 1px solid #dfe5ff;
        border-radius: 50px;
        background: #eef2ff;
        color: #3155ff;
        font-size: 9px;
        font-weight: 800;
        letter-spacing: .7px;
    }


    .testimonial-label span {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #3155ff;
    }


    .testimonial-heading h2 {
        margin-top: 18px;
        color: #172033;
        font-size: clamp(32px, 4vw, 44px);
        line-height: 1.12;
        letter-spacing: -1.7px;
        font-weight: 800;
    }


    .testimonial-heading h2 strong {
        display: block;
        background: linear-gradient(135deg,
                #3155ff,
                #7048ff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }


    .testimonial-heading p {
        max-width: 610px;
        margin: 15px auto 0;
        color: #8992a4;
        font-size: 12px;
        line-height: 1.8;
    }


    /* =========================================================
   LAYOUT
========================================================= */

    .testimonial-layout {
        display: grid;
        grid-template-columns: 380px minmax(0, 1fr);
        gap: 24px;
    }


    /* =========================================================
   LEFT CARD
========================================================= */

    .testimonial-info-card {
        padding: 27px;
        border: 1px solid #e3e8f1;
        border-radius: 22px;
        background: #fff;
        box-shadow:
            0 18px 50px rgba(31, 45, 80, .06);
    }


    .testimonial-info-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 48px;
        height: 48px;
        border-radius: 14px;
        background: #eef2ff;
        color: #3155ff;
    }


    .testimonial-info-icon svg {
        width: 21px;
        height: 21px;
    }


    .testimonial-small-label {
        display: block;
        margin-top: 22px;
        color: #3155ff;
        font-size: 8px;
        font-weight: 800;
        letter-spacing: .8px;
    }


    .testimonial-info-card h3 {
        margin-top: 8px;
        color: #172033;
        font-size: 23px;
        line-height: 1.25;
        letter-spacing: -.7px;
    }


    .testimonial-info-card h3 span {
        display: block;
        color: #3155ff;
    }


    .testimonial-info-card>p {
        margin-top: 11px;
        color: #8992a4;
        font-size: 10px;
        line-height: 1.75;
    }


    /* =========================================================
   RATING
========================================================= */

    .rating-box {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-top: 22px;
        padding: 13px;
        border: 1px solid #edf0f5;
        border-radius: 13px;
        background: #fafbfe;
    }


    .rating-stars {
        display: flex;
        gap: 2px;
        color: #f4ad18;
    }


    .rating-stars svg {
        width: 13px;
        height: 13px;
        fill: currentColor;
    }


    .rating-text strong {
        display: block;
        color: #283247;
        font-size: 11px;
    }


    .rating-text span {
        display: block;
        margin-top: 2px;
        color: #a0a7b4;
        font-size: 7px;
    }


    /* =========================================================
   FORM
========================================================= */

    .testimonial-form {
        margin-top: 20px;
    }


    .form-field {
        margin-bottom: 13px;
    }


    .form-field label {
        display: block;
        margin-bottom: 7px;
        color: #394257;
        font-size: 8.5px;
        font-weight: 800;
    }


    .form-field input,
    .form-field textarea {
        width: 100%;
        border: 1px solid #e0e5ed;
        border-radius: 10px;
        outline: none;
        background: #fafbfe;
        color: #30394c;
        font-family: inherit;
        font-size: 9px;
        transition: .2s ease;
    }


    .form-field input {
        height: 39px;
        padding: 0 12px;
    }


    .form-field textarea {
        padding: 11px 12px;
        resize: none;
        line-height: 1.6;
    }


    .form-field input:focus,
    .form-field textarea:focus {
        border-color: #b8c3ff;
        background: #fff;
        box-shadow:
            0 0 0 4px rgba(49, 85, 255, .05);
    }


    .form-field input::placeholder,
    .form-field textarea::placeholder {
        color: #adb4c1;
    }


    .testimonial-button {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 7px;
        width: 100%;
        height: 40px;
        border: 0;
        border-radius: 10px;
        background: linear-gradient(135deg,
                #3155ff,
                #7048ff);
        color: #fff;
        font-size: 8.5px;
        font-weight: 800;
        cursor: pointer;
        transition: .25s ease;
    }


    .testimonial-button:hover {
        transform: translateY(-2px);
        box-shadow:
            0 12px 25px rgba(49, 85, 255, .18);
    }


    .testimonial-button svg {
        width: 13px;
        height: 13px;
    }


    .testimonial-note {
        display: flex;
        gap: 7px;
        margin-top: 14px;
        color: #9aa2b0;
        font-size: 7px;
        line-height: 1.6;
    }


    .testimonial-note svg {
        width: 11px;
        height: 11px;
        flex-shrink: 0;
        color: #10a875;
    }


    /* =========================================================
   RIGHT WALL
========================================================= */

    .testimonial-wall {
        min-width: 0;
        padding: 22px;
        border: 1px solid #e3e8f1;
        border-radius: 22px;
        background: #fff;
        box-shadow:
            0 18px 50px rgba(31, 45, 80, .06);
    }


    .wall-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 3px 2px 17px;
        border-bottom: 1px solid #edf0f5;
    }


    .wall-header span:first-child {
        color: #3155ff;
        font-size: 7px;
        font-weight: 800;
        letter-spacing: .8px;
    }


    .wall-header h3 {
        margin-top: 5px;
        color: #172033;
        font-size: 15px;
        font-weight: 800;
    }


    .live-status {
        display: flex;
        align-items: center;
        gap: 6px;
        padding: 7px 10px;
        border-radius: 50px;
        background: #eefaf5;
        color: #0b9c69;
        font-size: 7px;
        font-weight: 800;
    }


    .live-status span {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #10b981;
    }


    /* =========================================================
   REVIEW WINDOW
========================================================= */

    .reviews-window {
        height: 485px;
        margin-top: 17px;
        overflow: hidden;
        position: relative;
    }


    .reviews-window::before,
    .reviews-window::after {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        height: 65px;
        z-index: 10;
        pointer-events: none;
    }


    .reviews-window::before {
        top: 0;
        background: linear-gradient(to bottom,
                #fff,
                rgba(255, 255, 255, 0));
    }


    .reviews-window::after {
        bottom: 0;
        background: linear-gradient(to top,
                #fff,
                rgba(255, 255, 255, 0));
    }


    .reviews-columns {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 13px;
        height: 100%;
    }


    .reviews-track {
        display: flex;
        flex-direction: column;
        gap: 13px;
        will-change: transform;
    }


    .track-up {
        animation:
            testimonialUp 27s linear infinite;
    }


    .track-down {
        transform: translateY(-50%);
        animation:
            testimonialDown 31s linear infinite;
    }


    .reviews-track:hover {
        animation-play-state: paused;
    }


    /* =========================================================
   REVIEW CARD
========================================================= */

    .review-card {
        flex-shrink: 0;
        padding: 15px;
        border: 1px solid #e6eaf1;
        border-radius: 14px;
        background: #fff;
        box-shadow:
            0 6px 20px rgba(30, 40, 70, .045);
    }


    .review-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 8px;
    }


    .review-profile {
        display: flex;
        align-items: center;
        gap: 9px;
    }


    .review-avatar {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        flex-shrink: 0;
        border-radius: 10px;
        color: #fff;
        font-size: 8px;
        font-weight: 800;
    }


    .avatar-blue {
        background: linear-gradient(135deg, #3155ff, #6380ff);
    }


    .avatar-purple {
        background: linear-gradient(135deg, #7048ff, #9b70ff);
    }


    .avatar-green {
        background: linear-gradient(135deg, #0ca875, #1bc58b);
    }


    .avatar-orange {
        background: linear-gradient(135deg, #ef8b2f, #ffb451);
    }


    .avatar-dark {
        background: linear-gradient(135deg, #26334d, #56657f);
    }


    .avatar-pink {
        background: linear-gradient(135deg, #db4d8e, #f47bb0);
    }


    .review-profile strong {
        display: block;
        color: #293246;
        font-size: 9px;
        font-weight: 800;
    }


    .review-profile small {
        display: block;
        margin-top: 2px;
        color: #9ca4b1;
        font-size: 7px;
    }


    .review-stars {
        color: #f4ad18;
        font-size: 8px;
        letter-spacing: 1px;
        white-space: nowrap;
    }


    .review-card>p {
        margin-top: 13px;
        color: #687286;
        font-size: 8.5px;
        line-height: 1.7;
    }


    .review-footer {
        display: flex;
        align-items: center;
        gap: 5px;
        margin-top: 11px;
        color: #0b9c69;
        font-size: 6.5px;
        font-weight: 700;
    }


    .review-footer svg {
        width: 10px;
        height: 10px;
    }


    /* =========================================================
   ANIMATION
========================================================= */

    @keyframes testimonialUp {

        from {
            transform: translateY(0);
        }

        to {
            transform: translateY(-50%);
        }

    }


    @keyframes testimonialDown {

        from {
            transform: translateY(-50%);
        }

        to {
            transform: translateY(0);
        }

    }


    /* =========================================================
   WALL FOOTER
========================================================= */

    .wall-bottom {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 7px;
        margin-top: 13px;
        color: #a0a7b4;
        font-size: 7px;
    }


    .wall-dots {
        display: flex;
        gap: 3px;
    }


    .wall-dots span {
        width: 4px;
        height: 4px;
        border-radius: 50%;
        background: #d2d6de;
    }


    .wall-dots span:nth-child(2) {
        background: #3155ff;
    }


    /* =========================================================
   RESPONSIVE
========================================================= */

    @media (max-width: 950px) {

        .testimonial-layout {
            grid-template-columns: 1fr;
        }


        .testimonial-info-card {
            max-width: 650px;
            width: 100%;
            margin: auto;
        }

    }


    @media (max-width: 600px) {

        .testimonial-section {
            padding: 75px 15px;
        }


        .testimonial-heading h2 {
            font-size: 29px;
        }


        .testimonial-heading p {
            font-size: 10px;
        }


        .testimonial-info-card,
        .testimonial-wall {
            padding: 17px;
            border-radius: 17px;
        }


        .reviews-window {
            height: 420px;
        }


        .review-card {
            padding: 12px;
        }


        .review-profile strong {
            font-size: 8px;
        }


        .review-profile small {
            font-size: 6.5px;
        }


        .review-stars {
            font-size: 7px;
        }


        .review-card>p {
            font-size: 8px;
        }

    }


    @media (prefers-reduced-motion: reduce) {

        .reviews-track {
            animation: none;
            transform: none;
        }

    }
    </style>


    {{-- =====================================================
         CTA
    ====================================================== --}}

    <div class="cta-wrapper">

        <div class="cta">

            <div class="cta-content">



                <div>

                    <h2>
                        Siap Mewujudkan Karier Impianmu?
                    </h2>

                    <p>
                        Bergabunglah sekarang dan mulai
                        perjalanan belajarmu bersama AI!
                    </p>

                </div>

            </div>

            <a href="{{ route('register') }}" class="btn-primary">
                Mulai Assessment Gratis →
            </a>

        </div>

    </div>


    {{-- =====================================================
         FOOTER
    ====================================================== --}}

    <footer id="tentang">

        <div class="container">

            <div class="footer-grid">

                <div>

                    <div class="footer-logo">
                        SkillCareer <span>AI</span>
                    </div>

                    <p class="footer-description">
                        Platform belajar dan pengembangan
                        karier berbasis AI untuk masa depanmu.
                    </p>

                </div>


                <div class="footer-column">

                    <h4>Platform</h4>

                    <a href="#fitur">Fitur</a>

                    <a href="#roadmap">Roadmap</a>

                    <a href="#">AI Mentor</a>

                    <a href="#mulai">Journey</a>

                </div>


                <div class="footer-column">

                    <h4>Perusahaan</h4>

                    <a href="#tentang">
                        Tentang Kami
                    </a>

                    <a href="#">
                        Blog
                    </a>

                    <a href="#">
                        Karier
                    </a>

                    <a href="#">
                        Kontak
                    </a>

                </div>


                <div class="footer-column">

                    <h4>Bantuan</h4>

                    <a href="#faq">FAQ</a>

                    <a href="#">Panduan</a>

                    <a href="#">Syarat & Ketentuan</a>

                    <a href="#">Kebijakan Privasi</a>

                </div>


                <div class="newsletter">

                    <h4>
                        Dapatkan Update Terbaru
                    </h4>

                    <p>
                        Dapatkan tips belajar, info roadmap,
                        dan update terbaru dari kami.
                    </p>

                    <form class="newsletter-form">

                        <input type="email" placeholder="Masukkan email kamu">

                        <button type="submit">
                            →
                        </button>

                    </form>

                </div>

            </div>


            <div class="footer-bottom">

                © {{ date('Y') }}
                SkillPath AI.
                All rights reserved.

            </div>

        </div>

    </footer>


</body>

</html>