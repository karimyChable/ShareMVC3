<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	//Campos que deben ser llanados en el formulario del modelo user
	protected $fillable = ['name','username','email'];


	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	//Campos ocultos o protegidos del modelo user
	protected $hidden = array('password', 'remember_token');

}
