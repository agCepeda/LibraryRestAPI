<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
	public $table = 'books';

	public function editions()
	{
		return $this->hasMany(BookEdition::class);
	}
}
