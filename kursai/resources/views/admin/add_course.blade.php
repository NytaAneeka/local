@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add new course</h2>

        <form method="post" action="{{route('addCourse')}}">
            @csrf
            <div class="form-group">
                <label for="name">Course name:</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" name="name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
