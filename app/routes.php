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
})

/*

	$user = new User;
	$user->username = 'newuser4';
	$user->email = 'newemail4';
	$user->password = Hash::make('password');
	$user->status = 'activated';

	$user->save();

	$user_info = new UserInfo;
	$user_info->user_id = $user->id;
	$user_info->first_name = 'Linar';
	$user_info->last_name = 'Garifullin';
	$user_info->save();

		$user_info = new UserInfo(['first_name' => 'Joanna']);
	$user = User::find(1);
	$user_info = $user->userInfo()->update(['first_name' => 'Joanna']);

	*/