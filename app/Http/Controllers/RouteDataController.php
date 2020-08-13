<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Log;
use Redirect;
use GuzzleHttp\Client;
use View;

class RouteDataController extends Controller
{
    protected function fetchrings()
	{
		return View::make('rings');
	}
}
