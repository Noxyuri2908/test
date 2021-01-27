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

Route::get('/', function () {
    return view('Backend/Layouts/index');
});

Route::get('get-login','Backend\UserController@getLogin')->name('get-login');
Route::post('post-login','Backend\UserController@postLogin')->name('post-login');

Route::prefix('backend')->namespace('Backend')->group(function(){
	Route::get('/','DashboardController@index')->name('index');
	Route::get('category-list','CategoryController@index')->name('category-list');
	Route::get('add-category','CategoryController@add')->name('add-category');
	Route::get('edit-category','CategoryController@edit')->name('edit-category');
	Route::get('delete-category','CategoryController@delete')->name('delete-category');
	Route::post('store-category','CategoryController@Store')->name('store-category');

	Route::get('user-list','UserController@index')->name('user-list');
	Route::get('add-user','UserController@add')->name('add-user');
	Route::get('edit-user','UserController@edit')->name('edit-user');
	Route::get('delete-user','UserController@index')->name('delete-user');
	Route::post('store-user','UserController@store')->name('store-user');

	Route::get('news-list','NewsController@index')->name('news-list');
	Route::get('add-news','NewsController@add')->name('add-news');
	Route::get('edit-news','NewsController@edit')->name('edit-news');
	Route::get('delete-news','NewsController@delete')->name('delete-news');
	Route::post('store-news','NewsController@store')->name('store-news');
	// Route::get('login','UserController@getLogin')->name('get-login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
