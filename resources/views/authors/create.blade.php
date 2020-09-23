<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="/authors" method="POST">
		@csrf
		<label>First Name:</label>
		<input type="text " name="first_name">
		<label>Middle Initial:</label>
		<input type="text " name="middle_initial">
		<label>Last Name:</label>
		<input type="text " name="last_name">
		<button>Submit</button>
	</form>
</body>
</html> 