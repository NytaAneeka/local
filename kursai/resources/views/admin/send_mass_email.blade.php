@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="post" action="{{route('sendGroupEmail',$group->id)}}">
            @csrf
            <h2>{{$group->name}}</h2>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="message"></textarea>
            </div>

            <button type="submit" class="btn btn-primary customBttn" data-toggle="tooltip" data-placement="top" title="Submit"><i class="fas fa-check fa-2x"></i></button>
        </form>
    </div>
@endsection