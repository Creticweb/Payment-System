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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/payment-initiate',function(){
    return view('payment-initiate');
});
Route::get('/buy/gst-basic',function(){
    return view('gstbasic');
});
/* Payment Processing */
Route::post('/payment-initiate-request','App\Http\Controllers\PaymentController@Initiate');
Route::post('/payment-complete','App\Http\Controllers\PaymentController@Complete');
/* Email Processing */
Route::get('/sendemail', 'App\Http\Controllers\SendEmailController@index');
Route::post('/sendemail/send', 'App\Http\Controllers\SendEmailController@send');
