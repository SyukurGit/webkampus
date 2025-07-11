<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\DashboardController;

// --- ROUTE PUBLIK ---
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/berita/{news}', [DashboardController::class, 'show'])->name('news.show');

// --- ROUTE AUTENTIKASI ---
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'showLoginForm')->name('login');
    Route::post('/login', 'login');
    Route::post('/logout', 'logout')->name('logout');
});

// --- ROUTE ADMIN YANG DILINDUNGI ---
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/input', function () {
        return view('admininput');
    })->name('input');

    Route::get('/news', [NewsController::class, 'index'])->name('news.index');
    Route::post('/news/store', [NewsController::class, 'store'])->name('news.store');
    Route::post('/news/{news}/delete', [NewsController::class, 'destroy'])->name('news.destroy');
});