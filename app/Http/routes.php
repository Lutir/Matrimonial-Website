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
    return view('index');
});

Route::post('auth', 'MainController@login');
Route::post('reg', 'MainController@register');

Route::get('error', function()
    {
        return view('error');
    });
Route::get('register', function()
    {
        return view('register');
    });
