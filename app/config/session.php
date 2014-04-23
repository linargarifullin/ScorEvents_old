<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Default Session Driver
	|--------------------------------------------------------------------------
	|
	|	Specifies the default session driver that will be used on requests.
	|	Options: file,cookie, database, apc, memcached, redis, array
	*/

	'driver' => 'file',



	/*
	|--------------------------------------------------------------------------
	| Session Lifetime
	|--------------------------------------------------------------------------
	|
	|	'lifetime': idle time (in minutes) before session expires.
	|	'expire_on_close': session expires after closing browser (true/false).
	*/

	'lifetime' => 30,

	'expire_on_close' => false,



	/*
	|--------------------------------------------------------------------------
	| Session File Location
	|--------------------------------------------------------------------------
	|
	| 	When using the native session driver, we need a location where session
	| 	files may be stored. A default has been set for you but a different
	| 	location may be specified. This is only needed for file sessions.
	|
	*/

	'files' => storage_path().'/sessions',



	/*
	|--------------------------------------------------------------------------
	| Session Database Connection
	|--------------------------------------------------------------------------
	|
	| 	When using the "database" or "redis" session drivers, you may specify
	| 	a connection that should be used to manage these sessions. This should
	| 	correspond to a connection in your database configuration options.
	*/

	'connection' => null,



	/*
	|--------------------------------------------------------------------------
	| Session Database Table
	|--------------------------------------------------------------------------
	|
	|	Specifies the table name used for managing sessions. (Only for 
	|	"database" session driver.)
	*/

	'table' => 'sessions',



	/*
	|--------------------------------------------------------------------------
	| Session Sweeping Lottery
	|--------------------------------------------------------------------------
	|
	|	Some session drivers must manually sweep their storage location to get
	|	rid of old sessions from storage. Here are the chances that it will
	|	happen on a given request. By default, the odds are 2 out of 100.
	*/

	'lottery' => array(2, 100),



	/*
	|--------------------------------------------------------------------------
	| Session Cookie Name
	|--------------------------------------------------------------------------
	|
	|	Specifies the name of the cookie used to identify a session instance
	|	by ID. The name specified here will get used every time a new session
	|	ookie is created by the framework for every driver.
	*/

	'cookie' => 'laravel_session',



	/*
	|--------------------------------------------------------------------------
	| Session Cookie Path
	|--------------------------------------------------------------------------
	|
	|	Determines the path for which the cookie willbe regarded as available.
	*/

	'path' => '/',



	/*
	|--------------------------------------------------------------------------
	| Session Cookie Domain
	|--------------------------------------------------------------------------
	|
	|	Specifies the domain of the cookie used to identify a session in
	|	the application. This will determine which domains the cookie is
	|	available to in the application.
	*/

	'domain' => null,



	/*
	|--------------------------------------------------------------------------
	| HTTPS Only Cookies
	|--------------------------------------------------------------------------
	|
	|	By setting this option to true, session cookies will only be sent back
	|	to the server if the browser has a HTTPS connection. This will keep
	|	the cookie from being sent to you if it can not be done securely.
	*/

	'secure' => false,

);
