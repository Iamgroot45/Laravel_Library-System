<?php

namespace App\Http\Controllers;

use App\User;
use App\Borrower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        return view('borrowers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Borrower $borrower)
    {
        request()->validate([
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_initial' => 'required',
            'contact_number' => 'required',
            'email' =>  'required',
            'password' => 'required'
        ]);

        $user = User::create([
            'username' => request()->email,
            'password' => Hash::make(request()->password),
            'distinction' => 'BORROWER'
        ]);

        Borrower::create([
            'user_id' => $user->id,
            'last_name' => request()->last_name,
            'first_name' => request()->first_name,
            'middle_initial' => request()->middle_initial,
            'contact_number' => request()->contact_number,
            'email' =>  request()->email
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
