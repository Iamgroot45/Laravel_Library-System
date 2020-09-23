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

// SHOW ALL STAFF PERSONNEL
Route::get('/staff', 'StaffController@index');

// CREATE AND STORE A STAFF PERSONNEL
Route::get('/staff/create', 'StaffController@create');
Route::post('/staff/store', 'StaffController@store');

// SHOW SPECIFIC STAFF PERSONNEL
Route::get('/staff/{id}', 'StaffController@show');

// UPDATE RECORD OF SPECIFIC STAFF PERSONNEL
Route::get('/staff/edit/{id}', 'StaffController@edit');
Route::put('/staff/update/{id}', 'StaffController@update');

// DELETE RECORD OF SPECIFIC STAFF PERSONNEL
Route::delete('/staff/delete/{id}', 'StaffController@destroy');




