@extends('layouts.admin')

@section('title', 'Tambah Berita Baru')
@section('header', 'Tambah Berita Baru')

@section('content')
<div class="max-w-4xl mx-auto">
    {{-- Menampilkan pesan error atau sukses --}}
    @if(session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-md shadow-sm" role="alert">
            <p class="font-bold">Sukses</p>
            <p>{{ session('success') }}</p>
        </div>
    @endif
    @if ($errors->any())
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded-md shadow-sm" role="alert">
            <p class="font-bold">Terjadi Kesalahan</p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="list-disc ml-4">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="bg-white p-8 rounded-lg shadow-lg">
        <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-6">
                <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Gambar Utama (Opsional)</label>
                <input type="file" name="image" id="image" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="p-4 border rounded-lg">
                    <h3 class="text-lg font-semibold mb-3 text-gray-800 border-b pb-2">Bahasa Indonesia</h3>
                    <div class="mb-4">
                        <label for="title_id" class="block text-gray-700 font-medium mb-1">Judul (ID)</label>
                        <input type="text" name="title_id" id="title_id" value="{{ old('title_id') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                    <div>
                        <label for="content_id" class="block text-gray-700 font-medium mb-1">Konten (ID)</label>
                        <textarea name="content_id" id="content_id" rows="8" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>{{ old('content_id') }}</textarea>
                    </div>
                </div>
                
                <div class="p-4 border rounded-lg">
                    <h3 class="text-lg font-semibold mb-3 text-gray-800 border-b pb-2">English</h3>
                    <div class="mb-4">
                        <label for="title_en" class="block text-gray-700 font-medium mb-1">Title (EN)</label>
                        <input type="text" name="title_en" id="title_en" value="{{ old('title_en') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                    <div>
                        <label for="content_en" class="block text-gray-700 font-medium mb-1">Content (EN)</label>
                        <textarea name="content_en" id="content_en" rows="8" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>{{ old('content_en') }}</textarea>
                    </div>
                </div>
            </div>

            <div class="mt-8 text-right">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                    Simpan Berita
                </button>
            </div>
        </form>
    </div>
</div>
@endsection