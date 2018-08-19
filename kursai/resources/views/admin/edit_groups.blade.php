@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="headingContainer">
            <span class="border-line"></span>
            <h2>Edit group</h2>
            <span class="border-line"></span>
        </div>
        @if ($group)
            <form method="post" action="{{route('updateGroup',$group->id)}}">
                @csrf
                <div class="form-group">
                    <label for="name">Group name:</label>
                    <input type="text" class="form-control" id="name" aria-describedby="name" name="name"
                           value="{{$group->name}}">
                </div>

                <div class="form-group">
                    <label for="courseName">Course name:</label>
                    <select class="form-control" id="courseName" name="courseName">
                        @foreach($courses as $course)
                            @if($course->id == $group->course_id)
                                <option value="{{$course->id}}" selected>
                                    {{$course->name}}
                                </option>
                            @else
                                <option value="{{$course->id}}">
                                    {{$course->name}}
                                </option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="lecturerName">Lecturer name:</label>
                    <select class="form-control" id="lecturerName" name="lecturerName">
                        @foreach($lecturers as $lecturer)
                            @if($lecturer->id == $group->user_id)
                                <option value="{{$lecturer->id}}" selected>
                                    {{$lecturer->name}}
                                </option>
                            @else
                                <option value="{{$lecturer->id}}">
                                    {{$lecturer->name}}
                                </option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="startDate">Start date:</label>
                    <input class="form-control" type="date" value="{{date("Y-m-d", strtotime($group->start))}}" id="startDate" name="startDate">
                </div>

                <div class="form-group">
                    <label for="endDate">End date:</label>
                    <input class="form-control" type="date" value="{{date("Y-m-d", strtotime($group->end))}}" id="endDate" name="endDate">
                </div>

                <button type="submit" class="btn btn-primary customBttn" data-toggle="tooltip" data-placement="top" title="Submit"><i class="fas fa-check fa-2x"></i></button>
            </form>
        @endif
    </div>

@endsection
