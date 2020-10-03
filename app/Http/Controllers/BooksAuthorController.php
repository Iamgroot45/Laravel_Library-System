<?php

namespace App\Http\Controllers;

use App\Book_author;
use Illuminate\Http\Request;

class BooksAuthorController extends Controller
{
    public function index()
	{
    	$book_authors = Book_author::all();
    	return view('book_authors.index', compact('book_authors'));
	}
	public function show(Book_author $book_author)
	{

    	return view('book_authors.show', compact('book_author'));
    }

    public function create()
    {
    	return view('book_authors.create');
    }

    public function store()
    {
        request()->validate([
            'author_id' => 'required',
            'book_id' => 'required',   
        ]);

    	$book_author = new Book_author;
        $book_author->create([
            'author_id' => request()->author_id,
            'book_id' => request()->book_id,
        ]);
    	return redirect('/book_authors');
    }

     public function edit(Book_author $book_author)
    {
    	return view('book_authors.edit', compact('book_author'));
    }

    public function update(Book_author $book_author)
    {
        request()->validate([
            'author_id' => 'required',
            'book_id' => 'required',   
        ]);

        $book_author = new Book_author;
        $book_author->update([
            'author_id' => request()->author_id,
            'book_id' => request()->book_id,
        ]);
    	return redirect('/book_authors');

    }

    public function destroy(Book_author $book_author)
    {
    	$book_author->delete();
    	return redirect ('/book_authors');
    }

}
