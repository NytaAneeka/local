@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="headingContainer">
        <h2>Lecture details</h2>
        </div>
        <p>Course name: {{$lecture->group->course->name}}</p>
        <p>Group name: {{$lecture->group->name}}</p>
        <p>Lecturer name: {{$name}}</p>
        <p>Lecture name: {{$lecture->name}}</p>
        <p>Included files:</p>
        <br>
        @foreach($lecture->files as $file)
        <p class="border">{{$file->name}}</p>

        @endforeach

        <a href="{{url()->previous()}}" type="button" class="btn btn-info">Back</a>
    </div>

@endsection
