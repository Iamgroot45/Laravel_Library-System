<!DOCTYPE html>
<html>
<head>
	<title>Reservations</title>
</head>
<body>
	<form action="/reservations" method="POST">
		@csrf
		<label>Book ID: </label>
		<input type="text " name="book_id">
		<label>Staff ID: </label>
		<input type="text " name="staff_id">
		<label>Pickup Date: YYYY-MM-DD</label>
		<input type="text " name="pickup_date">
		
		<input type="submit" name="submit">
	</form>
</body>
</html> 