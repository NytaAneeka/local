@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="headingContainer">
            <span class="border-line"></span>
            <h1>Groups</h1>
            <span class="border-line"></span>
        </div>

        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Group name</th>
                    <th scope="col">Course name</th>
                    <th scope="col">Lecturer name</th>
                    <th scope="col">Start</th>
                    <th scope="col">End</th>
                </tr>
                </thead>

                <tbody>
                @foreach($user->groups as $group)
                    <tr>

                        <td scope="row">{{$group->id}}</td>
                        <td scope="row"><a href="{{route('getStudentLectures', $group->id)}}">{{$group->name}}</a> </td>
                        <td scope="row">{{$group->course->name}}</td>
                        <td scope="row">{{$group->user->name}} {{$group->user->lastname}}</td>
                        <td scope="row">{{date("Y-m-d", strtotime($group->start))}}</td>
                        <td scope="row">{{date("Y-m-d", strtotime($group->end))}}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
