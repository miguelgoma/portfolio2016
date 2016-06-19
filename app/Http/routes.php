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

Route::get('/twitter', function () {
   try
    {
        $response = Twitter::getUserTimeline(['count' => 20, 'format' => 'array']);
    }
    catch (Exception $e)
    {
        dd(Twitter::logs());
    }

    dd($response);
});


/*Mapas*/
Route::get('/maps', function () {
    return view('maps');
});

Route::get('/maps/roadmap', function () {
    return view('/maps/mapsevent');
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


Route::get('/voice','DobermanController@voice');


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

Route::get('/pdf', function()
{
    $pdf = App::make('dompdf.wrapper');
	$pdf->loadHTML('<h1>Test</h1>');
	return $pdf->stream();
});