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

Route::middleware('auth:api')->group(function(){
	Route::get('/user', 'UserController@get');
	Route::get('/images/home', 'ImageController@home');
	Route::get('/images/album/{album_id}', 'ImageController@album');

	Route::post('/images/preupload', 'ImageController@preupload');
	Route::post('/images/confirm/{image}', 'ImageController@confirm');

	Route::delete('/images/{id}', 'ImageController@delete');
});

Route::get('/images/welcome', 'ImageController@welcome');
