<?php

	/*
	|--------------------------------------------------------------------------
	| Model Factories
	|--------------------------------------------------------------------------
	|
	| Here you may define all of your model factories. Model factories give
	| you a convenient way to create models for testing and seeding your
	| database. Just tell the factory how a default model should look.
	|
	*/

	/** @var \Illuminate\Database\Eloquent\Factory $factory */
	$factory->define( App\User::class , function ( Faker\Generator $faker ) {
		static $password;

		return [
			'last_name'      => $faker->firstName ,
			'first_name'     => $faker->lastName ,
			'username'       => $faker->userName ,
			'email'          => $faker->unique()->safeEmail ,
			'password'       => $password ?: $password = bcrypt( 'secret' ) ,
			'remember_token' => str_random( 10 ) ,
		];
	} );

	$factory->define( App\Thread::class , function ( Faker\Generator $faker ) {
		return [
			'title'   => implode( ' ' , $faker->words( 5 ) ) ,
			'body'    => implode( ' ' , $faker->sentences( rand( 3 , 6 ) ) ) ,
			'status'  => 'published' ,
			'user_id' => rand( 1 , 5 )
		];
	} );

	$factory->define( App\Comment::class , function ( Faker\Generator $faker ) {
		return [
			'body'      => implode( ' ' , $faker->sentences( rand( 3 , 6 ) ) ) ,
			'thread_id' => rand( 1 , 20 ) ,
			'status'  => 'published' ,
			'user_id'   => rand( 1 , 5 )
		];
	} );
