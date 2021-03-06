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

use App\Http\Controllers\HelloController;

//クロージャー使用パターン
Route::get('/', function () {
    return view('welcome');
});

//コントローラー使用パターン
Route::get('hello', 'HelloController@index');
Route::get('contact','PagesController@contact');
Route::get('about','PagesController@about');
Route::get('articles', 'ArticlesController@index');
Route::get('articles/{id}', 'ArticlesController@show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
