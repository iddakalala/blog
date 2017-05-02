@extends('layouts.app')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				
			<h1>All Posts</h1>
				<p>
					<a class="btn btn-primary pull-right" href="/posts/create">New</a>
				</p>

					@foreach($posts as $post)
						<article>
							<h2>
								<a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
							</h2>
						</article>
					@endforeach

			</div>
		</div>
	</div>

	
@endsection