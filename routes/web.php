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

Route::get('/transaction', 'TransactionController@index')->name('transaction.index');
Route::get('/transaction/customer', 'TransactionController@customer')->name('transaction.customer');
Route::post('/transaction/customer', 'TransactionController@loadCustomer')->name('transaction.loadCustomer');
