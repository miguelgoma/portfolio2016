<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DobermanController extends Controller
{
    
    public function  voice(){
        //$customer = \App\Customer::find(1);
        //return view('datos',array('customer' => $customer));

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
        $cleanjson = urldecode(stripslashes($response));
        dd($cleanjson);
        exit;
        return view('voice',array('customer' => $cleanjson));
    }

}