<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	protected $table='tags';

    protected $fillable = [
        'name', 'slug', 'detail_id'
    ];

	public function detail()
	{
		return $this->hasMany('App\Models\Detail');
	}
}
