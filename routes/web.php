<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DataPenggunaController;
use App\Http\Controllers\Admin\PengajuanSertifikatController;

Route::get('/', [WelcomeController::class, 'index'])->name('index');

Route::post('/pengajuan-sertifikat', [PengajuanSertifikatController::class, 'store'])->name('pengajuan.store');

Route::middleware('auth')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});

Route::prefix('admin/')->group(function () {
    Route::get('/data-pengguna', [DataPenggunaController::class, 'index'])->name('data.pengguna.index');
    Route::post('/data-pengguna', [DataPenggunaController::class, 'store'])->name('data.pengguna.store');
    Route::get('/data-pengguna/edit/{id}', [DataPenggunaController::class, 'edit'])->name('data.pengguna.edit');
    Route::put('/data-pengguna/{id}', [DataPenggunaController::class, 'update'])->name('data.pengguna.update');
    Route::delete('/data-pengguna/{id}', [DataPenggunaController::class, 'destroy'])->name('data.pengguna.destroy');
});

Route::prefix('pegawai/')->group(function () {
    Route::get('/pengajuan-sertifikat', [PengajuanSertifikatController::class, 'index'])->name('pengajuan.sertifikat.index');
    Route::get('/pengajuan/download/{field}/{filename}', [PengajuanSertifikatController::class, 'download'])
    ->name('pengajuan.download');
    Route::put('/pengajuan/update-status/{id}', [PengajuanSertifikatController::class, 'updateStatus'])->name('pengajuan.updateStatus');
});



Route::middleware('auth')->group(function () {
    Route::get('/admin', [ProfileController::class, 'edit'])->name('admin.index');
    Route::patch('/admin', [ProfileController::class, 'update'])->name('admin.index');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
