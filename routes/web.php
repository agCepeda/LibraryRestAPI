<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->group(['prefix' => 'apiv1'], function () use ($app) {
	$app->group(['prefix' => 'auth', 'namespace' => 'ApiV1'], function () use ($app) {

		$app->post('login', 'AuthController@postLogin');
		$app->get('logout', 'AuthController@getLogout');
		$app->post('register', 'AuthController@postRegister');

	});
});
