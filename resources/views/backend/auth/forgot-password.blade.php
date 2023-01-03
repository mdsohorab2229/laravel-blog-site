@extends('backend.auth.layouts.master')
@section('page_title','Reset Password')
@section('content')

    {!! Form::open(['method'=>'post','route'=>'password.email']) !!}
    {!! Form::label('email', 'E-Mail Address') !!}
    {!! Form::email('email', null,['class'=>$errors->has('email')? 'is-invalid form-control form-control-sm':'form-control form-control-sm']) !!}
    @error('email')
    <p class="text-danger">{{$message}}</p>
    @enderror
    <div class="d-grid">
        {!! Form::button('RESET PASSWORD', ['type'=>'submit','class'=>'col-md-12 btn btn-outline-info mt-2']) !!}
    </div>
    {!! Form::close() !!}

@endsection
