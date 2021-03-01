<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $table='details';

    protected $fillable = [
        'name', 'slug', 'title', 'image', 'view', 'content', 'description', 'category_id'
    ];
    
	public function comments()
	{
    	return $this->hasMany('App\Models\Comment');
	}

	public function category()
	{
		return $this->belongsTo('App\Models\Category');
	}

	public function tags()
	{
		return $this->hasMany('App\Models\Tag');
	}
}
