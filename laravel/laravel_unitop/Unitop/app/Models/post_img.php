<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class post_img extends Model
{
    //
    protected $table = 'post_img';

    protected $fillable = [
        'post_id',
        'img',
    ];


}
