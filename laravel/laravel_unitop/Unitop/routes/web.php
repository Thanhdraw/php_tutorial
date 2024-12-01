<?php

use App\Http\Controllers\CatCotroller;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
Route::get('/admin', function () {
    return view('layouts.admin.master');
});


Route::get('/', function () {
    return view('layouts.user.master');
});

Route::get('/products', [ProductController::class, 'products'])->name('products');
Route::get('/add-product', [ProductController::class, 'addProduct']);

Route::get('/contact', [PageController::class, 'contact']);
Route::get('/about', [PageController::class, 'about']);


Route::prefix('category')->group(function () {
    Route::get('/', [CatCotroller::class, 'dumpData'])->name('category.index');
    Route::get('/{id?}', [CatCotroller::class, 'findbyid'])->name('category.edit');
    Route::put('/{id}', [CatCotroller::class, 'update'])->name('category.update');
    Route::delete('/{id}', [CatCotroller::class, 'delete'])->name('category.delete');

    Route::get('/trashed', [CatCotroller::class, 'trashed'])->name('category.trashed');

    Route::get('/{id}/restore', [CatCotroller::class, 'restore'])->name('category.restore');
});


