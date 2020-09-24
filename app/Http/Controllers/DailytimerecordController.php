<?php

namespace App\Http\Controllers;

use App\daily_time_records;
use Cabon\Carbon;
use Illuminate\Http\Request;

class daily_time_records extends Controller
{
    

  public function index(){
    	$dailyrecords = Dailyrecords::all();
    	return view('dailyrecords.index' , compact('dailyrecord'));
    }

   public function create(){
    	return view('dailyrecords.create');
    }

    public function store(){
    	$current = Carbon::now();
    	$dailyrecords = new dailyrecords;
    	$dailyrecords->create([
    		// column => value
    		'ID' => request()->id,
    		'staff_id' => request()->staff_id,
    		'time_in' => request()->time_in,
    		'time_out' => request()->time_out,
    		'date'=>$current,
    		

    	]);

    	return redirect('/dailyrecord');
    }

    public function show(Dailyrecords $dailyrecords){
    	// $dailyrecords  = Dailyrecords::find($dailyrecords_id);
    	return view('dailyrecords.show', compact('dailyrecord'));
    }

    public function edit(Dailyrecords $dailyrecords){
    	return view('dailyrecords.edit', compact('dailyrecord'));
    }

    public function update(Dailyrecords $dailyrecords){
    	$dailyrecords->update([
    		'ID' => request()->id,
    		'staff_id' => request()->staff_id,
    		'time_in' => request()->time_in,
    		'time_out' => request()->time_out,
    		'date'=>$current,
    		

    	]);

    	return redirect('/dailyrecords');
    }

    public function delete(Dailyrecords $dailyrecords){
    	$reservation->delete();
    	return redirect('/dailyrecords');
}




     //
}
