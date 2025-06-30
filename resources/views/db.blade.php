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
            {{-- Pilihan bahasa tetap ada untuk pengunjung --}}
            <div class="lang-switch">
                <a href="{{ route('lang.switch', 'id') }}" class="{{ app()->getLocale() == 'id' ? 'active' : '' }}">ID</a>
                <a href="{{ route('lang.switch', 'en') }}" class="{{ app()->getLocale() == 'en' ? 'active' : '' }}">EN</a>
            </div>
            {{-- Tombol Login dan info admin sudah dihapus dari sini --}}
        </div>
    </nav>

    <main class="main-content px-4 md:px-0">
        <div class="container mx-auto mt-10">
            <h1 class="text-3xl font-bold text-center mb-12">{{ __('db.welcome_heading') }}</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                @forelse ($newsItems as $news)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                        @if ($news->image)
                            <img src="{{ asset('storage/' . $news->image) }}" alt="News Image" class="w-full h-48 object-cover">
                        @else
                            <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                                <span class="text-gray-500">No Image</span>
                            </div>
                        @endif
                        
                        <div class="p-6">
                            <h2 class="text-xl font-bold mb-2">
                                @if (app()->getLocale() == 'id')
                                    {{ $news->title_id }}
                                @else
                                    {{ $news->title_en }}
                                @endif
                            </h2>
                            
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
                    <div class="col-span-full text-center py-12">
                        <p class="text-gray-500 text-xl">Belum ada berita yang dipublikasikan.</p>
                    </div>
                @endforelse

            </div>
        </div>
    </main>

</body>
</html>