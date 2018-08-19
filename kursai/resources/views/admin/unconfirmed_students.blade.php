@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="headingContainer">
            <span class="border-line"></span>
            <h1>Students</h1>
            <span class="border-line"></span>
        </div>

        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Student name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone number</th>
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

                        <td>
                            <a href="{{route('confirm',$user->id)}}" class="btn btn-success">Approve</a>
                            <a href="{{route('deleteStudent',$user->id)}}" class="btn btn-danger">Delete</a>

                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{$users->render()}}
    </div>
@endsection
