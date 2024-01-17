<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" contact="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>View</title>
    <link rel="icon" type="image/png" sizes="32x32" href="images/add.png">

    <style>
        *,
        *:before,
        *:after {
            padding: 0;
            margin: 8px 40px;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0
        }

        .view {
            padding: 20px 30px;
            background-color: #f2f2f2;
            width: 500px;
            /* padding: 30px 40px; */
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
            border-radius: 20px;
            font-family: "Poppins",
            sans-serif;
            text-align: center;
            color: #061b28;
        }

        .container::after {
            content: "";
            clear: both;
            display: table;
        }

        .title {
            color: grey;
            font-weight: bold;
            font-style: italic;
        }

        .view p h3 {
            font-family: Arial, Helvetica, sans-serif;
        }

        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 14px 20px;
            margin: 8px 0;
            color: white;
            background-color: #061b28;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }
        .button:hover {
            background-color: #555;
        }

    </style>
</head>
<body>

<div class="view" id="view">
    <h1>View Patient's Details</h1>
    <hr>
    <h2>{{$patient->username}}</h2>
    <p class="title"><b> ID:{{$patient->id}}</b></p>
    <p><h3>Phone Number: </h3>{{$patient->phone}}</p>
    <p><h3>Email: </h3>{{$patient->Email}}</p>
    <p><h3>Age: </h3>{{$patient->age}}</p>
    <p><h3>Gender: </h3>{{$patient->gender}}</p>
    <p><h3>price: </h3>{{$patient->price}}</p>

    <p><h3>date:</h3>day::{{$dates->day}}<br>from::{{$dates->from}}<br>to::{{$dates->to}}</p>

    <p><button class="button"><a href="{{route('Secretary.Page')}}">Close</a></button></p>
</div>
</body>
<script src="js/doctor.js"></script>
</html>
