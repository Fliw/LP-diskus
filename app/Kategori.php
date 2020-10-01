<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
	protected $fillable = ['kategori'];
	/**
	 *
	 *one to many relationship
	 *@return ORM
	 *
	 */
	public function materi()
	{
		return $this->hasMany('App\Materi');
	}
	
}