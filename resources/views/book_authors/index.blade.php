<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>AUTHORS</h2>
	<a href="/book_authors/create">Create Book_authors ID </a>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>BOOK ID</th>
				<th>Author ID</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($book_authors as $book_author) : ?> 
				<tr>
					<td>{{ $book_author->id }}</td>
					<td>{{ $book_author->book_id }}	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $book_author->author_id }} </td>
					<td>

						<a href="book_authors/{{ $book_author->id }}">Show</a>
						<a href="book_authors/{{ $book_author->id }}/edit">EDIT</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody> 
	</table>	
</body>
</html> 