@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="headingContainer">
            <span class="border-line"></span>
            <h2>Edit lecture</h2>
            <span class="border-line"></span>
        </div>
        @if($lecture)
            <form method="post" action="{{route('updateLecture',$lecture->id)}}">
                @csrf
                <div class="form-group">
                    <label for="name">Lecture name:</label>
                    <input type="text" class="form-control" id="name" aria-describedby="name" name="name" value="{{$lecture->name}}">
                </div>

                <div class="form-group">
                    <label for="description">Lecture description:</label>
                    <textarea class="form-control" id="description" name="description" rows="4">{{$lecture->description}}</textarea>
                </div>

                <div class="form-group">
                    <label for="group_id">Group name:</label>
                    <select class="form-control" id="group_id" name="group_id">
                        @foreach($group as $grupe)
                            @if($grupe->id == $lecture->group_id)
                                <option value="{{$grupe->id}}" selected>
                                    {{$grupe->name}}
                                </option>
                            @else
                                <option value="{{$grupe->id}}">
                                    {{$grupe->name}}
                                </option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="date">Lecture date:</label>
                    <input class="form-control" type="date" id="date" name="date" value="{{date("Y-m-d", strtotime($lecture->date))}}">
                </div>

                <button type="submit" class="btn btn-primary customBttn" data-toggle="tooltip" data-placement="top" title="Submit"><i class="fas fa-check fa-2x"></i></button>
            </form>
        @endif
    </div>

@endsection
