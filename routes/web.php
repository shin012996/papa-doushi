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
Route::get('/papa-doushi/help', 'PapaDoushiController@help');
Route::get('/papa-doushi/about', 'PapaDoushiController@about');
Route::get('/papa-doushi/mypage', 'PapaDoushiController@mypage'); 
