<?php

// Import class Route dari Laravel untuk mendefinisikan routing
use Illuminate\Support\Facades\Route;
// Import ItemController untuk menghubungkan route dengan controller
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;

// Route untuk halaman utama ('/') yang menampilkan view welcome
Route::get('/', function () {
    return view('welcome'); // Tampilkan halaman welcome
});

Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
// Route resource untuk ItemController
// Ini otomatis membuat route untuk CRUD (Create, Read, Update, Delete) item
Route::resource('items', ItemController::class);