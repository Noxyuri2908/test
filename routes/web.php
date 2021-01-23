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
Route::prefix('Backend')->namespace('Backend')->group(function(){
	Route::get('/','DashboardController@index')->name('');
	Route::get('CategoryList','CategoryController@index')->name('CategoryList');
	Route::get('AddCategory','CategoryController@add')->name('AddCategory');
	Route::get('EditCategory','CategoryController@edit')->name('EditCategory');
	Route::get('DeleteCategory','CategoryController@delete')->name('DeleteCategory');
	Route::post('Store','CategoryController@Store')->name('StoreCategory');

	Route::get('UserList','UserController@index')->name('UserList');
	Route::get('AddUser','UserController@add')->name('AddUser');
	Route::get('EditUser','UserController@edit')->name('EditUser');
	Route::get('DeleteUser','UserController@index')->name('DeleteUser');

	Route::get('NewsList','NewsController@index')->name('NewsList');
	Route::get('AddNews','NewsController@add')->name('AddNews');
	Route::get('EditNews','NewsController@edit')->name('EditNews');
	Route::get('DeleteNews','NewsController@delete')->name('DeleteNews');
});
