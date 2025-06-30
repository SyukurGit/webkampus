<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Judul halaman dinamis sesuai judul berita --}}
    <title>
        @if (app()->getLocale() == 'id')
            {{ $news->title_id }}
        @else
            {{ $news->title_en }}
        @endif
        - {{ config('app.name') }}
    </title>

    {{-- Memuat CSS Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- Memuat CSS Circle Flags untuk ikon bendera --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7/css/flag-icons.min.css">
</head>
<body class="bg-light">

    {{-- ================================================== --}}
    {{-- NAVBAR YANG SUDAH DIPERBARUI --}}
    {{-- ================================================== --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}">KAMPUS SITE</a>
            <div class="ms-auto">
                
                <div class="dropdown">
                    <button class="btn btn-outline-secondary btn-sm dropdown-toggle d-flex align-items-center" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        @if(app()->getLocale() == 'id')
                            <span class="fi fi-id me-2"></span>
                            ID
                        @else
                            <span class="fi fi-gb me-2"></span>
                            EN
                        @endif
                    </button>
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

    {{-- Konten Detail Berita (Tidak berubah) --}}
    <main class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <article>
                    <h1 class="mb-3 fw-bolder">
                        @if (app()->getLocale() == 'id')
                            {{ $news->title_id }}
                        @else
                            {{ $news->title_en }}
                        @endif
                    </h1>
                    <p class="text-muted mb-4">
                        Dipublikasikan pada {{ $news->created_at->format('d F Y') }}
                    </p>
                    @if($news->image)
                        <img src="{{ asset('storage/' . $news->image) }}" class="img-fluid rounded mb-4" alt="Featured Image">
                    @endif
                    <div class="fs-5">
                        @if (app()->getLocale() == 'id')
                            {!! nl2br(e($news->content_id)) !!}
                        @else
                            {!! nl2br(e($news->content_en)) !!}
                        @endif
                    </div>
                </article>
            </div>
        </div>
    </main>

    <footer class="text-center py-4 mt-5 bg-white border-top">
        <p class="mb-0">&copy; {{ date('Y') }} {{ config('app.name') }}. All Rights Reserved.</p>
    </footer>

    {{-- Memuat JS Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>