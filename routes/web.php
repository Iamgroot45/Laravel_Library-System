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

// Display all borrowers
Route::get('/borrowers', 'BorrowersController@index');

// Display form to create borrower
Route::get('/borrowers/create', 'BorrowersController@create');

// Display one borrower
// Route model binding
Route::get('/borrowers/{borrower}', 'BorrowersController@show');

// Store borrower
Route::post('/borrowers', 'BorrowersController@store');

// Display form to update a borrower
Route::get('/borrowers/{borrower}/edit', 'BorrowersController@edit');

// Update a borrower
Route::put('/borrowers/{borrower}', 'BorrowersController@update');

// Delete a borrower
Route::delete('/borrowers/{borrower}/delete', 'BorrowersController@delete');