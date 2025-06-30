<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\DashboardController; // DITAMBAHKAN

// --- ROUTE PUBLIK ---
// Siapa saja bisa mengakses ini

// Route untuk mengganti bahasa
Route::get('lang/{locale}', [LocalizationController::class, 'setLang'])->name('lang.switch');

// Route Dasbor (Halaman utama publik) yang sekarang mengambil data
Route::get('/', [DashboardController::class, 'index'])->name('dashboard'); // DIPERBAIKI


// --- ROUTE AUTENTIKASI ---
// Untuk proses masuk dan keluar

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'showLoginForm')->name('login');
    Route::post('/login', 'login');
    Route::post('/logout', 'logout')->name('logout');
});


// --- ROUTE ADMIN YANG DILINDUNGI ---
// Hanya bisa diakses setelah login

Route::middleware('auth')->group(function () {
    // Halaman utama setelah login (input berita)
    Route::get('/adminn', function () {
        return view('admininput');
    })->name('admin.input');

    // Route untuk memproses penyimpanan berita
    Route::post('/adminn/store', [NewsController::class, 'store'])->name('admin.news.store');

    // Nanti jika ada halaman admin lain, letakkan di sini.
});