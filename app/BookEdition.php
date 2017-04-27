<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookEdition extends Model
{
	public $table = 'book_editions';

	/**
	 *
	 *
	 */
	public function book()
	{
		return $this->belongsTo(Book::class);
	}

	public function bookPublisher()
	{
		return $this->belongsTo(BookPublisher::class);
	}
}
