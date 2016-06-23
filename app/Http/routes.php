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

Route::get('customers','CustomersController@index');
Route::get('customers/create','CustomersController@create');
Route::post('customers/store','CustomersController@store');
Route::get('customers/show','CustomersController@show');
Route::post('customers/edit/{id}','CustomersController@update');
Route::get('customers/destroy/{id}','CustomersController@destroy');


























Route::get('index','OrdersController@index');
Route::get('create','OrdersController@create');
Route::post('store','CustomersController@store');
Route::get('show','OrdersController@show');
Route::post('edit/{id','OrdersController@update');
Route::get('destroy/{id}','OrdersController@destroy');
