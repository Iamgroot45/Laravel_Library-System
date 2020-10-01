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
// Display all dailyrecord
Route::get('/dailyrecords', 'DailyrecordsController
	@index');

// Display form to create dailyrecord
Route::get('/dailyrecords/create', 'DailyrecordsController@create');

// Display specific dailyrecord
Route::get('/dailyrecord/{dailyrecord}', 'DailyrecordsController@show');

// Store a dailyrecord
Route::post('/dailyrecords', 'DailyrecordsController@store');

// Display form to update dailyrecord
Route::get('/dailyrecord/{dailyrecord}/edit', 'DailyrecordsController@edit');

// Update a dailyrecord
Route::put('/dailyrecord/{dailyrecord}', 'DailyrecordsController@update');

// Delete a dailyrecord
Route::delete('/dailyrecord/{dailyrecord}/delete', 'DailyrecordsController@delete'); 

// Update a dailyrecord
Route::put('/dailyrecords/{dailyrecord}', 'dailyrecordsController@update');

// Delete a dailyrecord
Route::delete('/dailyrecords/{dailyrecord}/delete', 'dailyrecordsController@delete');

Route::get('/login', 'AuthController@index')->name('login');