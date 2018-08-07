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

    </style>
</head>
<body>
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            @lang('vertimas.Redaguoti')
        </div>


        @if(isset($car))
            {{--DK update: changed form action to simplier. Instead of {{route('saveForm',$car->id)}} --}}
            <form class="updateForm" action="{{route('saveForm',$car->id)}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="car_id">@lang('vertimas.Automobilio ID')</label>
                    <input type="text" class="form-control" id="car_id" name="car_id" value="{{$car->id}}" disabled>
                </div>

                <div class="form-group">
                    <label for="regNumber">@lang('vertimas.Registracijos numeris')</label>
                    <input type="text" class="form-control" id="regNumber" name="regNumber"  value="{{$car->reg_number}}">
                </div>

                <div class="form-group">
                    <label for="brand">@lang('vertimas.Marke')</label>
                    <input type="text" class="form-control" id="brand" name="brand" value="{{$car->brand}}">
                </div>

                <div class="form-group">
                    <label for="model">@lang('vertimas.Modelis')</label>
                    <input type="text" class="form-control" id="model" name="model" value="{{$car->model}}">
                </div>

                <div class="form-group">
                    <label for="owner_id">@lang('vertimas.Savininko ID')</label>
                    <input type="text" class="form-control" id="owner_id" name="owner_id" value="{{$car->owner_id}}">
                </div>

                <button type="submit" class="btn btn-primary">@lang('vertimas.Pateikti')</button>

            </form>
        @endif
        <a href="http://localhost/blog/public/cars" class="button">@lang('vertimas.Automobiliai')</a>
        <a href="http://localhost/blog/public/owners" class="button">@lang('vertimas.Savininkai')</a>
    </div>
</div>
</body>
</html>