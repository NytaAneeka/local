@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="headingContainer">
        <h2>Edit course</h2>
        </div>
        @if($course)
            <form method="post" action="{{route('updateCourse',$course->id)}}">
                @csrf
                <div class="form-group">
                    <label for="name">Course name:</label>
                    <input type="text" class="form-control" id="name" aria-describedby="name" name="name"
                           value="{{$course->name}}">
                </div>
                <button type="submit" class="btn btn-primary customBttn" data-toggle="tooltip" data-placement="top" title="Submit"><i class="fas fa-check fa-2x"></i></button>
            </form>
        @endif
    </div>

@endsection
