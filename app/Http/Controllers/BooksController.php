<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{

    public function index()
    {
       $books = Book::all();
       return view('books.index', compact('books'));

    }


    public function create()
    {
        return view ('books.create');
    }


    public function store(Request $request)
    {
        $book = new Book();
        $book -> create([

            'isbn' => request() ->isbn,
            'title' => request() ->title,
            'publisher' => request() ->publisher,
            'description' => request() ->description,
            'summary' => request() ->summary,
            'publication_date' => request() ->publication_date,
            'book_location' => request() ->book_location,
            'number_of_copies' => request() ->no_of_copies

        ]);

        return redirect ('/books');
    }


    public function show(Book $book)
    {

        return view ('books.show', compact('book'));
    }


    public function edit(Book $book)
    {

        return view ('books.edit', compact('book'));

    }


    public function update(Book $book)
    {

        $book -> update([

            'isbn' => request() ->isbn,
            'title' => request() ->title,
            'publisher' => request() ->publisher,
            'description' => request() ->description,
            'summary' => request() ->summary,
            'publication_date' => request() ->publication_date,
            'book_location' => request() ->book_location,
            'number_of_copies' => request() ->no_of_copies
        ]);

    }


    public function delete(Book $book)
    {

        $book->delete();
        return redirect('/books');

    }
}
