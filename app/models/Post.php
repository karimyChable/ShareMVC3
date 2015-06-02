<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class User extends Eloquent implements UserInterface, RemindableInterface {
	/*
	--------------------------
	| Model: Post
	-------------------------
	| Mapeo de la tabla posts.
	|	
	*/

	use UserTrait, RemindableTrait,SoftDeletingTrait;

	protected $table =  'post';

	public function user(){
		return $this->belongsTo('User');
	}

	
}
