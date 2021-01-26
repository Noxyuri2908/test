<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    protected $table='details';
     protected $fillable = [
        'name', 'slug', 'title', 'image', 'view', 'content', 'description', 'user_id'
    ];
}
