<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ISBN</th>
                    <th>Title</th>
                    <th>Publisher</th>
                    <th>Description</th>
                    <th>Summary</th>
                    <th>Publication Date</th>
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
                        <td>{{$book -> publication_date}}</td>
                        <td>{{$book -> book_location}}</td>
                        <td>{{$book -> number_of_copies}}</td>
                        <td>
                            <a href="/books/{{$book->id}}">Display</a>

                            <a href="/books/{{$book->id}}/edit">Edit</a>


                            <form action='/books/{{$book->id}}/delete' method="POST">
                                @csrf

                                @method('DELETE')

                                <input type="submit" name="delete" value="delete">
                            </form>

                        </td>
                    </tr>
                 @endforeach
            </tbody>
        </table>
    </div>



</body>
</html>
