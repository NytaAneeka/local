@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="headingContainer">
                        <span class="border-line"></span>
                        <h2>Edit student</h2>
                        <span class="border-line"></span>
                    </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('updateStudent',$user->id)}}" aria-label="{{ __('Edit student') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $errors->has('name') ?  old('name'): $user->name }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ $errors->has('lastname') ?  old('lastname'): $user->lastname }}" required autofocus>

                                        @if ($errors->has('lastname'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                                    <div class="col-md-6">
                                        <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ $errors->has('phone') ? old('phone'): $user->phone }}" required autofocus>

                                        @if ($errors->has('phone'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $errors->has('email') ? old('email'): $user->email }}" required>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group row" >
                                    <label for="groupLabel[]" class="col-md-4 col-form-label text-md-right">{{ __('Groups') }}</label>
                                    @foreach($groups as $group)
                                        <div class="form-check form-check-inline" id="groupLabel[]">
                                            @if(in_array($group->id, $user_groups))
                                                <input class="form-check-input" type="checkbox" value="{{$group->id}}" name="groups[]" checked>
                                                <label class="form-check-label">
                                                    {{$group->name}}
                                                </label>
                                            @else
                                                <input class="form-check-input form-check-inline" type="checkbox" value="{{$group->id}}" name="groups[]">
                                                <label class="form-check-label">
                                                    {{$group->name}}
                                                </label>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>


                                <button type="submit" class="btn btn-primary customBttn" data-toggle="tooltip" data-placement="top" title="Submit"><i class="fas fa-check fa-2x"></i></button>

                            </form>
                        </div>
                    </div>
            </div>
        </div>
        @endsection
    </div>