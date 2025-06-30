<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel') - {{ config('app.name') }}</title>
    {{-- Baris ini sangat penting untuk memuat CSS dari Vite --}}
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans">

    <div class="flex h-screen bg-gray-100">
        <aside class="w-64 bg-gray-800 text-gray-200 flex flex-col flex-shrink-0">
            <div class="h-16 flex items-center justify-center bg-gray-900 border-b border-gray-700">
                <a href="{{ route('dashboard') }}" target="_blank" class="text-xl font-bold tracking-wider text-white">
                    KAMPUS SITE
                </a>
            </div>
            <nav class="flex-1 px-2 py-4">
                <a href="{{ route('admin.news.index') }}" class="flex items-center px-4 py-2 text-gray-300 rounded-md hover:bg-gray-700 @if(request()->routeIs('admin.news.index')) bg-gray-700 text-white @endif">
                    <span class="font-medium">Daftar Berita</span>
                </a>
                <a href="{{ route('admin.input') }}" class="flex items-center px-4 py-2 mt-2 text-gray-300 rounded-md hover:bg-gray-700 @if(request()->routeIs('admin.input')) bg-gray-700 text-white @endif">
                    <span class="font-medium">Tambah Berita</span>
                </a>
            </nav>
        </aside>

        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="h-16 bg-white shadow-md flex justify-between items-center px-6">
                <h1 class="text-2xl font-semibold text-gray-700">@yield('header', 'Dashboard')</h1>
                <div class="flex items-center">
                    <span class="mr-4 text-gray-600">Hi, {{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-sm bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                            Logout
                        </button>
                    </form>
                </div>
            </header>

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200 p-6">
                @yield('content')
            </main>
        </div>
    </div>

</body>
</html>