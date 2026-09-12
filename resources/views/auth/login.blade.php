<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - SkillCareerAI</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        min-height: 100vh;
        font-family: 'Inter', sans-serif;

        background:
            radial-gradient(circle at 80% 20%,
                rgba(49, 85, 255, .10),
                transparent 35%),
            linear-gradient(135deg,
                #f8faff,
                #ffffff);

        display: flex;
        align-items: center;
        justify-content: center;

        color: #111827;
    }

    button,
    input {
        font-family: inherit;
    }

    .auth-wrapper {
        width: min(1050px, 92%);
        min-height: 620px;

        display: grid;
        grid-template-columns: 1fr 1fr;

        background: white;

        border: 1px solid #e8ebf3;
        border-radius: 24px;

        overflow: hidden;

        box-shadow:
            0 25px 70px rgba(15, 23, 42, .10);
    }

    /* =========================
           LEFT
        ========================== */

    .auth-info {
        position: relative;

        padding: 55px;

        display: flex;
        flex-direction: column;
        justify-content: center;

        color: white;

        background:
            radial-gradient(circle at 80% 20%,
                rgba(126, 100, 255, .55),
                transparent 35%),
            linear-gradient(145deg,
                #3155ff,
                #3921b8);

        overflow: hidden;
    }

    .auth-info::before {
        content: '';

        position: absolute;

        width: 300px;
        height: 300px;

        right: -120px;
        bottom: -100px;

        border-radius: 50%;

        border: 1px solid rgba(255, 255, 255, .15);
    }

    .auth-info::after {
        content: '';

        position: absolute;

        width: 180px;
        height: 180px;

        left: -80px;
        top: -60px;

        border-radius: 50%;

        background: rgba(255, 255, 255, .05);
    }

    .brand {
        position: absolute;

        top: 35px;
        left: 45px;

        font-size: 21px;
        font-weight: 800;
    }

    .brand span {
        color: #bfc9ff;
    }

    .auth-info-content {
        position: relative;
        z-index: 2;
    }

    .auth-info h1 {
        font-size: 40px;
        line-height: 1.15;

        letter-spacing: -1.5px;

        margin-bottom: 20px;
    }

    .auth-info p {
        max-width: 400px;

        color: rgba(255, 255, 255, .80);

        font-size: 14px;
        line-height: 1.8;
    }

    .benefits {
        margin-top: 35px;

        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .benefit {
        display: flex;
        align-items: center;
        gap: 12px;

        font-size: 13px;
    }

    .benefit-icon {
        width: 30px;
        height: 30px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 8px;

        background: rgba(255, 255, 255, .14);
    }

    /* =========================
           RIGHT
        ========================== */

    .auth-form-wrapper {
        padding: 55px;

        display: flex;
        align-items: center;
        justify-content: center;
    }

    .auth-form {
        width: 100%;
        max-width: 390px;
    }

    .auth-header {
        margin-bottom: 30px;
    }

    .auth-header h2 {
        font-size: 29px;
        font-weight: 800;

        color: #10182c;
    }

    .auth-header p {
        margin-top: 8px;

        color: #737b8c;
        font-size: 13px;
    }

    /* =========================
           ALERT
        ========================== */

    .alert {
        padding: 12px 14px;

        margin-bottom: 20px;

        border-radius: 9px;

        font-size: 12px;
        line-height: 1.5;
    }

    .alert-error {
        color: #b42318;

        background: #fff1f0;

        border: 1px solid #ffd6d2;
    }

    .alert-success {
        color: #087443;

        background: #ecfdf3;

        border: 1px solid #abefc6;
    }

    /* =========================
           FORM
        ========================== */

    .form-group {
        margin-bottom: 19px;
    }

    .form-group label {
        display: block;

        margin-bottom: 7px;

        font-size: 13px;
        font-weight: 600;

        color: #374151;
    }

    .form-group input {
        width: 100%;

        padding: 13px 14px;

        border: 1px solid #e1e5ee;
        border-radius: 9px;

        outline: none;

        font-family: inherit;
        font-size: 13px;

        transition: .2s ease;
    }

    .form-group input:focus {
        border-color: #3155ff;

        box-shadow:
            0 0 0 3px rgba(49, 85, 255, .08);
    }

    .form-group input.is-invalid {
        border-color: #e6475f;
    }

    .field-error {
        margin-top: 6px;

        color: #e6475f;

        font-size: 11px;
    }

    /* =========================
           PASSWORD OPTIONS
        ========================== */

    .password-options {
        display: flex;
        justify-content: space-between;
        align-items: center;

        margin-bottom: 22px;

        font-size: 12px;
    }

    .remember {
        display: flex;
        align-items: center;
        gap: 7px;

        color: #6b7280;

        cursor: pointer;
    }

    .remember input {
        width: auto;

        accent-color: #3155ff;
    }

    .forgot {
        color: #3155ff;

        font-weight: 600;

        text-decoration: none;
    }

    .forgot:hover {
        text-decoration: underline;
    }

    /* =========================
           BUTTON
        ========================== */

    .btn-submit {
        width: 100%;

        padding: 13px;

        border: none;
        border-radius: 9px;

        color: white;

        background:
            linear-gradient(135deg,
                #3155ff,
                #5840ef);

        font-family: inherit;
        font-size: 14px;
        font-weight: 700;

        cursor: pointer;

        box-shadow:
            0 8px 20px rgba(49, 85, 255, .22);

        transition: .25s ease;
    }

    .btn-submit:hover {
        transform: translateY(-2px);

        box-shadow:
            0 12px 25px rgba(49, 85, 255, .30);
    }

    .btn-submit:active {
        transform: translateY(0);
    }

    /* =========================
           FOOTER
        ========================== */

    .auth-footer {
        margin-top: 25px;

        text-align: center;

        color: #737b8c;
        font-size: 12px;
    }

    .auth-footer a {
        color: #3155ff;

        font-weight: 700;

        text-decoration: none;
    }

    .auth-footer a:hover {
        text-decoration: underline;
    }

    .back-home {
        display: block;

        margin-top: 25px;

        text-align: center;

        color: #8a92a2;

        font-size: 12px;

        text-decoration: none;
    }

    .back-home:hover {
        color: #3155ff;
    }

    /* =========================
           RESPONSIVE
        ========================== */

    @media (max-width: 768px) {

        .auth-wrapper {
            grid-template-columns: 1fr;

            min-height: auto;
        }

        .auth-info {
            display: none;
        }

        .auth-form-wrapper {
            padding: 40px 25px;
        }
    }

    @media (max-width: 450px) {

        body {
            padding: 15px;
        }

        .auth-wrapper {
            width: 100%;

            border-radius: 18px;
        }

        .auth-form-wrapper {
            padding: 35px 22px;
        }

        .auth-header h2 {
            font-size: 25px;
        }
    }
    </style>
</head>

<body>

    <div class="auth-wrapper">

        {{-- =====================================================
             LEFT SIDE
        ====================================================== --}}

        <div class="auth-info">

            <div class="brand">
                SkillCareer <span>AI</span>
            </div>

            <div class="auth-info-content">

                <h1>
                    Selamat Datang
                    Kembali!
                </h1>

                <p>
                    Lanjutkan perjalananmu untuk menemukan karier,
                    mempelajari skill baru, dan membangun masa depan
                    bersama SkillCareerAI.
                </p>

                <div class="benefits">

                    <div class="benefit">


                        - AI Career Assessment

                    </div>

                    <div class="benefit">

                        - Roadmap belajar personal

                    </div>

                    <div class="benefit">



                        - AI Mentor 24/7

                    </div>

                </div>

            </div>

        </div>


        {{-- =====================================================
             RIGHT SIDE
        ====================================================== --}}

        <div class="auth-form-wrapper">

            <form class="auth-form" method="POST" action="{{ route('login') }}">

                @csrf

                {{-- HEADER --}}

                <div class="auth-header">

                    <h2>
                        Masuk ke Akun
                    </h2>

                    <p>
                        Masukkan data akunmu untuk melanjutkan.
                    </p>

                </div>


                {{-- =================================================
                     SUCCESS MESSAGE
                ================================================== --}}

                @if (session('success'))

                <div class="alert alert-success">
                    {{ session('success') }}
                </div>

                @endif


                {{-- =================================================
                     GENERAL ERROR
                ================================================== --}}

                @if ($errors->any())

                <div class="alert alert-error">

                    {{ $errors->first() }}

                </div>

                @endif


                {{-- =================================================
                     EMAIL
                ================================================== --}}

                <div class="form-group">

                    <label for="email">
                        Email
                    </label>

                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                        placeholder="Masukkan email kamu" class="@error('email') is-invalid @enderror"
                        autocomplete="email" required autofocus>

                    @error('email')

                    <div class="field-error">
                        {{ $message }}
                    </div>

                    @enderror

                </div>


                {{-- =================================================
                     PASSWORD
                ================================================== --}}

                <div class="form-group">

                    <label for="password">
                        Password
                    </label>

                    <input type="password" id="password" name="password" placeholder="Masukkan password"
                        class="@error('password') is-invalid @enderror" autocomplete="current-password" required>

                    @error('password')

                    <div class="field-error">
                        {{ $message }}
                    </div>

                    @enderror

                </div>


                {{-- =================================================
                     REMEMBER + FORGOT
                ================================================== --}}

                <div class="password-options">

                    <label class="remember">

                        <input type="checkbox" name="remember" value="1">

                        Ingat saya

                    </label>

                    {{-- Belum membuat fitur reset password,
                         jadi link dibuat nonaktif sementara --}}

                    <a href="#" class="forgot" onclick="return false;" title="Fitur lupa password akan segera tersedia">
                        Lupa password?
                    </a>

                </div>


                {{-- =================================================
                     SUBMIT
                ================================================== --}}

                <button type="submit" class="btn-submit">
                    Masuk
                </button>


                {{-- =================================================
                     REGISTER
                ================================================== --}}

                <div class="auth-footer">

                    Belum punya akun?

                    <a href="{{ route('register') }}">
                        Daftar sekarang
                    </a>

                </div>


                {{-- =================================================
                     BACK HOME
                ================================================== --}}

                <a href="{{ route('home') }}" class="back-home">
                    Kembali ke halaman utama
                </a>

            </form>

        </div>

    </div>

</body>

</html>