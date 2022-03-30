<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();


// 掲示板
//投稿
Route::get('/toukou', function () {
    return view('toukou');
});

// Route::get('/chat.top', 'ChatController@index')->name('showTop');

Route::get('/keijiban', 'ChatController@showList');
Route::post('/keijiban', 'ChatController@add')->name('keijiban');
//削除
Route::resource('/keijiban', ChatController::class)->only([
    'create','show','destroy'
]);

Route::get('/signup', function () {
    return view('signup');
});


//ログイン機能
Route::group(['middleware' => ['guest']], function () {
    Route::get('/login_form', 'ChatController@showLogin')->name('showLogin');
    Route::post('logindata', 'ChatController@logindata')->name('logindata');
});
Route::group(['middleware' => ['auth']], function () {
    Route::get('/chat.top', function () {
        return view('chat.top');
    })->name('chat.top');
    //logout
    Route::post('logout', 'ChatController@logout')->name('logout');
});

//マイページ
Route::get('mypage', 'Auth\AdminController@adminmypage')->name('adminmypage');
Route::get('mypage', 'ChatController@mypage')->name('mypage');
Route::put('mypage/{id}', 'ChatController@uppage')->name('uppage');
Route::get('mydate_edit', 'ChatController@showedit')->name('showedit');

Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admins.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login');
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'Auth\AdminController@index')->name('admin.index');
    Route::post('/', 'Auth\AdminController@showschedule')->name('showschedule');
});
//予定表投稿画面
Route::get('/create', function () {
    return view('create');
});
//記事投稿画面
Route::get('/bbscreate', function () {
    return view('bbscreate');
});
Route::get('/detail/{id}', 'Auth\AdminController@detail')->name('detail');

Route::get('chat.top', 'ChatController@index')->name('index');
Route::post('chat.top', 'ChatController@showschedule')->name('showschedule');
