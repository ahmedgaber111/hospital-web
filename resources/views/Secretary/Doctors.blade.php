<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" contact="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Doctors</title>
        <link rel="icon" type="image/png" sizes="32x32" href="images/3448513.png">
        <link rel="stylesheet" href="css/Doctors.css">
    </head>
    <body>
        <header class="header" id="header">
            <h2>
                <div class="user-wrapper">
                    <div class="img">
                        <img class="user_img" src="images/medical-team.png" width="30px" height="30px" alt="admin photo">
                    </div>
                    <h4 class="user" for="nav-toggle">
                        Welcome, Secretary
                       </br>{{Auth::user()->username}}
                    </h4>
                </div>
            </h2>
        </header>
        <main>
            <div class="project">
                <div class="board">
                    <div class="board-body">
                        <table class="board_body">
                            <thead>
                                <tr class="head">
                                    <td>Doctor Name</td>
                                    <td>Shift(s)</td>
                                    <td>Operations</td>
                                </tr>
                            </thead>
                            <tbody>
                             @foreach($doctors as $doctor)
                                 <tr>
                               <td>{{$doctor->username}}</td>

                                    <td>
                                        <div>
                                            <table>
                                                <tr><td></td>
                                                </tr>

                                            </table>
                                        </div>

                                    </td>
                                    <td>
                                        <form action="Edit.existing.time',$doctor->user_id" method="get" id="form1">

                                        <button type="submit" formaction="{{route('Edit.existing.time',$doctor->user_id)}}">Edit Existing Time</button>


                                            <button type="submit"  formaction="{{route("Add_new_time",$doctor->user_id)}}">Add NewTime</button>
                                            <button type="submit"  formaction="{{route("Reservation_Page",$doctor->user_id)}}">New Reservation</button>

                                        </form>
                                    </td>
                                </tr>
                             @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="container">
                <form action="" method="get" id="form1">
                <button class="logout" type="submit" formaction="{{route('Secretary.Page')}}">Back</button>
                </form>
            </div>
        </footer>
    </body>
</html>
