<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Menampilkan halaman dasbor publik dengan semua berita.
     */
    public function index()
    {
        // Ambil semua berita dari database, urutkan dari yang terbaru.
        $allNews = News::latest()->get();

        // Kirim data berita ke view 'db'
        return view('db', [
            'newsItems' => $allNews
        ]);
    }
}