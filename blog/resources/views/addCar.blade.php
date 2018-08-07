<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Autos</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        th, td {
            padding: 15px;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        .button{
            padding: 10px;
            background: #0c5460;
            color: #fff;
            margin-top: 15px;
            display: block;
        }
        .updateForm {
            text-align: right;
        }
        .updateForm label {
            float: left;
        }
        .updateForm input {
            text-align: left;
        }
        .center{
            text-align: center;
            margin: 0 auto;
        }

    </style>
</head>
<body>
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            Pridėti automobilį
        </div>

        <form class="updateForm" action="http://localhost/blog/public/addcar/save" method="post">
            @csrf
            <div class="form-group">
                <label for="car_reg">Registracijos numeris</label>
                <input type="text" class="form-control" id="car_reg" name="car_reg"  placeholder="Enter reg number (111AAA)" value="">
            </div>

            <div class="form-group">
                <label for="car_brand">Brandas</label>
                <input type="text" class="form-control" id="car_brand" name="car_brand" placeholder="Enter brand" value="">
            </div>

            <div class="form-group">
                <label for="car_model">Modelis</label>
                <input type="text" class="form-control" id="car_model" name="car_model" placeholder="Enter model" value="">
            </div>

            <div class="form-group">
                <label for="owner_car">Savininkas</label>
                <select name="owner_id">
                    @if(isset($owners) && !empty($owners))
                        @foreach ($owners as $owner)
                            <option value="{{$owner['id']}}">{{$owner['name']}} {{$owner['surname']}}</option>
                        @endforeach
                    @else
                        <option value="">Nėra savininkų</option>
                    @endif
                </select>
            </div>

            <button type="submit" class="button center">Saugoti</button>

        </form>

        <a href="http://localhost/blog/public/cars" class="button">Automobiliai</a>
        <a href="http://localhost/blog/public/owners" class="button">Savininkai</a>
    </div>
</div>
</body>
</html>