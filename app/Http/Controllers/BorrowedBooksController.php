<?php

namespace App\Http\Controllers;

use App\BorrowedBook;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BorrowedBooksController extends Controller
{
    public function index(){
        $borrowed_books = BorrowedBook::all();
        return view('borrowed_books.index',compact('borrowed_books'));
    }

    public function show(BorrowedBook $borrowed_book){
        return view('borrowed_books.show',compact('borrowed_book'));
    }

    public function create(){
        
        return view('borrowed_books.create');
    }

    public function store(){

        request()->validate([
            'book' => 'required',
            'borrower' => 'required',
            'staff' => 'required',
            'stats' => 'required',    
        ]);

        $current = Carbon::now();
        $borrowed_book = new BorrowedBook;
        $borrowed_book->create([
            'book_id' => request()->book,
            'borrower_id' => request()->borrower,
            'borrowed_date' => $current,
            'due_date' => $current,
            'returned' => $current,
            'staff_id' => request()->staff,
            'status' => request()->stats
        ]);
        return redirect('/borrowed_books');
    }

    public function edit(BorrowedBook $borrowed_book){
        return view('borrowed_books.edit', compact('borrowed_book'));
    
    }

    public function update(BorrowedBook $borrowed_book){

        request()->validate([
            'book' => 'required',
            'borrower' => 'required',
            'staff' => 'required',
            'stats' => 'required',    
        ]);

        $current = Carbon::now();
        $borrowed_book->update([
            'book_id' => request()->book,
            'borrower_id' => request()->borrower,
            'borrowed_date' => $current,
            'due_date' => $current,
            'returned' => $current,
            'staff_id' => request()->staff,
            'status' => request()->stats
        ]);
        return redirect('/borrowed_books');
    }

    public function delete(BorrowedBook $borrowed_book){
        $borrowed_book->delete();
        return redirect('/borrowed_books');
    }



}
