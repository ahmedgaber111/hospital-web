<!doctype html>
<head>
    <title>Pharmacy</title>
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
<body style="background-color:rgb(255, 255, 255) ;">
<div class="edt">
    <form method="post" class="popup-content" action="{{route('AddMedicines')}}">
        @csrf

    <div class="zaza">
        <span style="font-weight:2rem ;">ADD Medicen</span>
        <div class="ddi">
            <table width="90%">



                </thead>
                <thead>
                <tr>
                    <td>Name</td>
                    <td>Quantity</td>
                    <td>Price</td>
                    <td>Type</td>
                    <td>desc</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input type="text" name="medicine_name">@error('medicine_name')
                        <P>{{$message}}</small>
                        </P>
                        @enderror
                    </td>

                    <td><input type="text" name="quantity">
                        @error('quantity')
                        <P>{{$message}}</small>
                        </P>
                        @enderror
                    </td>

                    <td><input type="text" name="price">@error('price')
                        <P>{{$message}}</small>
                        </P>
                        @enderror
                    </td>

                    <td><input type="text" name="type">@error('type')
                        <P>{{$message}}</small>
                        </P>
                        @enderror
                    </td>
                    <td>  <input type="text" name="desc">
                        @error('desc')
                        <P>{{$message}}</small>
                        </P>
                        @enderror
                    </td>

                </tr>

                </tbody>
            </table>
        </div>
        <div class="lol">
            <button type="submit" onclick="closepopup()">Save</button></div>
    </div>
    </form>

</div>
<script src="js/pharmacy.js"></script>

</body>
