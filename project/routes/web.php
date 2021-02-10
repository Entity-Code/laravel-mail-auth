<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () { 
    return view('welcome'); 
});

Auth::routes(); 

//home dell'utente loggato
Route::get('/home', 'HomeController@index')
    -> name('home');

Route::post('/send', 'HomeController@sendMail')
    -> name('send-mail');