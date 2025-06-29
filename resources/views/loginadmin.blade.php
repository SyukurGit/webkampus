<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        /* Pengaturan dasar dan latar belakang */
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #f4f7f6; /* Warna latar yang sama dengan dashboard */
            color: #333;
            /* Menggunakan Flexbox untuk memusatkan kotak login di tengah halaman */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Kontainer utama untuk kotak login */
        .login-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px; /* Lebar maksimum kotak login */
            box-sizing: border-box;
        }

        /* Judul form (Admin Login / Lupa Password) */
        .login-container h2 {
            text-align: center;
            color: #2c3e50;
            margin-top: 0;
            margin-bottom: 25px;
        }

        /* Grup input (label + field) */
        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
            box-sizing: border-box; /* Agar padding tidak mengubah lebar */
        }
        
        .input-group input:focus {
            outline: none;
            border-color: #3498db; /* Warna border saat input aktif */
        }

        /* Tombol utama */
        .btn {
            width: 100%;
            padding: 12px;
            background-color: #3498db; /* Warna biru yang sama dengan dashboard */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1em;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #2980b9; /* Warna biru lebih gelap */
        }

        /* Link untuk "Lupa Password" dan "Kembali ke Login" */
        .form-link {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #3498db;
            text-decoration: none;
            font-size: 0.9em;
        }
        
        .form-link:hover {
            text-decoration: underline;
        }

        /* Paragraf kecil untuk form lupa password */
        #forgot-password-form p {
            text-align: center;
            font-size: 0.9em;
            color: #666;
            margin-bottom: 20px;
        }

        /* Awalnya, sembunyikan form lupa password */
        #forgot-password-form {
            display: none;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <div id="login-form">
            <form action="#" method="post">
                <h2>Admin Login</h2>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="btn">Login</button>
                <a href="{{ route('adminn') }}" id="show-forgot-password" class="form-link">Lupa Password?</a>
            </form>
        </div>

        <div id="forgot-password-form">
            <form action="#" method="post">
                <h2>Lupa Password</h2>
                <p>Masukkan email Anda untuk menerima link reset password.</p>
                <div class="input-group">
                    <label for="forgot-email">Email</label>
                    <input type="email" id="forgot-email" name="forgot-email" required>
                </div>
                <button type="submit" class="btn">Kirim Link Reset</button>
                <a href="#" id="show-login" class="form-link">Kembali ke Login</a>
            </form>
        </div>
    </div>

    <script>
        // Ambil elemen dari DOM
        const loginForm = document.getElementById('login-form');
        const forgotPasswordForm = document.getElementById('forgot-password-form');
        const showForgotPasswordLink = document.getElementById('show-forgot-password');
        const showLoginLink = document.getElementById('show-login');

        // Tambahkan event saat link 'Lupa Password?' diklik
        showForgotPasswordLink.addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah link berpindah halaman
            loginForm.style.display = 'none'; // Sembunyikan form login
            forgotPasswordForm.style.display = 'block'; // Tampilkan form lupa password
        });

        // Tambahkan event saat link 'Kembali ke Login' diklik
        showLoginLink.addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah link berpindah halaman
            forgotPasswordForm.style.display = 'none'; // Sembunyikan form lupa password
            loginForm.style.display = 'block'; // Tampilkan form login
        });
    </script>

</body>
</html>