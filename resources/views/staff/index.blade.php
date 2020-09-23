<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="col-md-6">
            <h1>Staff Table</h1>
        </div>

        <div>
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Middle Initial</th>
                        <th scope="col">Position</th>
                        <th scope="col">Area Assigned</th>
                        <th scope="col">#</th>
                        <th scope="col">#</th>
                        <th scope="col">#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($result as $info)
                        <tr>
                            <td>{{ $info->id }}</td>
                            <td>{{ $info->last_name }}</td>
                            <td>{{ $info->first_name }}</td>
                            <td>{{ $info->middle_initial }}</td>
                            <td>{{ $info->position }}</td>
                            <td>{{ $info->area_assigned }}</td>
                            <td>
                                <a href="/staff/{{ $info->id }}" class="btn btn-dark">Show</a>
                            </td>
                            <td>
                                <a href="/staff/edit/{{ $info->id }}" class="btn btn-dark">Update</a>
                            </td>
                            <td>
                                <form action="/staff/delete/{{ $info->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-dark" value="Delete">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <a href="/staff/create" class="btn btn-dark">Create</a>
    </div>
</body>
</html>
