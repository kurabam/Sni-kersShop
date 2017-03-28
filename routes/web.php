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

Route::get('/', 'BaseController@getIndex');

Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/catalog', 'CatalogController@getAll');
Route::get('/catalog/{id}', 'CatalogController@getCategory');
Route::post('/home', 'HomeController@postIndex');
Route::get('/{id}','StaticController@getIndex');


