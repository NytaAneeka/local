@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="headingContainer">
            <span class="border-line"></span>
            <h1>Students</h1>
            <span class="border-line"></span>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <a href="{{route('addStudent')}}" class="btn btn-primary customBttn" data-toggle="tooltip" data-placement="top" title="Add new student"><i class="fa fa-plus fa-2x"></i></a>

            </div>
            <div class="col-sm-6">
                <a href="{{route('unconfirmed')}}" class="btn btn-primary customBttn" data-toggle="tooltip" data-placement="top" title="Unconfirmed students"><i class="fas fa-question fa-2x"></i></a>

            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Student name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">Group</th>
                    <th scope="col">Edit</th>
                </tr>
                </thead>

                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td scope="row">{{$user->id}}</td>
                        <td scope="row">{{$user->name}} {{$user->lastname}}</td>
                        <td scope="row">{{$user->email}}</td>
                        <td scope="row">{{$user->phone}}</td>
                        <td scope="row">
                            @foreach($user->groups as $group)
                                <a href="">{{$group->name}}</a>
                                <br>
                            @endforeach
                        </td>

                        <td>
                            <a href="{{route('getStudent', $user->id)}}" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                            <a href="{{route('getEmail',$user->id)}}" class="btn btn-primary " data-toggle="tooltip" data-placement="top" title="Send message"><i class="far fa-envelope"></i></a>
                            <a href="{{route('deleteStudent',$user->id)}}" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-minus"></i></a>


                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{$users->render()}}
    </div>
@endsection
