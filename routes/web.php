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

Route::get('/', function(){
    return view('layouts.master');
});

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

Route::get('/login', function(){
    return view('login');
})->name('login');

Route::post('/login/authenticate', 'AuthController@login');

Route::get('/logout', 'AuthController@logout')->name('logout');

Route::get('/borrowed_books', 'BorrowedBooksController@index');

Route::get('/borrowed_books/create', 'BorrowedBooksController@create');

Route::get('/borrowed_books/{borrowed_book}', 'BorrowedBooksController@show');

Route::post('/borrowed_books', 'BorrowedBooksController@store');

Route::get('/borrowed_books/{borrowed_book}/edit', 'BorrowedBooksController@edit');

Route::put('/borrowed_books/{borrowed_book}', 'BorrowedBooksController@update');

Route::delete('/borrowed_books/{borrowed_book}/delete', 'BorrowedBooksController@delete');

//for books
Route::get('/books', 'BooksController@index');
Route::get('/books/create', 'BooksController@create');
Route::get('/books/{book}', 'BooksController@show');
Route::post('/books', 'BooksController@store');
Route::get('/books/{book}/edit', 'BooksController@edit');
Route::put('/books/{book}', 'BooksController@update');
Route::delete('/books/{book}/delete', 'BooksController@delete');


//for users
Route::get('/users', 'UsersController@index');
Route::get('/users/create', 'UsersController@create')->name('register');
Route::get('/users/{user}', 'UsersController@show');
Route::post('/users', 'UsersController@store');
Route::get('/users/{user}/edit', 'UsersController@edit');
Route::put('/users/{user}', 'UsersController@update');
Route::delete('/users/{user}/delete', 'UsersController@destroy');



