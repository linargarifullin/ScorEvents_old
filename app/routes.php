<?php

/**
 * Home
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
 * Account Home
 */
Route::get('account', function() {
	return Redirect::to('../account/dashboard');
});
Route::controller('account', 'AccountController');
