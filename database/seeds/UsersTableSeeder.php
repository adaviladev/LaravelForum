<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		// Create initial default user
		DB::table( 'users' )->insert( [
			'last_name'      => 'Davila' ,
			'first_name'     => 'Adrian' ,
			'username'       => 'adavila.dev' ,
			'email'          => 'adavila.dev@gmail.com' ,
			'password'       => bcrypt( 'secret' ) ,
			'remember_token' => str_random( 10 ) ,
			'created_at'     => \Carbon\Carbon::now() ,
			'updated_at'     => \Carbon\Carbon::now()
		] );

		// Create additional dummy users
		factory( App\User::class , 4 )->create();
	}
}
