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

// Front End Route
Route::get('/', 'MainController@index')->name('main');

Auth::routes();


//Search Admin Users
Route::get('/searchadmin', 'Admin\DashboardController@searchadmin')->name('searchadmin');

//Search Admin Posts
Route::get('/searchpost', 'Admin\DashboardController@searchpost')->name('searchpost');

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin');
