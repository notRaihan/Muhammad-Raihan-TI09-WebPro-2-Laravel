<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PesananController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/form', function () {
    return view('form');
});
Route::get('/biodata', [FormController::class, 'daftar']);
Route::post('/hasil', [FormController::class, 'hasil']);

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
    Route::get('/pesanan', [PesananController::class, 'index'])->name('pesanan');
});

Route::get('/home', [FrontController::class, 'index'])->name('home');