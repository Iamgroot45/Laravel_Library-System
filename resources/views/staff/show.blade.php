@extends('layouts.master')

@section('contents')
<div class="container">
    <div class="row">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">ID</span>
            </div>
            <input type="text" class="form-control" value="{{ $result->id }}" disabled>
        </div>
    </div>

    <div class="row">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Last Name</span>
            </div>
            <input type="text" class="form-control" value="{{ $result->last_name }}" disabled>
        </div>
    </div>

    <div class="row">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">First Name</span>
            </div>
            <input type="text" class="form-control" value="{{ $result->first_name }}" disabled>
        </div>
    </div>

    <div class="row">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Middle Initial</span>
            </div>
            <input type="text" class="form-control" value="{{ $result->middle_initial }}" disabled>
        </div>
    </div>

    <div class="row">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Email</span>
            </div>
            <input type="text" class="form-control" value="{{ $result->email }}" disabled>
        </div>
    </div>

    <div class="row">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Position</span>
            </div>
            <input type="text" class="form-control" value="{{ $result->position }}" disabled>
        </div>
    </div>

    <div class="row">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Area Assigned</span>
            </div>
            <input type="text" class="form-control" value="{{ $result->area_assigned }}" disabled>
        </div>
    </div>

    <div class="row">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Username</span>
            </div>
            <input type="text" class="form-control" value="{{ $result->user->username }}" disabled>
        </div>
    </div>

    <div class="row">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Password</span>
            </div>
            <input type="text" class="form-control" value="{{ $result->user->password }}" disabled>
        </div>
    </div>

    <div class="row">
        <a href="/staff" class="btn btn-dark">Back</a>
    </div>
</div>
@endsection
