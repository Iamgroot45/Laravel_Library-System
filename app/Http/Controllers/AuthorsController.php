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
    	request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_initial' => 'required',    
        ]);

    	$author = new Author;
		$author->create([
            'first_name' => request()->first_name,
            'last_name' => request()->last_name,
            'middle_initial' => request()->middle_initial,
        ]);
    	return redirect('/authors');
    }

    public function edit(Author $author)
    {
    	return view('authors.edit', compact('author'));
    }

    public function update(Author $author)
    {
    	request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_initial' => 'required',   
        ]);

		$author->update([
            'first_name' => request()->first_name,
            'last_name' => request()->last_name,
            'middle_initial' => request()->middle_initial,
        ]);
    	return redirect('/authors');

    }

    public function destroy(Author $author)
    {
    	$author->delete();
    	return redirect ('/authors');
    }

}
