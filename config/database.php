<?php

return [

	/*
	|--------------------------------------------------------------------------
	| PDO Fetch Style
	|--------------------------------------------------------------------------
	|
	| By default, database results will be returned as instances of the PHP
	| stdClass object; however, you may desire to retrieve records in an
	| array format for simplicity. Here you can tweak the fetch style.
	|
	*/

	'fetch' => PDO::FETCH_CLASS,

	/*
	|--------------------------------------------------------------------------
	| Default Database Connection Name
	|--------------------------------------------------------------------------
	|
	| Here you may specify which of the database connections below you wish
	| to use as your default connection for all database work. Of course
	| you may use many connections at once using the Database library.
	|
	*/

	'default' => 'mysql',

	/*
	|--------------------------------------------------------------------------
	| Database Connections
	|--------------------------------------------------------------------------
	|
	| Here are each of the database connections setup for your application.
	| Of course, examples of configuring each database platform that is
	| supported by Laravel is shown below to make development simple.
	|
	|
	| All database work in Laravel is done through the PHP PDO facilities
	| so make sure you have the driver for your particular database of
	| choice installed on your machine before you begin development.
	|
	*/

	'connections' => [

		'sqlite' => [
			'driver'   => 'sqlite',
			'database' => storage_path().'/database.sqlite',
			'prefix'   => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
		],

		'mysql' => [
			'driver'    => 'mysql',
			'host'      => env('DB_HOST', 'localhost'),
			'port'      => env('DB_PORT', '3306'),
			'database'  => env('web_database', 'gpswox_web'),
			'username'  => env('web_username', env('DB_USERNAME', 'root')),
			'password'  => env('web_password', env('DB_PASSWORD', '')),
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
			'strict'    => false,
		],

		'traccar_mysql' => [
			'driver'    => 'mysql',
			'host'      => env('DB_HOST', 'localhost'),
			'port'      => env('DB_PORT', '3306'),
			'database'  => env('traccar_database', 'gpswox_traccar'),
            'username'  => env('traccar_username', env('DB_USERNAME', 'root')),
            'password'  => env('traccar_password', env('DB_PASSWORD', '')),
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
			'strict'    => false,
		],

		'pgsql' => [
			'driver'   => 'pgsql',
			'host'     => env('DB_HOST', 'localhost'),
			'database' => env('DB_DATABASE', 'forge'),
			'username' => env('DB_USERNAME', 'forge'),
			'password' => env('DB_PASSWORD', ''),
			'charset'  => 'utf8',
			'prefix'   => '',
			'schema'   => 'public',
		],

		'sqlsrv' => [
			'driver'   => 'sqlsrv',
			'host'     => env('DB_HOST', 'localhost'),
			'database' => env('DB_DATABASE', 'forge'),
			'username' => env('DB_USERNAME', 'forge'),
			'password' => env('DB_PASSWORD', ''),
			'prefix'   => '',
		],
	],

	/*
	|--------------------------------------------------------------------------
	| Migration Repository Table
	|--------------------------------------------------------------------------
	|
	| This table keeps track of all the migrations that have already run for
	| your application. Using this information, we can determine which of
	| the migrations on disk haven't actually been run in the database.
	|
	*/

	'migrations' => 'migrations',

	/*
	|--------------------------------------------------------------------------
	| Redis Databases
	|--------------------------------------------------------------------------
	|
	| Redis is an open source, fast, and advanced key-value store that also
	| provides a richer set of commands than a typical key-value systems
	| such as APC or Memcached. Laravel makes it easy to dig right in.
	|
	*/

	'redis' => [
        'client' => env('REDIS_CLIENT', 'predis'), // 6.x: The default Redis client has changed from predis to phpredis
		'cluster' => false,

//        'options' => [
//            'cluster' => env('REDIS_CLUSTER', 'redis'),
//            'prefix' => env('REDIS_PREFIX', \Illuminate\Support\Str::slug(env('APP_NAME', 'laravel'), '_').'_database_'),
//        ],

		'default' => [
			'host'     => env('REDIS_HOST', '127.0.0.1'),
			'port'     => env('REDIS_PORT', '6379'),
            'password' => env('REDIS_PASSWORD', null),
			'database' => env('REDIS_DB', 1),
            'read_write_timeout' => -1,
		],

        'process' => [
            'host'     => env('REDIS_HOST', env('REDIS_PROCESS_HOST', '127.0.0.1')),
            'port'     => env('REDIS_PORT', env('REDIS_PROCESS_PORT', '6379')),
            'password' => env('REDIS_PASSWORD', env('REDIS_PROCESS_PASSWORD', null)),
            'database' => env('REDIS_PROCESS_DB', 0),
            'read_write_timeout' => -1,
        ],

        'session' => [
            'host'     => env('REDIS_HOST', env('REDIS_SESSION_HOST', '127.0.0.1')),
            'port'     => env('REDIS_PORT', env('REDIS_SESSION_PORT', '6379')),
            'password' => env('REDIS_PASSWORD', env('REDIS_SESSION_PASSWORD', null)),
            'database' => env('REDIS_SESSION_DB', 2),
            'read_write_timeout' => -1,
        ],

        'cache' => [
            'host'     => env('REDIS_HOST', env('REDIS_CACHE_HOST', '127.0.0.1')),
            'port'     => env('REDIS_PORT', env('REDIS_CACHE_PORT', '6379')),
            'password' => env('REDIS_PASSWORD', env('REDIS_CACHE_PASSWORD', null)),
            'database' => env('REDIS_CACHE_DB', 3),
        ],

	],

];
