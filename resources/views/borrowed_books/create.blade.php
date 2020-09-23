<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/borrowed_books" method="POST">
        @csrf
        <label for="">Book ID: </label>
        <input type="text" name="book">
        <label for="">Borrower ID:</label>
        <input type="text" name="borrower">
        <label for="">Staff ID:</label>
        <input type="text" name="staff">
        <label for="">Status:</label>
        <input type="text" name="stats">

        <input type="submit">
    </form>
</body>
</html>