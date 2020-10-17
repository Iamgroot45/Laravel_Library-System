@extends('layouts.master')

@section('contents')
    <div class="container">
        <h3>ID: {{$book->id}}</h3>
        <h3>ISBN: {{$book->isbn}}</h3>
        <h3>Title: {{$book->title}}</h3>
        @if (count($book->authors) <= 0)
            <h3>Author: Unidentified</h3>
        @else
            <h3>Author: {{$book->authors[0]->last_name}}, {{$book->authors[0]->first_name}} {{$book->authors[0]->middle_initial}}.</h3>
        @endif
        <h3>Publisher: {{$book->publisher}}</h3>
        <h3>Description: {{$book->description}}</h3>
        <h3>Summary: {{$book->summary}}</h3>
        <h3>Publication Year: {{$book->publication_year}}</h3>
        <h3>Book location: {{$book->book_location}}</h3>
        <h3>Number of copies: {{$book->no_of_copies}}</h3>
    </div>
@endsection
