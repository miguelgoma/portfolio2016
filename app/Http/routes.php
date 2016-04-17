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
    return view('welcome');
});


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
    $html = '<html><body>'
            . '<p>Put your html here, or generate it with your favourite '
            . 'templating system.</p>'
            . '</body></html>';
    return PDF::load($html, 'A4', 'portrait')->show();
});