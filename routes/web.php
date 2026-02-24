<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PelanganController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produk', [ProdukController::class, 'index']);

Route::get('/pelanggan', [PelanganController::class, 'index']);

Route::get('/customer', [CustomerController::class, 'index']);


// Materi Kuliah Kategori Routes
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/update/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/delete/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');


// Belajar
Route::get('/book', [BookController::class, 'index']);
Route::get('/book/create', [BookController::class, 'create']);
// Route::get('/book/store', [BookController::class, 'store']);
Route::post('/book/store', [BookController::class, 'store']);
Route::get('/book/edit/{id}', [BookController::class, 'edit']);
Route::put('/book/update/{id}', [BookController::class, 'update']);
Route::delete('/book/destroy/{id}', [BookController::class, 'destroy']);
