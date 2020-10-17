@extends('layouts.master')

@section('contents')
    <form action="/authors" method="POST">
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
        <label>First Name:</label>
        <input type="text " name="first_name" required placeholder="First Name">
        <label>Middle Initial:</label>
        <input type="text " name="middle_initial" required placeholder="Middle Initial">
        <label>Last Name:</label>
        <input type="text " name="last_name" required placeholder="Last Name">
        <button>Submit</button>
    </form>
@endsection
