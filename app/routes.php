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

Route::resource('customers', 'CustomersController');

Route::get('/', "CustomersController@index");

Route::post('login', "CustomersController@postLogin");

Route::get('login', array('as' => 'login', function () { }))->before('guest');

Route::get('customers/{id}/destroy',['as'=>'Customers/delete','uses'=>'CustomersController@destroy']);

Route::get('logout', array('uses' => 'CustomersController@logout'));
