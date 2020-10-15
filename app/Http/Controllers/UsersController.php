<?php

namespace App\Http\Controllers;

use App\User;
use App\Borrower;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('users.create');
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
            'username' => 'required|unique:users,username|email',
            'password' => 'required',
            'distinction' => 'required'
        ]);


        $user = User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'distinction' => $request->distinction
        ]);

        return redirect ('/users');
    }


    public function show($id)
    {
        $user = User::find($id);
        return view ('users.show', compact('user'));
    }


    public function edit($id)
    {
        $user = User::find($id);
        return view ('users.edit', compact('user'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|unique:users,username|email',
            'password' => 'required',
            'distinction' => 'required'
        ]);

        $user = User::find($id);
        $user -> update([

            'username' => $request ->username,
            'password' => $request ->password,
            'distinction' => $request ->distinction
        ]);

        return redirect('/users');
    }


    public function destroy($id)
    {
        User::destroy($id);
        return redirect('/users');
    }
}
