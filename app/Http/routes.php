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

// Authentication routes...
Route::get('auth/login',        ['as' => 'auth.login',      'uses' => 'Auth\AuthController@getLogin']);
Route::post('auth/login',       ['as' => 'auth.accept',     'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout',       ['as' => 'auth.logout',     'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('auth/register',        ['as' => 'auth.register',   'uses' => 'Auth\AuthController@getRegister']);
Route::post('auth/register',       ['as' => 'auth.store',     'uses' => 'Auth\AuthController@postRegister']);
Route::get('auth/email-available', ['as' => 'auth.email-available', 'uses' => 'Auth\AuthController@getEmailAvailable']);

// Password reset link request routes...
Route::get('password/email',    ['as' => 'password.email',  'uses' => 'Auth\PasswordController@getEmail']);
Route::post('password/email',   ['as' => 'password.send',   'uses' => 'Auth\PasswordController@postEmail']);

// Password reset routes...
Route::get('password/reset/{token}',    ['as' => 'password.reset',  'uses' => 'Auth\PasswordController@getReset']);
Route::post('password/reset',           ['as' => 'password.accept', 'uses' => 'Auth\PasswordController@postReset']);

// Profile routes...
Route::get('profile/show/{id}',   ['as' => 'profile.show',    'uses' => 'ProfileController@show']);
Route::get('profile/edit',        ['as' => 'profile.edit',    'uses' => 'ProfileController@edit']);
Route::put('profile/edit',        ['as' => 'profile.update',  'uses' => 'ProfileController@update']);

// Pages routes...
Route::get('/',              ['as' => 'home',    'uses' => 'PagesController@home']);
Route::get('about',          ['as' => 'about',   'uses' => 'PagesController@about']);
Route::get('leaderboard',    ['as' => 'leaderboard', 'uses' => 'PagesController@leaders']);
Route::get('contact',        ['as' => 'contact', 'uses' => 'PagesController@contact']);

Route::resource('missions', 'MissionsController');
Route::resource('missions.attempts', 'AttemptsController', [ 'only' => ['store', 'update', 'edit', 'destroy'] ]);

// APIs
Route::get('api/weather',              ['as' => 'api.weather',    'uses' => 'APIController@weather']);
