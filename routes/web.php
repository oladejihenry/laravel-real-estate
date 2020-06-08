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

//All Properties
Route::get('/all-properties', 'Dashboard\AllPropertiesController@index')->middleware('auth');
Route::post('/adminsave-property', 'Dashboard\AllPropertiesController@store');
Route::get('/admin-editproperty/{id}', 'Dashboard\AllPropertiesController@edit');

//Apartment Type
Route::get('/property-category', 'Dashboard\CategoryController@index')->middleware('role:landlord');
Route::post('/save-property-category', 'Dashboard\CategoryController@store');
Route::get('/role-propertyedit/{id}', 'Dashboard\CategoryController@edit');
Route::delete('/property-delete/{id}', 'Dashboard\CategoryController@destroy');
Route::put('role-property-category-update/{id}', 'Dashboard\CategoryController@update');

//Property Location
Route::get('property-location', 'Dashboard\PropertyLocationController@index');
Route::post('/save-location', 'Dashboard\PropertyLocationController@store');

// Front End Route
Route::get('/', 'MainController@index')->name('main');

Auth::routes();


//Search Admin Users
Route::get('/searchadmin', 'Admin\DashboardController@searchadmin')->name('searchadmin');

//Search Admin Posts
Route::get('/searchpost', 'Admin\DashboardController@searchpost')->name('searchpost');

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'AdminController@index')->name('dashboard');

//Property Create
Route::get('/create', 'Dashboard\AllPropertiesController@create')->name('posts.create')->middleware('auth');

//Show Posts
Route::get('/{post}', 'AllPropertiesController@show')->name('posts.show');

