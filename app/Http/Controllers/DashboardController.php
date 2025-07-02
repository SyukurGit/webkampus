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
         // FIX: Ambil hanya 4 berita terbaru dari database
    $latestNews = News::latest()->take(4)->get();

    // Kirim data berita ke view 'db'
    return view('db', [
        'newsItems' => $latestNews
    ]);

        
    }
    public function show(News $news)
    {
        // Laravel secara otomatis akan mencari berita berdasarkan {news} di URL (Route Model Binding)

        // Kirim data berita yang ditemukan ke view 'news-detail'
        return view('news-detail', ['news' => $news]);
    }
}