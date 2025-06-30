<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel') - {{ config('app.name') }}</title>
    
    {{-- INI BAGIAN YANG PALING PENTING --}}
    {{-- Menambahkan Link CDN Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- Menambahkan Link CDN Bootstrap Icons (Opsional tapi direkomendasikan) --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body class="bg-light">

    <div class="d-flex" id="wrapper">
        <div class="bg-dark border-right" id="sidebar-wrapper" style="width: 250px;">
            <div class="sidebar-heading text-white text-center py-4 fs-4">Pascasarjana News Control</div>
            <div class="list-group list-group-flush">
                <a href="{{ route('admin.news.index') }}" class="list-group-item list-group-item-action list-group-item-dark p-3 @if(request()->routeIs('admin.news.index')) active @endif">
                    <i class="bi bi-newspaper me-2"></i> Daftar Berita
                </a>
                <a href="{{ route('admin.input') }}" class="list-group-item list-group-item-action list-group-item-dark p-3 @if(request()->routeIs('admin.input')) active @endif">
                    <i class="bi bi-plus-square-fill me-2"></i> Tambah Berita
                </a>
            </div>
        </div>
        <div id="page-content-wrapper" class="flex-grow-1">
            <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom shadow-sm">
                <div class="container-fluid">
                    {{-- Tombol untuk toggle sidebar bisa ditambahkan di sini jika perlu --}}
                    <h4 class="mb-0">@yield('header', 'Dashboard')</h4>
                    
                    <div class="ms-auto d-flex align-items-center">
                        <span class="navbar-text me-3">
                            Hi, {{ Auth::user()->name }}
                        </span>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="btn btn-outline-danger btn-sm" type="submit">
                                <i class="bi bi-box-arrow-right me-1"></i> Logout
                            </button>
                        </form>
                    </div>
                </div>
            </nav>

            <main class="container-fluid p-4">
                @yield('content')
            </main>
        </div>
        </div>

    {{-- Menambahkan Link CDN Bootstrap JS (di akhir body) --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>