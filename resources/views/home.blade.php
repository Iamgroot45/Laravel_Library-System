@extends('layouts.master')

@section('contents')
<div class="container d-flex justify-content-center">
    <ul class="list-group">
        <li class="list-group-item">
            <a href="/authors">Authors</a>
        </li>
        <li class="list-group-item">
            <a href="/books">Books</a>
        </li>
        <li class="list-group-item">
            <a href="/reservations">Book Reservations</a>
        </li>
        <li class="list-group-item">
            <a href="/borrowed">Borrowed Books</a>
        </li>
        <li class="list-group-item">
            <a href="/borrowers">Borrowers</a>
        </li>
        <li class="list-group-item">
            <a href="/dailytimerecord">Daily Time Records</a>
        </li>
        <li class="list-group-item">
            <a href="/staff">Staff</a>
        </li>
    </ul>
</div>
@endsection
