<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/layanan', [ServiceController::class, 'index'])->name('layanan');
Route::get('/cara-kerja', [ServiceController::class, 'caraKerja'])->name('cara-kerja');
Route::get('/mitra-bengkel', [MechanicController::class, 'index'])->name('mitra-bengkel');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
