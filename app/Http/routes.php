<?php

use Cowsayphp\Cow;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome2');
});

Route::get('/data', function () {
   return view('data2');
});

Route::get('/stripe', function () {
   return view('stripe');
});

Route::get('/scraping', function () {
   return view('scraping');
});

Route::get('/twitter', function () {
   try
    {
        //$response = Twitter::getUserTimeline(['count' => 20, 'format' => 'array']);
        $barackobama = Twitter::getUserTimeline(['screen_name' => 'realdonaldtrump', 'count' => 20, 'format' => 'json']);
        $El_Universal_Mx = Twitter::getUserTimeline(['screen_name' => 'El_Universal_Mx', 'count' => 20, 'format' => 'json']);
        $VILLALVAZO13 = Twitter::getUserTimeline(['screen_name' => 'VILLALVAZO13', 'count' => 20, 'format' => 'json']);
        $Excelsior = Twitter::getUserTimeline(['screen_name' => 'Excelsior', 'count' => 20, 'format' => 'json']);
        $Foro_TV = Twitter::getUserTimeline(['screen_name' => 'Foro_TV', 'count' => 20, 'format' => 'json']);
        $AztecaNoticias = Twitter::getUserTimeline(['screen_name' => 'AztecaNoticias ', 'count' => 20, 'format' => 'json']);
        $trend = Twitter::getTrendsPlace(['id' => '116545']);
        $trend = json_encode($trend);
        $miamitrend = Twitter::getTrendsPlace(['id' => '23424977']);
        $miamitrend = json_encode($miamitrend);
        $barcelonaTrend = Twitter::getTrendsPlace(['id' => '753692']);
        $barcelonaTrend = json_encode($barcelonaTrend);
    }
    catch (Exception $e)
    {
        dd(Twitter::logs());
    }

    return view('twitter', ['barackobama' => $barackobama,'VILLALVAZO13' => $VILLALVAZO13,'El_Universal_Mx' => $El_Universal_Mx,'AztecaNoticias' => $AztecaNoticias,'Excelsior' => $Excelsior,'Foro_TV' => $Foro_TV,'trend' => $trend, 'miamitrend' => $miamitrend, 'barcelonaTrend' => $barcelonaTrend]);
});


/*Mapas*/
Route::get('/maps', function () {
    return view('maps');
});

Route::get('/maps/roadmap', function () {
    return view('/maps/roadmap');
});

Route::get('/maps/marksicons', function () {
    return view('/maps/marksicons');
});

Route::get('/maps/reczoom', function () {
    return view('/maps/reczoom');
});

Route::get('/maps/styled', function () {
    return view('/maps/styled');
});

/*Mapas*/

//Route::get('/voice','DobermanController@voice');
Route::resource('/voice','VoiceController');
Route::get('/languages','VoiceController@languages');
Route::get('/genderAndAge','VoiceController@genderAndAge');
Route::get('/purpose','VoiceController@purpose');
Route::get('/purpose','VoiceController@purpose');
Route::get('/voicesearch','VoiceController@voicesearch');


Route::get('/cow', function () {
    echo '<pre>'.Cow::say("Ohmg I'm a cow!").'</pre>';
});

Route::get('/test', function()
{
    $beautymail = app()->make(Snowfire\Beautymail\Beautymail::class);
    $beautymail->send('emails.welcome', [], function($message)
    {
        $message
            ->from('bar@example.com')
            ->to('utnmike@gmail.com', 'mike goinzalez')
            ->subject('Welcome!');
    });

});

Route::get('mail', 'DobermanController@mail');
Route::get('scraping', 'DobermanController@scrap');
Route::get('jobflorida', 'DobermanController@indeed');

Route::get('animations', 'DobermanController@animations');


/*
REST Countries
Get information about countries via a RESTful API
*/

Route::resource('/exampleajax', 'RestCountries');
Route::get('/countries','RestCountries@countries');

/**/

Route::get('/pdf', function()
{
    $pdf = App::make('dompdf.wrapper');
	$pdf->loadHTML('<h1>Test</h1>');
	return $pdf->stream();
});