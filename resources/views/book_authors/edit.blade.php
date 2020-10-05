<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="/book_authors/{{ $book_author->id }}" method="POST">
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
		<label>Authors ID:</label>
		<input type="text " name="author_id" value="{{ $book_author->author_id }}">
		<label>Book ID:</label>
		<input type="text " name="book_id" value="{{ $book_author->book_id }}">
		<button>Submit</button>
	</form>
</body>
</html>