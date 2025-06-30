<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Judul halaman akan dinamis, dengan fallback "Admin Panel" --}}
    <title>@yield('title', 'Admin Panel') - {{ config('app.name') }}</title>
    @vite('resources/css/app.css')
    <style>
        /* Sedikit tambahan style untuk sidebar aktif */
        .sidebar-link.active {
            background-color: #4a5568; /* bg-gray-700 */
            color: #ffffff; /* text-white */
        }
    </style>
</head>
<body class="bg-gray-100 font-sans">

    <div class="flex h-screen">
        <aside class="w-64 bg-gray-800 text-white flex-shrink-0">
            <div class="p-4 text-2xl font-bold border-b border-gray-700">
                <a href="{{ route('dashboard') }}" target="_blank">Kampus Web</a>
            </div>
            <nav class="mt-4">
    {{-- Link ke Daftar Berita --}}
    <a href="{{ route('admin.news.index') }}" class="sidebar-link ... @if(request()->routeIs('admin.news.index')) active @endif">
        Daftar Berita
    </a>
    {{-- Link ke Tambah Berita --}}
    <a href="{{ route('admin.input') }}" class="sidebar-link ... @if(request()->routeIs('admin.input')) active @endif">
        Tambah Berita Baru
    </a>
</nav>
        </aside>

        <div class="flex-1 flex flex-col">
            <header class="bg-white shadow-md p-4 flex justify-between items-center">
                <h1 class="text-xl font-semibold text-gray-800">@yield('header', 'Dashboard Admin')</h1>
                <div class="flex items-center">
                    <span class="mr-4">Hi, {{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            Logout
                        </button>
                    </form>
                </div>
            </header>

            <main class="flex-1 p-6 overflow-y-auto">
                {{-- Di sinilah konten dari setiap halaman admin akan disuntikkan --}}
                @yield('content')
            </main>
        </div>
    </div>

</body>
</html>