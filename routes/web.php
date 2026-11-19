<?php

use App\Http\Controllers\MatakuliahController;
use Illuminate\Support\Facades\Route;

Route::get('/matakuliah', [MatakuliahController::class, 'index'])
  ->name('matakuliah.index');

Route::get('/matakuliah/create', [MatakuliahController::class, 'create'])
  ->name('matakuliah.create');

Route::post('/matakuliah', [MatakuliahController::class, 'store'])
  ->name('matakuliah.store');

Route::get('/matakuliah/{id}', [MatakuliahController::class, 'show'])
  ->name('matakuliah.show');
