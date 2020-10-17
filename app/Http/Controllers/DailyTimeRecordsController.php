<?php

namespace App\Http\Controllers;

use App\DailyTimeRecord;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class DailyTimeRecordsController extends Controller
{
    public function index(){
    	$dailyrecords = DailyTimeRecord::all();
    	return view('dailyrecords.index' , compact('dailyrecords'));
    }

   public function create(){
    	return view('dailyrecords.create');
    }

    public function store(){
    	request ()->validate([

    		'ID' => 'required',
    		'staff_id' => 'required',
    		'time_in' => 'required',
    		'time_out' => 'required',
    		'date'=> 'required'


    	]);

    	$current = Carbon::now();
    	$dailyrecord = new DailyTimeRecord;
    	$dailyrecord -> create([

    		// column => value
    	 	'ID' => request()-> ID,
    		'staff_id_' => request()-> staff_id,
    		'time_in' => request()-> time_in,
    		'time_out' => request()-> time_out,
    		'date' => $current,
    	]);

    	return redirect('/dailyrecords');
    }

    public function show(DailyTimeRecord $dailyrecords){
    	// $dailyrecords  = Dailyrecords::find($dailyrecords_id);
    	return view('dailyrecords.show', compact('dailyrecord'));
    }

    public function edit(DailyTimeRecord $dailyrecords){
    	return view('dailyrecords.edit', compact('dailyrecord'));
    }

    public function update(DailyTimeRecord $dailyrecords){

    	request ()->validate([

    		'ID' =>'required',
    		'staff_id' => 'required',
    		'time_in' => 'required',
    		'time_out' => 'required',
    		'date'=> 'required'
    	]);

        $current = Carbon::now();

    	$dailyrecords->update([
    		'ID' => request()->id,
    		'staff_id' => request()->staff_id,
    		'time_in' => request()->time_in,
    		'time_out' => request()->time_out,
    		'date'=> $current,


    	]);

    	return redirect('/dailyrecords');
    }

    public function delete(DailyTimeRecord $dailyrecords){
    	$dailyrecords->delete();
    	return redirect('/dailyrecords');
}
}
