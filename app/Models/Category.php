<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	public function details()
	{
    	return $this->hasMany('App\Models\Detail');
	}
    protected $table='categories';

    protected $fillable = [
        'name', 'slug'
    ];
}
