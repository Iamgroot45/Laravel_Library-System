<!DOCTYPE html>
<html>
<head>
    <title>Reservations</title>
</head>
<body>
    <form action="/reservations/{{ $reservation->id }}" method="POST">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @csrf
        @method('PUT')
        <label>Book ID:</label>
        <input type="text " name="book_id" value="{{ $reservation->book_id }}" required placeholder="Book ID">
        <label>Staff ID:</label>
        <input type="text " name="staff_id" value="{{ $reservation->staff_id }}" required placeholder="Staff ID">
        <label>Reservation Date:</label>
        <input type="text " name="reservation_date" value="{{ $reservation->reservation_date }}" required placeholder="Reservation Date">
        <label>Pickup Date:</label>
        <input type="text " name="pickup_date" value="{{ $reservation->pickup_date }}" required placeholder="PickUp Date">
        
        <input type="submit" name="submit">
    </form>
</body>
</html> 