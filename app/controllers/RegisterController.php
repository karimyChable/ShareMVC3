<?php

class RegisterController extends BaseController {

//Función para mostrar la página de registro 
	public function showRegister(){
			return View::make('registro');
	}


//Función para registrar un usuario en el sistema SYF
	public function registerUser(){
	
	    //Se crea un nuevo usuario
	    $user = new User;

	    //Se asignan los datos del formulario al nuevo paquete
	    $user->name = Input::get('name');
	    $user->username = Input::get('username');
	    $user->email = Input::get('email');
	    $user->password = Hash::make(Input::get('password'));
	    
	    //Se guarda el usuario
	    $user->save();
	    //Redirecciona al usuario a iniciar sesión
		return Redirect::to('login');



	}





}
