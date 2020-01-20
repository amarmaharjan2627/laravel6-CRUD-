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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin');



//Route::resource('/student','StudentController');

Route::group(['middleware'=>'auth'],function(){
	Route::get('/students','StudentController@index');
	Route::get('/create','StudentController@create');
	Route::post('/store','StudentController@store');
	Route::get('/edit/{id}','StudentController@edit');
	Route::put('/update/{id}','StudentController@update');
	Route::get('/delete/{id}','StudentController@destroy');
	Route::get('/show/{id}','StudentController@show');
});
