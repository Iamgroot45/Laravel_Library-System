@extends('layouts.master')

@section('contents')
    <div class="container">
        <h2>Reservations: </h2>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Book ID</th>
				<th>Reservation Date</th>
				<th>Pickup Date</th>
			</tr>
		</thead>
		<tbody>
			@foreach($reservations as $reservation)
				<tr>
					<td>{{ $reservation->id }}</td>
					<td>{{ $reservation->book_id }}</td>
					<td>{{ $reservation->reservation_date}}</td>
					<td>{{ $reservation->pickup_date }}</td>
					 <td>
                        <a href="/reservations/{{$reservation->id}}">Show</a>
                    </td>
                    <td>
                        <a href="/reservations/{{$reservation->id}}/edit">Edit</a>
                    </td>
                    <td>
                        <form action="/reservations/{{$reservation->id}}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" name="delete" value="delete">
                        </form>
                    </td>
				</tr>
			@endforeach
		</tbody>

	</table>
	<a href="/reservations/create">Create</a>
    </div>
@endsection
