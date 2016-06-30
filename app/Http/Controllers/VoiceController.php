<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class VoiceController extends Controller
{
    public function index()
    {
        return view('voice.muestra');
    }

    public function purpose()
    {
    	$url_api = 'https://api.voicebunny.com/purposes';
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
		return $cleanjson;		
    }

    public function genderAndAge()
    {
        $url_api = 'https://api.voicebunny.com/genderAndAges';
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
		$response = json_decode($response, true);
		return $response;
    }

    public function languages()
    {
    	$url_api = 'https://api.voicebunny.com/languages';
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
        return $response;
    }
}