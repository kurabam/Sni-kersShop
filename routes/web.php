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

Route::get('/', 'BaseController@getIndex'); {
    return view('welcome');
};
/*Route::get('test',function () {
    return 'eeeee rockkk';
});
Route::get('user/{id?}', function ($id=null){
return 'User'.$id;
})->where(['id'=>'[A-Za-z_0-9]+']); */


