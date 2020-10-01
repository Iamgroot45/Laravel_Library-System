<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="/book_authors" method="POST">
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
		<label>Author ID:</label>
		<input type="text " name="first_name"  required placeholder="Author ID">
		<label>Book ID:</label>
		<input type="text " name="middle_initial"  required placeholder="Book ID">
		<button>Submit</button>
	</form>
</body>
</html> 