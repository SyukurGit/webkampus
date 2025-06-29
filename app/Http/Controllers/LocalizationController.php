<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocalizationController extends Controller
{
    public function setLang($locale)
    {
        // Validasi apakah bahasa yang dipilih ada di dalam konfigurasi aplikasi
        if (in_array($locale, ['id', 'en'])) {
            // Simpan pilihan bahasa ke dalam session
            session()->put('locale', $locale);
        }

        // Arahkan pengguna kembali ke halaman sebelumnya
        return redirect()->back();
    }
}