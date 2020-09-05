<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Log;
use Redirect;
use GuzzleHttp\Client;
use View;
use Storage;

class RouteDataController extends Controller
{
    protected function fetchrings()
	{
		return View::make('rings');
	}

	protected function fetchproduct()
	{
		return View::make('product');
	}

	protected function fetchproduct1()
	{
		 // Storage::disk('public')->put("sdfsdf.svg", fopen("https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg", 'r'));
		// file_put_contents("public/assets", fopen("https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg", 'r'));
		return View::make('product1');
	}
}
