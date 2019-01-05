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

<<<<<<< HEAD
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
    Route::resource('/category', 'CategoryController', ['as' => 'admin']);
});
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
=======
//Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
//    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
//    Route::resource('/category', 'CategoryController', ['as' => 'admin']);
//});
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::resource('rest', 'RestTestController')->names('RestTest');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Blog', 'prefix' => 'blog'], function () {
    Route::resource('post', 'PostController')->names('blog.post');

});
$groupData = [
    'namespace' => 'Blog\Admin',
    'prefix' => 'admin/blog',
];
Route::group($groupData, function () {
    $methods = ['index', 'edit', 'store', 'update', 'create'];
    Route::resource('categories', 'CategoryController')
        ->only($methods)
        ->names('blog.admin.categories');
});
//Route::resource('rest', 'RestTestController')->names('RestTest');

>>>>>>> init
