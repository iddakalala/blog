@extends('layouts.app')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				
			<h1>{{ $post->title }}</h1>
			<article>
				{{ $post->body }}
			</article>

			</div>
		</div>
	</div>

@endsection