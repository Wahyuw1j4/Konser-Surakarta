<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\konserController;
use App\Http\Controllers\tiketController;
use App\Http\Controllers\authController;

Route::get('/', [indexController::class, 'index']) -> name('index') -> middleware('auth');

Route::get('/tambah', [konserController::class, 'showTambah']) -> name('tambah') -> middleware('auth');
Route::post('/tambah', [konserController::class, 'tambah']) -> name('tambah.konser') -> middleware('auth');

Route::get('/konser/{id}', [konserController::class, 'index'])->name('konser') -> middleware('auth');

Route::get('/konser/{id}/edit', [konserController::class, 'showEdit']) -> name('show.konser') -> middleware('auth');
Route::put('/konser/{id}/edit', [konserController::class, 'edit']) -> name('konser.edit') -> middleware('auth');
Route::delete('/konser/{id}/delete', [konserController::class, 'delete']) -> name('delete.konser') -> middleware('auth');

Route::get('/konser/{id}/tiket', [tiketController::class, 'tiket']) -> middleware('auth');
Route::post('/konser/{id}/tiket', [tiketController::class, 'storeTiket']) -> middleware('auth');
Route::get('/tiket', [tiketController::class, 'listTiket'])->name('listTiket')->middleware('auth');



// Authentication Routes
Route::get('/login', [authController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [authController::class, 'login']); 
Route::get('/logout', [authController::class, 'logout'])->name('logout')->middleware('auth');

// Registration Routes
Route::get('/register', [authController::class, 'showRegistrationForm'])->name('register') -> middleware('guest');
Route::post('/register', [authController::class, 'register']) -> middleware('guest');
