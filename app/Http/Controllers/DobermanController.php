<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Goutte\Client;

class DobermanController extends Controller
{
    
    public function  voice()
    {
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
        #dd($cleanjson);
        #exit;
        return view('voice', ['customer' => $cleanjson]);
    }

    public function mail()
    {

        $user = User::find(1)->toArray();
        Mail::send('emails.mailEvent', $user, function($message) use ($user) {
            $message->to($user->email);
            $message->subject('Mailgun Testing');
        });
        dd('Mail Send Successfully');
        
    }

    public function scrap()
    {
        $client = new Client();
        $crawler = $client->request('GET', 'http://ebookee.org/tutorial.html');
        $this->var = 0;
        $crawler->filter('div .pagination > ul > li > a')->each(function ($node) {
            $this->var+=1;
            if ($this->var==1) {
                for ($i=0; $i < 1; $i++) { 
                    $nd = $node->text();
                    $nd -= $i;
                    $uri = 'http://ebookee.org/tutorial-page'.$nd.'.html';
                    $client = new Client();
                    $cw = $client->request('GET', $uri);
                    $cw->filter('ol > li > a')->each(function ($node) {
                        if ( preg_match('/PHP|Laravel|Ruby|RUBY|Lynda|Infiniteskills|Code|TutsPlus|English|Commerce|School|Learn|Apache|Cordova|SVN|Git|WordPress|Commerce|Linux|SecureNinja|Facebook|MySQL|CodeSchool|Reilly|SkillShare|Modern|Coursera|Deploying|Services|Marketing|Android|JavaScript|Laracasts|Angular|NodeJS|SQL|YouTube|PostgreSQL|Rails|Testing|CSS3|Google|Business|Course|Html/',$node->text()) ) {
                            #print $node->text()."<br/>";
                            $this->titles[] = array('title'=>$node->text());
                        }
                    });
                }
            }
                        
        });
        $response = json_encode( $this->titles );
        return view('scraping', ['response' => $response]);
    }

}
