@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{route('newLecture')}}" type="button" class="btn btn-primary">Add lecture</a>

        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Group name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Lecture name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Edit</th>
                </tr>
                </thead>

                <tbody>
                @foreach($lectures as $lecture)
                    <tr>

                        <th scope="row">{{$lecture->id}}</th>
                        <td><a href="">{{$lecture->group->name}}</a></td>
                        <th scope="row">{{$lecture->date}}</th>
                        <th scope="row">{{$lecture->name}}</th>
                        <th scope="row">{{$lecture->description}}</th>

                        <td>
                            <a href="{{route('getLecture',$lecture->id)}}" type="button" class="btn btn-success">Edit</a>
                            <a href="{{route('deleteLecture',$lecture->id)}}" type="button" class="btn btn-danger">Delete</a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{$lectures->render()}}
    </div>
@endsection
