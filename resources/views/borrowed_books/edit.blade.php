@extends('layouts.master')

@section('contents')
    
    <form action="/borrowed_books/{{$borrowed_book->id}}" method="POST">
       
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
        @method('PUT')
        <label for="">Book ID: </label>
    <input type="text" name="book" value="{{$borrowed_book->book_id}}">
        <label for="">Borrower ID:</label>
        <input type="text" name="borrower" value="{{$borrowed_book->borrower_id}}">
        <label for="">Staff ID:</label>
        <input type="text" name="staff" value="{{$borrowed_book->staff_id}}">
        <label for="">Status:</label>
        <input type="text" name="stats" value="{{$borrowed_book->status}}">

        <input type="submit">
    </form>
    @endsection