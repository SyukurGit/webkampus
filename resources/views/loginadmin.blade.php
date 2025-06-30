<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - {{ config('app.name') }}</title>
    
    {{-- Memuat CSS Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            min-height: 100vh;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center align-items-center login-container">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow-lg border-0">
                    <div class="card-body p-4 p-md-5">
                        <div class="text-center mb-4">
                            <h3 class="fw-bold">Admin Panel Login</h3>
                            <p class="text-muted">Silakan masuk untuk melanjutkan</p>
                        </div>

                        {{-- Menampilkan pesan error validasi --}}
                        @error('email')
                            <div class="alert alert-danger py-2" role="alert">
                                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                {{ $message }}
                            </div>
                        @enderror

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="nama@contoh.com" value="{{ old('email') }}" required>
                                <label for="email">Alamat Email</label>
                            </div>
                            
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                <label for="password">Password</label>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg fw-bold">
                                    Sign In
                                </button>
                            </div>
                        </form>
                        <div class="text-center mt-4">
                            <a href="{{ route('dashboard') }}" class="text-decoration-none">&larr; Kembali ke Situs Utama</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Memuat JS Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>