<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>ID: {{ $borrower->id }}</h3>
	<h3>NAME: {{ $borrower->first_name }} {{ $borrower->middle_initial }} {{ $borrower->last_name }}</h3>
	<h3>CONTACT NUMBER: {{ $borrower->contact_number }}</h3>
	<h3>EMAIL ADDRESS: {{ $borrower->email_address }}</h3>
	<h3>PURPOSE: {{ $borrower->purpose }}</h3>
</body>
</html>