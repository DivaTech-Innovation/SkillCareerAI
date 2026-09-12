<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daftar - SkillCareerAI</title>

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
            radial-gradient(circle at 20% 20%,
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

    .register-wrapper {
        width: min(1050px, 92%);
        min-height: 650px;

        display: grid;
        grid-template-columns: 1fr 1fr;

        background: white;

        border: 1px solid #e8ebf3;

        border-radius: 24px;

        overflow: hidden;

        box-shadow:
            0 25px 70px rgba(15, 23, 42, .10);
    }

    /* LEFT */

    .register-info {
        padding: 55px;

        display: flex;
        align-items: center;

        color: white;

        background:
            radial-gradient(circle at 20% 80%,
                rgba(126, 100, 255, .35),
                transparent 35%),
            linear-gradient(145deg,
                #3155ff,
                #3921b8);
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

    .register-info h1 {
        font-size: 39px;

        line-height: 1.15;

        letter-spacing: -1.5px;

        margin-bottom: 20px;
    }

    .register-info p {
        max-width: 400px;

        color: rgba(255, 255, 255, .80);

        font-size: 14px;

        line-height: 1.8;
    }

    .register-points {
        margin-top: 35px;

        display: flex;
        flex-direction: column;

        gap: 15px;
    }

    .point {
        display: flex;
        align-items: center;

        gap: 12px;

        font-size: 13px;
    }

    .point-icon {
        width: 30px;
        height: 30px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 8px;

        background: rgba(255, 255, 255, .14);
    }

    /* RIGHT */

    .register-form-wrapper {
        padding: 50px;

        display: flex;
        align-items: center;
        justify-content: center;
    }

    .register-form {
        width: 100%;
        max-width: 390px;
    }

    .header {
        margin-bottom: 27px;
    }

    .header h2 {
        font-size: 29px;

        font-weight: 800;

        color: #10182c;
    }

    .header p {
        margin-top: 8px;

        color: #737b8c;

        font-size: 13px;
    }

    .form-group {
        margin-bottom: 17px;
    }

    .form-group label {
        display: block;

        margin-bottom: 7px;

        color: #374151;

        font-size: 13px;
        font-weight: 600;
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

    .error {
        margin-top: 5px;

        color: #d92d20;

        font-size: 11px;
    }

    .success {
        margin-bottom: 18px;

        padding: 11px 13px;

        border-radius: 9px;

        background: #ecfdf5;

        border: 1px solid #a7f3d0;

        color: #047857;

        font-size: 12px;
    }

    .terms {
        margin: 20px 0;

        color: #737b8c;

        font-size: 11px;

        line-height: 1.6;
    }

    .terms a {
        color: #3155ff;

        font-weight: 600;
    }

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
    }

    .login-link {
        margin-top: 22px;

        text-align: center;

        color: #737b8c;

        font-size: 12px;
    }

    .login-link a {
        color: #3155ff;

        font-weight: 700;
    }

    .back-home {
        display: block;

        margin-top: 22px;

        text-align: center;

        color: #8a92a2;

        font-size: 12px;
    }

    @media(max-width: 768px) {

        .register-wrapper {
            grid-template-columns: 1fr;
            min-height: auto;
        }

        .register-info {
            display: none;
        }

        .register-form-wrapper {
            padding: 40px 25px;
        }
    }
    </style>

</head>

<body>

    <div class="register-wrapper">

        {{-- LEFT --}}

        <div class="register-info">

            <div>

                <h1>
                    Bangun Masa Depanmu
                    Bersama Kami
                </h1>

                <p>
                    Buat akun gratis dan mulai temukan karier
                    yang sesuai dengan minat, kemampuan,
                    dan tujuanmu.
                </p>

                <div class="register-points">

                    <div class="point">


                        - Rekomendasi karier berbasis AI

                    </div>

                    <div class="point">


                        - Roadmap belajar personal

                    </div>

                    <div class="point">


                        - Sertifikat setelah menyelesaikan pembelajaran

                    </div>

                </div>

            </div>

        </div>


        {{-- RIGHT --}}

        <div class="register-form-wrapper">

            <form class="register-form" method="POST" action="{{ route('register') }}">

                @csrf

                <div class="header">

                    <h2>
                        Buat Akun
                    </h2>

                    <p>
                        Daftar gratis dan mulai perjalanan kariermu.
                    </p>

                </div>


                {{-- SUCCESS MESSAGE --}}

                @if(session('success'))

                <div class="success">
                    {{ session('success') }}
                </div>

                @endif


                {{-- NAME --}}

                <div class="form-group">

                    <label for="name">
                        Nama Lengkap
                    </label>

                    <input type="text" id="name" name="name" value="{{ old('name') }}"
                        placeholder="Masukkan nama lengkap" required autofocus>

                    @error('name')

                    <div class="error">
                        {{ $message }}
                    </div>

                    @enderror

                </div>


                {{-- EMAIL --}}

                <div class="form-group">

                    <label for="email">
                        Email
                    </label>

                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                        placeholder="contoh@email.com" required>

                    @error('email')

                    <div class="error">
                        {{ $message }}
                    </div>

                    @enderror

                </div>


                {{-- PASSWORD --}}

                <div class="form-group">

                    <label for="password">
                        Password
                    </label>

                    <input type="password" id="password" name="password" placeholder="Minimal 8 karakter" required>

                    @error('password')

                    <div class="error">
                        {{ $message }}
                    </div>

                    @enderror

                </div>


                {{-- CONFIRM PASSWORD --}}

                <div class="form-group">

                    <label for="password_confirmation">
                        Konfirmasi Password
                    </label>

                    <input type="password" id="password_confirmation" name="password_confirmation"
                        placeholder="Ulangi password" required>

                </div>


                <div class="terms">

                    Dengan membuat akun, kamu menyetujui

                    <a href="#">
                        Syarat & Ketentuan
                    </a>

                    dan

                    <a href="#">
                        Kebijakan Privasi
                    </a>

                    SkillCareerAI.

                </div>


                <button type="submit" class="btn-submit">
                    Buat Akun
                </button>


                <div class="login-link">

                    Sudah punya akun?

                    <a href="{{ route('login') }}">
                        Masuk sekarang
                    </a>

                </div>


                <a href="{{ url('/') }}" class="back-home">
                    ← Kembali ke halaman utama
                </a>

            </form>

        </div>

    </div>

</body>

</html>