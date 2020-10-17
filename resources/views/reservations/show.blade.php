@extends('layouts.master')

@section('contents')
    <div class="container">
        <h2>Reservations</h2>
<br>
    <h3>ID: {{$reservation->id}}</h3>
    <h3>Book ID: {{$reservation->book_id}}</h3>
    <h3>Reservation Date: {{$reservation->reservation_date}}</h3>
    <h3>Pickup Date: {{$reservation->pickup_date}}</h3>
    </div>
@endsection
