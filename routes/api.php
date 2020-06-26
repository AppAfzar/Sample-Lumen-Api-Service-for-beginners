<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect('http://rahamooz-app.ir/');
});


Route::group(['prefix' => 'api'], function () {
    Route::post('post/read_all', 'PostController@readAll');
    Route::get('post/read', 'PostController@read');
    Route::post('post/create', 'PostController@create');
    Route::post('post/update', 'PostController@update');
    Route::get('post/delete', 'PostController@delete');
});


