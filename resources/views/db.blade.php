<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('db.title') }}</title>
    @vite('resources/js/app.js')
</head>
<body class="bg-light text-dark">

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="{{ route('dashboard') }}">
                {{ __('db.navbar_brand') }}
            </a>
            <div class="d-flex gap-2">
                <a href="{{ route('lang.switch', 'id') }}" class="btn btn-sm {{ app()->getLocale() == 'id' ? 'btn-primary text-white fw-semibold' : 'btn-outline-secondary' }}">
                    ID
                </a>
                <a href="{{ route('lang.switch', 'en') }}" class="btn btn-sm {{ app()->getLocale() == 'en' ? 'btn-primary text-white fw-semibold' : 'btn-outline-secondary' }}">
                    EN
                </a>
            </div>
        </div>
    </nav>

    <main class="py-5">
        <div class="container">
            <h1 class="display-5 fw-bold text-center mb-5">
                {{ __('db.welcome_heading') }}
            </h1>

            <div class="row g-4">
                @forelse ($newsItems as $news)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm border-0">
                            @if ($news->image)
                                <img src="{{ asset('storage/' . $news->image) }}" class="card-img-top object-fit-cover" style="height: 200px;" alt="News Image">
                            @else
                                <div class="d-flex align-items-center justify-content-center bg-secondary-subtle" style="height: 200px;">
                                    <svg class="text-secondary" width="48" height="48" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l-1.586-1.586a2 2 0 00-2.828 0L6 14m6-6l.01.01"></path>
                                    </svg>
                                </div>
                            @endif
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title fw-bold">
                                    @if (app()->getLocale() == 'id')
                                        {{ $news->title_id }}
                                    @else
                                        {{ $news->title_en }}
                                    @endif
                                </h5>
                                <p class="card-text flex-grow-1">
                                    @if (app()->getLocale() == 'id')
                                        {{ Str::limit($news->content_id, 150) }}
                                    @else
                                        {{ Str::limit($news->content_en, 150) }}
                                    @endif
                                </p>
                                <small class="text-muted mt-2">Dibuat pada: {{ $news->created_at->format('d M Y') }}</small>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="text-center border border-2 border-dashed p-5 rounded bg-white">
                            <svg class="mb-3 text-muted" width="48" height="48" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h12a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2z" />
                            </svg>
                            <h3 class="fw-semibold">Belum Ada Berita</h3>
                            <p class="text-muted">Saat ini belum ada berita yang dipublikasikan.</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </main>

</body>
</html>