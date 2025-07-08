<?php

use Garavel\Support\Facades\Route;
use Garavel\Support\Facades\JsonResponse;

Route::get( '/', function()
{
	return JsonResponse::success( 'Welcome to Garavel Rest API.' );
});
