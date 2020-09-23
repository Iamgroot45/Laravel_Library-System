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

// Get /authors/create display the create form
Route::get('/authors/create','AuthorsController@create');

// ----edit
Route::get('/authors/{author}/edit', 'AuthorsController@edit');

// display one ---
Route::get('/authors/{author}','AuthorsController@show');

// Store author
Route::post('/authors','AuthorsController@store');

// Get /authors/{author}/update display the update form
Route::put('/authors/{author}', 'AuthorsController@update');

// Delete /authors/{author} delete a record
Route::delete('/authors/{author}','AuthorsController@destroy');

// display all ---
Route::get('/authors','AuthorsController@index');



// Get /book_authors/create display the create form
Route::get('/book_authors/create','BooksAuthorController@create');

// ----edit
Route::get('/book_authors/{book_author}/edit', 'BooksAuthorController@edit');

// display one ---
Route::get('/book_authors/{book_author}','BooksAuthorController@show');

// Store book_author ID
Route::post('/book_authors','BooksAuthorController@store');

// Get /book_authors/{book_author}/update display the update form
Route::put('/book_authors/{book_author}', 'BooksAuthorController@update');

// Delete /book_authors/{author} delete a record----
Route::delete('/book_authors/{book_author}','BooksAuthorController@destroy');

// BooksAuthor Table display all-----
Route::get('/book_authors','BooksAuthorController@index');

