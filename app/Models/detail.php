<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $table='details';

    protected $fillable = [
        'name', 'slug', 'title', 'image', 'view', 'content', 'description', 'category_id'
    ];
}
