<?php

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

use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/create', 'MailController@store');

Route::get('email/queue', function() {

    Mail::later(5, 'emails.queued_email', ['name' => 'jeffery'], function ($message)
    {
        $message->to('aaa153759g@gmail.com', 'jeffery')->subject('Welcome');
    });

    return 'This email will be sent in 5 seconds.';

});
