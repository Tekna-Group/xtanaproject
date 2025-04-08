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
Route::get('UserInput','CheckOutController@input');
Route::get('upload','CheckOutController@upload');
Route::post('upload','CheckOutController@store');
Route::post('upload-link','CheckOutController@uploadLink');
Route::post('upload-pdf','CheckOutController@uploadPdf');

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/user-profile','UserController@profile')->name('profile');

Route::post('edit-profile','UserController@saveProfile')->name('save-profile');

Route::get('checkout','CheckOutController@index')->name('checkout');
Route::post('check-out-post','CheckOutController@postPayment')->name('checkout');

Route::get('invoices','InvoiceController@index')->name('invoices');


Route::get('chat','ChatController@index')->name('chat');


Route::get('credit-cards','CreditCardController@index')->name('credit-cards');

Route::get('/payment','CreditCardController@payment')->name('payment');


//Server Creation

Route::get('create-server','ServerController@create')->name('server');

});

Route::post('send-message','ChatController@submitMessage')->name('submit-message');
