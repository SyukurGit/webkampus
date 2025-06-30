@extends('layouts.admin')

@section('title', 'Tambah Berita Baru')
@section('header', 'Tambah Berita Baru')

@section('content')
<div class="container-fluid">
    {{-- Menampilkan pesan error atau sukses --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <h5 class="alert-heading">Terjadi Kesalahan!</h5>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                {{-- Input untuk Gambar --}}
                <div class="mb-4">
                    <label for="image" class="form-label fw-bold">Gambar berita (*Wajib)</label>
                    <input class="form-control" type="file" name="image" id="image">
                    <div class="form-text">Pilih gambar dengan format JPG, PNG, atau GIF (maks. 2MB).</div>
                </div>

                {{-- Gunakan Grid System Bootstrap --}}
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="border rounded p-3 h-100">
                            <h5 class="mb-3 border-bottom pb-2">Bahasa Indonesia</h5>
                            <div class="mb-3">
                                <label for="title_id" class="form-label">Judul (ID)</label>
                                <input type="text" name="title_id" id="title_id" value="{{ old('title_id') }}" class="form-control" required>
                            </div>
                            <div>
                                <label for="content_id" class="form-label">Konten (ID)</label>
                                <textarea name="content_id" id="content_id" rows="10" class="form-control" required>{{ old('content_id') }}</textarea>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="border rounded p-3 h-100">
                            <h5 class="mb-3 border-bottom pb-2">English</h5>
                            <div class="mb-3">
                                <label for="title_en" class="form-label">Title (EN)</label>
                                <input type="text" name="title_en" id="title_en" value="{{ old('title_en') }}" class="form-control" required>
                            </div>
                            <div>
                                <label for="content_en" class="form-label">Content (EN)</label>
                                <textarea name="content_en" id="content_en" rows="10" class="form-control" required>{{ old('content_en') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4 text-end">
                    <button type="submit" class="btn btn-primary px-4">
                        <i class="bi bi-save-fill me-1"></i> Luncurkan Berita
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection