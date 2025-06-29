<?php

use Illuminate\Support\Facades\Route;

// Rute untuk halaman utama
Route::get('/', function () {
    return view('db');
})->name('home'); // Opsional, tapi bagus untuk diberi nama juga

// Rute untuk halaman login
Route::get('/login', function () {
    return view('loginadmin');
})->name('login'); // <-- Ini yang penting untuk link login Anda

// admin input berita 
Route::get('/adminn', function () {
    return view('admininput');
})->name('admin'); // <-- Ini yang penting untuk link login Anda

