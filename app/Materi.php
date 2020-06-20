<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $table = 'materi';
    protected $fillable = ['judul','slug', 'dari', 'pertanyaan'];


	public function kategori()
	{
		//Hanya 1
		return $this->belogsTo('App\Kategori');
	}


    public function tags()
    {
    	//boleh banyak
    	return $this->belongsToMany('App\Tags');
    }

}