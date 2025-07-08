<?php

use App\Http\Kernel;
use Garavel\Support\Facades\Request;
use Garavel\Support\Facades\Route;

Route::group(
[
	'middleware' =>
	[
		...Kernel::$middlewares,
		...Kernel::$middlewareGroups[ 'web' ],
	]
],
function()
{
	require_once '../routes/web.php';
});

Route::group(
[
	'prefix' => 'api/',
	'middleware' =>
	[
		...Kernel::$middlewares,
		...Kernel::$middlewareGroups[ 'api' ]
	]
],
function()
{
	require_once '../routes/api.php';
});

Route::match(
	Request::getInstance()
);
