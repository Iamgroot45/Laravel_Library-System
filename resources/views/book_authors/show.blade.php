<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>ID: {{ $book_author->id }}</h3>
	<a href="/book_authors/{{ $book_author->id}}/edit">EDIT</a>

	<form action="/book_authors/{{ $book_author->id}}" method="POST">
	@csrf
	@method('DELETE')
	<button class="btn" type='submit'>DELETE</button>
	</form>
	<h3>NAME: {{ $book_author->last_name }} {{ $book_author->first_name }} {{ $book_author->middle_initial }}</h3>

</body>
</html> 