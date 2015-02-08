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

	return View::make('frontend.index')

		->withCases( (new ActiveCase)->all() )
		->withActivists( (new Activist)->all() );

});

Route::get('/reports', function()
{
	return View::make('frontend.reports');
});

Route::get('/view-transliterates', function()
{
	return View::make('frontend.transliterates');
});

Route::get('/view-translations', function()
{
	return View::make('frontend.translations');
});

Route::get('/contact-us', function()
{
	return View::make('frontend.contact');
});

Route::get('/faqs', function()
{
	return View::make('frontend.faqs');
});

Route::get('/debug', function(){

	return dd( Session::token() );
	return dd( Auth::user() );

});

Route::group(array('before' => 'auth'), function()
{

	Route::get('admin', 'AdministratorController@index');
	Route::resource('admin/users', 'UsersController');
	Route::resource('admin/activists', 'ActivistsController');
	Route::resource('admin/cases', 'CasesController');
	Route::resource('admin/translations', 'TranslationsController');
	Route::resource('admin/transliterates', 'TransliteratesController');
	
	Route::resource('users', 'UsersController');
	Route::resource('activists', 'ActivistsController');
	Route::resource('cases', 'CasesController');
	Route::resource('translations', 'TranslationsController');
	Route::resource('transliterates', 'TransliteratesController');

	Route::get('/api/v1/cases', function(){

		$cases = new ActiveCase;

		return $cases->datatables();

	});

	Route::get('/api/v1/transliterates', function(){

		$transliterates = new Transliterate;

		return $transliterates->datatables();

	});

	Route::get('/api/v1/translations', function(){

		$translations = new Translation;

		return $translations->datatables();

	});

});


// Route::get('/admin/login', 'SessionsController@create');

// Route::get('/admin/logout', 'SessionsController@destroy');

// Route::resource('sessions', 'SessionsController');

// Route::group(array('before' => 'auth'), function()
// {

// 	Route::get('/admin/users', function(){

// 		$users = new User;
// 		return View::make('users.index', ['users' => $users::all()]);

// 	});

// 	Route::get('/admin/users/create', 'UsersController@create');
	
// 	Route::get('/admin/activists/create', 'ActivistsController@create');

// 	Route::get('/admin/activists/{id}', 'ActivistsController@show');

// 	Route::get('/admin/activists', function(){

// 		$activists = new Activist;
// 		return View::make('activists.index', ['activists' => $activists::all()]);

// 	});

	
// 	Route::get('cases/{id}', 'CasesController@destroy');
	
// 	Route::get('/admin/cases/create', 'CasesController@create');

// 	Route::get('admin/cases/{id}', 'CasesController@show');

// 	Route::get('/admin/cases', function (){

// 		$cases = new ActiveCase;
// 		return View::make('cases.index', ['cases' => $cases::all()]);

// 	});
	
// 	Route::resource('/admin/translations', 'TranslationsController');

// 	Route::resource('/admin/transliterates', 'TransliteratesController');

// 	Route::resource('cases', 'CasesController');

// 	Route::resource('/admin', 'AdministratorController');

// 	Route::resource('/users', 'UsersController');
	
// 	Route::resource('/transliterates', 'TransliteratesController');
	
// 	Route::resource('/translations', 'TranslationsController');
	
// 	Route::resource('activists', 'ActivistsController');

// 	Route::get('/api/cases', function(){

// 		$cases = new ActiveCase;
// 		return  $cases::all();

// 	});


//});

