<?php

namespace App\Http\Controllers;

//model
use App\Reservation;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    public function index(){
    	//fetch all reservation
    	$reservations = Reservation::all();
    	//return view
    	return view('reservations.index' , compact('reservations'));
    }

   public function create(){
    	return view('reservations.create');
    }

    public function store(){
    	request()->validate([
    		'book_id' => 'required',
    		'pickup_date' =>  'required'
        ]);

    	$current = Carbon::now();
    	$reservation = new Reservation;
    	$reservation->create([
    		// column => value
    		'book_id' => request()->book_id,
    		'reservation_date'=>$current,
    		'pickup_date' =>  request()->pickup_date
    	]);

    	return redirect('/reservations');
    }

    public function show(Reservation $reservation){
    	// $reservation  = Reservation::find($reservation_id);
    	return view('reservations.show', compact('reservation'));
    }

    public function edit(Reservation $reservation){
    	return view('reservations.edit', compact('reservation'));
    }

    public function update(Reservation $reservation){
    	request()->validate([
            'book_id'=>'required',
    		'reservation_date'=>'required',
    		'pickup_date'=>'required',
        ]);

    	$reservation->update([
    		'book_id' => request()->book_id,
    		'reservation_date' => request()->reservation_date,
    		'pickup_date' =>  request()->pickup_date
    	]);

    	return redirect('/reservations');
    }

    public function delete(Reservation $reservation){
    	$reservation->delete();
    	return redirect('/reservations');
    }

}
