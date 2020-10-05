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

Route::get('/', 'TestController@index');

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

/*for books
Route::get('/books', 'BooksController@index');
Route::get('/books/create', 'BooksController@create');
Route::get('/books/{book}', 'BooksController@show');
Route::post('/books', 'BooksController@store');
Route::get('/books/{book}/edit', 'BooksController@edit');
Route::put('/books/{book}', 'BooksController@update');
Route::delete('/books/{book}/delete', 'BooksController@destroy');
*/
Route::resource('books', 'BooksController');
Route::resource('users', 'UsersController');
/*for users
Route::get('/users', 'UsersController@index');
Route::get('/users/create', 'UsersController@create')->name('register');
Route::get('/users/{user}', 'UsersController@show');
Route::post('/users', 'UsersController@store');
Route::get('/users/{user}/edit', 'UsersController@edit');
Route::put('/users/{user}', 'UsersController@update');
Route::delete('/users/{user}/delete', 'UsersController@destroy');
*/


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

/* Display all dailyrecord
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
*/

Route::get('/login', 'AuthController@index')->name('login');
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

Route::get('/login', 'AuthController@index')->name('login');
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

// ----edit ----
Route::get('/book_authors/{book_author}/edit', 'BooksAuthorController@edit');

// display one ------
Route::get('/book_authors/{book_author}','BooksAuthorController@show');

// Store book_author ID
Route::post('/book_authors','BooksAuthorController@store');

// Get /book_authors/{book_author}/update display the update form ---
Route::put('/book_authors/{book_author}', 'BooksAuthorController@update');

// Delete /book_authors/{author} delete a record----
Route::delete('/book_authors/{book_author}','BooksAuthorController@destroy');

// BooksAuthor Table display all-----
Route::get('/book_authors','BooksAuthorController@index');

