<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>
        @if (app()->getLocale() == 'id')
            {{ $news->title_id }}
        @else
            {{ $news->title_en }}
        @endif
        - {{ config('app.name') }}
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans">

    {{-- ========================================================== --}}
    {{-- NAVBAR YANG SUDAH DIPERBARUI DENGAN LOGO --}}
    {{-- ========================================================== --}}
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-6 py-3 flex justify-between items-center">
            <a href="{{ route('dashboard') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Kampus Site Logo"
     class="h-17 w-auto object-contain transition-all duration-200 hover:scale-105">
            </a>
            
            <div class="relative" x-data="{ open: false }">
                {{-- Dropdown bahasa (tidak berubah) --}}
                <button @click="open = !open" class="flex items-center space-x-2 border rounded-md px-3 py-1.5 text-sm text-gray-600 hover:bg-gray-100 focus:outline-none">
                    @if(app()->getLocale() == 'id')
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M0 0h16v8H0z" fill="#ce1126"/><path d="M0 8h16v8H0z" fill="#fff"/></svg>
                        <span>ID</span>
                    @else
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A11.953 11.953 0 0112 16.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 003 12c0 .778.099 1.533.284 2.253m0 0a11.998 11.998 0 01-2.28 2.28"/></svg>
                        <span>EN</span>
                    @endif
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div x-show="open" @click.away="open = false" x-transition class="absolute right-0 mt-2 py-2 w-40 bg-white rounded-md shadow-xl z-20">
                    <a href="{{ route('lang.switch', 'id') }}" class="flex items-center space-x-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M0 0h16v8H0z" fill="#ce1126"/><path d="M0 8h16v8H0z" fill="#fff"/></svg>
                        <span>Indonesia</span>
                    </a>
                    <a href="{{ route('lang.switch', 'en') }}" class="flex items-center space-x-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A11.953 11.953 0 0112 16.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 003 12c0 .778.099 1.533.284 2.253m0 0a11.998 11.998 0 01-2.28 2.28"/></svg>
                        <span>English</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    {{-- Konten Artikel (tidak berubah)--}}
    <main class="container mx-auto my-10 px-6">
        <div class="max-w-3xl mx-auto bg-white p-6 md:p-8 rounded-lg shadow-md">
            <article>
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3 leading-tight">
                    @if (app()->getLocale() == 'id')
                        {{ $news->title_id }}
                    @else
                        {{ $news->title_en }}
                    @endif
                </h1>
                <p class="text-gray-500 mb-6">
    Dipublikasikan oleh <span class="font-bold text-gray-700">ADMIN PPS</span> pada {{ $news->created_at->format('d F Y') }}
</p>

                @if($news->image)
                    <img src="{{ asset('storage/' . $news->image) }}" class="w-full h-auto rounded-lg mb-6" alt="Featured Image">
                @endif
                <div class="prose max-w-none text-gray-800 text-lg leading-relaxed">
                    @if (app()->getLocale() == 'id')
                        {!! nl2br(e($news->content_id)) !!}
                    @else
                        {!! nl2br(e($news->content_en)) !!}
                    @endif
                </div>
            </article>
        </div>
    </main>
    
    <footer class="text-center py-6 mt-10 bg-white border-t">
        <div class="container mx-auto">
            <p class="text-gray-600">&copy; {{ date('Y') }} {{ config('app.name') }}. All Rights Reserved.</p>
        </div>
    </footer>

</body>
</html>