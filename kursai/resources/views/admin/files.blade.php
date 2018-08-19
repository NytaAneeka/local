@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="headingContainer">
            <span class="border-line"></span>
            <h1>Files</h1>
            <span class="border-line"></span>
        </div>
        <form method="post" action="{{route('addFiles')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">

                <div class="row">
                    <div class="upload-btn-wrapper col-sm-6">
                        <button class="btn btn-primary customBttn" type="button"><i class="fa fa-plus fa-2x"></i></button>
                        <input type="file" name="failai[]" multiple data-toggle="tooltip" data-placement="top" title="Add new file">
                    </div>
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-primary customBttn" data-toggle="tooltip" data-placement="top" title="Submit"><i class="fas fa-check fa-2x"></i></button>
                    </div>
                </div>
            </div>
        </form>

        {{--<div class="row">--}}
        {{--<div class="col-sm-6">--}}
        {{--<a href="" class="btn btn-primary customBttn" data-toggle="tooltip" data-placement="top" title="Add new file">Add new file</a>--}}
        {{--</div>--}}

        {{--<div class="col-sm-6">--}}
        {{--<a href="" class="btn btn-primary customBttn" data-toggle="tooltip" data-placement="top" title="Submit">Submit file</a>--}}
        {{--</div>--}}
        {{--</div>--}}

        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th scope="col">File name</th>
                    <th scope="col">Lecture name</th>
                    <th scope="col">Show</th>
                    <th scope="col">Edit</th>
                </tr>
                </thead>

                <tbody>
                @foreach($files as $file)
                    <tr>

                        <td scope="row">{{$file->name}}</td>
                        <td>
                            @foreach($file->lectures as $lecture)
                                <a href="{{route('lectureDetails',$lecture->id)}}">{{$lecture->name}}</a>
                                <br>
                                @endforeach
                        </td>
                        <td scope="row">
                            @if($file->show==1)
                                True
                            @else
                                False
                            @endif
                        </td>

                        <td>
                            <a href="{{route('toggleShow',$file->id)}}" class="btn btn-dark">
                                @if($file->show == 1)
                                    Hide
                                @else
                                    Show
                                @endif
                            </a>
                            <a href="{{route('getFile',$file->id)}}" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                            <a href="{{route('deleteFile',$file->id)}}" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-minus"></i></a>


                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
        {{$files->render()}}
    </div>
@endsection
