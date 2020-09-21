<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="/borrowers" method="POST">
		@csrf
		<label>First Name:</label>
		<input type="text " name="first_name">
		<label>Middle Initial:</label>
		<input type="text " name="middle_initial">
		<label>Last Name:</label>
		<input type="text " name="last_name">
		<label>Contact Number:</label>
		<input type="text " name="contact_number">
		<label>Email Address:</label>
		<input type="text " name="email_address">
		<label>Purpose:</label>
		<input type="text " name="purpose">
		<input type="submit" name="submit">
	</form>
</body>
</html>