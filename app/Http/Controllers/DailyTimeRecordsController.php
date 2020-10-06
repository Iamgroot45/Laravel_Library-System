<?php

namespace App\Http\Controllers;

//model
use App\DailyTimeRecords;
use Cabon\Carbon;
use Illuminate\Http\Request;

class DailyTimeRecordsController extends Controller
{
    

  public function index(){

  	//fetch all records
    	$dailytimerecord = DailytimeRecords::all();
    	//return
    	return view('dailytimerecords.index' , compact('dailytimerecords'));
    }

   public function create(){
    	return view('dailytimerecords.create');
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
    	$dailytimerecord = DailyTimeRecords::create([
    	

    		// column => value
    	 	'ID' => $request-> ID,
    		'staff_id_' => $request-> staff_id,
    		'time_in' => $request-> time_in,
    		'time_out' => $request-> time_out,
    		'date' => $current,
    	]);	

    	return redirect('/dailytimerecords');
    }

    public function show($id){
    	// $dailyrecord  = Dailyrecords::find($dailyrecord_id);
    	$dailytimerecord = DailyTimeRecords::find($id);
    	return view('dailytimerecords.show', compact('dailytimerecord'));
    }

    public function edit($id){
    	$dailytimerecord = DailyRecords::find($id);
    	return view('dailytimerecords.edit', compact('dailytimerecord'));
    }

    public function update(Request $request, $id){
    	
    	$request ()->validate([
    		
    		'ID' =>'required',
    		'staff_id' => 'required',
    		'time_in' => 'required',
    		'time_out' => 'required',
    		'date'=> 'required',
    	]);

    	$dailytimerecord = DailyTimeRecords::find($id);
    	$dailytimerecord->update([
    		'ID' => $request->id,
    		'staff_id' => $request->staff_id,
    		'time_in' => $request->time_in,
    		'time_out' => $request->time_out,
    		'date'=>$current,
    		

    	]);

    	return redirect('/dailytimerecords');
    }

   	public function destroy($id)
    {
        dailyrecords::destroy($id);
        return redirect('/dailytimerecords');
         }
     }
