<?php

namespace App\Http\Controllers;

//model
use App\BookReservation;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fetch all reservation
        $reservations = BookReservation::all();
        //return view
        return view('reservations.index' , compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'book_id' => 'required',
            'pickup_date' =>  'required'
        ]);

        $current = Carbon::now();
        $reservation = BookReservation::create([
            // column => value
            'book_id' => $request->book_id,
            'reservation_date' => $current,
            'pickup_date' =>  $request->pickup_date
        ]);

        return redirect('/reservations');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $reservation  = BookReservation::find($reservation_id);
        $reservation = BookReservation::find($id);
        return view('reservations.show', compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservation = BookReservation::find($id);
        return view('reservations.edit', compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'book_id'=>'required',
            'reservation_date'=>'required',
            'pickup_date'=>'required',
        ]);

        $reservation = BookReservation::find($id);
        $reservation->update([
            'book_id' => $request->book_id,
            'reservation_date' => $request->reservation_date,
            'pickup_date' =>  $request->pickup_date
        ]);

        return redirect('/reservations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BookReservation::destroy($id);
        return redirect('/reservations');
    }
}
