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

	Route::get('html',array('uses' => 'AbstractFactoryController@html'));
	Route::get('json',array('uses' => 'AbstractFactoryController@json'));

});


Route::group(array('prefix' => 'Builder'), function()
{

	Route::get('car',array('uses' => 'BuilderController@car'));
	Route::get('bike',array('uses' => 'BuilderController@bike'));

});

Route::group(array('prefix' => 'StaticFactory'), function()
{

	Route::get('number',array('uses' => 'StaticFactoryController@number'));
	Route::get('string',array('uses' => 'StaticFactoryController@string'));

});

Route::group(array('prefix' => 'SimpleFactory'), function()
{

	Route::get('bicycle',array('uses' => 'SimpleFactoryController@bicycle'));
	Route::get('scooter',array('uses' => 'SimpleFactoryController@scooter'));

});

Route::group(array('prefix' => 'Pool'), function()
{
	Route::get('index',array('uses' => 'PoolController@index'));
});

Route::group(array('prefix' => 'Adapter'), function()
{
	Route::get('book/start',array('uses' => 'AdapterController@start'));
	Route::get('book/next',array('uses' => 'AdapterController@next'));

});




