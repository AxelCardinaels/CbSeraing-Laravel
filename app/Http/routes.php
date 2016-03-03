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
Route::resource('albums', 'AlbumsController');
Route::resource('forum', 'ForumCategoriesController');

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);
Route::get('comite', ['as' => 'comite', 'uses' => 'PagesController@comite']);
Route::get('chants', ['as' => 'chants', 'uses' => 'PagesController@chants']);
Route::get('albums', ['as' => 'albums', 'uses' => 'PagesController@albums']);
Route::get('forum',  ['as' => 'forum', 'uses' => 'PagesController@forum']);



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
