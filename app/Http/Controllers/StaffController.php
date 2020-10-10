<?php

namespace App\Http\Controllers;

use App\User;
use App\Staff;
use finfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{

    public function index()
    {
        $result = Staff::all();

        return view('staff.index', compact('result'));
    }

    public function create()
    {
        return view('staff.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_initial' => ['required', 'max:1'],
            'position' => 'required',
            'area_assigned' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::create([
            'username' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'distinction' => 'ADMIN'
        ]);

        $user->staff()->create([
            'user_id' => $user->id,
            'last_name' => $request->input('last_name'),
            'first_name' => $request->input('first_name'),
            'middle_initial' => $request->input('middle_initial'),
            'email' => $request->input('email'),
            'position' => $request->input('position'),
            'area_assigned' => $request->input('area_assigned')
        ]);

        /* Staff::create([
            'user_id' => $user->id,
            'last_name' => $request->input('last_name'),
            'first_name' => $request->input('first_name'),
            'middle_initial' => $request->input('middle_initial'),
            'email' => $request->input('email'),
            'position' => $request->input('position'),
            'area_assigned' => $request->input('area_assigned')
        ]); */

        return redirect('/staff');
    }

    public function show($id)
    {
        $result = Staff::find($id);

        return view('staff.show', compact('result'));
    }

    public function edit($id)
    {
        $result = Staff::find($id);

        return view('staff.edit', compact('result'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_initial' => ['required', 'max:1'],
            'position' => 'required',
            'area_assigned' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::find(Staff::find($id)->id);
        $user->update([
            'username' => $request->input('email'),
            'password'=> $request->input('password')
        ]);

        $user->staff()->update([
            'last_name' => $request->input('last_name'),
            'first_name' => $request->input('first_name'),
            'middle_initial' => $request->input('middle_initial'),
            'position' => $request->input('position'),
            'area_assigned' => $request->input('area_assigned')
        ]);

        /* $staff -> update([
            'last_name' => $request->input('last_name'),
            'first_name' => $request->input('first_name'),
            'middle_initial' => $request->input('middle_initial'),
            'position' => $request->input('position'),
            'area_assigned' => $request->input('area_assigned')
        ]); */

        return redirect('/staff');
    }

    public function destroy($id)
    {
        $staff = Staff::find($id);
        $uid = $staff->user_id;

        $staff->destroy($id);
        User::destroy($uid);

        return redirect('/staff');
    }

}
