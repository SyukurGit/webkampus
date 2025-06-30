{{-- Memberitahu Blade untuk menggunakan layout admin sebagai dasarnya --}}
@extends('layouts.admin')

{{-- Mengisi 'slot' title di layout induk --}}
@section('title', 'Tambah Berita Baru')

{{-- Mengisi 'slot' header di layout induk --}}
@section('header', 'Tambah Berita Baru')

{{-- Mengisi 'slot' content di layout induk dengan konten halaman ini --}}
@section('content')

<div class="bg-white p-6 rounded-lg shadow-md">
    {{-- Menampilkan pesan sukses jika ada --}}
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <strong class="font-bold">Sukses!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    {{-- Menampilkan error validasi jika ada --}}
    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
            <strong class="font-bold">Error!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Gambar Utama (Opsional)</label>
            <input type="file" name="image" id="image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-6 p-4 border rounded">
            <h3 class="text-xl font-semibold mb-2">Bahasa Indonesia</h3>
            <div class="mb-4">
                <label for="title_id" class="block text-gray-700 text-sm font-bold mb-2">Judul (ID)</label>
                <input type="text" name="title_id" id="title_id" value="{{ old('title_id') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div>
                <label for="content_id" class="block text-gray-700 text-sm font-bold mb-2">Konten (ID)</label>
                <textarea name="content_id" id="content_id" rows="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>{{ old('content_id') }}</textarea>
            </div>
        </div>

        <div class="mb-6 p-4 border rounded">
            <h3 class="text-xl font-semibold mb-2">English</h3>
            <div class="mb-4">
                <label for="title_en" class="block text-gray-700 text-sm font-bold mb-2">Title (EN)</label>
                <input type="text" name="title_en" id="title_en" value="{{ old('title_en') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div>
                <label for="content_en" class="block text-gray-700 text-sm font-bold mb-2">Content (EN)</label>
                <textarea name="content_en" id="content_en" rows="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>{{ old('content_en') }}</textarea>
            </div>
        </div>

        <div class="flex items-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Simpan Berita
            </button>
        </div>
    </form>
</div>

@endsection