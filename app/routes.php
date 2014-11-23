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
*/

Route::get('hash/{pass}', function ($pass) {
	$pass_to_hash = $pass;
	return Hash::make($pass_to_hash);
});

// Homepage
Route::get('/', ['as' => 'home', function () {

	/*	
	// display all users that has the current link
	$link = Link::find(2)->user;
	return $link;
	// display all links of the current user
	$user = User::find(1)->first();
	return $user->link;	
	// display all links for the selected tag
	$tags = Tag::whereName('game')->first();
	return $tags->link;
	// display all tags for the selected link
	$link = Link::find(2)->tag;
	return $link;

	return View::make('hello');
	*/

	if ( Auth::guest() )
		return Redirect::route('login');

}]);


// Users
Route::resource('users', 'UsersController');
Route::get('register', ['as' => 'register', 'uses' => 'UsersController@create']);

// Auth / Login
Route::resource('sessions', 'SessionsController');
Route::get('login', ['as' => 'login', 'uses' => 'SessionsController@create']);
Route::get('logout', ['as' => 'logout', 'uses' => 'SessionsController@destroy']);