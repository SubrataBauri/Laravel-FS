@extends('layouts.app');

@section('content')
	<a href="/posts" class="btn btn-default">Go Back</a>
	<h1>{{$post->title}}</h1>
	@if($post)
		<small>Written on {{$post->created_at}}</small>
		<hr>
		<div>
			{!! $post->body !!}
		</div>
	@else
		<p>No content found</p>
	@endif
	<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

	{!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
		 {{Form::hidden('_method','DELETE')}}
		 {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
	{!! Form::close() !!}
@endsection
