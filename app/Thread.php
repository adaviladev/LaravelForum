<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model {
	protected $fillable = [
		'title' ,
		'user_id'
	];

	public function comments() {
		return $this->hasMany( Comment::class );
	}
}
