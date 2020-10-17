@extends('layouts.master')

@section('contents')
    <h2>AUTHORS</h2>
    <a href="/authors/create">Create authors </a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>LAST NAME</th>
                <th>FIRST NAME</th>
                <th>MIDDLE NAME</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($authors as $author) : ?>
                <tr>
                    <td>{{ $author->id }}</td>
                    <td>{{ $author->last_name }} {{ $author->first_name }} {{ $author->middle_initial }}</td>
                    <td>
                        <a href="authors/{{ $author->id }}">Show</a>
                        <a href="authors/{{ $author->id }}/edit">EDIT</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
@endsection
