<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Default Cache Store
	|--------------------------------------------------------------------------
	|
	| This option controls the default cache connection that gets used while
	| using this caching library. This connection is used when another is
	| not explicitly specified when executing a given caching function.
	|
	*/

	'default' => env('CACHE_DRIVER', 'redis'),

	/*
	|--------------------------------------------------------------------------
	| Cache Stores
	|--------------------------------------------------------------------------
	|
	| Here you may define all of the cache "stores" for your application as
	| well as their drivers. You may even define multiple stores for the
	| same cache driver to group types of items stored in your caches.
	|
	*/

	'stores' => [

		'apc' => [
			'driver' => 'apc'
		],

		'array' => [
			'driver' => 'array'
		],

		'database' => [
			'driver' => 'database',
			'table'  => 'cache',
			'connection' => null,
		],

		'file' => [
			'driver' => 'file',
			'path'   => storage_path().'/framework/cache',
		],

		'memcached' => [
			'driver'  => 'memcached',
			'servers' => [
				[
					'host' => '127.0.0.1', 'port' => 11211, 'weight' => 100
				],
			],
		],

		'redis' => [
			'driver' => 'redis',
			'connection' => 'cache',
		],

        'sqlite' => [
            'driver'    => 'sqlite',
            'table'     => 'cache',
            'database'  => storage_path() . '/cache.sqlite',
            'prefix'    => '',
        ],

	],

	/*
	|--------------------------------------------------------------------------
	| Cache Key Prefix
	|--------------------------------------------------------------------------
	|
	| When utilizing a RAM based store such as APC or Memcached, there might
	| be other applications utilizing the same cache. So, we'll specify a
	| value to get prefixed to all our keys so we can avoid collisions.
	|
	*/

	'prefix' => 'laravel',

];
