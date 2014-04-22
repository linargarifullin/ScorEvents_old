<?php

class UserInfo extends Eloquent
{

	protected $table = 'user_info';

	public function User()
	{
		$this->belongsTo('User', 'user_id');
	}
}