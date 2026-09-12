{{-- resources/views/dashboard/sertifikat.blade.php --}}
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sertifikat - SkillCareerAI</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    :root {
        --primary: #3155ff;
        --primary-dark: #2444df;
        --text: #111827;
        --muted: #6b7280;
        --border: #e5e7eb;
        --bg: #f7f8fc;
        --white: #ffffff;
        --success: #16a34a;
    }

    body {
        font-family: 'Inter', sans-serif;
        background: var(--bg);
        color: var(--text);
        min-height: 100vh;
    }

    button,
    a {
        font-family: inherit;
    }

    a {
        text-decoration: none;
        color: inherit;
    }

    /* =========================
           TOP NAV
        ========================== */

    .certificate-topbar {
        height: 76px;
        background: rgba(255, 255, 255, .96);
        border-bottom: 1px solid var(--border);
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 42px;
        position: sticky;
        top: 0;
        z-index: 100;
    }

    .back-dashboard {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        color: #374151;
        font-size: 14px;
        font-weight: 600;
        transition: .2s ease;
    }

    .back-dashboard:hover {
        color: var(--primary);
        transform: translateX(-2px);
    }

    .back-dashboard i {
        width: 18px;
        height: 18px;
    }

    .top-title {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        font-size: 16px;
        font-weight: 700;
    }

    .profile-mini {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .profile-mini-avatar {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        overflow: hidden;
        background: #eef2ff;
        color: var(--primary);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        font-weight: 800;
    }

    .profile-mini-avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .profile-mini-name {
        font-size: 13px;
        font-weight: 600;
        color: #374151;
    }

    /* =========================
           MAIN
        ========================== */

    .certificate-page {
        width: 100%;
        max-width: 1180px;
        margin: 0 auto;
        padding: 60px 30px 80px;
    }

    .page-heading {
        text-align: center;
        max-width: 680px;
        margin: 0 auto 45px;
    }

    .heading-label {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: var(--primary);
        font-size: 12px;
        font-weight: 800;
        letter-spacing: .08em;
        text-transform: uppercase;
        margin-bottom: 13px;
    }

    .heading-label span {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: var(--primary);
    }

    .page-heading h1 {
        font-size: clamp(30px, 4vw, 44px);
        line-height: 1.15;
        letter-spacing: -.035em;
        margin-bottom: 14px;
    }

    .page-heading h1 span {
        color: var(--primary);
    }

    .page-heading p {
        color: var(--muted);
        font-size: 15px;
        line-height: 1.7;
    }

    /* =========================
           EMPTY STATE
        ========================== */

    .empty-certificate {
        background: var(--white);
        border: 1px solid var(--border);
        border-radius: 24px;
        padding: 60px 30px;
        text-align: center;
        max-width: 820px;
        margin: 0 auto;
        box-shadow: 0 12px 35px rgba(17, 24, 39, .04);
    }

    .empty-icon {
        width: 76px;
        height: 76px;
        margin: 0 auto 22px;
        border-radius: 20px;
        background: #eef2ff;
        color: var(--primary);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .empty-icon i {
        width: 36px;
        height: 36px;
    }

    .empty-certificate h2 {
        font-size: 23px;
        margin-bottom: 10px;
    }

    .empty-certificate p {
        max-width: 540px;
        margin: 0 auto;
        color: var(--muted);
        line-height: 1.7;
        font-size: 14px;
    }

    /* =========================
           REQUIREMENT
        ========================== */

    .requirements {
        max-width: 820px;
        margin: 25px auto 0;
        background: #fff;
        border: 1px solid var(--border);
        border-radius: 20px;
        padding: 25px;
    }

    .requirements-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .requirements-header h3 {
        font-size: 16px;
    }

    .requirements-header span {
        font-size: 12px;
        font-weight: 700;
        color: var(--muted);
    }

    .requirement-list {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 12px;
    }

    .requirement-item {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 14px;
        border: 1px solid #edf0f5;
        border-radius: 13px;
        background: #fafbfc;
    }

    .requirement-icon {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        background: #f0f2f5;
        color: #9ca3af;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .requirement-icon i {
        width: 17px;
        height: 17px;
    }

    .requirement-item.completed .requirement-icon {
        background: #dcfce7;
        color: var(--success);
    }

    .requirement-info strong {
        display: block;
        font-size: 13px;
        margin-bottom: 3px;
    }

    .requirement-info span {
        color: var(--muted);
        font-size: 11px;
    }

    /* =========================
           CERTIFICATE CARD
        ========================== */

    .certificate-result {
        display: none;
    }

    .certificate-result.show {
        display: block;
    }

    .success-banner {
        max-width: 900px;
        margin: 0 auto 28px;
        padding: 20px 24px;
        border-radius: 18px;
        background: #ecfdf3;
        border: 1px solid #bbf7d0;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .success-banner-icon {
        width: 44px;
        height: 44px;
        border-radius: 12px;
        background: #dcfce7;
        color: var(--success);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .success-banner h3 {
        font-size: 15px;
        margin-bottom: 3px;
    }

    .success-banner p {
        color: #4b5563;
        font-size: 12px;
    }

    .certificate-card {
        max-width: 900px;
        margin: 0 auto;
        background: #fff;
        border: 1px solid var(--border);
        border-radius: 24px;
        padding: 14px;
        box-shadow: 0 18px 50px rgba(17, 24, 39, .07);
    }

    .certificate-inner {
        min-height: 510px;
        border: 1px solid #dbe2ff;
        border-radius: 18px;
        padding: 55px 40px;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .certificate-inner::before,
    .certificate-inner::after {
        content: "";
        position: absolute;
        width: 180px;
        height: 180px;
        border-radius: 50%;
        border: 1px solid #e0e7ff;
        pointer-events: none;
    }

    .certificate-inner::before {
        top: -100px;
        left: -100px;
    }

    .certificate-inner::after {
        bottom: -100px;
        right: -100px;
    }

    .certificate-logo {
        color: var(--primary);
        font-size: 18px;
        font-weight: 800;
        margin-bottom: 38px;
    }

    .certificate-small {
        color: var(--muted);
        font-size: 11px;
        letter-spacing: .16em;
        text-transform: uppercase;
        font-weight: 700;
    }

    .certificate-inner h2 {
        font-size: 35px;
        margin: 12px 0;
        letter-spacing: -.03em;
    }

    .certificate-desc {
        color: var(--muted);
        font-size: 13px;
        margin-bottom: 25px;
    }

    .certificate-name {
        font-size: 29px;
        font-weight: 800;
        margin-bottom: 10px;
    }

    .certificate-roadmap {
        color: var(--primary);
        font-weight: 700;
        font-size: 15px;
        margin-bottom: 32px;
    }

    .certificate-meta {
        display: flex;
        justify-content: center;
        gap: 50px;
        padding-top: 25px;
        border-top: 1px solid #e5e7eb;
        max-width: 570px;
        margin: 0 auto;
    }

    .meta-item span {
        display: block;
        color: var(--muted);
        font-size: 10px;
        text-transform: uppercase;
        letter-spacing: .08em;
        margin-bottom: 6px;
    }

    .meta-item strong {
        font-size: 12px;
    }

    .certificate-actions {
        display: flex;
        justify-content: center;
        gap: 12px;
        margin-top: 25px;
    }

    .btn {
        height: 44px;
        padding: 0 20px;
        border-radius: 11px;
        border: 1px solid var(--border);
        background: white;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        font-size: 13px;
        font-weight: 700;
        cursor: pointer;
        transition: .2s ease;
    }

    .btn:hover {
        transform: translateY(-1px);
    }

    .btn-primary {
        background: var(--primary);
        color: white;
        border-color: var(--primary);
    }

    .btn-primary:hover {
        background: var(--primary-dark);
    }

    .btn i {
        width: 16px;
        height: 16px;
    }

    /* =========================
           RESPONSIVE
        ========================== */

    @media (max-width: 700px) {

        .certificate-topbar {
            height: 68px;
            padding: 0 18px;
        }

        .top-title {
            display: none;
        }

        .profile-mini-name {
            display: none;
        }

        .certificate-page {
            padding: 42px 16px 60px;
        }

        .page-heading {
            margin-bottom: 30px;
        }

        .page-heading h1 {
            font-size: 30px;
        }

        .empty-certificate {
            padding: 45px 20px;
        }

        .requirements {
            padding: 18px;
        }

        .requirement-list {
            grid-template-columns: 1fr;
        }

        .certificate-inner {
            padding: 40px 20px;
            min-height: 450px;
        }

        .certificate-inner h2 {
            font-size: 28px;
        }

        .certificate-name {
            font-size: 23px;
        }

        .certificate-meta {
            gap: 25px;
        }

        .certificate-actions {
            flex-direction: column;
        }

        .btn {
            width: 100%;
        }
    }
    </style>
</head>

<body>

    {{-- =========================
         TOPBAR
    ========================== --}}

    <header class="certificate-topbar">

        {{-- Pakai url agar tidak tergantung nama route --}}
        <a href="{{ url('/dashboard') }}" class="back-dashboard">
            <i data-lucide="arrow-left"></i>
            <span>Kembali ke Dashboard</span>
        </a>

        <div class="top-title">
            Sertifikat
        </div>

        <div class="profile-mini">

            <div class="profile-mini-avatar">

                @if(auth()->user()->profile_photo ?? false)
                <img src="{{ asset('storage/' . auth()->user()->profile_photo) }}" alt="Foto Profil">
                @else
                {{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}
                @endif

            </div>

            <span class="profile-mini-name">
                {{ auth()->user()->name ?? 'User' }}
            </span>

        </div>

    </header>


    <main class="certificate-page">

        {{-- =========================
             HEADER
        ========================== --}}

        <div class="page-heading">

            <div class="heading-label">
                <span></span>
                Pencapaianmu
            </div>

            <h1>
                Sertifikat <span>SkillCareerAI.</span>
            </h1>

            <p>
                Sertifikat akan diterbitkan secara otomatis setelah kamu
                menyelesaikan seluruh tahapan pembelajaran dan project.
            </p>

        </div>


        {{-- =====================================================
             CEK SERTIFIKAT
             Jika controller sudah mengirim $certificate,
             bagian ini bisa digunakan.
        ====================================================== --}}

        @if(isset($certificate) && $certificate)

        {{-- =========================
                 SUDAH LULUS
            ========================== --}}

        <div class="certificate-result show">

            <div class="success-banner">

                <div class="success-banner-icon">
                    <i data-lucide="badge-check"></i>
                </div>

                <div>
                    <h3>
                        Sertifikat berhasil diterbitkan!
                    </h3>

                    <p>
                        Selamat, seluruh persyaratan pembelajaranmu
                        telah berhasil diselesaikan.
                    </p>
                </div>

            </div>


            <div class="certificate-card">

                <div class="certificate-inner">

                    <div class="certificate-logo">
                        SkillCareerAI
                    </div>

                    <div class="certificate-small">
                        Certificate of Achievement
                    </div>

                    <h2>
                        Sertifikat Penyelesaian
                    </h2>

                    <p class="certificate-desc">
                        Dengan ini menyatakan bahwa
                    </p>

                    <div class="certificate-name">
                        {{ auth()->user()->name ?? 'Nama User' }}
                    </div>

                    <p class="certificate-desc">
                        telah berhasil menyelesaikan seluruh rangkaian
                        pembelajaran pada roadmap
                    </p>

                    <div class="certificate-roadmap">
                        {{ $certificate->roadmap_name ?? 'Full Stack Developer' }}
                    </div>


                    <div class="certificate-meta">

                        <div class="meta-item">
                            <span>Nomor Sertifikat</span>

                            <strong>
                                {{ $certificate->certificate_number ?? 'SCAI-2026-000001' }}
                            </strong>
                        </div>

                        <div class="meta-item">
                            <span>Tanggal Terbit</span>

                            <strong>
                                {{ isset($certificate->issued_at)
                                        ? \Carbon\Carbon::parse($certificate->issued_at)->format('d M Y')
                                        : now()->format('d M Y') }}
                            </strong>
                        </div>

                    </div>

                </div>

            </div>


            <div class="certificate-actions">

                <button type="button" class="btn" onclick="window.print()">
                    <i data-lucide="printer"></i>
                    Cetak
                </button>

                @if(isset($certificate->pdf_path) && $certificate->pdf_path)

                <a href="{{ asset('storage/' . $certificate->pdf_path) }}" target="_blank" class="btn btn-primary">
                    <i data-lucide="download"></i>
                    Download PDF
                </a>

                @else

                <button type="button" class="btn btn-primary"
                    onclick="alert('File PDF sertifikat akan tersedia setelah sistem penerbitan PDF diaktifkan.')">
                    <i data-lucide="download"></i>
                    Download PDF
                </button>

                @endif

            </div>

        </div>


        @else

        {{-- =========================
                 BELUM ADA SERTIFIKAT
            ========================== --}}

        <div class="empty-certificate">

            <div class="empty-icon">
                <i data-lucide="award"></i>
            </div>

            <h2>
                Belum Ada Sertifikat
            </h2>

            <p>
                Sertifikatmu akan dibuat otomatis setelah kamu
                menyelesaikan seluruh proses pembelajaran,
                roadmap, dan project yang ditentukan.
            </p>

        </div>


        {{-- =========================
                 REQUIREMENT
            ========================== --}}

        <div class="requirements">

            <div class="requirements-header">

                <h3>
                    Syarat Mendapatkan Sertifikat
                </h3>

                <span>
                    Otomatis diterbitkan
                </span>

            </div>


            <div class="requirement-list">

                {{-- Assessment --}}
                <div class="requirement-item
                        {{ !empty($assessmentCompleted) ? 'completed' : '' }}">

                    <div class="requirement-icon">

                        @if(!empty($assessmentCompleted))
                        <i data-lucide="check"></i>
                        @else
                        <i data-lucide="clipboard-check"></i>
                        @endif

                    </div>

                    <div class="requirement-info">

                        <strong>
                            Assessment
                        </strong>

                        <span>
                            {{ !empty($assessmentCompleted)
                                    ? 'Sudah diselesaikan'
                                    : 'Belum diselesaikan' }}
                        </span>

                    </div>

                </div>


                {{-- Pembelajaran --}}
                <div class="requirement-item
                        {{ !empty($lessonsCompleted) ? 'completed' : '' }}">

                    <div class="requirement-icon">

                        @if(!empty($lessonsCompleted))
                        <i data-lucide="check"></i>
                        @else
                        <i data-lucide="book-open"></i>
                        @endif

                    </div>

                    <div class="requirement-info">

                        <strong>
                            Pembelajaran
                        </strong>

                        <span>
                            {{ !empty($lessonsCompleted)
                                    ? 'Semua modul selesai'
                                    : 'Selesaikan seluruh modul' }}
                        </span>

                    </div>

                </div>


                {{-- Project --}}
                <div class="requirement-item
                        {{ !empty($projectCompleted) ? 'completed' : '' }}">

                    <div class="requirement-icon">

                        @if(!empty($projectCompleted))
                        <i data-lucide="check"></i>
                        @else
                        <i data-lucide="folder-kanban"></i>
                        @endif

                    </div>

                    <div class="requirement-info">

                        <strong>
                            Project
                        </strong>

                        <span>
                            {{ !empty($projectCompleted)
                                    ? 'Project selesai'
                                    : 'Selesaikan project roadmap' }}
                        </span>

                    </div>

                </div>


                {{-- Roadmap --}}
                <div class="requirement-item
                        {{ !empty($roadmapCompleted) ? 'completed' : '' }}">

                    <div class="requirement-icon">

                        @if(!empty($roadmapCompleted))
                        <i data-lucide="check"></i>
                        @else
                        <i data-lucide="map"></i>
                        @endif

                    </div>

                    <div class="requirement-info">

                        <strong>
                            Roadmap
                        </strong>

                        <span>
                            {{ !empty($roadmapCompleted)
                                    ? 'Roadmap selesai'
                                    : 'Selesaikan seluruh tahapan' }}
                        </span>

                    </div>

                </div>

            </div>

        </div>

        @endif

    </main>


    <script>
    document.addEventListener('DOMContentLoaded', function() {

        if (window.lucide) {
            lucide.createIcons();
        }

    });
    </script>

</body>

</html>