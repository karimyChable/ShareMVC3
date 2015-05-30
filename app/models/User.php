<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class User extends Eloquent implements UserInterface, RemindableInterface {
	/*
	--------------------------
	| Model: User
	-------------------------
	| Mapeo de la tabla user.
	|	
	*/

	use UserTrait, RemindableTrait,SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';


	//Campos que deben ser llamados en el formulario del modelo user
	protected $fillable = ['name','username','email','password'];

	//Campos ocultos o protegidos del modelo user
	protected $hidden = array('password', 'remember_token');

	//id para autenticación
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	//Obtención contraseña
	public function getAuthPassword()
	{
		return $this->password;
	}

	
}
