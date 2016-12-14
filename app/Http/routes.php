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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/club', function () {
    return view('club');
});

Route::get('/advisor', function () {
    return view('advisor');
});

Route::get('/sssc', function () {
    return view('sssc');
});

Route::get('/operations', function () {
    return view('operations');
});

Route::get('/facilities', function () {
    return view('facilities');
});

Route::get('/its', function () {
    return view('its');
});

Route::get('/registrar', function () {
    return view('registrar');
});

Route::get('/finance', function () {
    return view('finance');
});

Route::get('/execgroup', function () {
    return view('execgroup');
});

Route::get('/superuser', function () {
    return view('superuser');
});
