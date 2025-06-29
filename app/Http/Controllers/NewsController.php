<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class NewsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // 1. Validasi semua input dari formulir
        $validatedData = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Opsional, maks 2MB
            'title_id' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'content_id' => 'required|string',
            'content_en' => 'required|string',
        ]);

        // 2. Proses upload gambar jika ada
        if ($request->hasFile('image')) {
            // Simpan gambar ke public/images dan dapatkan path-nya
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath;
        }

        // 3. Simpan data berita ke database
        News::create($validatedData);

        // 4. Kembali ke halaman input dengan pesan sukses
        return redirect()->route('admin.input')->with('success', 'Berita berhasil disimpan!');
    }
}