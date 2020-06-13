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

Route::group(['middleware' => 'auth'], function () {

//All Properties
Route::get('/dashboard/all-properties', 'Dashboard\AllPropertiesController@index')->middleware('auth');
Route::post('/adminsave-property', 'Dashboard\AllPropertiesController@store');
Route::get('/admin-editproperty/{id}', 'Dashboard\AllPropertiesController@edit');
Route::put('role-admin-updateproperty/{id}', 'Dashboard\AllPropertiesController@update');
Route::delete('adminproperty-delete/{id}', 'Dashboard\AllPropertiesController@destroy');
Route::get('/dashboard/properties-bin', 'Dashboard\AllPropertiesController@trashed');
Route::get('/restore/{id}', 'Dashboard\AllPropertiesController@restore')->name('posts.restore');
Route::delete('adminproperties-bin/{id}','Dashboard\AllPropertiesController@delete');

//Property Category
Route::get('/dashboard/property-category', 'Dashboard\CategoryController@index')->middleware('role:landlord');
Route::post('/save-property-category', 'Dashboard\CategoryController@store');
Route::get('/role-propertyedit/{id}', 'Dashboard\CategoryController@edit');
Route::delete('/property-delete/{id}', 'Dashboard\CategoryController@destroy');
Route::put('role-property-category-update/{id}', 'Dashboard\CategoryController@update');

//Property Type
Route::get('/dashboard/property-type', 'Dashboard\TypeController@index');
Route::post('/save-property-type', 'Dashboard\TypeController@store');
Route::get('/role-typenedit/{id}', 'Dashboard\TypeController@edit');
Route::put('/role-property-type-update/{id}', 'Dashboard\TypeController@update');
Route::delete('/type-delete/{id}','Dashboard\TypeController@destroy');

//Property Location
Route::get('/dashboard/property-location', 'Dashboard\PropertyLocationController@index');
Route::post('/save-location', 'Dashboard\PropertyLocationController@store');



//User Profile
Route::get('/dashboard/profile', 'Dashboard\ProfileController@index');
Route::put('profile', ['as' => 'profile.update', 'uses' => 'Dashboard\ProfileController@update']);
Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'Dashboard\ProfileController@password']);
});

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
Route::get('/{post}', 'PropertyController@index')->name('posts.show');

//Show All Single Properties
Route::get('/{category:name}/{property:slug}','PropertyController@show')->name('categories.show');

//Category



//Route::get('/home', 'HomeController@index')->name('home');

//Payment
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay')->middleware('auth');

//Payment Callback
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');



