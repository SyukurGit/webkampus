<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage; // Pastikan baris ini ada

class NewsController extends Controller
{
    /**
     * Menampilkan daftar semua berita.
     */
    public function index()
    {
        $allNews = News::latest()->get();
        // Pastikan view ini ada: resources/views/admin/news/index.blade.php
        return view('admin.news.index', ['newsItems' => $allNews]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title_id' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'content_id' => 'required|string',
            'content_en' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('images', 'public');
        }

        News::create($validatedData);

        // Redirect ke halaman daftar berita setelah sukses
        return redirect()->route('admin.news.index')->with('success', 'Berita baru berhasil disimpan!');
    }

    /**
     * INI YANG SAYA TAMBAHKAN
     * Remove the specified resource from storage.
     */
    public function destroy(News $news): RedirectResponse
    {
        // 1. Hapus file gambar dari storage jika ada
        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }
        
        // 2. Hapus data berita dari database
        $news->delete();

        // 3. Kembali ke halaman daftar berita dengan pesan sukses
        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil dihapus!');
    }
}