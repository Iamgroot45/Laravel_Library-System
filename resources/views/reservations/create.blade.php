@extends('layouts.master')

@section('contents')
    <div class="container">
        <form action="/reservations" method="POST">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @csrf
            <label>Book ID: </label>
            <input type="text " name="book_id" required placeholder="Book ID">
            <label>Pickup Date: YYYY-MM-DD</label>
            <input type="text " name="pickup_date" required placeholder="PickUp">

            <input type="submit" name="submit">
        </form>
    </div>
@endsection
