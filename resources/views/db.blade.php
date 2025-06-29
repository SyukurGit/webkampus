<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('db.title') }}</title>
    @vite('resources/css/app.css')
</head>
<body>

    <nav class="navbar">
        <a href="{{ route('dashboard') }}" class="navbar-brand">{{ __('db.navbar_brand') }}</a>
        <div class="navbar-actions">
            <div class="lang-switch">
                <a href="{{ route('lang.switch', 'id') }}" class="{{ app()->getLocale() == 'id' ? 'active' : '' }}">ID</a>
                <a href="{{ route('lang.switch', 'en') }}" class="{{ app()->getLocale() == 'en' ? 'active' : '' }}">EN</a>
            </div>

            {{-- Logika untuk menampilkan tombol Login atau Logout --}}
            @auth
                {{-- JIKA SUDAH LOGIN --}}
                <span class="text-gray-800">Hi, {{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="login-btn" style="background-color: #e74c3c;">Logout</button>
                </form>
            @else
                {{-- JIKA BELUM LOGIN (PENGUNJUNG BIASA) --}}
                <a href="{{ route('login') }}" class="login-btn">{{ __('db.login_button') }}</a>
            @endguest

        </div>
    </nav>

    <main class="main-content">
        <h1>{{ __('db.welcome_heading') }}</h1>
        <p>{{ __('db.welcome_p') }}</p>
    </main>

</body>
</html>