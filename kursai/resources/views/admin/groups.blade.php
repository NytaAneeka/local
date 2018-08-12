@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{route('newGroup')}}" type="button" class="btn btn-primary">Add group</a>

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

                        <th scope="row">{{$group->id}}</th>
                        <td><a href="">{{$group->name}}</a></td>
                        <th scope="row">{{$group->course->name}}</th>
                        <th scope="row">{{$group->user->name}}</th>
                        <th scope="row">{{$group->start}}</th>
                        <th scope="row">{{$group->end}}</th>

                        <td>
                            <a href="{{route('getGroup',$group->id)}}" type="button" class="btn btn-success">Edit</a>
                            <a href="{{route('deleteGroup',$group->id)}}" type="button" class="btn btn-danger">Delete</a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{$groups->render()}}
    </div>
@endsection
