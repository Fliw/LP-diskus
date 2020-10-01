<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $table = 'materi';
    protected $fillable = ['judul', 'slug', 'dari', 'pertanyaan'];

	/**
	 *
	 *one to many relationship
	 *
	 * @return ORM
	 */
    public function kategori()
    {
        return $this->belogsTo('App\Kategori');
    }

	/**
	 *
	 *many to many relationship
	 *@return ORM
	 *
	 */
    public function tags()
    {
        return $this->belongsToMany('App\Tags');
    }

}
