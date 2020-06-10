<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('user', 'UsersController');



Route::resource('property', 'RealestatesController');


Route::get('/tests', 'TestsController@testindex');


Route::post('/tests', 'TestsController@teststore');

Route::get('/properties', 'ApiController@index');


