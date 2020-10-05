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
			Schema::create('daily_time_records', function (Blueprint $table) {
            $table->id();
            $table->foreign('staff_id')->references('id')->on('staff');
            $table->time('time_in');
            $table->time('time_out');
            $table->date('date');
            $table->timestamps();
			@foreach($dailyrecords as $dailyrecord)
				<tr>
					<td>{{ $->id }}</td>
					<td>{{ $dailyrecords->id }}</td>
					<td>{{ $dailyrecords->staff_id }}</td>
					<td>{{ $dailyrecords->time_in}}</td>
					<td>{{ $dailyrecords->time_out}}</td>
					 <td>
                        <a href="/dailyrecords/{{$dailyrecord->id}}">Show</a>
                    </td>
                    <td>
                        <a href="/dailyrecords/{{$dailyrecord->id}}/edit">Edit</a>
                    </td>
                    <td>
                        <form action="/dailyrecords/{{$dailyrecord->id}}/delete" method="POST">
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