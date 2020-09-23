<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/books" method="POST">

        @csrf

        <label>ISBN:</label>
        <input type="text" name="isbn">

        <br>
        <label>Title:</label>
        <input type="text" name="title">

        <br>
        <label>Publisher:</label>
        <input type="text" name="publisher">

        <br>
        <label>Description:</label>
        <input type="text" name="description">

        <br>
        <label>Summary:</label>
        <input type="text" name="summary">

        <br>
        <label>Publication Date:</label>
        <input type="text" name="publication_date">

        <br>
        <label>Book Location:</label>
        <input type="text" name="book_location">

        <br>
        <label>No. of Copies:</label>
        <input type="text" name="no_of_copies">

        <br>
        <input type="submit" name="submit">

    </form>
</body>
</html>
