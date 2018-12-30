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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

/***************
 * User API
 ***************/
Route::get('users', 'UserController@index');
Route::get('user/{id}', 'UserController@show');
Route::post('user','UserController@create');
Route::put('user/{id}','UserController@update');
Route::delete('user/{id}','UserController@destroy');
Route::post('v_user','UserController@verify_user');

/***************
 * Music API
 ***************/
Route::get('musics','MusicController@index');
Route::get('music/:id','MusicController@show');
Route::post('musics','MusicController@create');