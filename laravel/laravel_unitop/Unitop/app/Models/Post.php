<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'posts';

    protected $fillable = ['title', 'content', 'image'];

    public function postImg()
    {
        return $this->hasOne(post_img::class, 'post_id', 'id');
    }
}
