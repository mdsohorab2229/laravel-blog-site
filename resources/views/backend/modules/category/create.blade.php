@extends('backend.layouts.master')
@section('page_title','Category')
@section('page_sub_title','Create')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Create Category</h4>
                </div>
                <div class="card-body">
                    {!! Form::open() !!}
                    {!! Form::label('name','Name') !!}
                    {!! Form::text('name',null,['id'=>'name','class'=>'form-control','placeholder'=>'Enter category name']) !!}
                    {!! Form::label('slug','Slug',['class'=>'mt-2']) !!}
                    {!! Form::text('slug',null,['id'=>'slug','class'=>'form-control','placeholder'=>'Enter category slug']) !!}
                    {!! Form::label('order_by','Category Serial',['class'=>'mt-2']) !!}
                    {!! Form::number('order_by',null,['class'=>'form-control','placeholder'=>'Enter category serial']) !!}
                    {!! Form::label('status','Category Status',['class'=>'mt-2']) !!}
                    {!! Form::select('status',[1=>'Active',0=>'Inactive'],null,['class'=>'form-control ','placeholder'=>'Select category status']) !!}
                    {!! Form::button('Create Category',['type'=>'submit','class'=>'btn btn-success mt-2']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#name').on('change',function () {
            let name=$(this).val()
            console.log(name)
        })
    </script>
@endsection
