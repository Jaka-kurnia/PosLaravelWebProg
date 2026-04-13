<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\PelanganController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SuplierController;
use App\Http\Middleware\CekRole;
use Illuminate\Support\Facades\Route;



Route::middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    // Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/proseslogin', [AuthController::class, 'prosesLogin'])->name('proseslogin');
});


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard']);
    // Materi Kuliah Kategori Routes

    Route::middleware(CekRole::class . ':admin')->group(function () {
        Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
        Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::put('/categories/update/{id}', [CategoryController::class, 'update'])->name('categories.update');
        Route::delete('/categories/delete/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    });

    Route::post('/proseslogout', [AuthController::class, 'prosesLogout'])->name('proseslogout');
    Route::get('/pelanggan', [PelanganController::class, 'index']);
    // Route Products
    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');


    Route::get('/field', [FieldController::class, 'index'])->name('field.index');
    Route::get('/field/create', [FieldController::class, 'create'])->name('field.create');
    Route::post('field/store', [FieldController::class, 'store'])->name('field.store');
    Route::get('/field/edit/{id}', [FieldController::class, 'edit'])->name('field.edit');
    Route::put('/field/update/{id}', [FieldController::class, 'update'])->name('field.update');
    Route::delete('/field/destroy/{id}', [FieldController::class, 'destroy'])->name('filed.destroy');


    Route::get('/book', [BookController::class, 'index'])->name('book.index');


    // Route Suplier

    Route::get('/suplier', [SuplierController::class, 'index'])->name('suplier.index');
    Route::get('/suplier/create', [SuplierController::class, 'create'])->name('suplier.create');
    Route::post('/suplier/store', [SuplierController::class, 'store'])->name('suplier.store');
    Route::get('/suplier/edit/{id}', [SuplierController::class, 'edit'])->name('suplier.edit');
    Route::put('/suplier/update/{id}', [SuplierController::class, 'update'])->name('suplier.update');
    Route::delete('/suplier/destroy/{id}', [SuplierController::class, 'destroy'])->name('suplier.destroy');
});
