<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Auth;

	class HomeController extends Controller {
		/**
		 * Create a new controller instance.
		 *
		 * @return void
		 */
		public function __construct() {
			$this->middleware( 'auth' );
		}

		/**
		 * Show the application dashboard.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function index() {
			$user = Auth::user()->load( 'comments' );
			$user->comments->load( 'thread' );
			$user->comments = $user->comments->sortByDesc( 'id' );
//			dd( $user );

			return view( 'home' , compact( 'user' ) );
		}
	}
