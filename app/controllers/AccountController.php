<?php

class AccountController extends BaseController
{
	/*
	|---------------------------------------------------------------
	|	ACCOUNT  CONTROLLER
	|---------------------------------------------------------------
	*/

	public function __construct()
	{
		// Prevent guests from accessing account pages:
		$this->beforeFilter('auth');

		// Protection from Cross-Site Request Forgery (CSRF):
		$this->beforeFilter('csrf', ['on' => 'post']);

		// Have to include this condition, because at this point Laravel doesn't know that filters are in place
		if (Auth::check())
		{
			// Join records from both [users] and [user_info] tables into one array $this->user
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



	/**
	 * 	CALENDAR
	 */
	public function getCalendar()
	{
		return View::make('account/calendar', [
			'page_title' 	=> 'My Calendar',
			'user' 			=> $this->user
		]);
	}



	/**
	 * 	FRIENDS
	 */
	public function getFriends()
	{
		return View::make('account/friends', [
			'page_title' 	=> 'Friends',
			'user' 			=> $this->user
		]);
	}



	/**
	 * 	PROFILE
	 */
	public function getProfile()
	{
		return View::make('account/profile', [
			'page_title' 	=> 'Profile',
			'user' 			=> $this->user
		]);
	}



	/**
	 * 	SETTINGS
	 */
	public function getSettings()
	{
		return View::make('account/settings', [
			'page_title' 	=> 'Settings',
			'user' 			=> $this->user
		]);
	}



	/**
	 * 	Any mistyped URL (e.g. auth/***)
	 */
	public function missingMethod($parameters = array())
	{
		// Redirect to login:
		return Redirect::to('../account');
	}
	
}