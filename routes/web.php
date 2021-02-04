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

Route::middleware('auth')->get('/', function () {
    return view('Backend/Layouts/index');
});

Route::get('get-login','Backend\UserController@getLogin')->name('get-login');
Route::get('get-logout','Backend\UserController@getLogout')->name('get-logout');
Route::post('post-login','Backend\UserController@postLogin')->name('post-login');

Route::prefix('backend')->namespace('Backend')->middleware('auth')->group(function(){
	Route::get('category-list','CategoryController@index')->name('category-list');
	Route::get('add-category','CategoryController@add')->name('add-category');
	Route::get('get-edit-category/{id}','CategoryController@getEdit')->name('get-edit-category');
	Route::post('post-edit-category/{id}','CategoryController@postEdit')->name('post-edit-category');
	Route::get('delete-category/{id}','CategoryController@delete')->name('delete-category');
	Route::post('store-category','CategoryController@Store')->name('store-category');


	Route::get('user-list','UserController@index')->name('user-list');
	Route::get('add-user','UserController@add')->name('add-user');
	Route::get('edit-user','UserController@edit')->name('edit-user');
	Route::get('delete-user/{id}','UserController@delete')->name('delete-user');
	Route::post('store-user','UserController@store')->name('store-user');
	Route::get('get-edit-user/{id}','UserController@getEdit')->name('get-edit-user');
	Route::post('post-edit-user/{id}','UserController@postEdit')->name('post-edit-user');


	Route::get('news-list','NewsController@index')->name('news-list');
	Route::get('add-news','NewsController@add')->name('add-news');
	Route::get('edit-news','NewsController@edit')->name('edit-news');
	Route::get('delete-news/{id}','NewsController@delete')->name('delete-news');
	Route::post('store-news','NewsController@store')->name('store-news');
	Route::get('get-edit-news/{id}','NewsController@getEdit')->name('get-edit-news');
	Route::post('post-edit-news/{id}','NewsController@postEdit')->name('post-edit-news');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Frontend')->group(function(){
	Route::get('index', 'HomePageController@index')->name('index');
	Route::get('detail-news', 'HomePageController@store')->name('detail-news');
	Route::get('get-detail-news/{id}', 'HomePageController@getNews')->name('get-detail-news');
});
