@extends('layouts.master')

@section('contents')
    <div class="container">
        <h1>Edit Borrower {{ $borrower->first_name }}
            {{ $borrower->middle_initial }}
        {{ $borrower->last_name }}</h1>

            <h3>Username {{ $borrower->user->username }}</h3>
            <form action="/borrowers/{{ $borrower->id }}" method="POST">
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
                <input type="text " name="first_name" value="{{ $borrower->first_name }}">
                <label>Middle Initial:</label>
                <input type="text " name="middle_initial" value="{{ $borrower->middle_initial }}">
                <label>Last Name:</label>
                <input type="text " name="last_name" value="{{ $borrower->last_name }}">
                <label>Contact Number:</label>
                <input type="text " name="contact_number" value="{{ $borrower->contact_number }}">
                <label>Email Address:</label>
                <input type="text " name="email_address" value="{{ $borrower->email_address }}">
                <label>Purpose:</label>
                <input type="text " name="purpose" value="{{ $borrower->purpose }}">
                <input type="submit" name="submit">
            </form>
    </div>
@endsection
