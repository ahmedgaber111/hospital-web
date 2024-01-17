<!DOCTYPE html>
<html>
<head>
    <title> Hospital_Pharmacy</title>
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
    <link rel="stylesheet" href="css/pharmacy.css" />
    <link rel="icon" type="image/png" sizes="32x32" href="images/3448513.png" />
</head>
<body>
<header>
    <h2>
        <div class="user-wrapper">
            <div class="img">
                <img
                    class="user_img"
                    src="images/883356%20(1).png"
                    width="30px"
                    height="30px"
                    alt="admin photo"
                />
            </div>
            <h4 class="user">Welcome,{{Auth::user()->username}}<br>
                </h4>
        </div>
    </h2>
</header>
<main>
    <div class="nnn">
        <div class="search-wrapper">
            <span class="las la-search"></span>
            <input type="search" autocomplete="" placeholder="Search here" />
        </div></div>

    <div class="cards">
        <div class="card-single" >
            <button type="button"onclick=""></button><a href="{{route('AddMedicinesPage')}}" class="las la-plus" id="btn333">
                ADD MEDICEN
            </a>
            </button>
        </div></div>
    <div class="card-body">
        <table width="75%">
            <thead><tr><td class="ggg">Medication List</td></tr></thead>
            <thead>
            <tr>
                <td>Name</td>
                <td>ID</td>
                <td>Quantity</td>
                <td>Price</td>
                <td>Type</td>
                <td>status</td>
                <td>Action</td>
            </tr>
            </thead>
            <tbody>
@foreach($Medicines as $Medicine)
            <tr>
                <td><img src="images/pb.jpg" style="width: 50px;height: 50px; border-radius: 30px;">&nbsp;&nbsp; {{$Medicine->medicine_name}}</td>
                <td>{{$Medicine->id}}</td>
                <td>{{$Medicine->quantity}}</td>
                <td>{{$Medicine->price}}</td>
                <td> {{$Medicine->type}}</td>
                <td>{{$Medicine->desc}}</td>
                <td class="bv"><button onclick="add()"></button><a href="{{route("AddMedicineQuantity",$Medicine->id)}}" class="las la-edit" style=" background-color: rgb(135, 228, 152);
              color:rgb(6, 128, 65);
              font-size: 1.1rem;
               cursor: pointer;  border-color:rgb(6, 128, 65);">Add</a></button>

                    <button ><a href="{{route("CancelMedicine",$Medicine->id)}}"class="las la-times" style="background-color: rgb(245, 157, 157);
                color: rgb(241, 5, 5);
                font-size: 1.1rem;
                border-color:rgb(241, 5, 5);
                cursor: pointer;">Cancel</a></button></td>



            </tr>
@endforeach
            </tbody></table></div> </main>
<!----<footer class="xxx">
       <button class="logout" type="submit">Log out</button>

</footer>-->
<footer>
    <div class="container">
            <button class="logout" type="submit"><a href="{{route('logout')}}">Log out</a></button>
    </div>
</footer>
<script src="js/pharmacy.js"></script>
</body>
</html>
