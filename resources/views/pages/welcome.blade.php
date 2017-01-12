@extends( 'layouts.app' )

@section( 'content' )
	<div class="title m-b-md">
		Forum
	</div>

	@unless( empty( $threads ) )
		<h1>Open Threads</h1>
		<div class="list-group">
			@foreach( $threads as $thread )
				<a href="/threads/{{ $thread->id }}" class="list-group-item">
					{{ $thread->title }}
					<span class="pull-right">{{ count( $thread->comments ) }}</span>
				</a>
			@endforeach
		</div>
	@endunless
@endsection