<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $fillable = ['name'];
    /**
	 *
	 *many to many relationship
     * @return ORM
	 *
	 */
    public function post()
    {
        return $this->belongsToMany('App\Materi');
    }

}
