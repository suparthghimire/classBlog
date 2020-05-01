@extends('layouts.app1')
@section('content')
<a href="{{url('/posts/create')}}" class="float-right btn btn-primary">Insert New Blog +  </a>

<h1>All Blogs</h1>

@if(count($data)>0)
    @foreach ($data as $item)
        <div class="alert alert-danger">
            {{$item->title}}
        <a href="{{url('/posts')}}/{{$item->id}}?{{$item->title}}" class="float-right">Read More</a>
        </div>
    @endforeach

 @else
    <h1>
        There are No Blogs Currently!
        Wanna Add New??
    </h1>
@endif
@endsection
