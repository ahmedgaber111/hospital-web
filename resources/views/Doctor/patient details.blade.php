<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" contact="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Patient Details</title>
        <link rel="icon" type="image/png" sizes="32x32" href="images/3448513.png">
        <link rel="stylesheet" href="css/patient%20details.css">
    </head>
    <body>
    @foreach($patients as $patient)

    <form action="" id="form">

            <div class="page">
                <div class="title">
                    <h2 class="T">
                        Patient Details
                    </h2>
                </div>
                <div class="container">
                    <div class="control">
                        <label data-role="label" id="name">Patient Name</label>
                        <div class="inputrow">
                            <input type="text" placeholder="First Name"
                                   @if(isset($patient))
                            value="{{$patient->username}}"@endif class="first" id="first">
                        </div>


                    </div>
                </div>
                <div class="container">
                    <div class="control">

                        <label data-role="label" id="phne">Phone Number , Age</label>
                        <div class="inputrow">
                            <input type="text" placeholder="phone number"   @if(isset($patient))
                            value="{{$patient->phone}}" @endif class="pnumber">
                            <input type="text" placeholder="age" name="age"   @if(isset($patient))
                            value="{{$patient->age}}" @endif class="Age">
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="control">
                        <label data-role="label" id="phone">Contact Email</label>
                        <div class="inputrow">
                            <input type="email" placeholder="ex: Adam@example.com"   @if(isset($patient))
                            value="{{$patient->Email}}" @endif class="email">
                        </div>
                    </div>
                </div>








                <div class="container">
                    <div class="control">
                        <label for="alrgy" data-role="label" id="allergy">Allergy</label>
                        <div class="inputrow">
                            <textarea name="alrgy"  id="alrgy" data-size="full" rows="4" @if(isset($patient))
                            value="{{$patient->Allergy}}" @endif>{{$patient->Allergy}} </textarea>
                            </div>
                    </div>
                </div>
                <div class="container">
                    <div class="control">
                        <label for="chronic" data-role="label" id="chrnic">Chronic Disease(s)</label>
                        <div class="inputrow">

                            <textarea name="chronic" id="chronic" data-size="full" rows="4" @if(isset($patient))
                            value="yes" @endif>yes</textarea>
                        </div>
                    </div>
                </div>
                <div class="btn">
                    <button type="Submit"><a href="{{route('Doctor.close')}}" class="submitbtn" onclick="closePopup()">Close</a></button>
                </div>
            </div>
        </form>
        <div class="tests">
            <div class="analytic">
                <table class="analytics">
                    <thead class="head">
                        <span>
                            <h2 class="T">
                                Medical Tests & Medical Radiologies
                            </h2>
                        </span>
                    </thead>
                    <tbody>
                        <tr class="fr">
                            <td class="frs">
                                <div class="frst">
                                    <img src="images/7alil1.jpg" alt="Complete Urine Examination Results">
                                </div>
                            </td>
                        </tr>
                        <tr class="sc">
                            <td class="scn">
                                <div class="scnd">

                                    <div>{{(App\Appointment::find($patient->id)->id)}}</div>
                                    <div>{{App\Analysis_result::find((App\Appointment::find($patient->id)->id))->img}}</div>
                                    
                                     <img src="{{App\Analysis_result::find((App\Appointment::find($patient->id)->id))->img}}" alt="Organs Report">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
  
  
  @endforeach  </body>
</html>
