<?php

use App\Http\Controllers\PelanganController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prodak', [ProdukController::class, 'index']);


Route::get('/pelanggan', [PelanganController::class, 'index']);
