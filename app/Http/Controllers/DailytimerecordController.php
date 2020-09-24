<?php

namespace App\Http\Controllers;

use App\daily_time_records;
use Cabon\Carbon;
use Illuminate\Http\Request;

class daily_time_records extends Controller
{
    

  public function index(){
    	$reservations = Reservation::all();
    	return view('dailyrecords.index' , compact('reservations'));
    }

   public function create(){
    	return view('dailyrecords.create');
    }

    public function store(){
    	$current = Carbon::now();
    	$dailyrecords = new dailyrecords;
    	$dailyrecords->create([
    		// column => value
    		'book_id' => request()->book_id,
    		'staff_id' => request()->staff_id,
    		'reservation_date'=>$current,
    		'pickup_date' =>  request()->pickup_date
    	]);

    	return redirect('/record');
    }

    public function show(dailyrecords $dailyrecords){
    	// $dailyrecords  = Dailyrecords::find($dailyrecords_id);
    	return view('dailyrecords.show', compact('reservation'));
    }

    public function edit(Reservation $reservation){
    	return view('reservations.edit', compact('reservation'));
    }

    public function update(Reservation $reservation){
    	$reservation->update([
    		'book_id' => request()->book_id,
    		'staff_id' => request()->staff_id,
    		'reservation_date' => request()->reservation_date,
    		'pickup_date' =>  request()->pickup_date
    	]);

    	return redirect('/reservations');
    }

    public function delete(Reservation $reservation){
    	$reservation->delete();
    	return redirect('/reservations');
}




     //
}
