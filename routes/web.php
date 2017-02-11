<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/sample', function () {
    return view('sample',['message' => 'Welcome to japam.']);
});
*/

//Route::controller('/helo', 'HeloController');
// /Route::post('helo', 'HeloController@postIndex');

//Route::get('helo', 'HeloController@getIndex');
//Route::post('helo', 'HeloController@postIndex');
//
Route::get('helo', 'HeloController@getIndex');
Route::post('helo', 'HeloController@update');
//Route::controller('helo', 'HeloController');
