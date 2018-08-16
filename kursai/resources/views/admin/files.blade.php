@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="post" action="{{route('addFiles')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="files">Add new file</label>
                <input type="file" class="form-control-file " id="files" name="failai[]" multiple>
                <input type="submit" class="button btn-primary" value="Submit">
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
                            {{--<a href="">{{$file->lecture->name}}</a>--}}
                        </td>
                        <td scope="row">
                            @if($file->show==1)
                                True
                            @else
                                False
                            @endif
                        </td>

                        <td>
                            <a href="{{route('toggleShow',$file->id)}}" type="button" class="btn btn-info">
                                @if($file->show == 1)
                                    Hide
                                @else
                                    Show
                                @endif
                            </a>
                            <a href="{{route('getFile',$file->id)}}" type="button" class="btn btn-success">Edit</a>
                            <a href="{{route('deleteFile',$file->id)}}" type="button" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
        {{$files->render()}}
    </div>
@endsection
