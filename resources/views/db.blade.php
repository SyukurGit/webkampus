<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('db.title') ?? 'KAMPUS SITE' }} - {{ config('app.name') }}</title>
    
    {{-- Memuat file CSS dan JS yang sudah dikompilasi oleh Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans">

    {{-- ================================================================= --}}
    {{-- Bagian 1: Navigasi Utama (Navbar) --}}
    {{-- ================================================================= --}}
    <nav class="bg-white shadow-md sticky top-0 z-50" x-data="{ mobileMenuOpen: false }">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            
            <div class="flex-shrink-0">
                <a href="{{ route('dashboard') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="Kampus Site Logo" class="h-10 w-auto">
                </a>
            </div>

            <div class="hidden md:block">
                <div class="relative" x-data="{ langOpen: false }">
                    <button @click="langOpen = !langOpen" class="flex items-center space-x-2 border rounded-md px-3 py-1.5 text-sm text-gray-600 hover:bg-gray-100 focus:outline-none">
                        @if(app()->getLocale() == 'id')
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M0 0h16v8H0z" fill="#ce1126"/><path d="M0 8h16v8H0z" fill="#fff"/></svg> <span>ID</span>
                        @else
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A11.953 11.953 0 0112 16.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 003 12c0 .778.099 1.533.284 2.253m0 0a11.998 11.998 0 01-2.28 2.28"/></svg> <span>EN</span>
                        @endif
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="langOpen" @click.away="langOpen = false" x-transition class="absolute left-1/2 -translate-x-1/2 mt-2 py-2 w-40 bg-white rounded-md shadow-xl z-20">
                        <a href="{{ route('lang.switch', 'id') }}" class="flex items-center space-x-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M0 0h16v8H0z" fill="#ce1126"/><path d="M0 8h16v8H0z" fill="#fff"/></svg> <span>Indonesia</span>
                        </a>
                        <a href="{{ route('lang.switch', 'en') }}" class="flex items-center space-x-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A11.953 11.953 0 0112 16.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 003 12c0 .778.099 1.533.284 2.253m0 0a11.998 11.998 0 01-2.28 2.28"/></svg> <span>English</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex items-center">
                <div class="hidden md:flex items-center space-x-4">
                    <a href="#" class="text-gray-600 hover:text-gray-800 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    <a href="#" class="text-gray-600 hover:text-gray-800 px-3 py-2 rounded-md text-sm font-medium">Profil</a>
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="flex items-center text-gray-600 hover:text-gray-800 px-3 py-2 rounded-md text-sm font-medium">
                            <span>Program Studi</span>
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-20">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Magister</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Doktor</a>
                        </div>
                    </div>
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="flex items-center text-gray-600 hover:text-gray-800 px-3 py-2 rounded-md text-sm font-medium">
                            <span>Akademik</span>
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-20">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Kalender Akademik</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Kurikulum</a>
                        </div>
                    </div>
                    <a href="#" class="text-gray-600 hover:text-gray-800 px-3 py-2 rounded-md text-sm font-medium">Pengabdian</a>
                    <a href="#" class="text-gray-600 hover:text-gray-800 px-3 py-2 rounded-md text-sm font-medium">Penelitian</a>
                </div>

                <div class="md:hidden flex items-center">
                     <div class="relative me-4" x-data="{ langOpen: false }">
                        <button @click="langOpen = !langOpen" class="flex items-center space-x-2 border rounded-md px-3 py-1.5 text-sm text-gray-600 hover:bg-gray-100 focus:outline-none">
                            @if(app()->getLocale() == 'id')
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M0 0h16v8H0z" fill="#ce1126"/><path d="M0 8h16v8H0z" fill="#fff"/></svg> <span>ID</span>
                            @else
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A11.953 11.953 0 0112 16.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 003 12c0 .778.099 1.533.284 2.253m0 0a11.998 11.998 0 01-2.28 2.28"/></svg> <span>EN</span>
                            @endif
                        </button>
                        <div x-show="langOpen" @click.away="langOpen = false" x-transition class="absolute right-0 mt-2 py-2 w-40 bg-white rounded-md shadow-xl z-20">
                            <a href="{{ route('lang.switch', 'id') }}" class="flex items-center space-x-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M0 0h16v8H0z" fill="#ce1126"/><path d="M0 8h16v8H0z" fill="#fff"/></svg> <span>Indonesia</span>
                            </a>
                            <a href="{{ route('lang.switch', 'en') }}" class="flex items-center space-x-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A11.953 11.953 0 0112 16.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 003 12c0 .778.099 1.533.284 2.253m0 0a11.998 11.998 0 01-2.28 2.28"/></svg> <span>English</span>
                            </a>
                        </div>
                    </div>
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-gray-600 hover:text-gray-800 focus:outline-none">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 6h16M4 12h16M4 18h16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </button>
                </div>
            </div>
        </div>

        <div 
            x-show="mobileMenuOpen" 
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="transform translate-x-full"
            x-transition:enter-end="transform translate-x-0"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="transform translate-x-0"
            x-transition:leave-end="transform translate-x-full"
            class="md:hidden fixed top-0 right-0 h-full w-64 bg-white shadow-lg z-50"
            @click.away="mobileMenuOpen = false"
        >
            <div class="px-5 py-8">
                <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 rounded-md">Home</a>
                <a href="#" class="block py-2 px-4 mt-1 text-sm text-gray-700 hover:bg-gray-100 rounded-md">Profil</a>
                <a href="#" class="block py-2 px-4 mt-1 text-sm text-gray-700 hover:bg-gray-100 rounded-md">Program Studi</a>
                <a href="#" class="block py-2 px-4 mt-1 text-sm text-gray-700 hover:bg-gray-100 rounded-md">Akademik</a>
                <a href="#" class="block py-2 px-4 mt-1 text-sm text-gray-700 hover:bg-gray-100 rounded-md">Pengabdian</a>
                <a href="#" class="block py-2 px-4 mt-1 text-sm text-gray-700 hover:bg-gray-100 rounded-md">Penelitian</a>
            </div>
        </div>
    </div>
</nav>

    {{-- ================================================================= --}}
    {{-- Bagian 2: Carousel Gambar Utama --}}
    {{-- ================================================================= --}}
    <x-hero-carousel/>

    {{-- <x-welcome-greeting/>  --}}
    <x-director-greeting/>

    <x-study-programs/>

    {{-- ================================================================= --}}
    {{-- Bagian 3: Konten Utama (Selamat Datang & Daftar Berita) --}}
    {{-- ================================================================= --}}
    <main class="container mx-auto my-10 px-6">
        
        {{-- Teks Sambutan --}}
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800">{{ __('db.welcome_heading') ?? 'Selamat Datang di Pascasarjana Uin' }}</h1>
            <p class="text-xl text-gray-600 mt-2">{{ __('db.welcome_p') ?? 'masih dalam tahap pengembangan.' }}</p>
        </div>
        
        {{-- Grid Daftar Berita --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($newsItems as $news)
                {{-- Setiap kartu berita adalah link ke halaman detail --}}
                <a href="{{ route('news.show', $news) }}" class="block group no-underline text-gray-800">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden h-full transform group-hover:-translate-y-2 transition-transform duration-300">
                        @if ($news->image)
                            <img src="{{ asset('storage/' . $news->image) }}" class="w-full h-48 object-cover" alt="News Image">
                        @else
                            <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                                <span class="text-gray-500">No Image</span>
                            </div>
                        @endif
                        <div class="p-6">
                            <h5 class="text-lg font-bold text-gray-900 mb-2">
                                @if (app()->getLocale() == 'id')
                                    {{ Str::limit($news->title_id, 50) }}
                                @else
                                    {{ Str::limit($news->title_en, 50) }}
                                @endif
                            </h5>
                            <p class="text-gray-700 text-sm leading-relaxed mb-4">
                                @if (app()->getLocale() == 'id')
                                    {{ Str::limit($news->content_id, 100) }}
                                @else
                                    {{ Str::limit($news->content_en, 100) }}
                                @endif
                            </p>
                            <small class="text-gray-500">{{ $news->created_at->format('d M Y') }}</small>
                        </div>
                    </div>
                </a>
            @empty
                {{-- Tampilan jika tidak ada berita sama sekali --}}
                <div class="col-span-full text-center py-12">
                    <p class="text-gray-500 text-lg">Belum ada berita yang dipublikasikan.</p>
                </div>
            @endforelse
        </div>
    </main>

    {{-- ================================================================= --}}
    {{-- Bagian 4: Footer --}}
    {{-- ================================================================= --}}
    <footer class="text-center py-6 mt-10 bg-white border-t">
        <div class="container mx-auto">
            <p class="text-gray-600">&copy; {{ date('Y') }} {{ config('app.name') }}. All Rights Reserved.</p>
        </div>
    </footer>

</body>
</html>