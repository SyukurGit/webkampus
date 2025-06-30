<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class NewsController extends Controller
{
    /**
     * Menampilkan daftar semua berita.
     * (Saya pindahkan ke atas agar sesuai konvensi)
     */
    public function index()
    {
        // Ambil semua data berita, urutkan dari yang terbaru
        $allNews = News::latest()->get();

        // Kirim data ke view 'admin.news.index'
        return view('admin.news.index', ['newsItems' => $allNews]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // 1. Validasi semua input dari formulir
        $validatedData = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title_id' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'content_id' => 'required|string',
            'content_en' => 'required|string',
        ]);

        // 2. Proses upload gambar jika ada
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath;
        }

        // 3. Simpan data berita ke database
        News::create($validatedData);

        // 4. Kembali ke halaman DAFTAR BERITA dengan pesan sukses (SUDAH DIPERBAIKI)
        return redirect()->route('admin.news.index')->with('success', 'Berita baru berhasil disimpan!');
    }
}