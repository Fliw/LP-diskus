<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
	 *
     *one to one relationship
     *@return ORM
	 *
	 */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
