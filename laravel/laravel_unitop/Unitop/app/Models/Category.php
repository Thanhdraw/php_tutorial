<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    //
    use SoftDeletes;
    protected $table = 'cat';

    protected $fillable = [
        'name',
        'deleted_at',
    ];

    public function Product(){
        return $this->hasMany(Product::class,'cat_id','id');
    }
    




}
