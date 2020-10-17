@extends('layouts.master')

@section('contents')
    <div class="container-fluid">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ISBN</th>
                    <th>Title</th>
                    <th>Publisher</th>
                    <th>Description</th>
                    <th>Summary</th>
                    <th>Publication Year</th>
                    <th>Book Location</th>
                    <th>No. of copies</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{$book -> id}}</td>
                        <td>{{$book -> isbn}}</td>
                        <td>{{$book -> title}}</td>
                        <td>{{$book -> publisher}}</td>
                        <td>{{$book -> description}}</td>
                        <td>{{$book -> summary}}</td>
                        <td>{{$book -> publication_year}}</td>
                        <td>{{$book -> book_location}}</td>
                        <td>{{$book -> no_of_copies}}</td>
                        <td>
                            <a href="/books/{{$book->id}}">Display</a>

                            <a href="/books/{{$book->id}}/edit">Edit</a>


                            <form action='/books/{{$book->id}}' method="POST">
                                @csrf

                                @method('DELETE')

                                <input type="submit" name="delete" value="delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $books->links() }}

        <a class="btn btn-dark" href="books/create">Create</a>
    </div>
@endsection
