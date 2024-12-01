<?php

use App\Http\Controllers\CatCotroller;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('layouts.admin.master');
});


Route::get('/', function () {
    return view('layouts.user.master');
});

Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/add-product', [PageController::class, 'addProduct']);

Route::get('/contact', [PageController::class, 'contact']);
Route::get('/about', [PageController::class, 'about']);


Route::prefix('category')->group(function () {
    Route::get('/', [CatCotroller::class, 'dumpData'])->name('category.index');
    Route::get('/{id?}', [CatCotroller::class, 'findbyid'])->name('category.edit');
    
});
