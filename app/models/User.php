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

	//Campos que deben ser llanados en el formulario del modelo user
	protected $fillable = ['email','password','name', 'username'];

	//Campos ocultos o protegidos del modelo user
	protected $hidden = array('password');


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

    //Obtener remeberToken
	public function getRememberToken()
	{
		return $this->remember_token;
	}

	//Asignar rememberToken
	public function setRememberToken($value)
	{
		$this->remember_token = $value;
	}

	//obtener tokenName
	public function getRememberTokenName()
	{
		return "remember_token";
	}

	
}
