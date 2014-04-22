<?php

/**
 * Home Page
 */
Route::get('/', function()
{
	return Redirect::to('../auth/login');
});



/**
 * User Authentication
 */
Route::get('auth', function() {
	return Redirect::to('../auth/login');
});
Route::controller('auth', 'AuthController');



/**
 * Account
 */
Route::get('account', function() {
	return Redirect::to('../account/dashboard');
});
Route::controller('account', 'AccountController');

Route::get('email', function() {
		array_merge(
				User::find(1)->toArray(),
				User::find(1)->userInfo->toArray()
			);
	return View::make('emails/welcome')->with($user);
});
