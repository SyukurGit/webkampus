<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\Auth\LoginController;

// Route untuk mengganti bahasa (Publik)
Route::get('lang/{locale}', [LocalizationController::class, 'setLang'])->name('lang.switch');

// Route Dasbor (Publik)
Route::get('/', function () {
    return view('db');
})->name('dashboard');

// Grup route untuk autentikasi
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'showLoginForm')->name('login');
    Route::post('/login', 'login');
    Route::post('/logout', 'logout')->name('logout');
});

// Route yang dilindungi (hanya bisa diakses setelah login)
Route::middleware('auth')->group(function () {
    Route::get('/adminn', function () {
        return view('admininput');
    })->name('admin.input');

    // Nanti jika ada halaman admin lain, letakkan di sini.
});