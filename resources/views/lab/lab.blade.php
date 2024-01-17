<!DOCTYPE html>
<html>
<head>
    <title> Hospital_Laboratory</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-compatible" contact="IE=edge" />
    <meta
        name="viewport"
        content="width=device-width,initial-scale=1,maximum-scale=1"
    />
    <link
        rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"
    />
    <link rel="stylesheet" href="css/lab_hospital.css" />
    <link rel="icon" type="image/png" sizes="32x32" href="3448513.png" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
        crossorigin="anonymous"
    />
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"
    ></script>
</head>
<body style="background-color:#eceff1;">
<header class="col-12 p-3 mb-2 bg-ligh">
    <div class="col-1.5">
        <img src="icons8-laboratory-48.png" />
        <h4 style="color:#01304a ; font-weight: bold;">Welcome,Lab Tech</h4>
    </div>
</header>
<div class="nnn">
    <div class="search-wrapper">
        <span class="las la-search"></span>
        <input type="search" placeholder="Search here" />
    </div></div>
<div class="card" style="border-radius: 10rem;">
    <div class="card-single">
        <button type="button" id="btnc" onclick="openpopup()">
            ADD Analysis
        </button>
        <button type="button" id="btnc" onclick="send()">
            Send Reult
        </button>
    </div>
</div>
<div class="main-cont">
    <div class="content">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col" style="font-size:1.9rem;">Analysis</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            <tr>
                <th scope="col">Nom.</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
           @foreach($Analysiss as $Analysiss)
            <tr>
                <th scope="row">{{$Analysiss->id}}</th>
                <td>{{$Analysiss->name}}</td>
                <td>{{$Analysiss->price}}</td>
                <td>Avaliable</td>
                <td class="bv">
                    <form action="deleteAnalysis',$Analysiss->id" method="get" id="form1">
                    <button type="submit"formaction="{{route('deleteAnalysis',$Analysiss->id)}}"  class="las la-edit"
                               class="las la-times"
                               style="
                  background-color: rgb(245, 157, 157);
                  color: rgb(241, 5, 5);
                  font-size: 1.1rem;
                  border-color: rgb(241, 5, 5);
                  cursor: pointer;
                " >

                    </button>
                    <button onclick="openpopup()" class="las la-edit"
                                                     style="background-color: rgb(135, 228, 152);
                 color: rgb(6, 128, 65);
                  font-size: 1.1rem;
                  cursor: pointer;
                  border-color: rgb(6, 128, 65);"> </button>
                    </form>
                </td>
            </tr>
@endforeach
            </tbody>
        </table>
    </div>
</div>
<!---here is the popup massage for ADD OR EDIT -->
<div class="addod" id="popup">
    <span class="Close-btn" onclick="closepopup()">&times;</span>
    <div class="dod">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col" >NO.</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Status</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
            </tr>
            </tbody>
        </table>
    </div><div id="koki">
        <button type="button" class="btn btn-success" type="submit" onclick="closepopup()">Save</button></div>
</div>
<!---here is the popup massage for report-->
<div class="la_cont" id="coc">
    <form method="post"  action="{{route('Send')}}"enctype="multipart/form-data">
        @csrf
        <div class="laaa"><span class="las la-clipboard-list">Report</span>
            <span class="ohh" onclick="closecoc()">&times;</span>
        </div>
        <div class="rep">
            <div class="contr">
            <label> Appointment ID</label>
            <select class="custom-select custom-select-lg mb-3"name="Appointment_ID">
            @foreach($appointment as $appointment)
                <option selected>---Select---</option>
                <option value="{{$appointment->id}}">{{$appointment->id}}</option>
                @endforeach
              </select>
        </div>
        </div>
        <div class="fi">
            <div class="form-group">
                <label for="exampleInputEmail1">اختر صوره</label>
                <input type="file" class="form-control" name="photo" >
                @error('photo')
                <small  class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">save</button>
        </div>
    </form>
</div>
<footer>

    <button type="button" class="btn  btn-lg btn-block" id="logout"><a href="{{route('logout')}}">Log out</a></button>
</footer>
<script src="js/lab.js"></script>
<script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
    crossorigin="anonymous"
></script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
    crossorigin="anonymous"
></script>
</body>
</html>
