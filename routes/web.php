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
Route::get('/reservations', 'ReservationsController@index');

// Display form to create reservation
Route::get('/reservations/create', 'ReservationsController@create');

// Display specific reservation
Route::get('/reservations/{reservation}', 'ReservationsController@show');

// Store a Reservation
Route::post('/reservations', 'ReservationsController@store');

// Display form to update reservation
Route::get('/reservations/{reservation}/edit', 'ReservationsController@edit');

// Update a Reservation
Route::put('/reservations/{reservation}', 'ReservationsController@update');

// Delete a reservation
Route::delete('/reservations/{reservation}/delete', 'ReservationsController@delete');