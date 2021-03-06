<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransaksiDetailController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\KerjasamaController;
use App\Models\Kerjasama;
use App\Http\Controllers\AdminKerjasamacontroller;
use App\Http\Controllers\DummyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('wel');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('dashboard');

})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/home', [HomeController::class , 'index'])->middleware(['auth'])->name('home');
Route::get('pesan/{id}', [PesanController::class , 'index'])->middleware(['auth']);
Route::post('pesan/{id}', [PesanController::class , 'store'])->middleware(['auth']);
Route::get('check-out', [PesanController::class , 'check_out'])->middleware(['auth']);
Route::delete('check-out/{id}', [PesanController::class , 'delete'])->middleware(['auth']);
Route::get('konfirmasi-check-out', [PesanController::class , 'konfirmasi'])->middleware(['auth']);
Route::get('profile', [ProfileController::class , 'index'])->middleware(['auth']);
Route::post('profile', [ProfileController::class , 'store'])->middleware(['auth']);
Route::get('history', [HistoryController::class , 'index'])->middleware(['auth']);
Route::get('history/{id}', [HistoryController::class , 'show'])->middleware(['auth']);

Route::get('/admin', function () {
    return view('dashboard.index');
});

// admin
Route::get('/dashboard', [ProdukController::class , 'index'])->middleware(['auth']);
Route::get('/create-produk', [ProdukController::class , 'create'])->middleware(['auth']);
Route::post('/dashboard', [ProdukController::class , 'store'])->middleware(['auth']);
Route::get('/produk/{id}', [ProdukController::class , 'show'])->middleware(['auth']);
Route::get('/produk/{id}/edit', [ProdukController::class , 'edit'])->middleware(['auth']);
Route::put('/produk/{id}', [ProdukController::class , 'update'])->middleware(['auth']);
Route::delete('/produk/{id}', [ProdukController::class , 'destroy'])->middleware(['auth']);

// user
Route::get('/user', [UserController::class , 'index'])->middleware(['auth']);

// transaksi
Route::get('/transaksi', [TransaksiController::class , 'index'])->middleware(['auth']);

// transaksi Detail
Route::get('/transaksidetail', [TransaksiDetailController::class , 'index'])->middleware(['auth']);


// Kerjasama admin
Route::get('/dummy', [DummyController::class , 'index'])->middleware(['auth']);

