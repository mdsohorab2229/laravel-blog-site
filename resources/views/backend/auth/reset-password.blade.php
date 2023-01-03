@extends('backend.auth.layouts.master')
@section('page_title','Register')
@section('content')
    {!! Form::open(['method'=>'post','route'=>'password.update']) !!}
    {!! Form::label('email', 'E-Mail Address') !!}
    {!! Form::email('email', old('email', $request->email),['class'=>$errors->has('email') ? 'is-invalid form-control form-control-sm':'form-control form-control-sm']) !!}
    @error('email')
    <p class="text-danger">{{$message}}</p>
    @enderror
    {!! Form::hidden('token',$request->route('token')) !!}
    {!! Form::label('password', 'Password') !!}
    {!! Form::password('password',['class'=>$errors->has('password') ? 'is-invalid form-control form-control-sm':'form-control form-control-sm']) !!}
    @error('password')
    <p class="text-danger">{{$message}}</p>
    @enderror
    {!! Form::label('password_confirmation', 'Password Confirmation') !!}
    {!! Form::password('password_confirmation',['class'=>$errors->has('password_confirmation') ? 'is-invalid form-control form-control-sm':'form-control form-control-sm']) !!}
    @error('password_confirmation')
    <p class="text-danger">{{$message}}</p>
    @enderror
    <div class="d-grid">
        {!! Form::button('RESET PASSWORD', ['type'=>'submit','class'=>'btn btn-outline-info mt-2']) !!}
    </div>
    {!! Form::close() !!}

@endsection
