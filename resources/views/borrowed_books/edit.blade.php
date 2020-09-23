<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/borrowed_books/{{$borrowed_book->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Book ID: </label>
    <input type="text" name="book" value="{{$borrowed_book->book_id}}">
        <label for="">Borrower ID:</label>
        <input type="text" name="borrower" value="{{$borrowed_book->borrower_id}}">
        <label for="">Staff ID:</label>
        <input type="text" name="staff" value="{{$borrowed_book->staff_id}}">
        <label for="">Status:</label>
        <input type="text" name="stats" value="{{$borrowed_book->status}}">

        <input type="submit">
    </form>
</body>
</html>