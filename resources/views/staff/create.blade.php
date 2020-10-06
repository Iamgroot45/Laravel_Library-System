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
        <form action="/staff" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    @error('last_name')
                        <div class="alert alert-danger"> {{ $message }}</div>
                    @enderror

                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="lname">
                </div>

                <div class="form-group col-md-6">
                    @error('first_name')
                        <div class="alert alert-danger"> {{ $message }}</div>
                    @enderror

                    <label for="lname">First Name</label>
                    <input type="text" class="form-control" name="first_name" id="fname">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    @error('middle_initial')
                        <div class="alert alert-danger"> {{ $message }}</div>
                    @enderror

                    <label for="lname">Middle Initial</label>
                    <input type="text" class="form-control" name="middle_initial" id="minitial">
                </div>

                <div class="form-group col-md-6">
                    @error('position')
                        <div class="alert alert-danger"> {{ $message }}</div>
                    @enderror

                    <label for="lname">Position</label>
                    <input type="text" class="form-control" name="position" id="position">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    @error('area_assigned')
                        <div class="alert alert-danger"> {{ $message }}</div>
                    @enderror

                    <label for="lname">Area Assigned</label>
                    <input type="text" class="form-control" name="area_assigned" id="area_assigned">
                </div>
            </div>

            <input type="submit" class="btn btn-dark">
        </form>
    </div>

</body>
</html>
