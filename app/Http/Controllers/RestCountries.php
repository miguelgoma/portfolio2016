<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RestCountries extends Controller
{

	public function index()
    {
        return view('exampleajax');
    }

	public function countries()
    {
		$url_api = 'https://restcountries.eu/rest/v1/all';
        $opts = array(
            CURLOPT_URL => $url_api,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_INFILESIZE => -1,
            CURLOPT_TIMEOUT => 60,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_HTTPGET => TRUE,
        );
        $curl = curl_init();
        curl_setopt_array($curl, $opts);
        $response = curl_exec($curl);
        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);
        $cleanjson = urldecode(stripslashes($response));
        #dd($cleanjson);
        #exit;
        return $cleanjson;

	}

	public function searchcountry()
	{
		
	}


}
