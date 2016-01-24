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

Route::resource('activites', 'NewsController');
Route::resource('comite', 'ComiteController');
Route::resource('chants', 'ChantsCategoriesController');

Route::get('/', 'PagesController@home');
Route::get('comite', 'PagesController@comite');
Route::get('chants', 'PagesController@chants');
Route::get('albums', 'PagesController@albums');



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
