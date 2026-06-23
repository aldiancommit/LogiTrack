<?php

use Illuminate\Support\Facades\Route;

// Mengarahkan halaman utama langsung ke tampilan sidebar + konten kosong
Route::get('/', function () {
    return view('pages.dashboard');
});

Route::get('/daftar-aset', function () {
    return view('pages.daftar');
})->name('pages.daftar');