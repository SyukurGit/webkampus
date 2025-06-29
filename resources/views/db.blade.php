<!DOCTYPE html>
{{-- Mengatur bahasa dokumen sesuai dengan bahasa aplikasi --}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Judul dinamis dari file bahasa --}}
    <title>{{ __('db.title') }}</title>

    {{-- Memuat file app.css menggunakan Vite --}}
    @vite('resources/css/app.css')

</head>
<body>

    <nav class="navbar">
        {{-- Brand/Logo dinamis dari file bahasa --}}
        <a href="#" class="navbar-brand">{{ __('db.navbar_brand') }}</a>
        <div class="navbar-actions">
            <div class="lang-switch">
                {{-- Tombol ganti bahasa ke ID, dengan class 'active' jika bahasa saat ini adalah ID --}}
                <a href="{{ route('lang.switch', 'id') }}" class="{{ app()->getLocale() == 'id' ? 'active' : '' }}">ID</a>
                {{-- Tombol ganti bahasa ke EN, dengan class 'active' jika bahasa saat ini adalah EN --}}
                <a href="{{ route('lang.switch', 'en') }}" class="{{ app()->getLocale() == 'en' ? 'active' : '' }}">EN</a>
            </div>
            {{-- Tombol login yang mengarah ke route bernama 'login' --}}
            <a href="{{ route('login') }}" class="login-btn">{{ __('db.login_button') }}</a>
        </div>
    </nav>

    <main class="main-content">
        {{-- Konten utama dinamis dari file bahasa --}}
        <h1>{{ __('db.welcome_heading') }}</h1>
        <p>{{ __('db.welcome_p') }}</p>
    </main>

</body>
</html>