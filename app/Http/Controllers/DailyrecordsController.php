<?php

namespace App\Http\Controllers;

//model
use App\DailyRecords;
use Cabon\Carbon;
use Illuminate\Http\Request;

class DailyRecordsController extends Controller
{
    

  public function index(){

  	//fetch all records
    	$dailyrecord = DailyRecords::all();
    	//return
    	return view('dailyrecords.index' , compact('dailyrecords'));
    }

   public function create(){
    	return view('dailyrecords.create');
    }

    public function store(Request $request){
    	request ()->validate([
    		
    		'ID' => 'required',
    		'staff_id' => 'required',
    		'time_in' => 'required',
    		'time_out' => 'required',
    		'date'=> 'required'
    		

    	]);

    	$current = Carbon::now();
    	$dailyrecord = DailyRecords::create([
    	

    		// column => value
    	 	'ID' => $request-> ID,
    		'staff_id_' => $request-> staff_id,
    		'time_in' => $request-> time_in,
    		'time_out' => $request-> time_out,
    		'date' => $current,
    	]);	

    	return redirect('/dailyrecords');
    }

    public function show($id){
    	// $dailyrecord  = Dailyrecords::find($dailyrecord_id);
    	$dailyrecord = DailyRecords::find($id);
    	return view('dailyrecords.show', compact('dailyrecord'));
    }

    public function edit($id){
    	$dailyrecord = DailyRecords::find($id);
    	return view('dailyrecords.edit', compact('dailyrecord'));
    }

    public function update(Request $request, $id){
    	
    	$request ()->validate([
    		
    		'ID' =>'required',
    		'staff_id' => 'required',
    		'time_in' => 'required',
    		'time_out' => 'required',
    		'date'=> 'required',
    	]);

    	$dailyrecord = DailyRecords::find($id);
    	$dailyrecord->update([
    		'ID' => $request->id,
    		'staff_id' => $request->staff_id,
    		'time_in' => $request->time_in,
    		'time_out' => $request->time_out,
    		'date'=>$current,
    		

    	]);

    	return redirect('/dailyrecords');
    }

   	public function destroy($id)
    {
        dailyrecords::destroy($id);
        return redirect('/dailyrecords');
         }
     }
