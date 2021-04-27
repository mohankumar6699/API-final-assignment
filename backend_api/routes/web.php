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



Route::post('/addbooking', 'App\Http\Controllers\UserControler@addBooking');
Route::get('/booking', 'App\Http\Controllers\UserControler@getBooking');
Route::delete('/deletebooking/{id}', 'App\Http\Controllers\UserControler@deleteBooking');
Route::patch('/updatebooking/{id}', 'App\Http\Controllers\UserControler@updateBooking');
Route::get('/booking/{id}', 'App\Http\Controllers\UserControler@getoneBooking');




