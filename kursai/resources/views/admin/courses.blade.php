@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{route('newCourse')}}" type="button" class="btn btn-primary">Add course</a>

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
                <th scope="row">{{$course->id}}</th>
                <td><a href="">{{$course->name}}</a></td>
                <td>
                    <a href="{{route('getCourse',$course->id)}}" type="button" class="btn btn-success">Edit</a>
                    <a href="{{route('deleteCourse',$course->id)}}" type="button" class="btn btn-danger">Delete</a>

                </td>
            </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{$courses->render()}}
</div>
@endsection
