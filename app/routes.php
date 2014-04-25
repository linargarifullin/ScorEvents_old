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
Route::get('auth', function()
{
	return Redirect::to('../auth/login');
});
Route::controller('auth', 'AuthController');



/**
 * Account Home
 */
Route::get('account', function()
{
	return Redirect::to('../account/dashboard');
});
Route::controller('account', 'AccountController');



/**
 * Test case (ignore!)
 */
Route::get('test', function()
{
	$user_data = [
		'id' => 1,
		'username' => 'user',
		'email' => 'gariffusa@gmail.com',
		'first_name' => 'first_name',
		'last_name' => 'last_name',
		'activation_key' => '%act_key%',
	];
	Mail::send('emails/welcome', $user_data, function($message) use($user_data)
	{
		$message->to($user_data['email'])->subject('Welcome to ScorEvents! Please verify your email address');
	});

	die('completed.');
});
