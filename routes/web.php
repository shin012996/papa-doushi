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
Route::get('/papa-doushi', 'PapaDoushiController@index'); //トップ画面
Route::get('/papa-doushi/help', 'PapaDoushiController@help'); //ヘルプ画面
Route::get('/papa-doushi/about', 'PapaDoushiController@about'); //アバウト画面


//ログイン状態
Route::group(['middleware' => 'auth'], function() {

    // ユーザ関連
    Route::get('/papa-doushi/userList', 'PapaDoushiController@userList'); //他のユーザ一覧
    Route::get('/papa-doushi/create', 'PapaDoushiController@create'); //新規投稿入力画面
    Route::post('/papa-doushi/post', 'PapaDoushiController@store'); //新規投稿処理
    Route::get('/papa-doushi/{user}/show', 'PapaDoushiController@show'); //ユーザー詳細画面
    Route::get('/papa-doushi/{user}/edit', 'PapaDoushiController@edit'); //投稿内容編集画面
    Route::post('/papa-doushi/{user}', 'PapaDoushiController@update'); //投稿内容の更新処理
    Route::delete('papa-doushi/{user}', 'PapaDoushiController@destory'); //投稿削除処理

    // フォロー/フォロー解除を追加
    Route::post('papa-doushi/{user}/follow', 'PapaDoushiController@follow')->name('follow');
    Route::delete('papa-doushi/{user}/unfollow', 'PapaDoushiController@unfollow')->name('unfollow');
});