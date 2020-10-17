@extends('layouts.master')
@section('contents')
    <div class="container">
        <h2>Borrowed Book</h2>
        <br>
        <h3>ID: {{$borrowed_book->id}}</h3>
        <h3>Book ID: {{$borrowed_book->book_id}}</h3>
        <h3>Borrower ID: {{$borrowed_book->borrower_id}}</h3>
        <h3>Staff ID: {{$borrowed_book->staff_id}}</h3>
        <h3>Borrowed Date: {{$borrowed_book->borrowed_date}}</h3>
        <h3>Status: {{$borrowed_book->status}}</h3>
        <h3>Due Date: {{$borrowed_book->due_date}}</h3>
        <h3>Returned Date: {{$borrowed_book->returned}}</h3>
    </div>
@endsection
