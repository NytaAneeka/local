@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="headingContainer">
            <span class="border-line"></span>
            <h1>Groups</h1>
            <span class="border-line"></span>
        </div>
        <a href="{{route('newGroup')}}" class="btn btn-primary customBttn" data-toggle="tooltip" data-placement="top" title="Add new group"><i class="fa fa-plus fa-2x"></i></a>

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
                    <th scope="col">Edit</th>
                </tr>
                </thead>

                <tbody>
                @foreach($groups as $group)
                    <tr>

                        <td scope="row">{{$group->id}}</td>
                        <td scope="row">{{$group->name}}</td>
                        <td scope="row">{{$group->course->name}}</td>
                        <td scope="row">{{$group->user->name}} {{$group->user->lastname}}</td>
                        <td scope="row">{{date("Y-m-d", strtotime($group->start))}}</td>
                        <td scope="row">{{date("Y-m-d", strtotime($group->end))}}</td>

                        <td>
                            <a href="{{route('getGroup',$group->id)}}" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                            <a href="{{route('getGroupEmail',$group->id)}}" class="btn btn-primary " data-toggle="tooltip" data-placement="top" title="Send message"><i class="far fa-envelope"></i></a>
                            <a href="{{route('deleteGroup',$group->id)}}" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-minus"></i></a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{$groups->render()}}
    </div>
@endsection
