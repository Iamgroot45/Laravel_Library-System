@extends('layouts.master')

@section('contents')
    
    <form action="/borrowed/{{$borrowed_book->id}}" method="POST">
       
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
        <label for="">Status:</label>
        <input type="text" name="stats" value="{{$borrowed_book->status}}">

        <input type="submit">
    </form>
    @endsection