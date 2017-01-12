<?php

	namespace App\Http\Controllers;

	use App\Thread;
	use Illuminate\Http\Request;

	class ForumController extends Controller {
		public function index() {
			$threads = Thread::get()->load( 'comments' );

			return view( 'pages.welcome' , compact( 'threads' ) );
		}

		public function show( Thread $thread ) {
			$thread->load( 'comments.user' )->where( 'status' , '=' , 'deleted' );

			return view( 'pages.thread' , compact( 'thread' ) );
		}

		public function deleteThread( Thread $thread ) {
			$thread->update( [
				'body'   => '[deleted]' ,
				'status' => 'deleted'
			] );

			return redirect( '/home' );
		}

		public function deleteComment( Comment $comment ) {
			$comment->update( [
				'body'   => '[deleted]' ,
				'status' => 'deleted'
			] );

			return redirect( '/home' );
		}
	}
