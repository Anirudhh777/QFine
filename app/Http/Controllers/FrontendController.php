<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Log;
use Redirect;
use GuzzleHttp\Client;


class FrontendController extends Controller
{	
	public function __construct()
	{
		$this->client = new \GuzzleHttp\Client(['verify' => false]);
	}

	protected function get_client_ip()
	{
		$ipaddress = '';
		if (isset($_SERVER['HTTP_CLIENT_IP']))
			$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
		else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_X_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
		else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_FORWARDED'];
		else if(isset($_SERVER['REMOTE_ADDR']))
			$ipaddress = $_SERVER['REMOTE_ADDR'];
		else
			$ipaddress = 'UNKNOWN';
		return $ipaddress;
	}

	protected function ip_check()
	{
		try{
			$ip = $this->get_client_ip();
			$request = $this->client->request('GET', 'http://api.ipstack.com/'.$ip.'?access_key='.env('ipstack').'&format=1');
			$response = json_decode($request->getBody(), true);
			if(is_null($response['country_name'])){
				return response()->json(['error' => 'Country Not Found'], 404);
			}else{
				return $response['country_name'];
			}
		}catch(\Exception $e){
           return response()->json(['error' => 'Error msg'], 404);
        }
		
	}

}
