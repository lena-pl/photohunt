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

Route::get('/',       ['as' => 'home',    'uses' => 'PagesController@home']);
Route::get('about',   ['as' => 'about',   'uses' => 'PagesController@about']);
Route::get('contact', ['as' => 'contact', 'uses' => 'PagesController@contact']);
Route::get('missions', ['as' => 'missions.index', 'uses' => 'MissionsController@index']);
Route::get('missions/{id}', ['as' => 'missions.show', 'uses' => 'MissionsController@show']);