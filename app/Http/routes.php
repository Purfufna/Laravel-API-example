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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', ['as' => 'index', 'uses' => 'MainController@index']);
Route::get('/top/{top}', ['as' => 'getTop', 'uses' => 'MainController@getTop']);

Route::get('/add_score', ['as' => 'getAddScore', 'uses' => 'MainController@getAddScore']);
Route::post('/add_score', ['as' => 'postAddScore', 'uses' => 'MainController@postAddScore']);

Route::controller('main', 'MainController');
