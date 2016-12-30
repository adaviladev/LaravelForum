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
		$thread->load( 'comments.user' );

		return view( 'pages.thread' , compact( 'thread' ) );
	}
}
