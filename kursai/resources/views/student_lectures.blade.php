@extends('layouts.app')

@section('content')
@if($inGroup == 1)
    <div class="container">
        <div class="headingContainer">
            <span class="border-line"></span>
            <h1>Lectures</h1>
            <span class="border-line"></span>
        </div>

        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Group name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Lecture name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Lecture files</th>
                </tr>
                </thead>

                <tbody>
                @foreach($lectures as $lecture)
                    <tr>

                        <td scope="row">{{$lecture->id}}</td>
                        <td scope="row">{{$lecture->group->name}}</td>
                        <td scope="row">{{date("Y-m-d", strtotime($lecture->date))}}</td>
                        <td scope="row">{{$lecture->name}}</td>
                        <td scope="row">{{$lecture->description}}</td>
                        <td scope="row">
                            @foreach($lecture->files as $file)
                                <a href="{{url('/') . \Storage::url("$file->file_url")}}" download>{{$file->name}}</a>
                            @endforeach
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{$lectures->render()}}
    </div>
    @endif
@endsection
