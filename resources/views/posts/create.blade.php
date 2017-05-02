@extends('layouts.app')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
							
				<h1>Create a new post</h1>

				<form method="POST" action="/posts">
					{{ csrf_field() }}

					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" name="title" id="title" class="form-control" placeholder="Title">
					</div>
					<div class="form-group">
						<label for="body">Body</label>
						<textarea name="body" id="body" rows="10" class="form-control"></textarea>
					</div>

					<button type="submit" class="btn btn-primary">Submit</button>
				</form>

			</div>
		</div>
	</div>

@endsection