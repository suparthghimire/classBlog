@extends('layouts.app1')
@section('content')
<h1>{{$detail->title}}</h1>
<small>Posted Date: {{$detail->created_at}}</small>
<p>
    {{
        $detail->content
    }}

</p>
<a href="{{url('posts/')}}/{{$detail->id}}/edit" class="btn btn-primary">Edit Blog</a>
<br><br>

{!!Form::open(['action'=>['PostController@destroy',$detail->id],'method'=>'POST','class'=>'pull-right'])!!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}

{!!Form::close()!!}

<br><br>

@endsection
