<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Default Queue Driver
	|--------------------------------------------------------------------------
	|
	| The Laravel queue API supports a variety of back-ends via an unified
	| API, giving you convenient access to each back-end using the same
	| syntax for each one. Here you may set the default queue driver.
	|
	| Supported: "null", "sync", "database", "beanstalkd",
	|            "sqs", "iron", "redis"
	|
	*/

	'default' => env('QUEUE_DRIVER', 'redis'),

	/*
	|--------------------------------------------------------------------------
	| Queue Connections
	|--------------------------------------------------------------------------
	|
	| Here you may configure the connection information for each server that
	| is used by your application. A default configuration has been added
	| for each back-end shipped with Laravel. You are free to add more.
	|
	*/

	'connections' => [

		'sync' => [
			'driver' => 'sync',
		],

		'database' => [
			'driver' => 'database',
			'table' => 'jobs',
			'queue' => 'default',
			'retry_after' => 300,
            'after_commit' => false,
		],

		'beanstalkd' => [
			'driver' => 'beanstalkd',
			'host'   => 'localhost',
			'queue'  => 'default',
			'retry_after'    => 300,
            'after_commit' => false,
		],

		'sqs' => [
			'driver' => 'sqs',
			'key'    => 'your-public-key',
			'secret' => 'your-secret-key',
			'queue'  => 'your-queue-url',
			'region' => 'us-east-1',
            'suffix' => env('SQS_SUFFIX'),
            'after_commit' => false,
		],

		'iron' => [
			'driver'  => 'iron',
			'host'    => 'mq-aws-us-east-1.iron.io',
			'token'   => 'your-token',
			'project' => 'your-project-id',
			'queue'   => 'your-queue-name',
			'encrypt' => true,
		],

		'redis' => [
			'driver' => 'redis',
			'queue'  => 'default',
			'retry_after' => 300,
            'after_commit' => false,
		],

	],

	/*
	|--------------------------------------------------------------------------
	| Failed Queue Jobs
	|--------------------------------------------------------------------------
	|
	| These options configure the behavior of failed queue job logging so you
	| can control which database and table are used to store the jobs that
	| have failed. You may change them to any database / table you wish.
	|
	*/

	'failed' => [
        'driver' => env('QUEUE_FAILED_DRIVER', 'database-uuids'),
		'database' => 'mysql',
        'table' => 'jobs_failed',
	],

];
