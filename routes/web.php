<?php

use App\Http\Controllers\AsetGudangController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/', [DashboardController::class, 'index'])->name('pages.dashboard');

Route::get('/daftar-aset', [AsetGudangController::class, 'index'])->name('pages.gudang.index');
Route::get('/daftar-aset/create', [AsetGudangController::class, 'create'])->name('pages.gudang.create');
Route::post('/daftar-aset', [AsetGudangController::class, 'store'])->name('pages.gudang.store');
Route::get('/daftar-aset/export', [AsetGudangController::class, 'export'])->name('pages.gudang.export');
Route::get('/daftar-aset/{id}/edit', [AsetGudangController::class, 'edit'])->name('pages.gudang.edit');
Route::put('/daftar-aset/{id}', [AsetGudangController::class, 'update'])->name('pages.gudang.update');
Route::delete('/daftar-aset/{id}', [AsetGudangController::class, 'destroy'])->name('pages.gudang.destroy');

