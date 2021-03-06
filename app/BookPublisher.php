<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookPublisher extends Model
{
	public $table = 'book_publishers';

	public function bookEditions()
	{
		return $this->hasMany(BookEdition::class);
	}
}
