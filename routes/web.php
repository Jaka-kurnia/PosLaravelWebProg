<?php

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

Route::get('/categories', [CategoryController::class,'index']);

Route::get('/customer',[ CustomerController::class,'index']);
