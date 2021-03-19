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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', 'IndexController@index')->name('home');
Route::get('/about', 'IndexController@about')->name('about');
Route::get('/search', 'IndexController@search')->name('search');
Route::get('/contact', 'IndexController@contact')->name('contact');
Route::get('category/{slug}', 'CategoryController@index');
Route::get('tag/{slug}', 'TagController@index');
Route::get('post/{slug}', 'PostController@index');
