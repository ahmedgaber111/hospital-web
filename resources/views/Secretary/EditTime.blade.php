<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" contact="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Time</title>
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

       .popup h2 {
           margin-top: -20px;
       }

       hr {
           border: 1px solid #f1f1f1;
           margin-bottom: 25px;
       }

       input[type=time],
       select {
           width: 100%;
           padding: 12px 20px;
           margin: 8px 0;
           display: inline-block;
           border: 1px solid #ccc;
           border-radius: 4px;
           box-sizing: border-box;
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
    <link rel="stylesheet" href="css/EditTime.css">
</head>
<body>
<div class="popup" id="settime">

    <form method="post" class="popup-content" action="{{route('EDit Time To Doctor')}}"style="border: 1px solid #ccc;">
        @csrf

        <h2>Edit an existing time</h2>
        <hr class="hr">
        <label for="Otime"><b>-- Old Time --</b></label><br><br>
        <label for="day"><b>Select the old_date</b></label>
        <select class="form-control"name="date_id">
         @foreach($OldDateFromS as  $OldDateFrom)
            <option value="{{$OldDateFrom->date_id}}">
                {{$OldDateFrom->day}}</br> From::{{$OldDateFrom->from}} </br>To::{{$OldDateFrom->to}}
            </option>
            @endforeach
        </select>
            <div>
            <br>
            <br><br>
            <label for="Ntime"><b>-- New Time --</b></label><br><br>

            <select name="day" id="day">
                <option value="" >-- Select Day --</option>
                <option value="saturday">Saturday</option>
                <option value="sunday">Sunday</option>
                <option value="monday">Monday</option>
                <option value="tuesday">Tuesday</option>
                <option value="wednesday">Wednesday</option>
                <option value="thursday">Thursday</option>
                <option value="friday">Friday</option>
            </select>
            <label for="Ntime"><b>From </b></label>
            <input type="time" name="From" placeholder="From" required>
            <label for="Ntime"><b>To</b></label>
            <input type="time" name="To" placeholder="To" required>
        </div>
        <br><br>
        <button type="submit" class="submitbtn" formaction="{{route("EDit Time To Doctor")}}">Submit</button>
    </form>
    <form action="DoctorShift" method="get" id="form1">
        <button type="submit" formaction="{{route('DoctorShift')}}">Back</button>
    </form>
</div>
</body>
</html>
