<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/users" method="POST">
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

        <label>Username:</label>
        <input type="text" name="username">

        <br>
        <label>Password:</label>
        <input type="password" name="password">

        <br>
        <label>Distinction:</label>
        <input type="text" name="distinction">

        <br>
        <input type="submit" name="submit">

    </form>
</body>
</html>
