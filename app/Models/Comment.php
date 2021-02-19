<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table='comments';

    protected $fillable = [
        'name', 'detail_id', 'description', 'slug'
    ];

    public function detail()
	{
    	return $this->hasMany('App\Models\Detail');
	}
}
