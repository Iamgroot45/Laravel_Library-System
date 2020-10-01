<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }


    public function create()
    {
        return view ('users.create');
    }


    public function store(Request $request)
    {

        request()->validate([
            'username' => 'required|unique:users,username|email',
            'password' => 'required',
            'distinction' => 'required'
        ]);

        $user = new User();
        $user -> create([
            'username' => request()->username,
            'password' => Hash::make(request()->password),
            'distinction' => request()->distinction
        ]);

        return redirect ('/users');
    }


    public function show(User $user)
    {
        return view ('users.show', compact('user'));
    }


    public function edit(User $user)
    {
        return view ('users.edit', compact('user'));

    }


    public function update(User $user)
    {
       $validateThis =  request()->validate([
            'username' => 'required|unique:users,username|email',
            'password' => 'required',
            'distinction' => 'required'
        ]);

        $validateThis['password'] = bcrypt($validateThis['password']);

        $user -> update([

            'username' => request() ->username,
            'password' => request() ->password,
            'distinction' => request() ->distinction
        ]);
    }


    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/users');
    }
}
