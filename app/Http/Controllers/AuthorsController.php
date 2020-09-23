<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
	public function index()
	{
    	$authors = Author::all();
    	return view('authors.index', compact('authors'));
	}

	public function show(Author $author)
	{

    	return view('authors.show', compact('author'));
    }

    public function create()
    {
    	return view('authors.create');
    }

    public function store()
    {
    	$author = new Author;
    	$author->first_name = request()->first_name;
    	$author->last_name = request()->last_name;
    	$author->middle_initial = request()->middle_initial;
    	$author->save();

    	return redirect('/authors');
    }

    public function edit(Author $author)
    {
    	return view('authors.edit', compact('author'));
    }

    public function update(Author $author)
    {
    	$author->first_name = request()->first_name;
    	$author->last_name = request()->last_name;
    	$author->middle_initial = request()->middle_initial;
    	$author->save();
    	return redirect('/authors');

    }

    public function destroy(Author $author)
    {
    	$author->delete();
    	return redirect ('/authors');
    }

}
