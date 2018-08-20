@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="headingContainer">
            <span class="border-line"></span>
            <h2>Lecture details</h2>
            <span class="border-line"></span>
        </div>
        <p>Course name: {{$lecture->group->course->name}}</p>
        <p>Group name: {{$lecture->group->name}}</p>
        <p>Lecturer name: {{$name}}</p>
        <p>Lecture name: {{$lecture->name}}</p>
        <p>Included files:</p>
        <br>
        @foreach($lecture->files as $file)
            <a class="border" href="{{url('/') . \Storage::url("$file->file_url")}}" download>{{$file->name}}</a>
        @endforeach
<br>
        <a href="{{url()->previous()}}" type="button" class="btn btn-info">Back</a>
    </div>

@endsection
