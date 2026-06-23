<?php

use App\Http\Controllers\AsetGudangController;
use Illuminate\Support\Facades\Route;

// Mengarahkan halaman utama langsung ke tampilan sidebar + konten kosong
Route::get('/', function () {
    return view('pages.dashboard');
});

Route::get('/daftar-aset', [AsetGudangController::class, 'index'])->name('pages.daftar');
