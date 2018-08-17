@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="headingContainer">
        <h2>Add new group</h2>
        </div>
        <form method="post" action="{{route('addGroup')}}">
            @csrf
            <div class="form-group">
                <label for="name">Group name:</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" name="name">
            </div>

            <div class="form-group">
                <label for="courseName">Course name:</label>
                <select class="form-control" id="courseName" name="courseName">
                    @foreach($courses as $course)
                        <option value="{{$course->id}}">
                            {{$course->name}}
                        </option>
                        @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="lecturerName">Lecturer name:</label>
                <select class="form-control" id="lecturerName" name="lecturerName">
                    @foreach($lecturers as $lecturer)
                        <option value="{{$lecturer->id}}">
                            {{$lecturer->name}}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="startDate">Start date:</label>
                    <input class="form-control" type="date" value="" id="startDate" name="startDate">
            </div>

            <div class="form-group">
                <label for="endDate">End date:</label>
                <input class="form-control" type="date" value="" id="endDate" name="endDate">
            </div>

            <button type="submit" class="btn btn-primary customBttn" data-toggle="tooltip" data-placement="top" title="Submit"><i class="fas fa-check fa-2x"></i></button>
        </form>
    </div>

@endsection
