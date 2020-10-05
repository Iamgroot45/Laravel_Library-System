<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Distinction</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user -> id}}</td>
                        <td>{{$user -> username}}</td>
                        <td>{{$user -> password}}</td>
                        <td>{{$user -> distinction}}</td>

                        <td>
                            <a href="/users/{{$user->id}}">Display</a>

                            <a href="/users/{{$user->id}}/edit">Edit</a>


                            <form action='/users/{{$user->id}}/delete' method="POST">
                                @csrf

                                @method('DELETE')

                                <input type="submit" name="delete" value="delete">
                            </form>

                        </td>
                    </tr>
                 @endforeach
            </tbody>
        </table>
    </div>



</body>
</html>
