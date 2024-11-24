<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.admin.master');
});


Route::get('/', function () {
    return view('layouts.user.master');
});

Route::get('/products', [PageController::class, 'products']);

Route::get('/contact', [PageController::class, 'contact']);
Route::get('/about', [PageController::class, 'about']);