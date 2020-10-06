<?php

namespace App\Http\Controllers;

use App\Borrower;
use Illuminate\Http\Request;

class BorrowersController extends Controller
{
    public function index()
    {
        // fetch all borrowers
        $borrowers = Borrower::all();
        // return view with fetched borrowers
        return view('borrowers.index', compact('borrowers'));
    }

    
    public function create()
    {
        return view('borrowers.create');
    }

    
    public function store(Request $request)
    {
        request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_initial' => ['required','max:1'],
            'contact_number' => 'required',
            'email_address' =>  'required',
            'purpose' => 'required'
        ]);

        $borrower = new Borrower;
        $borrower->create([
            // column => value
            'first_name' => request()->first_name,
            'last_name' => request()->last_name,
            'middle_initial' => request()->middle_initial,
            'contact_number' => request()->contact_number,
            'email_address' =>  request()->email_address,
            'purpose' => request()->purpose,
        
        ]);
        return redirect('/borrowers');
    }

    
    public function show($id)
    {
        $borrower  = Borrower::find($borrower_id);
        return view('borrowers.show', compact('borrower'));
    }

    
    public function edit($id)
    {
        $borrower  = Borrower::find($borrower_id);
        return view('borrowers.edit', compact('borrower'));
    }

    
    public function update(Request $request, $id)
    {
        request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_initial' => ['required','max:1'],
            'contact_number' => 'required',
            'email_address' =>  'required',
            'purpose' => 'required'
        ]);

        // $borrower  = Borrower::find($borrower_id);
        $borrower->update([
            'first_name' => request()->first_name,
            'last_name' => request()->last_name,
            'middle_initial' => request()->middle_initial,
            'contact_number' => request()->contact_number,
            'email_address' =>  request()->email_address,
            'purpose' => request()->purpose
        ]);

        return redirect('/borrowers');
    }

    
    public function destroy($id)
    {
        Borrower::destroy($id);
        return redirect('/borrowers');
    }
}
