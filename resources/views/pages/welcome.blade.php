@extends( 'layouts.app' )

@section( 'content' )
	<div class="title m-b-md">
		Forum
	</div>

	@unless( empty( $threads ) )
		<div class="list-group">
			@foreach( $threads as $thread )
				<a href="/threads/{{ $thread->id }}" class="list-group-item">
					{{ $thread->title }} <span class="pull-right">{{ $thread->id }}</span>
				</a>
			@endforeach
		</div>
	@endunless
@endsection