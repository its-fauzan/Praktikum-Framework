<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProductController;

Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/produk/{id}', [ProdukController::class, 'show'])->name('produk.show');

// Atau menggunakan Resource Route untuk 7 route CRUD sekaligus
Route::resource('produk', ProdukController::class);


Route::get('/product', [ProductController::class, 'index']);


Route::get(
  '/product/{id}',
  function ($id) {
    return 'Produk #' . $id;
  }
);

// /products/42
// -> $id = 42