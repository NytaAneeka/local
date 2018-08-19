@extends('layouts.app')

@section('content')
    <div class="container">
    <form method="post" action="{{route('sendEmail')}}">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" name="email" readonly="readonly" value="{{$user->email}}">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="message"></textarea>
        </div>

        <button type="submit" class="btn btn-primary customBttn" data-toggle="tooltip" data-placement="top" title="Submit"><i class="fas fa-check fa-2x"></i></button>
    </form>
    </div>
@endsection