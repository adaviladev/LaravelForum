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
				<div class="list-group">
					@foreach( $user->comments as $comment )
						<a href="/threads/{{ $comment->id }}" class="list-group-item">
							{{ $comment->body }}
							<span class="pull-right">{{ $comment->id }}</span>
						</a>
					@endforeach
				</div>
			@endunless
		</div>
	</div>
@endsection
