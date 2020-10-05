<!DOCTYPE html>
<html>
<head>
	<title>Dailyrecords</title>
</head>
<body>
	<form action="/dailyrecords" method="POST">




		@csrf
		<label>ID: </label>
		<input type="text " name="id" required placeholder="ID">
		<label>Staff ID: </label>
		<input type="text " name="staff_id" required placeholder="Staff ID">
		<label>Date: YYYY-MM-DD</label>
		<input type="text " name="date" required placeholder="Date">
		<label>Time In : YYYY-MM-DD</label>
		<input type="text " name="time in" required placeholder="Time In">
		<label>Time Out: YYYY-MM-DD</label>
		<input type="text " name="time out" required placeholder="Time Out">


		<input type="submit" name="submit">
	</form>
</body>
</html>  