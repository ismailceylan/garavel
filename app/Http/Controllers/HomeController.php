<?php

namespace App\Http\Controllers;

use Garavel\Routing\Controller;

class HomeController extends Controller
{
	/**
	 * Handles the request to the home page and returns a welcome message.
	 *
	 * @return string A welcome message.
	 */
	public function index()
	{
		return "Welcome home.";
	}
	
}
