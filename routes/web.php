<?php

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
    return view('customer.add');
});

Route::get('add-customer', 'CustomerController@create')->name('add_customer');
Route::post('store-customer', 'CustomerController@store')->name('store_customer');