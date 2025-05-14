<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DataPenggunaController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/data-pengguna', [DataPenggunaController::class, 'index'])->name('data.pengguna.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/admin', [ProfileController::class, 'edit'])->name('admin.index');
    Route::patch('/admin', [ProfileController::class, 'update'])->name('admin.index');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
