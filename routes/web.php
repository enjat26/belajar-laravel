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

Route::get('tes/{nama}/{alamat}',function($nm,$alm){
    echo $nm.'<br>'.$alm;
});
Route::get('user/{nama}/{alamat}', 'tesController@index');

// view route
$data = [
    'title' => 'Tes Route View',
    'nama'  => 'Jatnika'
];
Route::view('r_view', 'blog/viewRoute',$data);

// named routes
Route::get('r_named/tes','tesController@show')->name('tes_nama');

Route::get('/', function () {
    return view('blog/home');
});

//prefix route
route::prefix('admin')->group(function(){
    Route::get('user/{id}', function ($id) {
        return $id;
    });
    Route::get('user', function () {
        return 'haloooo';
    });
});

Route::get('/blog','blogController@index');

Route::get('/blog/create','blogController@create');
Route::post('/blog','blogController@store');

Route::get('/blog/{id}','blogController@show');

Route::get('/blog/{id}/delete','blogController@destroy');

Route::get('/blog/{id}/formEdit','blogController@formEdit');
Route::put('/blog/{id}','blogController@upadate');

