<!DOCTYPE html>
<html>
<head>
	<title>Reservations</title>
</head>
<body>
    <h2>Reservations</h2>
<br>
    <h3>ID: {{$reservation->id}}</h3>
    <h3>Book ID: {{$reservation->book_id}}</h3>
    <h3>Staff ID: {{$reservation->staff_id}}</h3>
    <h3>Reservation Date: {{$reservation->reservation_date}}</h3>
    <h3>Pickup Date: {{$reservation->pickup_date}}</h3>

</body>