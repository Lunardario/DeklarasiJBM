
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Deklarasi Sistem Ketenagalistrikan</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Segoe UI", Arial, sans-serif;
            min-height: 100vh;
            background:
                linear-gradient(135deg, #003b73 0%, #0066b3 50%, #0088cc 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        /* Background decoration */
        body::before {
            content: "";
            position: absolute;
            width: 550px;
            height: 550px;
            border-radius: 50%;
            background: rgba(255,255,255,0.06);
            top: -250px;
            right: -150px;
        }

        body::after {
            content: "";
            position: absolute;
            width: 450px;
            height: 450px;
            border-radius: 50%;
            background: rgba(255,255,255,0.05);
            bottom: -220px;
            left: -150px;
        }

        .login-wrapper {
            width: 100%;
            max-width: 1000px;
            padding: 25px;
            position: relative;
            z-index: 2;
        }

        .login-card {
            display: flex;
            min-height: 560px;
            background: #ffffff;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 25px 60px rgba(0, 30, 70, 0.30);
        }

        /* LEFT SIDE */
        .login-left {
            width: 48%;
            background:
                linear-gradient(
                    145deg,
                    rgba(0, 55, 110, 0.98),
                    rgba(0, 119, 190, 0.95)
                );
            color: white;
            padding: 55px 45px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .login-left::before {
            content: "";
            position: absolute;
            width: 350px;
            height: 350px;
            border: 1px solid rgba(255,255,255,0.15);
            border-radius: 50%;
            top: -130px;
            right: -130px;
        }

        .login-left::after {
            content: "";
            position: absolute;
            width: 250px;
            height: 250px;
            border: 1px solid rgba(255,255,255,0.10);
            border-radius: 50%;
            bottom: -100px;
            left: -100px;
        }

        .brand {
            position: relative;
            z-index: 2;
        }

        .logo {
            width: 105px;
            height: auto;
            margin-bottom: 35px;
        }

        .welcome-title {
            font-size: 30px;
            font-weight: 700;
            line-height: 1.25;
            margin-bottom: 18px;
        }

        .welcome-text {
            font-size: 15px;
            line-height: 1.7;
            color: rgba(255,255,255,0.88);
            max-width: 390px;
        }

        .system-info {
            margin-top: 40px;
            padding-top: 25px;
            border-top: 1px solid rgba(255,255,255,0.20);
            font-size: 13px;
            color: rgba(255,255,255,0.75);
        }

        /* RIGHT SIDE */
        .login-right {
            width: 52%;
            padding: 55px 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-header {
            margin-bottom: 35px;
        }

        .login-header h2 {
            color: #003b73;
            font-size: 28px;
            margin-bottom: 8px;
        }

        .login-header p {
            color: #777;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 22px;
        }

        .form-group label {
            display: block;
            color: #34495e;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .input-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #0072bc;
            font-size: 17px;
        }

        .form-control {
            width: 100%;
            height: 50px;
            border: 1px solid #dce3ea;
            border-radius: 10px;
            padding: 0 15px 0 45px;
            font-size: 14px;
            outline: none;
            transition: 0.25s;
            background: #f9fbfd;
        }

        .form-control:focus {
            border-color: #0072bc;
            background: #ffffff;
            box-shadow: 0 0 0 3px rgba(0,114,188,0.10);
        }

        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            border: none;
            background: transparent;
            cursor: pointer;
            color: #777;
            font-size: 15px;
        }

        .alert {
            padding: 12px 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 13px;
        }

        .alert-danger {
            background: #fff0f0;
            color: #c0392b;
            border: 1px solid #ffd0d0;
        }

        .btn-login {
            width: 100%;
            height: 52px;
            border: none;
            border-radius: 10px;
            background: linear-gradient(135deg, #005baa, #007bc4);
            color: white;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.25s;
            box-shadow: 0 7px 18px rgba(0,91,170,0.25);
        }

        .btn-login:hover {
            transform: translateY(-1px);
            box-shadow: 0 10px 22px rgba(0,91,170,0.30);
        }

        .footer {
            text-align: center;
            margin-top: 35px;
            color: #9aa5af;
            font-size: 12px;
            line-height: 1.6;
        }

        .footer strong {
            color: #0072bc;
        }

        /* RESPONSIVE */
        @media (max-width: 800px) {
            .login-wrapper {
                padding: 15px;
            }

            .login-card {
                flex-direction: column;
            }

            .login-left,
            .login-right {
                width: 100%;
            }

            .login-left {
                min-height: 300px;
                padding: 35px;
            }

            .login-right {
                padding: 40px 30px;
            }

            .logo {
                width: 80px;
                margin-bottom: 20px;
            }

            .welcome-title {
                font-size: 24px;
            }

            .system-info {
                margin-top: 25px;
            }
        }

        @media (max-width: 450px) {
            .login-left {
                padding: 30px 25px;
            }

            .login-right {
                padding: 35px 22px;
            }

            .welcome-title {
                font-size: 21px;
            }

            .login-header h2 {
                font-size: 24px;
            }
        }
    </style>
</head>

<body>

<div class="login-wrapper">

    <div class="login-card">

        <!-- LEFT -->
        <div class="login-left">

            <div class="brand">

                {{-- Logo PLN --}}
                <img
                    src="{{ asset('PLN icon.png') }}"
                    alt="Logo PLN"
                    class="logo"
                >

                <h1 class="welcome-title">
                    Deklarasi Sistem<br>
                    Ketenagalistrikan UITJBM
                </h1>

                <p class="welcome-text">
                    Sistem informasi untuk mendukung proses deklarasi,
                    pemantauan, dan pengelolaan kondisi sistem ketenagalistrikan
                    di lingkungan PLN Unit Induk Transmisi Jawa Bagian Timur dan Bali.
                </p>

                <div class="system-info">
                    <strong>PLN UIT Jawa Bagian Timur dan Bali</strong><br>
                    Sistem Deklarasi Kondisi Sistem Ketenagalistrikan
                </div>

            </div>

        </div>

        <!-- RIGHT -->
        <div class="login-right">

            <div class="login-header">
                <h2>Selamat Datang</h2>
                <p>Silakan masuk menggunakan akun Anda.</p>
            </div>

            {{-- Error Login --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- NIP -->
                <div class="form-group">
                    <label for="nip">NIP</label>

                    <div class="input-wrapper">
                        <span class="input-icon">👤</span>

                        <input
                            type="text"
                            id="nip"
                            name="nip"
                            class="form-control"
                            placeholder="Masukkan NIP"
                            value="{{ old('nip') }}"
                            autocomplete="username"
                            required
                        >
                    </div>
                </div>

                <!-- PASSWORD -->
                <div class="form-group">
                    <label for="password">Password</label>

                    <div class="input-wrapper">
                        <span class="input-icon">🔒</span>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="form-control"
                            placeholder="Masukkan password"
                            autocomplete="current-password"
                            required
                        >

                        <button
                            type="button"
                            class="password-toggle"
                            onclick="togglePassword()"
                            id="toggleButton"
                        >
                            👁
                        </button>
                    </div>
                </div>

                <!-- BUTTON -->
                <button type="submit" class="btn-login">
                    Login
                </button>

            </form>

            <div class="footer">
                © {{ date('Y') }}
                <strong>PLN UIT Jawa Bagian Timur dan Bali</strong><br>
                Deklarasi Kondisi Sistem Ketenagalistrikan
            </div>

        </div>

    </div>

</div>

<script>
    function togglePassword() {

        const password = document.getElementById('password');
        const button = document.getElementById('toggleButton');

        if (password.type === 'password') {
            password.type = 'text';
            button.innerHTML = '🙈';
        } else {
            password.type = 'password';
            button.innerHTML = '👁';
        }
    }
</script>

</body>
</html>

