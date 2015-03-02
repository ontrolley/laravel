<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', "CustomersController@index");

Route::resource('customers', 'CustomersController');

Route::get('customers/{id}/destroy',['as'=>'Customers/delete','uses'=>'CustomersController@destroy']);


