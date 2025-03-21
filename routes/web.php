<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);

Route::get('/user', [UserController::class, 'index']);

Route::get('/user/tambah', [UserController::class, 'tambah']);
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);

route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);

route::get('/user/hapus/{id}', [UserController::class, 'hapus']);

Route::prefix('category')->group(function () {
    Route::get('food-baverage', [ProductsController::class, 'FoodBaverage']);
    Route::get('beauty-health', [ProductsController::class, 'BeautyHealth']);
    Route::get('home-care', [ProductsController::class, 'HomeCare']);
    Route::get('baby-kid', [ProductsController::class, 'BabyKid']);
});

Route::get('/user/{id}/name/{name}',);

Route::get('/transaction', [TransactionController::class, 'index']);
