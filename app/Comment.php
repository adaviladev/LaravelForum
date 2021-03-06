<?php

	namespace App;

	use Illuminate\Database\Eloquent\Model;

	class Comment extends Model {
		protected $fillable = [
			'thread_id' ,
			'body' ,
			'status' ,
			'user_id'
		];

		public function thread() {
			return $this->belongsTo( Thread::class );
		}

		public function user() {
			return $this->belongsTo( User::class );
		}
	}
