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
		if (isset($_GET['id']))
		{
			$event_info = CalendarEvent::where('event_id', $_GET['id'])->get();

			return View::make('account/calendar', [
				'page_title' 	=> 'My Calendar',
				'user' 			=> $this->user,
				'statuses' 		=> DB::table('event_status')->get(),
				'events' 		=> CalendarEvent::where('host_id', $this->user['id'])->get(),
				'event_info' 	=> $event_info->first()
			]);
		}
		return View::make('account/calendar', [
			'page_title' 	=> 'My Calendar',
			'user' 			=> $this->user,
			'statuses' 		=> DB::table('event_status')->get(),
			'events' 		=> CalendarEvent::where('host_id', $this->user['id'])->get()
		]);
	}

	// Create Event
	public function postCalendar()
	{
		$input = Input::all();

		$validation = Validator::make($input, [
			'title' 		=> 'required|between:6,255',
			'start_date' 	=> 'required|date_format:"Y-m-d"|size:10',
			'start_hour' 	=> 'required',
			'start_minute' 	=> 'required',
			'start_ampm' 	=> 'required',
			'end_date' 		=> 'required|date_format:"Y-m-d"|size:10',
			'end_hour' 		=> 'required',
			'end_minute' 	=> 'required',
			'end_ampm' 		=> 'required',
			'address' 		=> 'required|between:6,255',
			'city' 			=> 'required|between:6,255',
			'state' 		=> 'required',
			'zip' 			=> 'required|digits:5',
			'status' 		=> 'required'
		]);

		// Input validation success! Proceed with creating an event.
		if ($validation->passes())
		{
			$event = new CalendarEvent;
			$event->host_id 	= $this->user['id'];
			$event->title 		= $input['title'];
			$event->address 	= $input['address'];
			$event->city 		= $input['city'];
			$event->state 		= $input['state'];
			$event->zip 		= $input['zip'];
			$event->status 		= $input['status'];
			$event->start_time 	= date('Y-m-d H:i:s', strtotime($input['start_date'].' '.$input['start_hour'].':'.$input['start_minute'].' '.$input['start_ampm']));
			$event->end_time 	= date('Y-m-d H:i:s', strtotime($input['end_date'].' '.$input['end_hour'].':'.$input['end_minute'].' '.$input['end_ampm']));

			// If user had specified event description
			if (! empty($input['description'])) {
				$event->description = $input['description'];
			}

			// If user had specified event limit for min age
			if (! empty($input['min_age'])) {
				$event->min_age = $input['min_age'];
			}

			// If user had specified event limit for max age
			if (! empty($input['max_age'])) {
				$event->max_age = $input['max_age'];
			}

			// Add record to [events] table
			$event->save();


			// Redirect to dashboard w/ success msg:
			return Redirect::to('../account/calendar')
				->with('success_msg', 'Event successfully created!');
		}

		// Validation fail. Redirect back to event creation w/ input
		else
		{
			return Redirect::to('../account/calendar')
				->withErrors($validation);
		}
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