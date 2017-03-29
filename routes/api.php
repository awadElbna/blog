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




// Route::group(['prefix'=>'v1'],function(){


	Route::get('/students',       'Student@getAll');

	Route::get('/students/{id}',  'Student@getitem');

	Route::post('/students',      'Student@addstud');

	Route::put('/students/{id}',   'Student@Edit');

	Route::put('/students/{id}/edit', 'Student@edited');

	Route::delete('/students/{id}',  'Student@Del');



// });

