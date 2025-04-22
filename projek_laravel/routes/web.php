<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

Route::get('/products', [ProductController::class, 'index']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
