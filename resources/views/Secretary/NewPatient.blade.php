<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" contact="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>New Patient</title>
        <link rel="icon" type="image/png" sizes="32x32" href="images/add.png">
        <link rel="stylesheet" href="css/NewPatient.css">
    </head>
    <body>
        <div class="newPatient" id="popup">

                <form method="post" class="popup-content" action="{{route('CreateNewPatients')}}" style="border: 1px solid #ccc;">
                    @csrf
                    <div class="container">
                    <h2>New Patient</h2>
                    <hr>
                    <label for="Paient_id"><b>ID</b></label>
                    <input type="text" placeholder="Enter the patient id" name="id" required>
                        @error('id')
                        <small class="form-text text danger">{{$message}}</small>
                        @enderror
                        <label for="Paient_id"><b>NAME</b></label>

                        <input type="text" placeholder="Enter the patient name" name="username" required>
                        @error('username')
                        <small class="form-text text danger">{{$message}}</small>
                        @enderror

                        <label for="Phone"><b>PHONE Number</b></label>
                    <input type="text" placeholder="Enter the patient's phone number" name="phone" minlength="11" required>
                        @error('phone')
                        <small class="form-text text danger">{{$message}}</small>
                        @enderror

                        <label for="gender" class="genderlabel"> <b>Select Gender</b></label>
                    <select name="gender" id="gender" required>
                        <option value="" >-- Gender --</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                        @error('gender')
                        <small class="form-text text danger">{{$message}}</small>
                        @enderror

                        <label for="Age"><b>Age</b></label>
                    <input type="text" name="age" placeholder="Age" required>
                        @error('age')
                        <small class="form-text text danger">{{$message}}</small>
                        @enderror

                        <div>
                        <label for="Email"><b>Email Address</b></label>
                        <input type="email" placeholder="Enter Email" name="Email" required>
                            @error('Email')
                            <small class="form-text text danger">{{$message}}</small>
                            @enderror

                        </div>
                    <div>
                        <label for="password"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="password" required>
                        @error('password')
                        <small class="form-text text danger">{{$message}}</small>
                        @enderror
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        @error('password_confirmation')
                        <small class="form-text text danger">{{$message}}</small>
                        @enderror

                    </div>
                    <label for="Address"><b>Address</b></label>
                    <input type="text" placeholder="Enter the patient address" name="address" required>
                        @error('address')
                        <small class="form-text text danger">{{$message}}</small>
                        @enderror

                    <div class="clearfix">
                        <button type="submit" class="createbtn" onclick="newReservation()">Create</button>
                        <button type="button"><a href="{{route('Secretary.Page')}}" class="btn btn-success">back</a></button>
                        @if(Session::has('success'))
                            <div  class="alert alert-success">
                                {{Session::get('success')}}
                            </div>

                        @endif

                    </div>
                </div>
            </form>
        </div>
    </body>
    <script src="js/Secretary.js"></script>
</html>
