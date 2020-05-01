@extends('layouts.app1')
@section('content')
<h1>Edit Blog</h1>

{!! Form::open(['action'=>['PostController@update',$data->id],'method'=>'POST']) !!}
<div class ="form-group">
    {{Form::label('title','Title')}}
    {{Form::text('title',$data->title, ['class'=>'form-control','placeholder'=>'Title Text'])}}
</div>
<div class ="form-group">
    {{Form::label('content','Body')}}
    {{Form::textarea('content',$data->content, ['class' => 'form-control','placeholder' => 'Body Text'])}}
</div>
<div class ="form-group">
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Update',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
</div>
@endsection
