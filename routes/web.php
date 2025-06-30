<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\DashboardController;

// --- ROUTE PUBLIK ---
Route::get('lang/{locale}', [LocalizationController::class, 'setLang'])->name('lang.switch');
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// --- ROUTE AUTENTIKASI ---
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'showLoginForm')->name('login');
    Route::post('/login', 'login');
    Route::post('/logout', 'logout')->name('logout');
});

// --- ROUTE ADMIN YANG DILINDUNGI ---
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    // URL: /admin/input -> Nama Route: admin.input
    Route::get('/input', function () {
        return view('admininput');
    })->name('input');

    // URL: /admin/news -> Nama Route: admin.news.index
    Route::get('/news', [NewsController::class, 'index'])->name('news.index');

    // URL: /admin/news/store -> Nama Route: admin.news.store
    Route::post('/news/store', [NewsController::class, 'store'])->name('news.store');
});