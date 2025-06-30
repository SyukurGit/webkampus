@extends('layouts.admin')

@section('title', 'Daftar Berita')
@section('header', 'Manajemen Berita')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-4">Daftar Semua Berita</h2>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="py-3 px-4 uppercase font-semibold text-sm text-left">Gambar</th>
                    <th class="py-3 px-4 uppercase font-semibold text-sm text-left">Judul (ID)</th>
                    <th class="py-3 px-4 uppercase font-semibold text-sm text-left">Judul (EN)</th>
                    <th class="py-3 px-4 uppercase font-semibold text-sm text-center">Tanggal Dibuat</th>
                    <th class="py-3 px-4 uppercase font-semibold text-sm text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @forelse ($newsItems as $news)
                    <tr class="border-b">
                        <td class="py-3 px-4">
                            @if($news->image)
                                <img src="{{ asset('storage/' . $news->image) }}" alt="News Image" class="w-24 h-16 object-cover rounded">
                            @else
                                <span class="text-gray-400">No Image</span>
                            @endif
                        </td>
                        <td class="py-3 px-4">{{ $news->title_id }}</td>
                        <td class="py-3 px-4">{{ $news->title_en }}</td>
                        <td class="py-3 px-4 text-center">{{ $news->created_at->format('d M Y') }}</td>
                        <td class="py-3 px-4 text-center">
                            <a href="#" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded text-xs">Edit</a>
                            <a href="#" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded text-xs">Hapus</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-4">Tidak ada berita yang ditemukan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection