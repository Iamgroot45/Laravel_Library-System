<?php

namespace App\Http\Controllers;

use App\Book;
use App\Author;
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
        $request->validate([
            'isbn' => 'required',
            'title' => 'required',
            'publisher' => 'required',
            'description' => 'required',
            'summary' => 'required',
            'publication_year' => 'required',
            'book_location' => 'required',
            'no_of_copies' => 'required|numeric',
            'available_copies' => 'required|numeric'

        ]);

        $authorId = "";

        $author = Author::where([
            'last_name' => $request->last_name,
            'first_name' => $request->first_name,
            'middle_initial' => $request->middle_initial
        ])->get();


        if($author->count() != 1){
            $author = Author::create([
                'last_name' => $request->last_name,
                'first_name' => $request->first_name,
                'middle_initial' => $request->middle_initial
            ]);

            $authorId = $author->id;
        }else{

            $authorId = $author[0]->id;

        }

        $book = Book::create([

            'isbn' => $request ->isbn,
            'title' => $request ->title,
            'publisher' => $request ->publisher,
            'description' => $request ->description,
            'summary' => $request ->summary,
            'publication_year' => $request ->publication_year,
            'book_location' => $request ->book_location,
            'no_of_copies' => $request ->no_of_copies,
            'available_copies' => $request ->available_copies
        ]);

        $book->authors()->attach($authorId);

        return redirect ('/books');
    }


    public function show($id)
    {
        $book = Book::find($id);
        return view ('books.show', compact('book'));
    }


    public function edit($id)
    {
        $book = Book::find($id);
        return view ('books.edit', compact('book'));

    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'isbn' => 'required',
            'title' => 'required',
            'publisher' => 'required',
            'description' => 'required',
            'summary' => 'required',
            'publication_year' => 'required',
            'book_location' => 'required',
            'no_of_copies' => 'required|numeric'

        ]);

        $book = Book::find($id);
        $book -> update([
            'isbn' => $request ->isbn,
            'title' => $request ->title,
            'publisher' => $request ->publisher,
            'description' => $request ->description,
            'summary' => $request ->summary,
            'publication_year' => $request ->publication_year,
            'book_location' => $request ->book_location,
            'no_of_copies' => $request ->no_of_copies
        ]);

        return redirect('/books');
    }

    public function destroy($id)
    {

        Book::destroy($id);
        return redirect('/books');

    }
}
