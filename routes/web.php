<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/kategori', [App\Http\Controllers\kategoriController::class, 'index']);
Route::get('/kategori/create', [App\Http\Controllers\kategoriController::class, 'create']);
Route::post('/kategori', [App\Http\Controllers\kategoriController::class, 'store']);
Route::get('/kategori/{id}/edit', [App\Http\Controllers\kategoriController::class, 'edit']);
Route::patch('/kategori/{id}', [App\Http\Controllers\kategoriController::class, 'update']);
Route::delete('/kategori/{id}', [App\Http\Controllers\kategoriController::class, 'destroy']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/customer', [App\Http\Controllers\customerController::class, 'index']);
Route::get('/customer/create', [App\Http\Controllers\customerController::class, 'create']);
Route::post('/customer', [App\Http\Controllers\customerController::class, 'store']);
Route::get('/customer/{id}/edit', [App\Http\Controllers\customerController::class, 'edit']);
Route::patch('/customer/{id}', [App\Http\Controllers\customerController::class, 'update']);
Route::delete('/customer/{id}', [App\Http\Controllers\customerController::class, 'destroy']);

Route::get('/transaksi', [App\Http\Controllers\transaksiController::class, 'index']);
Route::get('/transaksi/create', [App\Http\Controllers\transaksiController::class, 'create']);
Route::post('/transaksi', [App\Http\Controllers\transaksiController::class, 'store']);
Route::get('/transaksi/{id}/edit', [App\Http\Controllers\transaksiController::class, 'edit']);
Route::patch('/transaksi/{id}', [App\Http\Controllers\transaksiController::class, 'update']);
Route::delete('/transaksi/{id}', [App\Http\Controllers\transaksiController::class, 'destroy']);