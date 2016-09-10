<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

//category Resources
/********************* category ***********************************************/
Route::resource('category','\App\Http\Controllers\CategoryController');
Route::post('category/{id}/update','\App\Http\Controllers\CategoryController@update');
Route::get('category/{id}/delete','\App\Http\Controllers\CategoryController@destroy');
Route::get('category/{id}/deleteMsg','\App\Http\Controllers\CategoryController@DeleteMsg');
/********************* category ***********************************************/


//product Resources
/********************* product ***********************************************/
Route::resource('product','\App\Http\Controllers\ProductController');
Route::post('product/{id}/update','\App\Http\Controllers\ProductController@update');
Route::get('product/{id}/delete','\App\Http\Controllers\ProductController@destroy');
Route::get('product/{id}/deleteMsg','\App\Http\Controllers\ProductController@DeleteMsg');
/********************* product ***********************************************/

//api
Route::get('api/products', 'ApiController@index');
Route::get('api/categories/{id}', 'ApiController@show');

Route::post('api/register', 'TokenAuthController@register');
Route::post('api/login', 'TokenAuthController@login');
Route::get('api/authenticate', 'TokenAuthController@getAuthenticatedUser');
