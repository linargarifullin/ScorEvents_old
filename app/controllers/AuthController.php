<?php

class AuthController extends BaseController
{
	/*
	|---------------------------------------------------------------
	|	USER  AUTHENTICATION  CONTROLLER
	|---------------------------------------------------------------
	*/

	public function __construct()
	{
		// Prevent logged in users from accessing auth pages (except logout):
		$this->beforeFilter('guest', 	['except' 	=> 'getLogout']);

		// Prevent guests from logging out:
		$this->beforeFilter('auth', 	['only' 	=> 'getLogout']);

		// Protection from Cross-Site Request Forgery (CSRF):
		$this->beforeFilter('csrf', 	['on' 		=> 'post']);
	}



	/**
	 * 	USER LOGIN
	 */
	public function getLogin()
	{
		return View::make('auth/login', [
			'page_title'	=> 'Please Sign In']);
	}

	public function postLogin()
	{
		$input = Input::all();

		$remember_me = isset($input['remember_me']) ? true : false;
		
		// Input validation success!
		if (Auth::attempt(['username' => $input['email_or_username'], 'password' => $input['password']], $remember_me) OR 
			Auth::attempt(['email'    => $input['email_or_username'], 'password' => $input['password']], $remember_me))
		{
			// Update 'last_login' in [users] table:
			User::find(Auth::user()->id)->update(['last_login' => new DateTime]);

			// Redirect to account home (dashboard):
			return Redirect::to('../account');
		}

		// Input validation fail. Redirect back to login w/ error msg.
		else
		{
			return Redirect::to('../auth/login')
				->with('error_msg', 'Your username/email and password combination was incorrect.');
		}
	}



	/**
	 * 	USER REGISTRATION
	 */
	public function getRegistration()
	{
		return View::make('auth/registration', [
			'page_title' => 'Account Registration']);
	}

	public function postRegistration()
	{
		$input = Input::all();

		$validation = Validator::make($input, [
			'first_name' 	=> 'required|max:255',
			'last_name' 	=> 'required|max:255',
			'username' 		=> 'required|between:6,255|alpha_num|unique:users,username',
			'email' 		=> 'required|email|max:255|unique:users,email',
			'password' 		=> 'required|between:6,255|alpha_num|confirmed',
			'terms' 		=> 'required'
		]);

		// Input validation success! Proceed with registration.
		if ($validation->passes())
		{
			// Add record to [users] table:
			$user = new User;
			$user->username 	= $input['username'];
			$user->email 		= $input['email'];
			$user->password 	= Hash::make($input['password']);
			$user->save();


			// Add record to [user_info] table:
			$user_info = new UserInfo;
			$user_info->user_id 	= $user->id;
			$user_info->first_name 	= $input['first_name'];
			$user_info->last_name  	= $input['last_name'];
			$user_info->save();


			// Join records
			$user_data = array_merge(
				User::find($user->id)->toArray(),
				User::find($user->id)->userInfo->toArray()
			);

			// Generate activation key (length):
			$user_data['activation_key'] = str_random(64);


			// Insert activation key in [user_activation] table.
			DB::table('user_activation')->insert([
				'user_id' 	=> $user_data['id'],
				'key' 		=> $user_data['activation_key']
			]);


			// Send activation link.
			Mail::send('emails/welcome', $user_data, function($message) use($user_data)
			{
				$message->to($user_data['email'])
					->subject('Welcome to ScorEvents! Please verify your email address');
			});


			// Redirect to login w/ success msg:
			return Redirect::to('../auth/login')
				->with('success_msg', 'Important! Please check your inbox for a letter containing the account activation link.');
		}

		// Validation fail. Redirect back to registration w/ input (except for the password)
		else
		{
			return Redirect::to('../auth/registration')
				->withInput(Input::except('password'))
				->withErrors($validation);
		}
	}



	/**
	 * 	USER LOGOUT
	 */
	public function getLogout()
	{
		if (Auth::check())
		{
			Auth::logout();

			// Redirect to login w/ success msg:
			return Redirect::to('../auth/login')
				->with('success_msg', 'You have successfully signed out.');
		}

		// Redirect to login:
		return Redirect::to('../auth/login');
	}



	/**
	 * 	USER ACTIVATION
	 */
	public function getActivate($user_id = NULL, $key = NULL)
	{
		// Grab user's record from [user_actication] table
		$user = DB::table('user_activation')->where('user_id', $user_id)->first();

		// The link is valid.
		if ($user != NULL AND $user->key == $key)
		{
			// Activate the user
			$user = User::find($user_id);
			$user->status = 2;
			$user->save();

			// Remove the useless record from [user_activation] table:
			DB::table('user_activation')->where('user_id', $user_id)->delete();

			// Redirect to login:
			return Redirect::to('../auth/login')
				->with('success_msg', 'Account activation is complete. You may now sign in.');
		}

		// Redirect to login:
		return Redirect::to('../auth/login');
	}



	/**
	 * 	Any mistyped URL (e.g. auth/***)
	 */
	public function missingMethod($parameters = array())
	{
		// Redirect to login:
		return Redirect::to('../auth/login');
	}

}
