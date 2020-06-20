<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = ['kategori'];


	public function materi()
	{
		//lebih dari 1
		return $this->hasMany('App\Materi');
	}
	
}