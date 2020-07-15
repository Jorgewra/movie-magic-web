<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'api'], function () {
    Route::group(['prefix' => 'v1'], function () {
        Route::group(['middleware' => 'client'], function () {
            Route::post('/movie', 'MoviesController@create');
            Route::put('/movie/{id}', 'MoviesController@update');
            Route::get('/movie', 'MoviesController@getAll');
        });
    });
});
