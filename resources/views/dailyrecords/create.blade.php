<!DOCTYPE html>
<html>
<head>
	<title>Dailyrecords</title>
</head>
<body>
	<form action="/dailyrecords" method="POST">
		@csrf
		<label>ID: </label>
		<input type="text " name="id">
		<label>Staff ID: </label>
		<input type="text " name="staff_id">
		<label>Date: YYYY-MM-DD</label>
		<input type="text " name="date">
		<label>Time In : YYYY-MM-DD</label>
		<input type="text " name="time in">
		<label>Time Out: YYYY-MM-DD</label>
		<input type="text " name="time out">


		<input type="submit" name="submit">
	</form>
</body>
</html>  