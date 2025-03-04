<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\TransactionController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);

Route::prefix('category')->group(function () {
    Route::get('food-baverage', [ProductsController::class, 'FoodBaverage']);
    Route::get('beauty-health', [ProductsController::class, 'BeautyHealth']);
    Route::get('home-care', [ProductsController::class, 'HomeCare']);
    Route::get('baby-kid', [ProductsController::class, 'BabyKid']);
});

Route::get('/user/{id}/name/{name}',);

Route::get('/transaction', [TransactionController::class, 'index']);
