@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="headingContainer">
            <span class="border-line"></span>
        <h1>Lectures</h1>
            <span class="border-line"></span>
        </div>
        <a href="{{route('newLecture')}}" class="btn btn-primary customBttn" data-toggle="tooltip" data-placement="top" title="Add new lecture"><i class="fa fa-plus fa-2x"></i></a>

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

                        <td scope="row">{{$lecture->id}}</td>
                        <td scope="row"><a href="{{route('getGroup',$lecture->group->id)}}">{{$lecture->group->name}}</a></td>
                        <td scope="row">{{date("Y-m-d", strtotime($lecture->date))}}</td>
                        <td scope="row">{{$lecture->name}}</td>
                        <td scope="row">{{$lecture->description}}</td>

                        <td>
                            <a href="{{route('getLecture',$lecture->id)}}" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                            <a href="{{route('lectureDetails',$lecture->id)}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Details"><i class="fas fa-ellipsis-h"></i></a>
                            <a href="{{route('deleteLecture',$lecture->id)}}" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-minus"></i></a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{$lectures->render()}}
    </div>
@endsection
