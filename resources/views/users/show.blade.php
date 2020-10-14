<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
	<table>
		<thead>
			<tr>
				<td>Last Name</td>
				<td>First Name</td>
				<td>Middle Initial</td>
				<td>Contact Number</td>
				<td>Email Address</td>
				<td>Purpose</td>
			</tr>
		</thead>
		<tbody>
			<h1>USER</h1>
			@foreach($user->borrowers as $borrower)
			<tr>
				<td>{{ $borrower->last_name }}</td>
				<td>{{ $borrower->first_name }}</td>
				<td>{{ $borrower->middle_initial }}</td>
				<td>{{ $borrower->contact_number }}</td>
				<td>{{ $borrower->email_address }}</td>
				<td>{{ $borrower->purpose }}</td>
			</tr>
			@endforeach
		</tbody>
		
	</table>
	
    

</body>
</html>