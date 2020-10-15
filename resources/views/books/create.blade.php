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
        <label>Publication Year:</label>
        <input type="text" name="publication_year">

        <br>
        <label>Book Location:</label>
        <input type="text" name="book_location">

        <br>
        <label>No. of Copies:</label>
        <input type="text" name="no_of_copies">

        <br>
        <label>Available Copies:</label>
        <input type="text" name="available_copies">

        <br>
        <label>Author:</label>
        <input type="text" name="last_name" placeholder="Last Name">
        <input type="text" name="first_name" placeholder="First Name">
        <input type="text" name="middle_initial" placeholder="Middle Initial">

        <br>
        <input type="submit" name="submit">

    </form>
</body>
</html>
