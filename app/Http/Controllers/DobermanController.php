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
            $this->cntr=1;
            if ($this->var==1) {
                $nd = $node->text();
                for ($i=0; $i < 5; $i++) { 
                    $nd--;
                    $uri = 'http://ebookee.org/tutorial-page'.$nd.'.html';
                    $client = new Client();
                    $cw = $client->request('GET', $uri);
                    $cw->filter('ol > li > a')->each(function ($node) {
                        if ( preg_match('/PHP|Laravel|Ruby|RUBY|Lynda|Infiniteskills|Code|TutsPlus|English|Commerce|School|Learn|Apache|Cordova|SVN|Git|WordPress|Commerce|Linux|SecureNinja|Facebook|MySQL|CodeSchool|Reilly|SkillShare|Modern|Coursera|Deploying|Services|Marketing|Android|JavaScript|Laracasts|Angular|NodeJS|SQL|YouTube|PostgreSQL|Rails|Testing|CSS3|Google|Business|Course|Html|Bootstrap|Net|Json|Design|Android|ASP/',$node->text()) ) {
                            #print $node->text()."<br/>";
                            $this->titles[] = array('number'=>$this->cntr,'title'=>$node->text());
                            $this->cntr++;
                        }
                    });
                }
            }
        });
        $response = json_encode( $this->titles );
        return view('scraping', ['response' => $response]);
    }

    public function indeed()
    {

        $client = new Client();
        //$crawler = $client->request('GET', 'http://www.indeed.com/jobs?q=php&l=United+States+fl');
        $crawler = $client->request('GET', 'http://www.indeed.com/jobs?as_and=php&as_phr=&as_any=&as_not=&as_ttl=&as_cmp=&jt=all&st=&salary=&radius=50&l=United+States+fl&fromage=15&limit=50&sort=&psf=advsrch');

        $crawler->filter('div > span[itemprop="jobLocation"]')->each(function ($node) {
                //print $node->text()."<br/>";
                $this->jobLocation[] = $node->text();
        });

        $crawler->filter('div > span.date')->each(function ($node) {
                $this->date[] = $node->text();
        });  

        $crawler->filter('div > span.company')->each(function ($node) {
                $this->company[] = $node->text();
        });

        $crawler->filter('a')->each(function ($node) {
            if ( preg_match('/clk/',$node->attr('href')) ) {
                $this->titleJob[] = $node->text();
                //print $node->attr('href')."<br/>";
                $this->refTitleJob[] = $node->attr('href');
            }            

        });

        $count = sizeof($this->titleJob);
        for ($i=0; $i < $count; $i++) { 
            #echo "Titulo: ".$this->titleJob[$i]."<br/> Compañía: ".$this->company[$i]."<br/> Lugar: ".$this->jobLocation[$i]."<br/> Date: ".$this->date[$i]."<br/> Ref: ".$this->refTitleJob[$i]." "."<br/><br/>";
            $this->titles[] = array('title' => $this->titleJob[$i], 'company' => $this->company[$i], 'location' => $this->jobLocation[$i], 'fecha' => $this->date[$i], 'ref' => $this->refTitleJob[$i]);
        }
        
        $response = json_encode( $this->titles );
        return view('jobflorida', ['response' => $response]);

    }

    public function animations()
    {
        return view('animations');
    }

}
