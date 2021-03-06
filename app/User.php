<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $table = 'users';

    public function sessions()
    {
        return $this->hasMany(Session::class);
    }
}
