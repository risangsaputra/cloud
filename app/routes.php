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

Route::get('/file', function()
{
	
	return View::make('user/myfiles');
});

Route::resource('users', 'UserController');
// route to show the login form
Route::get('login', array('uses' => 'HomeController@showLogin'));
// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));
Route::get('logout',array('uses'=> 'HomeController@logout'));

Route::get('index', array('before' => 'auth', function() {
	return View::make('user/index');
}));

Route::post('upload','UploadController@store');
Route::resource('list','ListController');
