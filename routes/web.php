<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\PelangganController;
use Illuminate\Support\Facades\Auth;

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

Route::group(['middleware' => ['auth','role:admin-manager']], function(){
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
    Route::get('/pesanan', [PesananController::class, 'index'])->name('pesanan');

    Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
    Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create');


    Route::prefix('pelanggan')->group(function(){
        Route::get('/', [PelangganController::class, 'index'])->name('pelanggan');
        Route::get('/view/{id}', [PelangganController::class, 'show'])->name('pelanggan.show');
        Route::get('/create', [PelangganController::class, 'create'])->name('pelanggan.create');
        Route::post('/store', [PelangganController::class, 'store'])->name('pelanggan.store');
        Route::get('/edit/{id}', [PelangganController::class, 'edit'])->name('pelanggan.edit');
        Route::post('/update', [PelangganController::class, 'update'])->name('pelanggan.update');
        Route::get('/delete/{id}', [PelangganController::class, 'destroy'])->name('pelanggan.delete');
    });
    
});
});
Route::get('/home', [FrontController::class, 'index'])->name('home');
Auth::routes();

Route::get('/after_register', function(){
    return view('after_register');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
