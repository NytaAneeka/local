@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit course</h2>
        @if($course)
            <form method="post" action="{{route('updateCourse',$course->id)}}">
                @csrf
                <div class="form-group">
                    <label for="name">Course name:</label>
                    <input type="text" class="form-control" id="name" aria-describedby="name" name="name"
                           value="{{$course->name}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        @endif
    </div>

@endsection
