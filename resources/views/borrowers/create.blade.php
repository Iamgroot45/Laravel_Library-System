<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title></title>
</head>

<body>
	<div class="container form-design">
        <form action="/borrowers" method="POST">
            @csrf
            <div class="form-row">
                <div class="col-md-12">
                    <span>Personal Info</span>
                </div>
                <div class="col-md-12">
                    <hr>
                </div>
            </div>

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
                    @error('contact_number')
                        <div class="alert alert-danger"> {{ $message }}</div>
                    @enderror

                    <label for="lname">Contact Number</label>
                    <input type="text" class="form-control" name="contact_number" id="position">
                </div>
            </div>

            <hr>

            <div class="form-row">
                <div class="form-group col-md-12">
                    @error('email')
                        <div class="alert alert-danger"> {{ $message }}</div>
                    @enderror

                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    @error('password')
                        <div class="alert alert-danger"> {{ $message }}</div>
                    @enderror

                    <label for="">Password</label>
                    <input type="text" class="form-control" name="password">
                </div>
            </div>

            <hr>

            <div class="form-row">
                <div class="col-md-12">
                    <input type="submit" class="btn btn-dark">
                </div>
            </div>
        </form>
	</div>
</body>
</html>
