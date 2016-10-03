<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Home routes...
Route::get('/', [
	'as' 	=> 'index',
	'uses'	=> 'PageController@index'
]);

//Contact us routes...
Route::get('/contact', [
	'as'	=> 'contact/get',
	'uses'	=> 'PageController@showContactForm'
]);

Route::post('/contact', [
	'as'	=> 'contact/post',
	'uses'	=> 'PageController@contact'
]);

//Auth::routes(); --> default login route

// Authentication Routes...
Route::get('login', [
	'as'	=> 'login/get',
	'uses'  =>'Auth\LoginController@showLoginForm'
]);
Route::post('login', [
	'as'   => 'login/post',
	'uses' => 'Auth\LoginController@login'
]);
Route::post('logout', [
	'as'   => 'logout/post',
	'uses' => 'Auth\LoginController@logout'
]);

// Registration Routes...
Route::get('register', [
	'as'   => 'register/get',
	'uses' => 'Auth\RegisterController@showRegistrationForm'
]);
Route::post('register', [
	'as'   => 'register/post',
	'uses' => 'Auth\RegisterController@register'
]);

// Password Reset Routes...
Route::get('password/reset', [
	'as'   => 'password/reset/get',
	'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
]);
Route::post('password/email', [
	'as'   => 'password/send-email',
	'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail'
]);
Route::get('password/reset/{token}', [
	'as'   => 'password/reset/reply/get',
	'uses' => 'Auth\ResetPasswordController@showResetForm'
]);
Route::post('password/reset', [
	'as'   => 'password/reset/reply/post',
	'uses' => 'Auth\ResetPasswordController@reset'
]);

Route::group(['prefix' => 'admin', 'middleware' => 'permission:access-backend'], function() {
   Route::get('/', [
   		'as' => 'admin/index',
   		'uses'	=> 'Backend\PageController@index'
   ]);
});