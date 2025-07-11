<?php

namespace App\Http;

class Kernel
{
	/**
	 * Common middlewares.
	 * They are gonna work for all types of requests.
	 */
    public static array $middlewares =
	[

	];

	/**
	 * Categorized middlewares.
	 * They are gonna work if they match the type of the request.
	 */
	public static array $middlewareGroups = 
	[
		'api' =>
		[
			
		],

		'web' =>
		[

		]
	];

	/**
	 * They are middleware shortcuts.
	 * It allows to call middleware classes by their short names.
	 */
	public static array $middlewareAliases =
	[

	];
}