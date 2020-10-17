<?php

namespace App\Http\Controllers;

use App\Book;
use App\Author;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class BooksController extends Controller
{

    public function index()
    {
       $books = DB::table('books')->paginate(10);
       return view('books.index', compact('books'));

    }


    public function create()
    {
        return view ('books.create');
    }


    public function store(Request $request)
    {
        /* $books = $request->validate([
            'isbn' => 'required',
            'title' => 'required',
            'publisher' => 'required',
            'description' => 'required',
            'summary' => 'required',
            'publication_year' => 'required',
            'book_location' => 'required',
            'no_of_copies' => 'required|numeric',
            'available_copies' => 'required|numeric',
            'rating_1' => 'required',
            'rating_2' => 'required',
            'rating_3' => 'required',
            'rating_4' => 'required',
            'rating_5' => 'required',
            'average_rating' => 'required'
        ]); */

        $request->validate([
            'isbn' => 'required',
            'title' => 'required',
            'publisher' => 'required',
            'description' => 'required',
            'summary' => 'required',
            'publication_year' => 'required',
            'book_location' => 'required',
            'no_of_copies' => 'required|numeric',
            'available_copies' => 'required|numeric',
            'rating_1' => 'required',
            'rating_2' => 'required',
            'rating_3' => 'required',
            'rating_4' => 'required',
            'rating_5' => 'required',
            'average_rating' => 'required'
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
        $author = $book->authors[0];
        return view ('books.show', compact('book', $author));
    }


    public function edit($id)
    {
        $book = Book::find($id);
        return view ('books.edit', compact('book'));

    }


    public function update(Request $request, $id)
    {
        /* $updateValues = $request->validate([
            'isbn' => 'required',
            'title' => 'required',
            'publisher' => 'required',
            'description' => 'required',
            'summary' => 'required',
            'publication_year' => 'required',
            'book_location' => 'required',
            'no_of_copies' => 'required|numeric',
            'available_copies' => 'required|numeric',
            'rating_1' => 'required',
            'rating_2' => 'required',
            'rating_3' => 'required',
            'rating_4' => 'required',
            'rating_5' => 'required',
            'average_rating' => 'required'
        ]); */

        $updateValues = $request->validate([
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

        Book::find($id) ->update($updateValues);
       /* $book -> update([
            'isbn' => $request ->isbn,
            'title' => $request ->title,
            'publisher' => $request ->publisher,
            'description' => $request ->description,
            'summary' => $request ->summary,
            'publication_year' => $request ->publication_year,
            'book_location' => $request ->book_location,
            'no_of_copies' => $request ->no_of_copies
        ]);
        */
        return redirect('/books');
    }

    public function destroy($id)
    {

        Book::destroy($id);
        return redirect('/books');

    }
}
