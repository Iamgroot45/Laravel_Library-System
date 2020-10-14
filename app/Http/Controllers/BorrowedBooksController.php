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

    public function show($id){
        $borrowed_book = BorrowedBook::find($id);
        return view('borrowed_books.show',compact('borrowed_book'));
    }

    public function create(){
        return view('borrowed_books.create');
    }

    public function store(Request $request){
        /*
        request()->validate([
            'book' => 'required',
            'borrower' => 'required',
            'staff' => 'required',
            'stats' => 'required',
        ]);

        $current = Carbon::now();
        BorrowedBook:: create([
            'book_id' => $request->book,
            'borrower_id' => $request->borrower,
            'staff_id' => $request->staff,
            'date_borrowed' => $current,
            'due_date' => $current,
            'status' => $request->stats
        ]);
        return redirect('/borrowed');
        */

        //=====FOR TESTING========
        $form_fields = request()->validate([
            'book_id' => 'required',
            'staff_id' => 'required',
            'borrower_id' => 'required',
            'status' => 'required',
            'date_borrowed' => 'required',
            'due_date' => 'required',
            'date_returned' => 'required'
        ]);
        BorrowedBook::create($form_fields);
        return redirect('/borrowed');
    }

    public function edit($id){
        $borrowed_book = BorrowedBook::find($id);
        return view('borrowed_books.edit', compact('borrowed_book'));
    }

    public function update(Request $request, $id){

        /*
        request()->validate([
            'stats' => 'required',
        ]);

        $current = Carbon::now();
        $borrowed_book = BorrowedBook::find($id);
        $borrowed_book->update([
            'date_borrowed' => $current,
            'due_date' => $current,
            'status' => $request->stats
        ]);
        return redirect('/borrowed');
        */
        $form_fields = request()->validate([
            'book_id' => 'required',
            'staff_id' => 'required',
            'borrower_id' => 'required',
            'status' => 'required',
            'date_borrowed' => 'required',
            'due_date' => 'required',
            'date_returned' => 'required'
        ]);
        BorrowedBook::create($form_fields);
        return redirect('/borrowed');
    }
        public function destroy($id){
        /*
        BorrowedBook::destroy($id);
        return redirect('/borrowed');
        */
        $borrowed_book = BorrowedBook::find($id);
        $borrowed_book->destroy($id);
        return redirect('/borrowed');

    }


}
