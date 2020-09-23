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
    return view('layouts.master');
});


Route::get('/borrowed_books', 'BorrowedBooksController@index');

Route::get('/borrowed_books/create', 'BorrowedBooksController@create');

Route::get('/borrowed_books/{borrowed_book}', 'BorrowedBooksController@show');


Route::post('/borrowed_books', 'BorrowedBooksController@store');

Route::get('/borrowed_books/{borrowed_book}/edit', 'BorrowedBooksController@edit');

Route::put('/borrowed_books/{borrowed_book}', 'BorrowedBooksController@update');

Route::delete('/borrowed_books/{borrowed_book}/delete', 'BorrowedBooksController@delete');