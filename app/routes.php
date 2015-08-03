<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


Route::get('prueba', function(){
	echo Hash::make('123123');
});

Route::get('login',array('uses' => 'LoginController@getLogin'));

Route::post('login',array('uses' => 'LoginController@postUser'));

Route::get('salir',array('uses' => 'LoginController@getLogout'));

Route::get('home',array('uses' => 'HomeController@showHome'));