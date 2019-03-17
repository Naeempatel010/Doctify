<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

 	public function post_callAPI($url, $array_data)
 	{
   		$make_call = callAPI('POST', $url,json_encode($array_data));
		$response = json_decode($make_call, true);
		$errors   = $response['response']['errors'];
		$data     = $response['response']['data'][0];

		return $data;	
	}	

 	public function diabeties_backend(Request $request)
 	{
		echo $request;
 	}

 	public function abs()
 	{
 		$url="http://192.168.43.116:9000/api/diabetes";
		$curl = curl_init();

		curl_setopt_array($curl, array(
	    CURLOPT_URL => $url,
	    CURLOPT_RETURNTRANSFER => true,
	    CURLOPT_ENCODING => "",
	    CURLOPT_MAXREDIRS => 10,
	    CURLOPT_TIMEOUT => 30000,
	    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	    CURLOPT_CUSTOMREQUEST => "POST",
	    CURLOPT_POSTFIELDS => $request,
	    CURLOPT_HTTPHEADER => array(
	    	
	        "accept: */*",
	        "accept-language: en-US,en;q=0.8",
	        "content-type: application/json",
	   		),
		));
		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err)
		    echo "cURL Error #:" . $err;
		else 
		    print_r(json_decode($response));

 	}
}