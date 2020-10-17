@extends('layouts.master')

@section('contents')
    <div class="container">
        <form action="/books/{{$book -> id}}" method="POST">
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

            <label>ISBN:</label>
            <input type="text" name="isbn" value="{{ $book -> isbn}}">

            <br>
            <label>Title:</label>
            <input type="text" name="title" value="{{ $book -> title}}">

            <br>
            <label>Publisher:</label>
            <input type="text" name="publisher" value="{{ $book -> publisher}}">

            <br>
            <label>Description:</label>
            <input type="text" name="description" value="{{ $book -> description}}">

            <br>
            <label>Summary:</label>
            <input type="text" name="summary" value="{{ $book -> summary}}">

            <br>
            <label>Publication year:</label>
            <input type="text" name="publication_year" value="{{ $book -> publication_year}}">

            <br>
            <label>Book Location:</label>
            <input type="text" name="book_location" value="{{ $book -> book_location}}">

            <br>
            <label>No. of Copies:</label>
            <input type="text" name="no_of_copies" value="{{ $book -> no_of_copies}}">

            <br>
            <input type="submit" name="submit">

        </form>
    </div>
@endsection
