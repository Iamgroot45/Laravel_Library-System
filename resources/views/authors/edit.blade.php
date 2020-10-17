@extends('layouts.master')

@section('contents')
    <form action="/authors/{{ $author->id }}" method="POST">

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
        <label>First Name:</label>
        <input type="text " name="first_name" value="{{ $author->first_name }}">
        <label>Middle Initial:</label>
        <input type="text " name="middle_initial" value="{{ $author->middle_initial }}">
        <label>Last Name:</label>
        <input type="text " name="last_name" value="{{ $author->last_name }}">
        <button>Submit</button>
    </form>
@endsection
