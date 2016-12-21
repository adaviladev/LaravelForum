@extends( 'layouts.app' )

@section( 'content' )
	<div class="container">
		<h1>{{ $thread->title }}</h1>
		@unless( empty( $thread->comments ))
			<div class="list-group col-md-12">
				@foreach( $thread->comments as $comment )
					<div class="list-group-item">
						<div class="row">
							<div class="container-fluid">
								{{ $comment->user->first_name }}
								{{ $comment->user->last_name }}
								{!! '@' . $comment->user->username !!}
								<span class="pull-right">{{ $comment->updated_at }}</span>
							</div>
							<div class="container-fluid">
								{{ $comment->body }}
							</div>
						</div>
					</div>
				@endforeach
			</div>
		@endunless
	</div>
@endsection
