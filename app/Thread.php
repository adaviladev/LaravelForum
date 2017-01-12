<?php

	namespace App;

	use Illuminate\Database\Eloquent\Model;

	class Thread extends Model {
		protected $fillable = [
			'title' ,
			'body' ,
			'status' ,
			'user_id'
		];

		public function comments() {
			return $this->hasMany( Comment::class );
		}
	}
