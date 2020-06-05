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

//Admin Pages

//Apartment Type
Route::get('/property-category', 'Admin\ApartmentTypeController@index');
Route::post('/save-property-category', 'Admin\ApartmentTypeController@store');
Route::get('/role-propertyedit/{id}', 'Admin\ApartmentTypeController@edit');
Route::delete('/property-delete/{id}', 'Admin\ApartmentTypeController@destroy');
Route::put('role-property-category-update/{id}', 'Admin\ApartmentTypeController@update');

// Front End Route
Route::get('/', 'MainController@index')->name('main');

Auth::routes();


//Search Admin Users
Route::get('/searchadmin', 'Admin\DashboardController@searchadmin')->name('searchadmin');

//Search Admin Posts
Route::get('/searchpost', 'Admin\DashboardController@searchpost')->name('searchpost');

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'AdminController@index')->name('dashboard');

