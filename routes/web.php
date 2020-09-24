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
// Display all reservations
Route::get('/dailyrecords', 'DailyrecordsController@index');

// Display form to create reservation
Route::get('/dailyrecords/create', 'DailyrecordsController@create');

// Display specific reservation
Route::get('/dailyrecords/{dailyrecord}', 'DailyrecordsController@show');

// Store a Reservation
Route::post('/dailyrecords', 'DailyrecordsController@store');

// Display form to update reservation
Route::get('/dailyrecords/{dailyrecord}/edit', 'DailyrecordsController@edit');

// Update a Reservation
Route::put('/dailyrecords/{dailyrecord}', 'DailyrecordsController@update');

// Delete a reservation
Route::delete('/dailyrecords/{dailyrecord}/delete', 'DailyrecordsController@delete'); 