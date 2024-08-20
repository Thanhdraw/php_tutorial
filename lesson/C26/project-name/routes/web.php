<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\UserController;


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/products', [ProductsController::class, 'index'])
    ->name('/products');


// routes/web.php
Route::get('/products/{id}', [ProductsController::class, 'details'])
    ->where('id', '[0-9]+')
    ->name('products/{id}');


Route::get('/signUp', [SignUpController::class, 'index'])->name('/signUp');

Route::get('/login', [UserController::class, 'index'])->name('/login');

