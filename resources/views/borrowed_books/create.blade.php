@extends('layouts.master')

@section('contents')
    <div class="container">
        <form action="/borrowed" method="POST">

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
            <input type="text" name="book_id">
            <label for="">Borrower ID:</label>
            <input type="text" name="borrower_id">
            <label for="">Staff ID:</label>
            <input type="text" name="staff_id">
            <label for="">Status:</label>
            <input type="text" name="status">

            <input type="submit">
        </form>
    </div>
@endsection
