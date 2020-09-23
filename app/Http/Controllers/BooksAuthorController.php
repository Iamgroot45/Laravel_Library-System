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
    	$book_author = new Book_author;
    	$book_author->author_id = request()->author_id;
    	$book_author->book_id = request()->book_id;
    	$book_author->save();

    	return redirect('/book_authors');
    }

     public function edit(Book_author $book_author)
    {
    	return view('book_authors.edit', compact('book_author'));
    }

    public function update(Book_author $book_author)
    {
    	$book_author->author_id = request()->author_id;
    	$book_author->book_id = request()->book_id;
    	$book_author->save();
    	return redirect('/book_authors');

    }

    public function destroy(Book_author $book_author)
    {
    	$book_author->delete();
    	return redirect ('/book_authors');
    }

}
