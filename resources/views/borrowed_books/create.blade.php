@extends('layouts.master')

@section('contents')
    

    <form action="/borrowed_books" method="POST">

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
        <label for="">Book ID: </label>
        <input type="text" name="book">
        <label for="">Borrower ID:</label>
        <input type="text" name="borrower">
        <label for="">Staff ID:</label>
        <input type="text" name="staff">
        <label for="">Status:</label>
        <input type="text" name="stats">

        <input type="submit">
    </form>
@endsection