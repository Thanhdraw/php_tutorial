<?php

use App\Http\Controllers\CatCotroller;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\QBCOntroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SendEmailController;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Post;
use App\Models\post_img;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FormController;
use App\Http\Controllers\QuillEditorController;

Route::get('/admin', function () {
    return view('layouts.admin.master');
})->name('admin');


Route::get('/', function () {
    return view('layouts.user.master');
})->name('home');

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

// Route::get('/post', function () {
//     $cat = Category::find(1)->Product;
//     $product = Product::find(1)->Category;
//     return [$cat, $product];
// });


// Route::get('/manytomany', function () {
//     $user = User::all()->first();
//     $roles = User::find(6)->Role;
//     return [$user, $roles];
// });


Route::prefix('QB')->group(function () {
    Route::get('/', [QBCOntroller::class, 'index']);
    Route::get('/add', [QBCOntroller::class, 'add']);
    Route::get('/find/{id}', [QBCOntroller::class, 'findbyid']);
    Route::get('/join', [QBCOntroller::class, 'groupby']);
    Route::get('/orderBy', [QBCOntroller::class, 'orderBy']);
    Route::get('/update/{id?}', [QBCOntroller::class, 'update']);
    Route::get('/update/{id?}', [QBCOntroller::class, 'delete']);
    Route::get('/bt', [QBCOntroller::class, 'show']);
    Route::get('/create', [QBCOntroller::class, 'create']);
    Route::get('/updateQB/{id?}', [QBCOntroller::class, 'updateQB']);
    Route::get('/deleteQB/{id?}', [QBCOntroller::class, 'deleteQB']);
});

Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::get('/register', [AuthController::class, 'register'])->name(name: 'register');
    Route::post('/register', [AuthController::class, 'regis'])->name(name: 'regis');
    Route::post('/login', [AuthController::class, 'log'])->name(name: 'log');
});


// Route::get('/phanquyen', [AuthController::class, 'phanquyen']);



Route::prefix('form')->group(function () {
    Route::get('/', [FormController::class, 'index'])->name('form.index');
    Route::get('/reg', [FormController::class, 'reg'])->name('form.reg');

    Route::post('/json', [FormController::class, 'handleJson'])->name('form.json');
    Route::post('/store', [FormController::class, 'store'])->name('post.store');
});


Route::prefix('email')->group(function () {
    Route::get('/', [SendEmailController::class, 'sendEmail'])->name('email.send');
});

Route::get('/editors', function () {
    return view('layouts.user.editors.index');
});

Route::post('/editors', [QuillEditorController::class, 'store'])->name('quill.store');
