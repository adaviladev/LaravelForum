<?php

	/*
	|--------------------------------------------------------------------------
	| Web Routes
	|--------------------------------------------------------------------------
	|
	| Here is where you can register web routes for your application. These
	| routes are loaded by the RouteServiceProvider within a group which
	| contains the "web" middleware group. Now create something great!
	|
	*/

	/**
	 * Forum routes
	 */
	Route::get( '/' , 'ForumController@index' );
	Route::get( '/threads/{thread}' , 'ForumController@show' );
	Route::get( '/threads/delete/{thread}/' , 'ForumController@deleteThread' );
	Route::get( '/comment/delete/{comment}/' , 'ForumController@deleteComment' );

	/**
	 * Main Site pages
	 */
	Route::get( '/about' , 'PagesController@about' );
	Route::get( '/contact' , 'PagesController@contact' );

	/**
	 * Auth routes
	 */
	Auth::routes();
	Route::get( '/home' , 'HomeController@index' );
