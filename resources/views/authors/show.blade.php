<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>ID: {{ $author->id }}</h3>
	<a href="/authors/{{ $author->id}}/edit">EDIT</a>

	<form action="/authors/{{ $author->id}}" method="POST">
	@csrf
	@method('DELETE')
	<button class="btn" type='submit'>DELETE</button>
	</form>
	<h3>NAME: {{ $author->last_name }} {{ $author->first_name }} {{ $author->middle_initial }}</h3>

</body>
</html> 