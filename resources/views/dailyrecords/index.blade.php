<!DOCTYPE html>
<html>
<head>
	<title>Dailyrecords</title>
</head>
<body>
	<h2>Dailyrecords: </h2>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Staff ID</th>
				<th>Date</th>
				<th>Time In</th>
				<th>Time Out</th>
				
				
			</tr>
		</thead>
		<tbody>
			
			@foreach($dailyrecords as $dailyrecord)
				<tr>
					<td>{{ $dailyrecord->id }}</td>
					<td>{{ $dailyrecord->id }}</td>
					<td>{{ $dailyrecord->staff_id }}</td>
					<td>{{ $dailyrecord->time_in}}</td>
					<td>{{ $dailyrecord->time_out}}</td>
					 <td>
                        <a href="/dailytimerecords/{{$dailyrecord->id}}">Show</a>
                    </td>
                    <td>
                        <a href="/dailytimerecords/{{$dailyrecord->id}}/edit">Edit</a>
                    </td>
                    <td>
                        <form action="/dailytimerecords/{{$dailyrecord->id}} "method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" name="delete" value="delete">
                        </form>
                    </td>
				</tr>
			@endforeach
		</tbody>

	</table>
	<a href="/dailyrecords/create">Create</a>    
</body>
</html> 