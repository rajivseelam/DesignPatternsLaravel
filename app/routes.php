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

Route::get('/',array('uses' => 'HomeController@showWelcome'));

Route::group(array('prefix' => 'AbstractFactory'), function()
{

	Route::get('html',array('uses' => 'AbstractFactory@html'));
	Route::get('json',array('uses' => 'AbstractFactory@json'));

});


Route::group(array('prefix' => 'Builder'), function()
{

	Route::get('car',array('uses' => 'Builder@car'));
	Route::get('bike',array('uses' => 'Builder@bike'));

});


