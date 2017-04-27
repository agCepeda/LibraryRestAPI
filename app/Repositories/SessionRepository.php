<?php

namespace App\Repositories;

use Illuminate\Auth\Access\AuthorizationException;

use App\Session;

class SessionRepository
{

	public function loginUser($username, $password)
	{
		$userRepo = resolve(UserRepository::class);

		$user = $userRepo->getUserByCredentials($username, $password);

		if ($user == null || ! isset($user)) {
			throw new AuthorizationException("User doesn't exist");
		}

		if ($user->password != $password) {
			throw new AuthorizationException("Password is incorrect");
		}

		$session = new Session(generateRandomToken(40));
		$session->user()->attach($user);
		$session->save();


		return $session;

	}

	public function getUserSessionByToken($token)
	{
	}
}