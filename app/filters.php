<?php

/*
|--------------------------------------------------------------------------
| Authentication Filter
|--------------------------------------------------------------------------
|
|	Checks if the current user is logged in and his account is activated.
|	Else redirect to the login page.
*/

Route::filter('auth', function()
{
	// Check if the user is not logged in
	if (Auth::guest())
	{
		return Redirect::guest('../auth/login');
	}

	// Check if the user is not activated
	else if (User::find(Auth::user()->id)->status != 2)
	{
		Auth::logout();

		return Redirect::to('../auth/login')
			->with('error_msg', 'Your account is not active yet. Please check your inbox for a letter containing the account activation link.');
	}
});




/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
|	Checks if the current user is a guest.
|	Else redirect him to the account page.
*/

Route::filter('guest', function()
{
	// Check if the user is logged in
	if (Auth::check())
	{
		return Redirect::to('../account');
	}
});



/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
|	Protects the application against Cross-Site Request Forgery attacks.
|	Detects if the special token in the user's session dosn't match
|	the one given in this request.
*/

Route::filter('csrf', function()
{
	if (Session::token() != Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});
