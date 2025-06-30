@extends('layouts.admin')

@section('title', 'Daftar Berita')
@section('header', 'Manajemen Berita')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0 text-dark">Daftar Semua Berita</h5>
        <a href="{{ route('admin.input') }}" class="btn btn-primary btn-sm">
            <i class="bi bi-plus-circle me-1"></i> Tambah Berita
        </a>
    </div>
    <div class="card-body">
        {{-- Menampilkan pesan sukses --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th scope="col" style="width: 10%;">Gambar</th>
                        <th scope="col">Judul</th>
                        <th scope="col" class="text-center" style="width: 15%;">Tanggal Dibuat</th>
                        <th scope="col" class="text-center" style="width: 15%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($newsItems as $news)
                        <tr>
                            <td>
                                @if($news->image)
                                    <img src="{{ asset('storage/' . $news->image) }}" alt="News Image" class="img-fluid rounded" style="max-height: 75px; width: 100%; object-fit: cover;">
                                @else
                                    <div class="d-flex align-items-center justify-content-center bg-light rounded" style="height: 75px;">
                                        <small class="text-muted">No Image</small>
                                    </div>
                                @endif
                            </td>
                            <td>
                                <div class="fw-bold">ID: {{ Str::limit($news->title_id, 50) }}</div>
                                <small class="text-muted">EN: {{ Str::limit($news->title_en, 50) }}</small>
                            </td>
                            <td class="text-center">
                                {{ $news->created_at->format('d M Y') }}
                            </td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    {{-- Tombol Edit (belum berfungsi) --}}
                                    <a href="{{ route('news.show', $news) }}" target="_blank" class="btn btn-info btn-sm" title="Lihat Berita">
                                         <i class="bi bi-eye-fill"></i>
                                    </a>
                                    
                                    {{-- Tombol Hapus (sudah berfungsi) --}}
                                    <form action="{{ route('admin.news.destroy', $news) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus berita ini?');">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm" title="Hapus">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center py-4">
                                Tidak ada berita yang ditemukan. Silakan tambah berita baru.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection