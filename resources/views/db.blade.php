<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('db.title') }} - {{ config('app.name') }}</title>
    
    {{-- Memuat CSS Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    {{-- INI YANG DITAMBAHKAN --}}
    {{-- Memuat CSS Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7/css/flag-icons.min.css">

</head>
<body class="bg-light">

    {{-- Navbar Publik --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold"  href="{{ route('dashboard') }}" >--logo pasca--</a>
            <div class="ms-auto">
                
                <div class="dropdown">
    <button class="btn btn-outline-secondary btn-sm dropdown-toggle d-flex align-items-center" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
        @if(app()->getLocale() == 'id')
            {{-- Ikon Bendera Indonesia dari Circle Flags --}}
            <span class="fi fi-id me-2"></span>
            ID
        @else
            {{-- Ikon Bendera Inggris (Great Britain) dari Circle Flags --}}
            <span class="fi fi-gb me-2"></span>
            EN
        @endif
    </button>

    {{-- Opsi dropdown --}}
    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
        <li>
            <a class="dropdown-item d-flex align-items-center" href="{{ route('lang.switch', 'id') }}">
                <span class="fi fi-id me-2"></span>
                Indonesia
            </a>
        </li>
        <li>
            <a class="dropdown-item d-flex align-items-center" href="{{ route('lang.switch', 'en') }}">
                <span class="fi fi-gb me-2"></span>
                English
            </a>
        </li>
    </ul>
</div>
            </div>
        </div>
    </nav>

    {{-- Sisa konten halaman (tidak berubah) --}}
    <main class="container my-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bold">{{ __('db.welcome_heading') }}</h1>
            <p class="lead text-muted">{{ __('db.welcome_p') }}</p>
        </div>
        <div class="row g-4">
            @forelse ($newsItems as $news)
                <div class="col-lg-4 col-md-6">
                    <a href="{{ route('news.show', $news) }}" class="card text-decoration-none text-dark h-100 shadow-sm border-0 lift">
                        @if ($news->image)
                            <img src="{{ asset('storage/' . $news->image) }}" class="card-img-top" alt="News Image" style="height: 200px; object-fit: cover;">
                        @else
                            <div class="card-img-top bg-secondary d-flex align-items-center justify-content-center" style="height: 200px;"><small class="text-white-50">No Image</small></div>
                        @endif
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">
                                @if (app()->getLocale() == 'id')
                                    {{ $news->title_id }}
                                @else
                                    {{ $news->title_en }}
                                @endif
                            </h5>
                            <p class="card-text text-muted small flex-grow-1">
                                @if (app()->getLocale() == 'id')
                                    {{ Str::limit($news->content_id, 100) }}
                                @else
                                    {{ Str::limit($news->content_en, 100) }}
                                @endif
                            </p>
                            <small class="text-muted mt-auto">{{ $news->created_at->format('d M Y') }}</small>
                        </div>
                    </a>
                </div>
            @empty
                <div class="col-12"><div class="text-center py-5"><p class="text-muted fs-5">Belum ada berita yang dipublikasikan.</p></div></div>
            @endforelse
        </div>
    </main>
    <footer class="text-center py-4 mt-auto bg-white border-top"><p class="mb-0 text-muted">&copy; {{ date('Y') }} {{ config('app.name') }}. All Rights Reserved.</p></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>