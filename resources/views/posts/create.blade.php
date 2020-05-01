@extends('layouts.app1')
@section('content')
<h1>Add New Blog</h1>
{!! Form::open(['action'=>'PostController@store','method'=>'POST']) !!} <div class ="form-group">
    {{Form::label('title','Title')}}
    {{Form::text('title','', ['class'=>'form-control','placeholder'=>'Title Text'])}} </div> <div class ="form-group">
    {{Form::label('content','Body')}}
    {{Form::textarea('content','', ['class' => 'form-control','placeholder' => 'Body Text'])}} </div> <div class ="form-group">
    {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
