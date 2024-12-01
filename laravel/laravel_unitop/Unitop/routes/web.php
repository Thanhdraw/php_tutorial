<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('layouts.admin.master');
});


Route::get('/', function () {
    return view('layouts.user.master');
});

// Route::get('/products', [PageController::class, 'products'])->name('products');
// Route::get('/add-product', [PageController::class, 'addProduct']);

Route::get('/contact', [PageController::class, 'contact']);
Route::get('/about', [PageController::class, 'about']);


Route::get('products', [ProductController::class, 'products'])->name('products');

Route::get('add-product', [ProductController::class, 'addProduct']);