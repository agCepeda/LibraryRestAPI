<?php

$app->group(['prefix' => 'api'], function() use ($app) {
	$app->group(['prefix' => 'v1', 'namespace' => 'ApiV1'], function () use ($app) {
		
		$app->group(['prefix' => 'auth'], function () use ($app) {
			$app->post('login', 'AuthController@postLogin');
			$app->get('logout', 'AuthController@getLogout');
			$app->post('register', 'AuthController@postRegister');

		});

		$app->group(['prefix' => 'author'], function () use ($app) {
			$app->get('/', 'AuthorController@index');
			$app->get('index', 'AuthorController@index');
			$app->get('/{id}', 'AuthorController@show');
			$app->get('/{id}/book', 'AuthorController@bookIndex');
		});

		$app->group(['prefix' => 'book'], function () use ($app) {
			$app->get('/', 'BookController@index');
			$app->get('index', 'BookController@index');
			$app->get('/{id}', 'BookController@show');
			$app->get('/{id}/edition', 'BookController@editionIndex');
		});

		$app->group(['prefix' => 'book-publisher'], function () use ($app) {
			$app->get('/', 'BookPublisherController@index');
			$app->get('index', 'BookPublisherController@index');
			$app->get('/{id}', 'BookPublisherController@show');
			$app->get('/{id}/book', 'BookPublisherController@bookIndex');
		});

	});
});
