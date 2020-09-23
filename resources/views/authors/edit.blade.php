<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="/authors/{{ $author->id }}" method="POST">
		@csrf
		@method('PUT')
		<label>First Name:</label>
		<input type="text " name="first_name" value="{{ $author->first_name }}">
		<label>Middle Initial:</label>
		<input type="text " name="middle_initial" value="{{ $author->middle_initial }}">
		<label>Last Name:</label>
		<input type="text " name="last_name" value="{{ $author->last_name }}">
		<button>Submit</button>
	</form>
</body>
</html>