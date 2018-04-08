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
@endsection