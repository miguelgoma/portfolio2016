<?php

// You can find the keys here : https://apps.twitter.com/

return [
	'debug'               => false,

	'API_URL'             => 'api.twitter.com',
	'UPLOAD_URL'          => 'upload.twitter.com',
	'API_VERSION'         => '1.1',
	'AUTHENTICATE_URL'    => 'https://api.twitter.com/oauth/authenticate',
	'AUTHORIZE_URL'       => 'https://api.twitter.com/oauth/authorize',
	'ACCESS_TOKEN_URL'    => 'https://api.twitter.com/oauth/access_token',
	'REQUEST_TOKEN_URL'   => 'https://api.twitter.com/oauth/request_token',
	'USE_SSL'             => true,

	'CONSUMER_KEY'        => function_exists('env') ? env('TWITTER_CONSUMER_KEY', 'uOtYy8QzmSahAq7koyvC9tUZY') : '',
	'CONSUMER_SECRET'     => function_exists('env') ? env('TWITTER_CONSUMER_SECRET', 'lFE519VwedkggI9fnOMhypzgkxHjO3f2MUW0WcXCuixXlpk7QV') : '',
	'ACCESS_TOKEN'        => function_exists('env') ? env('TWITTER_ACCESS_TOKEN', '108224798-lp8bKRECt2vNtlJAoLrIHnkI3MVqi9cdMryQxZNP') : '',
	'ACCESS_TOKEN_SECRET' => function_exists('env') ? env('TWITTER_ACCESS_TOKEN_SECRET', 'B1d8Sz4btpWWvuVORaTzH9WYOTtinn5tG75YnRCfJ4LGx') : '',
];
