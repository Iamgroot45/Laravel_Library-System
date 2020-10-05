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
        <div class="row">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">ID</span>
                </div>
                <input type="text" class="form-control" value="{{ $result->id }}" disabled>
            </div>
        </div>

        <div class="row">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Last Name</span>
                </div>
                <input type="text" class="form-control" value="{{ $result->last_name }}" disabled>
            </div>
        </div>

        <div class="row">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">First Name</span>
                </div>
                <input type="text" class="form-control" value="{{ $result->first_name }}" disabled>
            </div>
        </div>

        <div class="row">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Middle Initial</span>
                </div>
                <input type="text" class="form-control" value="{{ $result->middle_initial }}" disabled>
            </div>
        </div>

        <div class="row">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Position</span>
                </div>
                <input type="text" class="form-control" value="{{ $result->position }}" disabled>
            </div>
        </div>

        <div class="row">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Area Assigned</span>
                </div>
                <input type="text" class="form-control" value="{{ $result->area_assigned }}" disabled>
            </div>
        </div>

        <div class="row">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Created At</span>
                </div>
                <input type="text" class="form-control" value="{{ $result->created_at }}" disabled>
            </div>
        </div>

        <div class="row">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Updated At</span>
                </div>
                <input type="text" class="form-control" value="{{ $result->updated_at }}" disabled>
            </div>
        </div>

        <div class="row">
            <a href="/staff" class="btn btn-dark">Back</a>
        </div>
    </div>
</body>
</html>
