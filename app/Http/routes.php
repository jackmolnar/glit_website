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
Route::resource('news', 'NewsController');
Route::resource('consumer-info', 'ConsumerInfoController');
Route::resource('training-programs', 'ProgramsController');

Route::get('/', 'PagesController@index');
Route::get('/{page_id}', 'PagesController@show');

Route::post('process-form', 'FormController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
