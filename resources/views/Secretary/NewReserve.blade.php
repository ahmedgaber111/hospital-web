<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" contact="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>New Reservation</title>
    <link rel="icon" type="image/png" sizes="32x32" href="images/add.png">

  <style>*,
      *:before,
      *:after {
          padding: 0;
          margin: 0;
          box-sizing: border-box;
      }

      input[type=time],
      input[type=text] {
          width: 100%;
          padding: 15px;
          margin: 5px 0 22px 0;
          text-indent: 5px;
          display: inline-block;
          border: none;
          background: #f1f1f1;
      }

      input[type=time]:focus,
      input[type=time]:hover,
      input[type=text]:hover,
      input[type=text]:focus {
          background-color: #ddd;
          outline: none;
      }

      form {
          border: 1px solid #ccc;
          border-radius: 10px;
      }


      select:hover {
          background-color: #ddd;
          outline: none;
      }

      .popup {
          position: absolute;
          z-index: 1;
          left: 50%;
          top: 75%;
          width: 700px;
          overflow: auto;
          transform: translate(-50%, -50%);
          background-color: #f2f2f2;
          padding: 1px 3px;
          font-family: "Poppins",
          sans-serif;
          border-radius: 20px;
          text-align: left;
      }

      h2 {
          /* position: center; */
          /* margin-top: 00px; */
          text-align: center;
          font-style: italic;
          padding: 2%;
      }

      h2,
      option {
          font-weight: bold;
          font-family: "Poppins",
          sans-serif;
          /* padding: 2%; */
      }

      hr {
          border: 1px solid #f1f1f1;
          margin-bottom: 25px;
      }

      select {
          width: 100%;
          padding: 15px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
      }

      #container,
      .col-md-6,
      .form-group,
      #chos_from,
      .form-control,
      .clearfix {
          padding: 16px;
      }



      .clearfix::after {
          content: "";
          clear: both;
          display: table;
      }

      .popup-content {
          background-color: #fefefe;
          margin: 5% auto 15% auto;
          border: 1px solid #888;
          width: 90%;
      }

      button {
          background-color: #061b28;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          border-radius: 4px;
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
      .createbtn {
          float: left;
          width: 50%;
      } */

      @media screen and (max-width: 300px) {

          .cancelbtn,
          .createbtn {
              width: 100%;
          }
      }</style>
</head>
<body>
<div class="popup" id="popup">
    <form method="post" class="popup-content" action="{{route('create_reservation')}}"style="border: 1px solid #ccc;">
        @csrf
        <div class="container" id="container">
            <h2>New Reservation</h2>
            <hr>
            <div class="col-md-6">
                <label for="id"><b>Patient Id </b></label>
                <input type="text" placeholder="Enter a unique id for the patient" name="patient_id">
                @error('patient_id')
                <small class="form-text text danger">{{$message}}</small>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="bane"><b>Patient Name </b></label>
                <input type="text" placeholder="Enter the Patient's name" name="username">
                @error('username')
                <small class="form-text text danger">{{$message}}</small>
                @enderror
            </div>
        </div>
        <div class="col-md-6">

            <label for="departments" class="Specialization"> <b> Doctor's Specialization</b></label>
            <select name="departments" id="departments" required>
                @foreach($departments as $department)

                    <option value="{{$department->name}}" selected>
                        {{$department->name}}
                    </option>
                @endforeach
                @error('departments')
                <small class="form-text text danger">{{$message}}</small>
                @enderror
            </select>
        </div>

        <div class="form-group">


            <label for="Doctor" class="Doctor"> <b>Select Doctor To Reserve</b></label>
            <select class="form-control"name="id">
                 @foreach($doctors as $doctors)
                    <option value="{{$doctors->id}}">
                         {{\App\User::find($doctors->user_id)->username}}
                    </option>
                @endforeach

                @error('id')
                <small class="form-text text danger">{{$message}}</small>
                @enderror
            </select>
        </div>
        <div>

            <div id="chos_from">

                <label for="reserveday"><b>Choose Date</b></label>
                <select class="form-control" name="date_id">
                    @foreach($availables_dates as $availables_dates)
                            <option value="{{$availables_dates->date_id}}">
                                {{\App\Date::find($availables_dates->date_id)->day}}
                                {{\App\Date::find($availables_dates->date_id)->from}}
                                {{\App\Date::find($availables_dates->date_id)->to}}

                            </option>
                     @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-6"id>
            <label for="id"><b> price </b></label>
            <input type="text" placeholder="Enter the price" name="price" >
            @error('price')
            <small id="emailHelp" class="form-text text-muted">{{$message}}</small>
            @enderror
        </div>

        <div class="clearfix">
            <button type="submit" class="createbtn">Book</button>

    </form>

    <form action="DoctorShift" method="get" id="form1">
        <button type="submit" formaction="{{route('DoctorShift')}}">Back</button>
    </form>

            @if(Session::has('success'))
                <div  class="alert alert-success">
                    {{Session::get('success')}}
                </div>

            @endif

        </div>


</div>

</div>
</body>
<script src=""></script>

</html>
