<?php

use Illuminate\Support\Facades\Route;

// Mengarahkan halaman utama langsung ke tampilan sidebar + konten kosong
Route::get('/', function () {
    return view('pages.blank');
});