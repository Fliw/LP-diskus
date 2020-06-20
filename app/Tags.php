<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $fillable = ['name'];

    public function post()
    {
    	//Lebih dari 1
    	return $this-> belongsToMany('App\Materi');
    }


}
