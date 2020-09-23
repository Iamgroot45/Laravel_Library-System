<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="/book_authors" method="POST">
		@csrf
		<label>Author ID:</label>
		<input type="text " name="first_name">
		<label>Book ID:</label>
		<input type="text " name="middle_initial">
		<button>Submit</button>
	</form>
</body>
</html> 