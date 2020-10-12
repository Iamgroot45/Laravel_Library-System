<?php

namespace App\Http\Controllers;

use App\User;
use App\Borrower;
use Illuminate\Http\Request;

class BorrowersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // fetch all borrowers
        $borrowers = Borrower::all();
        // return view with fetched borrowers
        return view('borrowers.index', compact('borrowers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('borrowers.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Borrower $borrower)
    {
        $users = User::all();
        request()->validate([
            'user_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_initial' => 'required',
            'contact_number' => 'required',
            'email_address' =>  'required',
            'purpose' => 'required'
        ]);

        $borrower = new Borrower;
        $borrower->create([
            // column => value
            'user_id' => request()->user_id,
            'first_name' => request()->first_name,
            'last_name' => request()->last_name,
            'middle_initial' => request()->middle_initial,
            'contact_number' => request()->contact_number,
            'email_address' =>  request()->email_address,
            'purpose' => request()->purpose
        ]);
        return redirect('/borrowers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Borrower $borrower)
    {
        return view('borrowers.show', compact('borrower'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Borrower $borrower)
    {
        return view('borrowers.edit', compact('borrower','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Borrower $borrower)
    {
        $users = User::all();
        $validated_fields = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_initial' => 'required',
            'contact_number' => 'required',
            'email_address' =>  'required',
            'purpose' => 'required'
        ]);

        $borrower->update($validated_fields);
        return redirect('/borrowers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Borrower $borrower)
    {
        $borrower->delete();
        return redirect('/borrowers');
    }
}
