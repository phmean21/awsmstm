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

//Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
//    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
//    Route::resource('/category', 'CategoryController', ['as' => 'admin']);
//});
Route::get('/', function () {
    return view('welcome');
});

Route::resource('rest', 'RestTestController')->names('RestTest');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Blog', 'prefix' => 'blog'], function () {
    Route::resource('post', 'PostController')->names('blog.post');

});
Route::resource('rest', 'RestTestController')->names('RestTest');

