<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::group(['prefix' => '/'], function () {

    Route::post('/create', 'ProductController@create');

    Route::get('/product', 'ProductController@index');

    Route::post('/order','OrderController@create');
});