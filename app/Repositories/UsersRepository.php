<?php

namespace App\Repositories;

use App\User;
use App\Session;

class UsersRepository
{

	public function loginUser($username, $password)
	{
		$user = User::where('username', $username)
					->orWhere('email', $username)
					->first();

		if ($user == null || !isset($user)) {
			throw new Exception("Error Processing Request", 1);
		}

		if ($user->password != $password) {
			throw new Exception("Error Processing Request", 1);
		}

		

		$user.>sessions()->save(new Session('TOKENGENERATED'));


		return $user;

	}

	public function getUserSessionByToken($token)
	{

	}

}