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
Route::get('/', function() {
    return view('welcome');
});

Route::get('/transactions', 'TransactionController@index')->name('transaction.index');
Route::get('/transactions/customer', 'TransactionController@customer')->name('transaction.customer');
Route::post('/transactions/customer', 'TransactionController@loadCustomer')->name('transaction.loadCustomer');
Route::get('/transactions/credit', 'TransactionController@credit')->name('transaction.credit');
Route::post('/transactions/credit', 'TransactionController@loadCredit')->name('transaction.loadCredit');

Route::get('/customers', 'CustomerController@index')->name('customer.index');
