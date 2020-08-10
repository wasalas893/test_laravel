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


//   Route::get('/new', function () {
//     return 'hello new';
// });

Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');


//Route::resource('posts','PostsController');
Route::resource('classes','ClassesController');
Route::resource('/dashboard','DashboardController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
