@extends('layouts.master')

@section('contents')
    <div class="container">
        <h2>Dailyrecords</h2>
        <br>
            <h3>ID: {{$dailyrecord->id}}</h3>
            <h3>Staff ID: {{$dailyrecord->staff_id}}</h3>
            <h3>Date: {{$dailyrecord->date}}</h3>
            <h3>Time In: {{$dailyrecords->time_in}}</h3>
            <h3>Time Out: {{$dailyrecords->time_out}}</h3>
    </div>
@endsection
