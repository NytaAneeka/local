@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="headingContainer">
            <span class="border-line"></span>
            <h2>Add new lecture</h2>
            <span class="border-line"></span>
        </div>
        <form method="post" action="{{route('addLecture')}}">
            @csrf
            <div class="form-group">
                <label for="name">Lecture name:</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" name="name">
            </div>

            <div class="form-group">
                <label for="description">Lecture description:</label>
                <textarea class="form-control" id="description" name="description" rows="4">
                </textarea>
            </div>

            <div class="form-group">
                <label for="group_id">Group name:</label>
                <select class="form-control" id="group_id" name="group_id">
                    @foreach($groups as $group)
                        <option value="{{$group->id}}">
                            {{$group->name}}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="date">Lecture date:</label>
                <input class="form-control" type="date" value="" id="date" name="date">
            </div>

            <button type="submit" class="btn btn-primary customBttn" data-toggle="tooltip" data-placement="top" title="Submit"><i class="fas fa-check fa-2x"></i></button>
        </form>
    </div>

@endsection
