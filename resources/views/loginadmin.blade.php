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
<body class="flex items-center justify-center min-h-screen">

    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center text-gray-800">Admin Login</h2>

        {{-- Formulir Login --}}
        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            {{-- Token Keamanan CSRF --}}
            @csrf

            {{-- Input Email --}}
            <div>
                <label for="email" class="text-sm font-medium text-gray-700">Email</label>
                <input id="email" name="email" type="email" autocomplete="email" required
                       class="w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                       value="{{ old('email') }}">
                
                {{-- Menampilkan pesan error validasi umum --}}
                @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            {{-- Input Password --}}
            <div>
                <label for="password" class="text-sm font-medium text-gray-700">Password</label>
                <input id="password" name="password" type="password" autocomplete="current-password" required
                       class="w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div>
                <button type="submit"
                        class="w-full px-4 py-2 font-medium text-white bg-indigo-600 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Sign In
                </button>
            </div>
        </form>
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