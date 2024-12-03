<?php

use App\Http\Controllers\CatCotroller;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Product;
use App\Models\Post;
use App\Models\post_img;

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

    Route::get('/{id}/restore', [CatCotroller::class, 'restore'])->name('category.restore');
    Route::get('/{id}/forcedelete', [CatCotroller::class, 'forceDelete'])->name('category.forcedelete');
    Route::get('/addCategory/create', [CatCotroller::class, 'addCategory'])->name('category.create');
    Route::post('/create/store', [CatCotroller::class, 'store'])->name('category.store');

});
Route::get('/trashcan/trashed', [CatCotroller::class, 'trashed'])->name('category.trashed');


// Route::get('/post', function () {
//     $post = post_img::find(1)->post; // Lấy bài viết từ hình ảnh
//     $images = Post::find(1)->postImg; // Lấy danh sách ảnh từ bài viết
//     return [$post, $images];
// });

Route::get('/post', function () {
    $cat = Category::find(1)->Product;
    $product = Product::find(1)->Category;
    return [$cat, $product];
});

