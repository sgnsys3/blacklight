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
Route::get('download/img/{img_name}', 'ImageController@download');
Route::get('profile/edit/{id}', 'EditProfile@show');
Route::post('profile/edit/{id}', 'EditProfile@submitedit');
Route::get('/', function () {
    return view('regis');
});

Route::post('/', 'regis@regis');

Route::get('/quene', 'quene@show');
Route::post('/quene', 'quene@submitcast');
Route::get('/getall' , 'GetAllInfo@show');
Route::post('/getall' , 'GetAllInfo@skipUser');