@extends('layouts.master')

@section('contents')
    <div class="container">
        <h2>Borrowed Books</h2>
        <a href="/borrowed/create">
        <h3>Create</h3></a>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Book ID</th>
                    <th>Borrower ID</th>
                    <th>Staff ID</th>
                    <th>Borrowed Date</th>
                    <th>Status</th>
                    <th>Due Date</th>
                    <th>Returned Date</th>
                </tr>
            </thead>
            <tbody >
                @foreach($borrowed_books as $borrowed_book)
                    <tr>
                        <td>{{$borrowed_book->id}}</td>
                        <td>{{$borrowed_book->book_id}}</td>
                        <td>{{$borrowed_book->borrower_id}}</td>
                        <td>{{$borrowed_book->staff_id}}</td>
                        <td>{{$borrowed_book->borrowed_date}}</td>
                        <td>{{$borrowed_book->status}}</td>
                        <td>{{$borrowed_book->due_date}}</td>
                        <td>{{$borrowed_book->returned}}</td>

                        <td>
                            <a href="/borrowed/{{$borrowed_book->id}}">Show</a>
                        </td>

                        <td>
                            <a href="/borrowed/{{$borrowed_book->id}}/edit">Edit</a>
                        </td>
                        <td>
                            <form action="/borrowed/{{$borrowed_book->id}}" method="POST">
                                @csrf
                                @method('delete')
                                <input type="submit" name="delete" value="delete">
                            </form>


                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

