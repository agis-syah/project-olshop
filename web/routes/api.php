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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login','API\BarangController@postLogin');
// http://127.0.0.1:8000/api/login

Route::get('setelan/{id}','API\BarangController@getProfile');
// http://127.0.0.1:8000/api/setelan/{id}

Route::post('password','API\BarangController@postPassword');
// http://127.0.0.1:8000/api/password

Route::post('profilepic','API\BarangController@postProfilepic');
// http://127.0.0.1:8000/api/profilepic

Route::get('listsmartphone','API\BarangController@getlistsmartphone');
// http://127.0.0.1:8000/api/listsmarthphone

Route::get('listlaptop','API\BarangController@getlistlaptop');
// http://127.0.0.1:8000/api/listlaptop

Route::get('listkomputer','API\BarangController@getlistkomputer');
// http://127.0.0.1:8000/api/listkomputer