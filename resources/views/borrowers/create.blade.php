<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="/borrowers" method="POST">
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
		<label>First Name:</label>
		<input type="text " name="first_name" required placeholder="First Name">
		<label>Middle Initial:</label>
		<input type="text " name="middle_initial" required placeholder="Middle Initial">
		<label>Last Name:</label>
		<input type="text " name="last_name" required placeholder="Last Name">
		<label>Contact Number:</label>
		<input type="text " name="contact_number" required placeholder="Contact Number">
		<label>Email Address:</label>
		<input type="email " name="email_address" required placeholder="Email Address">
		<label>Purpose:</label>
		<input type="text " name="purpose" required placeholder="Purpose">
		<input type="submit" name="submit">
	</form>
</body>
</html>