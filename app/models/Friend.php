<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class User extends Eloquent implements UserInterface, RemindableInterface {
	/*
	--------------------------
	| Model: Friends
	-------------------------
	| Mapeo de la tabla friend.
	|	
	*/

	use UserTrait, RemindableTrait,SoftDeletingTrait;

	protected $table =  'friends';

	public function fromUser(){
		return $this->belongsTo('User','id_user');
	}

	
}
