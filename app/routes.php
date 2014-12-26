<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
| 80292031
| 
| 
|
*/



Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/abbas', function(){

	return 'Hello Abbas!';

});

Route::get('/admin/login', 'SessionsController@create');

Route::get('/admin/logout', 'SessionsController@destroy');

Route::resource('sessions', 'SessionsController');

Route::group(array('before' => 'auth'), function()
{

	Route::get('/admin/users', function(){

		$users = new User;
		return View::make('users.index', ['users' => $users::all()]);

	});

	Route::get('/admin/users/create', 'UsersController@create');
	

	Route::get('/admin/activists/create', 'ActivistsController@create');

	Route::get('/admin/activists/{id}', 'ActivistsController@show');

	Route::get('/admin/activists', function(){

		$activists = new Activist;
		return View::make('activists.index', ['activists' => $activists::all()]);

	});

	Route::resource('/admin/translations', 'TranslationsController');

	Route::resource('/admin/transliterates', 'TransliteratesController');

	Route::resource('/admin', 'AdministratorController');

	Route::resource('/users', 'UsersController');
	
	Route::resource('/transliterates', 'TransliteratesController');
	
	Route::resource('/translations', 'TranslationsController');
	
	Route::resource('/activists', 'ActivistsController');

});

