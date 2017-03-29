<?php

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
    return view('Auth.login');
});
Auth::routes();

Route::group(['middleware' => 'auth'], function(){


	
Route::get('/view','C_welcome@view');

Route::get('/edit/{id}','C_welcome@Edit');

Route::get('/new','C_welcome@newtask');

Route::post('/new','C_welcome@printtask');




Route::get('/home', 'HomeController@index');

Route::get('/delete/{id}','C_welcome@Del');

Route::post('/edit','C_welcome@edited');


});