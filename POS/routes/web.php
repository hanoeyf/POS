<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\KategoriController;
// use App\Http\Controllers\LevelController;

Route::get('/', function(){
    return view('welcome');
});

// Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);

// Halaman Home
Route::get('/', [HomeController::class, 'index']);

// Halaman Products (route prefix)
Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage']);
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth']);
    Route::get('/home-care', [ProductController::class, 'homeCare']);
    Route::get('/baby-kid', [ProductController::class, 'babyKid']);
});

// Halaman User (route dengan parameter)
Route::get('/user/{id}/name/{name}', [UserController::class, 'show']);

// Halaman Penjualan (POS)
Route::get('/sales', [SalesController::class, 'index']);
