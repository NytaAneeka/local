@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit file</h2>
        @if($file)
            <form method="post" action="{{route('updateFile',$file->id)}}">
                @csrf
                @foreach($lectures as $lecture)
                    <div class="form-check form-check-inline">
                        @if(in_array($lecture->id, $id))
                            <input class="form-check-input" type="checkbox" value="{{$lecture->id}}" id="defaultCheck1"
                                   name="name[]" checked>
                            <label class="form-check-label" for="defaultCheck1">
                                {{$lecture->name}}
                            </label>
                        @else
                            <input class="form-check-input" type="checkbox" value="{{$lecture->id}}" id="defaultCheck1"
                                   name="name[]">
                            <label class="form-check-label" for="defaultCheck1">
                                {{$lecture->name}}
                            </label>
                        @endif
                    </div>
                @endforeach
                <button type="submit" class="btn btn-primary" style="display: block;">Submit</button>
            </form>
        @endif
    </div>

@endsection
