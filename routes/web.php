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

// ------------------TEST ROUTE------------------------------
Route::get('/test', 'TestController@index');
// -------------------------------------------------------

// ------------------INDEX------------------------------
Route::get('/', function(){
    return view('layouts.master');
});
// -------------------------------------------------------

// ------------------LOGIN------------------------------
Route::get('/login', function(){
    return view('login');
})->name('login');

Route::post('/login/authenticate', 'AuthController@login');

Route::get('/logout', 'AuthController@logout')->name('logout');
// -------------------------------------------------------

// ------------------REGISTER------------------------------
Route::get('borrowers/create','BorrowersController@create');
Route::post('borrowers','BorrowersController@store');
// --------------------------------------------------------

Route::middleware('auth')->group(function () {
    // ------------------AUTHORS------------------------------
    Route::resource('authors', 'AuthorsController');
    // -------------------------------------------------------

    // ------------------BOOKS--------------------------------
    Route::resource('books', 'BooksController');
    // -------------------------------------------------------

    // ------------------BOOK_AUTHORS-------------------------
    Route::resource('book_authors', 'BooksAuthorController');
    // -------------------------------------------------------

    // -----------------BOOK_RESERVATIONS---------------------
    Route::resource('reservations', 'ReservationsController');
    // -------------------------------------------------------

    // -----------------BORROWED_BOOKS------------------------
    Route::resource('borrowed', 'BorrowedBooksController');
    // -------------------------------------------------------

    // -----------------BORROWERS-----------------------------
    //Route::resource('borrowers', 'BorrowersController');
    Route::get('borrowers', 'BorrowersController@index');
    Route::get('borrowers/{borrower}','BorrowersController@show');
    Route::get('borrowers/{borrower}/edit', 'BorrowedBooksController@edit');
    Route::put('borrowers/{borrower}', 'BorrowedBooksController@update');
    Route::delete('borrowers/{borrower}', 'BorrowersController@destroy');
    // -------------------------------------------------------

    // -----------------DAILY_TIME_RECORDS--------------------
    Route::resource('dailytimerecord', 'DailyTimeRecordsController');
    // -------------------------------------------------------

    // -----------------STAFF---------------------------------
    Route::resource('staff', 'StaffController');
    // -------------------------------------------------------

    // -----------------USERS---------------------------------
    Route::resource('users', 'UsersController');
    // -------------------------------------------------------
});







