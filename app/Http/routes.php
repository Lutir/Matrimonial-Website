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
Route::post('fetchInfo', 'MainController@fetchProfileInfo');
Route::post('storeInfo', 'MainController@storeProfileInformation');
Route::post('imageUpload', 'MainController@storeImage' );
Route::get('logout', 'MainController@getLogout');

Route::get('error', function()
    {
        return view('error');
    });
Route::get('register', function()
    {
        return view('register');
    });
Route::get('profile', function()
    {
        return view('profile');
    });
