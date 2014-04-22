<?php

class AccountController extends BaseController
{
	/*
	|-------------------------------------------------
	| 	ACCOUNT  CONTROLLER
	|-------------------------------------------------
	*/

	public function __construct()
	{
		$this->beforeFilter('auth'); 					// Redirect if user is not logged in
		$this->beforeFilter('csrf', ['on' => 'post']); 	// CSRF filter

		// Have to include this condition, because at this point Laravel doesn't know that filters are in place
		if (Auth::check())
		{
			// Join records from both [users] and [user_info] tables into one array
			$this->user = array_merge(
				User::find(Auth::user()->id)->toArray(),
				User::find(Auth::user()->id)->userInfo->toArray()
			);
		}
	}




	/**
	 * 	DASHBOARD
	 */
	public function getDashboard()
	{
		return View::make('account/dashboard', [
			'page_title' 	=> 'Dashboard',
			'user' 			=> $this->user
		]);
	}
	
}