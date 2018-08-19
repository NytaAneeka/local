@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="headingContainer">
            <span class="border-line"></span>
            <h2>Add new course</h2>
            <span class="border-line"></span>
        </div>
        <form method="post" action="{{route('addCourse')}}">
            @csrf
            <div class="form-group">
                <label for="name">Course name:</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" name="name">
            </div>
            <button type="submit" class="btn btn-primary customBttn" data-toggle="tooltip" data-placement="top" title="Submit"><i class="fas fa-check fa-2x"></i></button>
        </form>
    </div>

@endsection
