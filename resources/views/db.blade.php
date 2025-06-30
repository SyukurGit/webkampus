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

    <main class="main-content px-4 md:px-0">
    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold text-center mb-12">{{ __('db.welcome_heading') }}</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            {{-- Loop untuk setiap item berita --}}
            @forelse ($newsItems as $news)
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                    {{-- Tampilkan gambar jika ada --}}
                    @if ($news->image)
                        <img src="{{ asset('storage/' . $news->image) }}" alt="News Image" class="w-full h-48 object-cover">
                    @else
                        {{-- Gambar placeholder jika tidak ada gambar --}}
                        <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                            <span class="text-gray-500">No Image</span>
                        </div>
                    @endif

                    <div class="p-6">
                        {{-- Logika untuk menampilkan judul sesuai bahasa --}}
                        <h2 class="text-xl font-bold mb-2">
                            @if (app()->getLocale() == 'id')
                                {{ $news->title_id }}
                            @else
                                {{ $news->title_en }}
                            @endif
                        </h2>

                        {{-- Logika untuk menampilkan konten sesuai bahasa --}}
                        <p class="text-gray-700 text-base">
                            @if (app()->getLocale() == 'id')
                                {{ Str::limit($news->content_id, 150) }}
                            @else
                                {{ Str::limit($news->content_en, 150) }}
                            @endif
                        </p>
                        <div class="mt-4 text-sm text-gray-500">
                            Dibuat pada: {{ $news->created_at->format('d M Y') }}
                        </div>
                    </div>
                </div>
            @empty
                {{-- Pesan jika tidak ada berita sama sekali --}}
                <div class="col-span-full text-center py-12">
                    <p class="text-gray-500 text-xl">Belum ada berita yang dipublikasikan.</p>
                </div>
            @endforelse

        </div>
    </div>
</main>

</body>
</html>