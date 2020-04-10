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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomePagesController@about')->name('about');
Route::get('/blog', 'HomePagesController@blog')->name('blog');
Route::get('/contact', 'HomePagesController@contact')->name('contact');
Route::get('/profile', 'HomeController@profile')->name('profile');
