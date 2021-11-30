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

//papa-doushi
Route::get('/papa-doushi', 'PapaDoushiController@index');
Route::get('/papa-doushi/post', 'PapaDoushiController@post');
Route::get('/papa-doushi/answer', 'PapaDoushiController@answer');
Route::get('/papa-doushi/consult', 'PapaDoushiController@consult');
Route::get('/papa-doushi/help', 'PapaDoushiController@help');