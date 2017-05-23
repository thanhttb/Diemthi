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
Route::get('/', 'Auth\AuthController@getLogin');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('/classManagement',['as'=>'classManagement','uses'=>'ClassController@management']);
Route::get('/scoreboardManagement',['as'=>'scoreboardManagement','uses'=>'ScoreboardController@management']);
Route::get('/csvToScore',['as'=>'csvToScore','uses'=>'ScoreboardController@csvReader']);
Route::get('/scoreboard',['as'=>'getScoreboard','uses'=>'ScoreboardController@get_scoreboard']);
Route::get('/selectHp',['as'=>'selectHp','uses'=>'ClassController@select_hp']);
