<?php

namespace App\Models;

use App\Http\Controllers\ProductController;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    protected $table = 'products';

    protected $fillable = ['name', 'content', 'img', 'price', 'cat_id'];





}
