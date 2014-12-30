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


Route::get('/', 'HomeController@podRss');



Route::get('/episodes/{url}', 'HomeController@episodes');



Route::group(array('before' => 'auth.basic'), function()
{
	Route::get('/admin', 'HomeController@admin');
	Route::get('/add', 'HomeController@add');
	Route::get('/delete/{id}', 'HomeController@delete');
	Route::post('/addForm', 'HomeController@addForm');
	Route::post('/episode', 'HomeController@addForm');


});
