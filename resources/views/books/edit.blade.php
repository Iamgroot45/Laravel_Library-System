<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/books/{{$book -> id}}" method="POST">
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

        <label>ISBN:</label>
        <input type="text" name="isbn" value="{{ $book -> isbn}}">

        <br>
        <label>Title:</label>
        <input type="text" name="title" value="{{ $book -> title}}">

        <br>
        <label>Publisher:</label>
        <input type="text" name="publisher" value="{{ $book -> publisher}}">

        <br>
        <label>Description:</label>
        <input type="text" name="description" value="{{ $book -> description}}">

        <br>
        <label>Summary:</label>
        <input type="text" name="summary" value="{{ $book -> summary}}">

        <br>
        <label>Publication Date:</label>
        <input type="text" name="publication_date" value="{{ $book -> publication_date}}">

        <br>
        <label>Book Location:</label>
        <input type="text" name="book_location" value="{{ $book -> book_location}}">

        <br>
        <label>No. of Copies:</label>
        <input type="text" name="no_of_copies" value="{{ $book -> number_of_copies}}">

        <br>
        <input type="submit" name="submit">

    </form>
</body>
</html>
