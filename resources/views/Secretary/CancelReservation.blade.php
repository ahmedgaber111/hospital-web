<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" contact="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Cancel</title>
    <link rel="icon" type="image/png" sizes="32x32" href="images/add.png">
    <style>*,
        *:before,
        *:after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .popup {
            background-color: #f2f2f2;
            width: 420px;
            padding: 30px 40px;
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
            border-radius: 20px;
            font-family: "Poppins", sans-serif;
            text-align: center;
        }

        .popup h2{
            margin-top: -20px;
        }

        p{
            font-family: Arial, Helvetica, sans-serif ;
            font-weight: bold;
        }

        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        button {
            background-color: #061b28;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        button:hover {
            opacity: 1;
        }

        .cancelbtn {
            padding: 14px 20px;
            background-color: #f44336;
        }

        /* .cancelbtn,
        .submitbtn {
            float: left;
            width: 50%;
        } */</style>
</head>
<body>
<div class="popup" id="cancel">
    <form action="" method="get" id="form3">

    <h2>Cancel Reservation</h2>
    <hr>
    <p>Are you sure?</p>
    <hr>
    <button type="submit" formaction="{{route('delete.Reservation',$Patient_id)}}">YES</button>
        <button type="submit" formaction="{{route('Secretary.Page')}}"> NO</button>
        @if(Session::has('success'))
            <div  class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif

    </form>
</div>
</body>
</html>
