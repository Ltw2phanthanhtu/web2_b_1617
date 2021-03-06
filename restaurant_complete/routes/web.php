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
Route::get('/home',[
	'as'=> 'home',
	'uses'=>'homeController@index']);
Route::get('/menu',[
	'as'=> 'menu',
	'uses'=>'menuController@index']);
Route::get('/chitiet',[
	'as'=> 'chitiet',
	'uses'=>'productController@index']);