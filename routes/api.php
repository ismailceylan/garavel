<?php

use Garavel\Support\Facades\Route;
use Garavel\Support\Facades\JsonResponse;

Route::get( '/', function()
{
	return JsonResponse::success(
	[
		'status' => 'success',
		'message' => 'Welcome to Garavel Rest API.',
	]);
});
