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

Route::get('index','CustomersController@index');
Route::get('create','CustomersController@create');
Route::post('store','CustomersController@store');
Route::get('show','CustomersController@show');
Route::post('edit/{id}','CustomersController@update');
Route::get('destroy/{id}','CustomersController@destroy');


Route::get('index','OrdersController@index');
Route::get('create','OrdersController@create');
Route::post('store','CustomersController@store');
Route::get('show','OrdersController@show');
Route::post('edit/{id','OrdersController@update');
Route::get('destroy/{id}','OrdersController@destroy');
