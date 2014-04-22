<?php

use Illuminate\Auth\UserInterface;

class User extends Eloquent implements UserInterface
{
	protected $table = 'users';

	protected $hidden = array('password'); 		// Exclude attribute from the model's JSON form
	
	protected $fillable = array('last_login'); 	// Permit mass assignment
	
	public $timestamps = false; 				// Disable automatic timestamps




	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	public function getAuthPassword()
	{
		return $this->password;
	}

	public function userInfo()
	{
		return $this->hasOne('UserInfo', 'user_id', 'id');
	}

	public function getRememberToken()
	{
		return $this->remember_token;
	}

	public function setRememberToken($value)
	{
		$this->remember_token = $value;
	}

	public function getRememberTokenName()
	{
		return 'remember_token';
	}
}