<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function user()
    {
    	//relasi
    	return $this->belongsTo('App\User');
    }
}
