@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Dashboard</div>

				<div class="panel-body">
					Welcome home, {{ $user->first_name . ' ' . $user->last_name }}!
				</div>
			</div>

			@unless( empty( $user->comments ) )
				<ul class="list-group">
					@foreach( $user->comments as $comment )
						<li class="list-group-item">
							<h2><a href="/threads/{{ $comment->thread_id }}">{{ $comment->thread->title }}</a></h2>
							<a href="/threads/{{ $comment->thread_id }}#{{ $comment->id }}">{{ $comment->body }}</a>
							<span class="pull-right">{{ $comment->id }}</span>
							<div class="clearfix">
								<div class="pull-right"><a href="/comment/delete/{{ $comment->thread_id }}">Delete</a></div>
							</div>
						</li>
					@endforeach
				</ul>
			@endunless
		</div>
	</div>
@endsection

@section( 'test' )
	<p>Test field</p>
@endsection