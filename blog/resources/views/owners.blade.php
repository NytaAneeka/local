{{--<!doctype html>--}}
{{--<html lang="{{ app()->getLocale() }}">--}}
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

    {{--<title>Laravel Owners</title>--}}

    {{--<!-- Fonts -->--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}

    {{--<!-- Styles -->--}}
    {{--<style>--}}
        {{--html, body {--}}
            {{--background-color: #fff;--}}
            {{--color: #636b6f;--}}
            {{--font-family: 'Raleway', sans-serif;--}}
            {{--font-weight: 100;--}}
            {{--height: 100vh;--}}
            {{--margin: 0;--}}
        {{--}--}}

        {{--.full-height {--}}
            {{--height: 100vh;--}}
        {{--}--}}

        {{--.flex-center {--}}
            {{--align-items: center;--}}
            {{--display: flex;--}}
            {{--justify-content: center;--}}
        {{--}--}}

        {{--.position-ref {--}}
            {{--position: relative;--}}
        {{--}--}}

        {{--.top-right {--}}
            {{--position: absolute;--}}
            {{--right: 10px;--}}
            {{--top: 18px;--}}
        {{--}--}}

        {{--.content {--}}
            {{--text-align: center;--}}
        {{--}--}}

        {{--.title {--}}
            {{--font-size: 84px;--}}
        {{--}--}}

        {{--.links > a {--}}
            {{--color: #636b6f;--}}
            {{--padding: 0 25px;--}}
            {{--font-size: 12px;--}}
            {{--font-weight: 600;--}}
            {{--letter-spacing: .1rem;--}}
            {{--text-decoration: none;--}}
            {{--text-transform: uppercase;--}}
        {{--}--}}

        {{--.m-b-md {--}}
            {{--margin-bottom: 30px;--}}
        {{--}--}}
        {{--th, td {--}}
            {{--padding: 15px;--}}
        {{--}--}}
        {{--table, th, td {--}}
            {{--border: 1px solid black;--}}
            {{--border-collapse: collapse;--}}
        {{--}--}}
        {{--.button{--}}
            {{--padding: 10px;--}}
            {{--background: #0c5460;--}}
            {{--color: #fff;--}}
            {{--margin-top: 15px;--}}
            {{--display: block;--}}
        {{--}--}}
    {{--</style>--}}
{{--</head>--}}
{{--<body>--}}
@extends('layouts.app')
@section('content')

<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            @lang('vertimas.Savininkai')
        </div>

        <table style="width: 100%" >
            <tr><th>ID</th><th>@lang('vertimas.Vardas')</th><th>@lang('vertimas.Pavarde')</th><th>@lang('vertimas.Automobiliu skaicius')</th><th>@lang('vertimas.Redaguoti')</th></tr>
            @foreach ($data as $owner)
                <tr>
                    <td>{{$owner['id']}}</td>
                    <td>{{$owner['name']}}</td>
                    <td>{{$owner['surname']}}</td>
                    <td>{{$owner['car_count']}}</td>
                    <td><a href="http://localhost/blog/public/update-owners/{{$owner['id']}}">@lang('vertimas.Redaguoti')</a> / <a href="http://localhost/blog/public/delete_owner/{{$owner['id']}}">@lang('vertimas.Šalinti')</a></td>
                </tr>
            @endforeach
        </table>

        <a href="http://localhost/blog/public/cars" class="button">@lang('vertimas.Automobiliai')</a>
        <a href="http://localhost/blog/public/addowner" class="button">@lang('vertimas.Prideti savininka')</a>

    </div>
</div>
@endsection
{{--</body>--}}
{{--</html>--}}