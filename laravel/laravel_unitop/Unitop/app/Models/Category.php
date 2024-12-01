<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'cat';

    protected $fillable = [
        'name',
    ] ;
}
