<?php
use App\Http\Controllers\LevelController;

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\KategoriController;

Route::get('/', [WelcomeController::class, 'index']);

Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/list', [UserController::class, 'list']); // Hapus /user/ yang berlebihan
    Route::get('/list', [UserController::class, 'list']);  // Tambahkan GET jika perlu
    Route::get('/create', [UserController::class, 'create']);
    Route::post('/', [UserController::class, 'store']);
    Route::get('/{id}', [UserController::class, 'show']);  // Hapus /user/ yang berlebihan
    Route::get('/{id}/edit', [UserController::class, 'edit']);
    Route::put('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);
    Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
    
});

// Route::get('/user/tambah', [UserController::class, 'tambah']);
// Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);

// Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
// Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);

// Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);
// Route::put('/user/hapus_simpan/{id}', [UserController::class, 'hapus_simpan']);

// Route::get('/', function () {
//     return "Welcome Page";
// });

// Route::get('/level', [LevelController::class, 'index']);
// Route::get('/kategori', [KategoriController::class, 'index']);
// Route::get('/user', [userController::class, 'index']);
// Route::get('/', function(){
//     return view('welcome');
// });

// // Route::get('/level', [LevelController::class, 'index']);


// // Halaman Home
// Route::get('/', [HomeController::class, 'index']);

// // Halaman Products (route prefix)
// Route::prefix('category')->group(function () {
//     Route::get('/food-beverage', [ProductController::class, 'foodBeverage']);
//     Route::get('/beauty-health', [ProductController::class, 'beautyHealth']);
//     Route::get('/home-care', [ProductController::class, 'homeCare']);
//     Route::get('/baby-kid', [ProductController::class, 'babyKid']);
// });

// // Halaman User (route dengan parameter)
// Route::get('/user/{id}/name/{name}', [UserController::class, 'show']);

// // Halaman Penjualan (POS)
// Route::get('/sales', [SalesController::class, 'index']);
