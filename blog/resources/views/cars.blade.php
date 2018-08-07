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
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">

    <div class="content">
        <a href="{{route('locale','lt')}}">LT</a>
        <a href="{{route('locale','en')}}">EN</a>
        <div class="title m-b-md">
            @lang('vertimas.Automobiliai')
        </div>

        <table style="width: 100%" >
            <tr><th>ID</th><th>@lang('vertimas.Registracijos numeris')</th><th>@lang('vertimas.Marke')</th><th>@lang('vertimas.Modelis')</th><th>@lang('vertimas.Savininkas')</th><th>@lang('vertimas.Redaguoti')</th></tr>
            @foreach ($data as $car)
                <tr><td>{{$car->id}}</td><td>{{$car->reg_number}}</td><td>{{$car->brand}}</td><td>{{$car->model}}</td><td>{{$car->owner_id}}</td><td><a href="http://localhost/blog/public/update/{{$car->id}}">@lang('vertimas.Redaguoti')</a> / <a href="http://localhost/blog/public/delete_car/{{$car->id}}">@lang('vertimas.Šalinti')</a></td></tr>
            @endforeach
        </table>

        <a href="http://localhost/blog/public/owners" class="button">@lang('vertimas.Savininkai')</a>
        <a href="http://localhost/blog/public/addcar" class="button">@lang('vertimas.Pridėti automobilį')</a>
    </div>
</div>
</body>
</html>