<?php

namespace App\Repositories;

use App\User;

class UserRepository
{
	public function getUserByCredentials($username, $password)
	{
		return User::where('username', $username)
					->orWhere('email', $username)
					->first();
	}

}