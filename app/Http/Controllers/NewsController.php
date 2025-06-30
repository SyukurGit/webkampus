<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

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
}