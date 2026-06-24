<?php

use App\Http\Controllers\AsetGudangController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/', [DashboardController::class, 'index'])->name('pages.dashboard');

Route::get('/daftar-aset', [AsetGudangController::class, 'index'])->name('pages.gudang.index');
Route::get('/daftar-aset/create', [AsetGudangController::class, 'create'])->name('pages.gudang.create');
Route::post('/daftar-aset', [AsetGudangController::class, 'store'])->name('pages.gudang.store');
