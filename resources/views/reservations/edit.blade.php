<!DOCTYPE html>
<html>
<head>
    <title>Reservations</title>
</head>
<body>
    <form action="/reservations/{{ $reservation->id }}" method="POST">
        @csrf
        @method('PUT')
        <label>Book ID:</label>
        <input type="text " name="book_id" value="{{ $reservation->book_id }}">
        <label>Staff ID:</label>
        <input type="text " name="staff_id" value="{{ $reservation->staff_id }}">
        <label>Reservation Date:</label>
        <input type="text " name="reservation_date" value="{{ $reservation->reservation_date }}">
        <label>Pickup Date:</label>
        <input type="text " name="pickup_date" value="{{ $reservation->pickup_date }}">
        
        <input type="submit" name="submit">
    </form>
</body>
</html> 