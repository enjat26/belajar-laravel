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
    return view('blog/home');
});
Route::get('/blog','blogController@index');

Route::get('/blog/create','blogController@create');
Route::post('/blog','blogController@store');

Route::get('/blog/{id}','blogController@show');

Route::get('/blog/{id}/delete','blogController@destroy');

Route::get('/blog/{id}/formEdit','blogController@formEdit');
Route::put('/blog/{id}','blogController@upadate');
