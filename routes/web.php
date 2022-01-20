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

//
Route::get('/anyone/help', 'AnyonesController@help')->name('anyone.about'); //ヘルプ画面
Route::get('/anyone/about', 'AnyonesController@about')->name('anyone.help'); //アバウト画面


//ログイン状態
Route::group(['middleware' => 'auth'], function() {

    // ユーザ関連
    Route::get('/users', 'UsersController@index'); //他のユーザ一覧
    Route::get('/users/show/{user}', 'UsersController@show')->name('users.show'); //ユーザー詳細画面
    Route::get('/users/edit/{user}', 'UsersController@edit')->name('users.edit'); //プロフィール編集画面
    Route::post('/users/update/{user}', 'UsersController@update'); //プロフィールの更新処理

    // フォロー/フォロー解除を追加
    Route::post('users/follow/{user}', 'UsersController@follow')->name('follow');
    Route::delete('users/unfollow/{user}', 'UsersController@unfollow')->name('unfollow');

    // 投稿関連
    Route::get('/posts', 'PostsController@index'); //トップ画面 投稿内容の一覧
    Route::get('/posts/details/{post}', 'PostsController@details')->name('posts.details'); // 投稿内容の詳細画面
    Route::post('/posts/store', 'PostsController@store'); //新規投稿処理
    Route::post('/posts/edit/{post}', 'PostsController@edit')->name('posts.edit'); // 投稿内容の編集
    Route::post('/posts/update/{post}', 'PostsController@update')->name('posts.update'); // 投稿内容の更新処理

    // コメント機能
    Route::post('/comments', 'CommentsController@store')->name('comments.store');

    // いいね関連
    Route::resource('favorites', 'FavoritesController', ['only' => ['store', 'destroy']]);
});