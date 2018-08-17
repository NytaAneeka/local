@extends('layouts.app')

@section('content')
<div class="container">
    <div class="headingContainer">
    <h1>Courses</h1>
    </div>
    <a href="{{route('newCourse')}}" class="btn btn-primary customBttn" data-toggle="tooltip" data-placement="top" title="Add new course"><i class="fa fa-plus fa-2x"></i></a>

    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Course Name</th>
                <th scope="col">Edit</th>
            </tr>
            </thead>
            <tbody>
            @foreach($courses as $course)
            <tr>
                <td scope="row">{{$course->id}}</td>
                <td scope="row">{{$course->name}}</td>
                <td>
                    <a href="{{route('getCourse',$course->id)}}" class="btn btn-success">Edit</a>
                    <a href="{{route('deleteCourse',$course->id)}}" class="btn btn-danger">Delete</a>

                </td>
            </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{$courses->render()}}
</div>
@endsection
