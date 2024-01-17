<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" contact="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Secretary</title>
        <link rel="icon" type="image/png" sizes="32x32" href="images3448513.png">
        <link rel="stylesheet" href="css/Secretary.css">
    </head>
    <body>
        <header class="header" id="header">
            <h2>
                <div class="user-wrapper">
                    <div class="img">
                        <img class="user_img" src="images/medical-team.png" width="30px" height="30px" alt="admin photo">
                    </div>
                    <h4 class="user" for="nav-toggle">
                        Welcome, Secretary<p>;{{Auth::user()->username}}</p>
                    </h4>
                </div>
            </h2>
        </header>
        <main>
            <div class="card">
                <form action="DoctorShift" method="get" id="form1">

                <div class="card-single">
                    <div> <span class="las la-users"></span></div>
                    <button type="submit"  formaction="Done">Done</button>
                    <button type="submit" formaction="DoctorShift">Doctors</button>
                    <button type="submit"  formaction="New_Patients">New Patients</button>
                </div>
                </form>
            </div>

            <div class="project">
                <div class="board">


                    <br class="board_header">
                            Doctors
                            @foreach($doctors as $doctor)

                            <p><h1>{{$doctor->username}}</br></h1></p>
                            @endforeach
                            <p><span id='date'></span></p>
                    </div>

                    <div class="board-body">
                        <form action="delete_ReservationPage" method="get" id="form2">

                        <table class="board_body">
                            <thead>
                                <tr class="head">
                                    <td>Number</td>
                                    <td>Patient Name</td>
                                    <td>gender</td>
                                    <td>Operations</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                @if(isset($Patients) && $Patients->count()>0)
                                    @foreach($Patients as $Patients)
                                        <tr>
                                            <td>{{$Patients->id}}</td>
                                            <td>{{$Patients->username}}</td>
                                            <td>{{$Patients->gender}}</td>
                                            <td>
                                                <button type="submit" formaction="{{route('delete_ReservationPage',$Patients->id)}}">Cancel</button>
                                                <button type="submit" formaction="{{route('Time',$Patients->id)}}">View</button>
                                                <button type="submit" formaction="{{route('update.appointment',$Patients->id)}}">Send</button>

                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </form>

                    </div>



                    <div class="board-body">
                        <table class="board_body">
                                <thead>
                                    <tr class="head">
                                        <td>Done</td>
                                        <td>show</td>

                                    </tr>
                                </thead>
                                <tbody>
                                @if(isset($patient) && $patient->count()>0)
                                    @foreach($patient as $patient)

                                        <tr>
                                        <td>{{$patient->username}}</td>
                                       <td><button type="button"><a href="{{route('show.Time',$patient->id)}}" class="view_btn">View</a></button></td>
                                    </tr>
                                    @endforeach
                                @endif

                                   </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </main>


        <footer>
            <div class="container">
                <button class="logout" type="submit"><a href="{{route('logout')}}">Log out</a></button>
            </div>
        </footer>
<!-- View page -->
    <div class="viewButton" id="viewButton">
        <form action="">
            <div class="view" id="view">
                <label>
                    <h1>View Patient's Details</h1>
                </label>
                <hr>


                <div class="container2">
                    <div class="inputrow">
                        <label for="pname">Patient Name</label>
                        <input type="text" name="pname" id="pn" placeholder="First Name and Last Name">
                        <label for="pId">ID</label>
                        <input type="text" name="pId" id="PId" placeholder="ID">
                    </div>
                </div>
                <div class="container2">
                    <label for="phonenum">Phone Number</label>
                    <input type="text" name="phonenum" id="phonen" placeholder="phone number">
                </div>
                <div class="container2">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="mail" placeholder="Adam@example.com">
                </div>
                <div class="container2">
                    <label for="age">Age</label>
                    <input type="text" name="age" id="Age" placeholder="ex: 15 years old">
                </div>
                <div class="container2">
                    <label for="gender">Gender</label>
                    <input type="text" name="gender" id="Gender" placeholder="gender">
                </div>
                <div class="container2">
                    <label for="cash">Cash</label>
                    <input type="text" name="cash" id="Cash" placeholder="--$">
                </div>
                <div class="container2">
                    <div class="control">
                        <button class="submit" type="submit" onclick="viewButton()">
                            <span class="normal-state">Close</span>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
<!-- cancel reservation -->

        <div class="cancelReservation" id="cancelReservation">
        <h2>Cancel Reservation</h2>
        <hr>
        <p>Are you sure?</p>
        <hr>
        <div class="clearfix">
            <div class="bookbutton" onclick="cancelReserv()">
                <button type="submit" class="selectbtn">Yes</button>
            </div>
            <div class="cancelbutton" onclick="cancelReserv()">
                <button type="button" class="cancelbtn">No</button>
            </div>
        </div>
    </div>
<!-- cancel button -->
        <div class="cancelButtons" id="cancelButtons">
        <h2>Cancel Editing</h2>
        <hr>
        <p>Are you sure?</p>
        <hr>
        <div class="clearfix">
            <div class="bookbutton" onclick="cancelButtons()">
                <button type="submit" class="selectbtn">Yes</button>
            </div>
            <div class="cancelbutton" onclick="cancelButtons()">
                <button type="button" class="cancelbtn">No</button>
            </div>
        </div>
    </div>
    </body>
    <script function viewButton() {
    document.getElementById("viewButton").classList.toggle("active");
}

function cancelReserv() {
    document.getElementById("cancelReservation").classList.toggle("active");
}

function cancelButtons() {
    document.getElementById("cancelButtons").classList.toggle("active");
}></script>
</html>
