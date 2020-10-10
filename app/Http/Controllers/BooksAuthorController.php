<?php

namespace App\Http\Controllers;

use App\BookAuthor;

use Illuminate\Http\Request;

class BooksAuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book_authors = BookAuthor::all();
        return view('book_authors.index', compact('book_authors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book_authors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'author_id' => 'required',
            'book_id' => 'required',
        ]);

        BookAuthor::create([
            'author_id' => request()->author_id,
            'book_id' => request()->book_id,
        ]);

        return redirect('/book_authors');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book_author = BookAuthor::find($id);

        return view('book_authors.show', compact('book_author'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book_author = BookAuthor::find($id);

        return view('book_authors.show', compact('book_author'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'author_id' => 'required',
            'book_id' => 'required',
        ]);

        $book_author = BookAuthor::find($id);
        $book_author->update([
            'author_id' => $request->input('author_id'),
            'book_id' => $request->input('book_id'),
        ]);
        return redirect('/book_authors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BookAuthor::destroy($id);

        return redirect('/book_authors');
    }

}
