<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" contact="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Doctor</title>
    <link rel="icon" type="image/png" sizes="32x32" href="images/3448513.png">
    <style>*,
        html {
            margin: 0;
            padding: 0;
            align-items: center;
        }

        body {
            background-color: #eceff1;
        }

        header {
            display: flex;
            padding: 1rem;
            position: fixed;
            width: 100%;
            display: flex;
            justify-content: center;
            top: 0%;
            z-index: 100;
            background-color: #eceff1;
            font-family: Quicksand;
        }

        .header.activated {
            box-shadow: 0 1px .5rem #252830;
            background-color: white;
        }

        #nav-toggle {
            display: none;
        }

        .user {
            color: #112a57;
            display: flex;
            justify-content: center;
        }

        .img {
            text-align: center;
        }

        .user_img,
        .hicon {
            width: 10%;
            height: 10%;
            border-radius: 50%;
        }

        .hicon {
            left: 70px;
        }

        #pres {
            position: absolute;
            left: 73%;
            top: 36.5%;
            width: 300px;
            transform: translate(-50%, -50%);
            color: #24457b;
            padding: 5px 15px;
            font-family: Quicksand;
            border-radius: 20px;
            text-align: left;
            display: inline-table;
            background-color: #ffffff;
        }

        #form {
            position: absolute;
            left: 10%;
            top: 12.5%;
            width: 1000px;
            color: #24457b;
            font-family: Quicksand;
            font-size:20px;
            padding-top: 16.5%;
            display: block;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .page {
            width: 1000px;
            padding: 0 4px 0px 4px;
            margin: 10px auto 10px auto;
            border-width: 0px;
            border-style: none;
            border-color: #4c4c4c;
            box-shadow: none;
            display: block;
            position: relative;
            box-sizing: border-box;
        }

        .container {
            padding: 0 ;
            border-width: 0;
            position:relative;
            display: block;
            margin: 0;
            overflow: hidden;
            width: 750px;
            line-height: 0;
            border-color: transparent;
            background-color: transparent;
            box-sizing: border-box;
            font-family: Quicksand;
            font-size: 23px;
        }

        .control {
            border-color: transparent;
            background-color: transparent;
            display: inline-block;
            margin: 0;
            width: 800px;
            padding: 0px 0px;
            border-width: 0px;
            border-radius: 0px;
            border-style: none;
            overflow: hidden;
            line-height: normal;
            position: relative;
            box-sizing: border-box;
            font-family: Quicksand;
            font-size: 23px;
        }

        .inputrow {
            margin-top: 6px !important;
            white-space: nowrap;
            overflow: hidden;
            margin-right: 0;
            clear: both;
            padding-bottom: 1px;
            display: block;
            line-height: normal;
            box-sizing: border-box;
            position: relative;
        }

        .dropdown,
        .dropdown2 {
            background-color: rgba(255,255,255,.46);
            border-color: #24457b;
            display: inline-block;
            color: #5a7db5;
            padding: 16px 16px;
            border-width: 1px !important;
            border-style: solid !important;
            border-radius: 3px !important;
            font-family: Quicksand;
            font-size: 18px;
            font-weight: normal;
            font-style: normal;
            line-height: 1.2em;
            width: 200px;
            position: relative;
            box-sizing: border-box;
            margin: 0;
            outline: 0;
            height: calc(18px + 18px + 1px + 1px + 1.2em);
            overflow: hidden;
            border: 1px solid #ddd;
            vertical-align: top;
        }

        .dropdown {
            width: 400px;
        }

        .dropdown2 {
            width: 500px;
            height:auto;
        }

        input[type="text"],
        input[type="submit"]{
            height: 2.5rem;
            width: 170px;
            margin-top: 3px !important;
            padding-left: 2px;
            writing-mode: horizontal-tb !important;
            font-variant-ligatures:no-common-ligatures;
            font-variant-caps: normal;
            font-variant-numeric: slashed-zero;
            font-stretch: condensed;
            text-rendering: auto;
            color: internal light dark(black,white);
            letter-spacing: normal;
            word-spacing: normal;
            text-transform: none;
            text-indent: 0px;
            text-shadow: none;
            text-align: start;
            font-size:17px;
            cursor: text;
        }

        input[type=date] {
            width: 20%;
            padding: 10px;
            margin: 5px 0 22px 0;
            text-indent: 5px;
            display: inline-block;
            border: none;
            background: #ffffff;
            color: #24457b;
            font-weight: bold;
        }

        select,
        #Dosage {
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 100%;
            display: block;
            z-index: 1;
            direction: inherit;
            font-size: inherit !important;
            height: 100%;
            padding: 3px;
            margin: 0;
            border: 0;
            overflow: visible !important;
            writing-mode: horizontal-tb !important;
            font-style: normal;
            letter-spacing: normal;
            word-spacing: normal;
            line-height: normal;
            text-transform: none;
            text-indent: 0px;
            text-shadow:none;
            text-align: center;
            align-items: center;
            white-space: pre;
            background-color: -internal-light-dark(rgb(255, 255, 255), rgb(59, 59, 59));
            color: #24457b;
            cursor: default;
        }

        option {
            font-weight: normal;
            display: block;
            white-space: nowrap;
            min-height: 1.2em;
            padding: 0px 2px 1px;
            direction: inherit;
            font-size: inherit !important;
        }

        #Dosage {
            width: 40%;
            left: 60%;
        }

        hr {
            color: #24457b;
            display: block;
            unicode-bidi: isolate;
            margin-block-start: 0.5em;
            margin-block-end: 0.5em;
            margin-inline-start: auto;
            margin-inline-end: auto;
            overflow: hidden;
            border-style: inset;
            border-width: 1px;
        }

        #pres hr {
            width: 50%;
        }

        #table {
            background-color: white;
        }

        table {
            text-align: center;
        }

        thead td {
            font-weight: bold;
            font-size: 1.34rem;
            color: #24457b;
        }

        td {
            padding: 0.5rem;
            font-size: 1.2rem;
            color: #24457b;
        }

        button {
            background-color: #061b28;
            color: #ffffff;
            padding: 10px 10px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 10%;
            opacity: 0.9;
            outline: none;
        }

        #remove_btn,
        #remove_btn1 {
            width: 100%;
            font-size: large;
        }

        button:hover {
            opacity: 1;
        }

        .submit,
        .stbtn {
            writing-mode: horizontal-tb !important;
            text-rendering: auto;
            letter-spacing: normal;
            word-spacing: normal;
            text-transform: none;
            text-align: center;
            align-items: flex-start;
            cursor: default;
            width: 93%;
            border-radius: 10px;
            padding: 17px 15px;
            font-size: large;
        }</style>
    <link rel="stylesheet" href="css/doc.css">
</head>

<body>
    <header class="header" id="header">
        <h2>
            <div class="user-wrapper">
                <div class="img">
                    <img class="user_img" src="images/Doc.png" width="30px" height="30px" alt="admin photo">
                </div>
                <h3 class="user" for="nav-toggle" style="font-family:Quicksand;">
                    Welcome, Doctor<p>;{{Auth::user()->username}}</p>
                </h3>
            </div>
        </h2>
    </header>



    <form method="post" action="{{route('Doctor.CreateReport')}}"id="form" >
        @csrf
        <div class="page">
            <div class="container">
                    <div class="control">
                        <div class="inputrow">
                            <div class="btn">
                                <button type="submit"><a href="{{route('DoctorShow')}}" class="submitbtn" onclick="closePopup()">show patient</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="container">
                <div class="control">
                    <hr>
                    <div style="text-align:center">
                        <span>
                            <strong>
                                <span style="font-size:large">
                                    <h2>
                                        Prescription Form
                                    </h2>
                                 </span>
                            </strong>
                        </span>
                    </div>
                    <hr>
                </div>
            </div>


            <div class="container">
                <div class="control">
                    <label data-role="label" id="minfo">Medication Details</label>
                    <div class="inputrow" >
                        <div class="dropdown">
                        <label for="MedicineName">Medicine Name</label>
                            <!-- <input type="text" name="MedicineName" list="medicineName" placeholder="Enter medicine name/code" id="MedName" autocomplete="on" required> -->
                            <select id="medicine_id"name="medicine_id">
                                @foreach($Medicines as $Medicine)
                                    <option value="{{$Medicine->id}}">
                                        {{$Medicine->medicine_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="inputrow">
                        <div class="dropdown">
                            <label for="reportid">ReportID</label>
                            <select name="report_id" id="reportid" title="choose report id">
                              @if(isset($appointmentid))
                                    <option value="{{$appointmentid}}" selected>{{$appointmentid}}</option>
                                @endif
                                @error('report_id')
                                <small class="form-text text danger">{{$message}}</small>
                                @enderror
                            </select>
                        </div>
                    </div>
                    <div class="inputrow">
                        <div class="intake">
                            <label for="intake_interval">Intake Interval</label>
                            <input type="text" name="intake_interval" placeholder="intake_interval" id="inTake" required> <b>Times per day</b>
                            @error('intake_interval')
                            <small class="form-text text danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="inputrow1">
                        <div class="dropdown2">
                            <label for="Dosage">Dosage</label>
                            <input type="text" name="dosage" placeholder="dosage" id="dosage" required>
                            <select name="medicine_type" id="Dosage">
                                <option value="none" selected>-- Capsule(s) --</option>
                                <option value="Aspirins">Aspirins</option>
                                <option value="Powder">Powder</option>
                                <option value="Caplet">Caplet</option>
                                <option value="Effervescent tablet">Effervescent tablet</option>
                                <option value="Lozenges">Lozenges</option>
                                <option value="Tablets">Tablets</option>
                                <option value="Syrup">Syrup</option>
                                <option value="Oral rinse">Oral rinse</option>
                                <option value="Eye drops">Eye drops</option>
                                <option value="Ampoule">Ampoule</option>
                                <option value="Ointment">Ointment</option>
                                @error('dosage')
                                <small class="form-text text danger">{{$message}}</small>
                                @enderror
                            </select>
                        </div>
                    </div>
                    <div class="inputrow">
                        <div class="Date">
                            <label for="Start">Start Intake Date</label>
                            <input type="date" name="Start_Take" placeholder="dd/mm/yyyy" id="start">
                            @error('Start_Take')
                            <small class="form-text text danger">{{$message}}</small>
                            @enderror
                            <label for="End">End Intake Date</label>
                            <input type="date" name="End_Take" placeholder="dd/mm/yyyy" id="end">
                            @error('End_Take')
                            <small class="form-text text danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="btn">
                            <button type="Submit" class="submitbtn" id="Submitbutton" onclick="medicine()">Submit</button>
                        </div>

                    </div>
                </div>
            </div>


            <div class="container">
                <div class="control">
                    <label data-role="label" id="tinfo"><h3>Medical Test (Optional)</h3></label>
                    <div class="inputrow">
                        <div class="mtest">
                            <label for="MedicineName">Medical Test Name</label><br>
                            <div class="dropdown">
                                <label for="testName">Test Name</label>
                                <select name="names" id="testName">
                                    <option value="" selected>-- Test Name --</option>
                                    <option value="E.S.R">E.S.R</option>
                                    <option value="Complete Urine Analysis">Complete Urine Analysis</option>
                                    <option value="Complete Stool Analysis">Complete Stool Analysis</option>
                                    <option value="A.S.O.T">A.S.O.T</option>
                                    <option value="Blood Urea">Blood Urea</option>
                                    <option value="TIBC">TIBC</option>
                                </select>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="control">
                    <label data-role="label" id="rinfo"><h3>Medical Radiology (Optional)</h3></label>
                    <div class="inputrow">
                        <div class="mrad">
                            <label for="MedicineName">Medicial Radiology Name</label><br>
                            <div class="dropdown">
                                <label for="radioName">Radiology Name</label>
                                <select name="name" id="radioName">
                                    <option value=""selected >-- Radiology Name --</option>
                                    <option value="Plain Film">Plain Film</option>
                                    <option value="Mammography">Mammography</option>
                                    <option value="X-ray">X-ray</option>
                                    <option value="Plain Abdomen">Plain Abdomen</option>
                                    <option value="Pharynx">Pharynx</option>
                                    <option value="Infusion urography">Infusion urography</option>
                                </select>
                            </div>
                            <div class="btn">
                                <button type="Submit" class="submitbtn">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <form  action="" id="pres">
        <div class="container">
            <div class="control">
                <div class="control">
                    <hr>
                    <div style="text-align:center">
                        <span>
                            <strong>
                                <span style="font-size:large">
                                    <h2>
                                        Prescription Form
                                    </h2>
                                </span>
                            </strong>
                        </span>
                    </div>
                    <hr>
                </div>
                <div class="inputrow">
                    <div class="fpresc">
                        <table>
                            <thead>
                                <tr>
                                    <td>Report Id</td>
                                    <td>Medicine Name</td>
                                    <td>Intake Intervals</td>
                                    <td>Dosage (type)</td>
                                    <td>Remove</td>
                                </tr>
                            </thead>
                            <tbody>


                                @if(isset($Reports)&&isset($ReportChecks->report_id)&&isset($Reports)
&&isset($names)&&isset($ReportChecks->dosage))
              @foreach($names as $name)
                            <tr>
                                    <td>{{$ReportChecks->report_id}}</td>
                                   <td>{{$name->medicine_name}}</td>
                                     <td>{{$ReportChecks->intake_interval}}</td>
                                  <td>{{$ReportChecks->dosage}}</td>

                                    <td>
                                        <a href="{{route("Doctor.RemoveReport",$ReportChecks->report_id)}}"id="remove_btn1">Remove</a>
                                    </td>
                            </tr>
              @endforeach
                            @endif

                            </tbody>
                        </table>
                        <!-- <textarea name="prescription" id="presc" placeholder="The prescription" rows="15" data-size="full"></textarea> -->
                    </div>
                </div>
                <hr>
                <div class="inputrow">
                    <div class="fpresc">
                        <table>
                            <thead>
                            <tr>
                                    <td>Medicine Test or Medical Radiology</td>
                                    <td>Remove</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @if(isset($MedcineChecks)&&isset($MedcineChecksname))
                                    <td>{{$MedcineChecks->names}}
                                       {{$MedcineChecks->name}}</td>
                                    <td>
                                        <a href="{{route("Doctor.RemoveReport",$ReportChecks->report_id)}}"id="remove_btn1">Remove</a>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- <textarea name="prescription" id="presc" placeholder="The prescription" rows="15" data-size="full"></textarea> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="control">

                <button class="submit" type="submit"formaction="{{route("Doctor.updateAppointment",$MedcineChecks->id)}}">

                    <span class="normal-state">SUBMITE FORM</span>
                </button>

                    <button class="logout" type="submit"><a href="{{route('logout')}}">Log out</a></button>


            </div>
        </div>
        @endif

    </form>

</body>
</html>
