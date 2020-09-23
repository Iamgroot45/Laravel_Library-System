<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;

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
        $staff = new Staff;
        $staff = Staff::create([
            'last_name' => $request->last_name,
            'first_name' => $request->first_name,
            'middle_initial' => $request->middle_initial,
            'position' => $request->position,
            'area_assigned' => $request->area_assigned
        ]);

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
        $staff = Staff::find($id);
        $staff->last_name = $request->input('last_name');
        $staff->first_name = $request->input('first_name');
        $staff->middle_initial = $request->input('middle_initial');
        $staff->position = $request->input('position');
        $staff->area_assigned = $request->input('area_assigned');
        $staff->save();

        return redirect('/staff');
    }

    public function destroy($id)
    {
        Staff::destroy($id);

        return redirect('/staff');
    }
}
