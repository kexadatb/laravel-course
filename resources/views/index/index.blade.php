

@extends('template')

@section('title')
	title
@stop


@section('content')
	<div>
	@foreach ($posts as $post)
	    <div id="post-{{$post->id}}">
	    	<h4>{{$post->title}}</h4>
	    	<div class="">{{$post->text}}</div>
			<div>Autor: {{$post->author->name}}</div>

	    	<div class="comments">
			@foreach ( $post->comments as $comment)
				<div id="comment-{{$post->id}}{{$comment->id}}">
					<div class="">{{$comment->author->name}}</div>
					<div>{{$comment->text}}</div>
				</div>
			@endforeach
	    	</div>

	    </div>
	@endforeach
	</div>
@stop