<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $table = 'roles';
    protected $fillable = [
        'name',
        'display_name',
        'description',
        'created_at',
        'updated_at',
    ];
    public function Users()
    {
        return $this->belongsToMany(User::class, 'role_user', 'role_id', relatedPivotKey: 'user_id');

    }

}
