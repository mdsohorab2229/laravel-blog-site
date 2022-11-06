@extends('backend.auth.layouts.master')
@section('page_title','Register')
@section('content')

    {!! Form::open(['method'=>'post','route'=>'register']) !!}
    {!! Form::label('name','Name') !!}
    {!! Form::text('name',null,['class'=>$errors->has('name') ? 'is-invalid form-control form-control-sm':'form-control form-control-sm']) !!}
    @error('name')
    <p class="text-danger">{{$message}}</p>
    @enderror
    {!! Form::label('email', 'E-Mail Address') !!}
    {!! Form::email('email', null,['class'=>$errors->has('email') ? 'is-invalid form-control form-control-sm':'form-control form-control-sm']) !!}
    @error('email')
    <p class="text-danger">{{$message}}</p>
    @enderror
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
        {!! Form::button('REGISTER', ['type'=>'submit','class'=>'btn btn-outline-info mt-2']) !!}
    </div>
    {!! Form::close() !!}
    <p class="mt-2">Already register ? <a href="{{route('register')}}">Login Here</a></p>

@endsection
