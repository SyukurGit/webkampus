<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel') - {{ config('app.name') }}</title>
    
    {{-- Memuat CSS Bootstrap & Ikon --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    {{-- ====================================================== --}}
    {{-- PENYESUAIAN CSS UNTUK TAMPILAN YANG LEBIH BAIK --}}
    {{-- ====================================================== --}}
    <style>
        /* 1. Membuat animasi sidebar lebih halus */
        .offcanvas {
            transition: transform .35s ease-in-out; /* Sedikit lebih lambat dan halus */
        }

        /* 2. Menghilangkan latar belakang putih pada menu tidak aktif */
        #sidebar .list-group-item-dark:not(.active) {
            background-color: transparent; /* Latar belakang transparan */
            border: none; /* Hapus border agar lebih bersih */
            color: #adb5bd; /* Warna teks abu-abu */
        }

        /* 3. Memberi efek hover yang lebih baik pada menu tidak aktif */
        #sidebar .list-group-item-dark:not(.active):hover {
            background-color: #343a40; /* Warna latar sedikit lebih terang saat disentuh */
            color: #fff; /* Warna teks menjadi putih */
        }
        
        /* 4. Memberi warna biru yang lebih solid pada menu aktif */
        #sidebar .list-group-item.active {
            background-color: #0d6efd;
            border-color: #0d6efd;
            color: white;
            font-weight: 600; /* Membuat teks lebih tebal */
        }
    </style>
</head>
<body class="bg-light">

    <div class="offcanvas offcanvas-start bg-dark text-white shadow-lg" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
        <div class="offcanvas-header border-bottom border-secondary">
            <h5 class="offcanvas-title fw-bold" id="sidebarLabel">
                <i class="bi bi-shield-shaded me-2"></i>ADMIN PANEL
            </h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="list-group list-group-flush">
                <a href="{{ route('admin.news.index') }}" class="list-group-item list-group-item-action list-group-item-dark p-3 @if(request()->routeIs('admin.news.index')) active @endif">
                    <i class="bi bi-newspaper me-2"></i> Daftar Berita
                </a>
                <a href="{{ route('admin.input') }}" class="list-group-item list-group-item-action list-group-item-dark p-3 @if(request()->routeIs('admin.input')) active @endif">
                    <i class="bi bi-plus-square-fill me-2"></i> Tambah Berita
                </a>
            </div>
        </div>
    </div>

    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom shadow-sm">
            <div class="container-fluid">
                <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">
                    <i class="bi bi-list"></i>
                </button>
                <div class="ms-auto d-flex align-items-center">
                    <span class="navbar-text me-3 d-none d-sm-block">Hi, {{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}"><button class="btn btn-outline-danger btn-sm" type="submit"><i class="bi bi-box-arrow-right me-1"></i> Logout</button></form>
                </div>
            </div>
        </nav>
        <main class="container-fluid p-4">
            @yield('content')
        </main>
    </div>

    {{-- Memuat JS Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>