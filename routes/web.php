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
Route::get('/papa-doushi', 'PapaDoushiController@index')->name('toppage');
Route::get('/papa-doushi/post', 'PapaDoushiController@post')->name('post');
Route::get('/papa-doushi/consult', 'PapaDoushiController@consult')->name('consult');
Route::get('/papa-doushi/wiki', 'PapaDoushiController@wiki')->name('wiki');
Route::get('/papa-doushi/q_a', 'PapaDoushiController@q_a')->name('q_a');
Route::get('/papa-doushi/help', 'PapaDoushiController@help')->name('help');