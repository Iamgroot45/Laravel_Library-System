<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Borrowers</h2>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>NAME</th>
				<th>CONTACT NUMBER</th>
				<th>EMAIL ADDRESS</th>
				<th>PURPOSE</th>
				<th>ACTIONS</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($borrowers as $borrower) : ?> 
				<tr>
					<td>{{ $borrower->id }}</td>
					<td>{{ $borrower->first_name }} {{ $borrower->middle_initial }} {{ $borrower->last_name }}</td>
					<td>{{ $borrower->contact_number }}</td>
					<td>{{ $borrower->email_address }}</td>
					<td>{{ $borrower->purpose }}</td>
					<td>
						<!-- link for showing -->
						<a href="/borrowers/{{ $borrower->id }}"> Show </a>
						<!-- link for editing -->
						<a href="/borrowers/{{ $borrower->id }}/edit"> Edit </a>
						<!-- link for deleting -->
						<!-- <a href="/borrowers/{{ $borrower->id }}/delete"> Delete </a> -->
						<form action="/borrowers/{{ $borrower->id }}/delete" method="POST">
							@csrf
							@method('DELETE')
							<input type="submit" name="delete" value="delete">
						</form>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>