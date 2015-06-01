<?php

class UserController extends BaseController {


	//Función para mostrar la página de login
	public function showLogin()
	{
		//Verifica si se autenticó el usuario
		if(Auth::check()){ 
			//Lo redirige a la página principal de la aplicación
			return Redirect::to('/syf');
		}else{
			//Muestra la página de login
			return View::make('loginSYF');
		}
	}

	//Función para el inicio de sesión
	public function login(){

		//Guardamos en un arreglo los datos del usuario
		$userdata = array(
				'email' => Input::get('email'),
				'password' => Input::get('password')
			);
		//Se validan los datos
		if(Auth::attempt($userdata))
		{
			//Lo redirige a página correspondiente
			return Redirect::to('/syf');
			//return Redirect::to('/profile');
			//return View::make('ProfileSYF');			
		}else{
			//Redirecciona a login con mensaje
			return Redirect::back()->with('error_message', 'El correo electrónico y/o contraseña son incorrectos')->withInput(Input::except('password'));
		}
	}

	//Función para cerrar sesión
	public function logout(){
		//Cierra la sesión y redirecciona al usuario al login con mensaje
		Auth::logout();
		return Redirect::to('login')->with('error_message', 'Se ha cerrado sesión exitosamente');
	}

	function showUpdateUser(){
		return View::make('EditProfileSYF');
	}

	//Función para actualizar los datos del usuario autentificado.
	function updateUser(){

		// Reglas para validar la información del formulario.
		$rules = array(
			'name' => 'required|min:1|max:30', 
	    	'username' => 'required|min:1|max:30', 
	    	'email' => 'required|email|unique:users', 
	    	'password' => 'required|min:6|max:20'
		);

		// Se valida la información del formulario.
	    $validator = Validator::make(Input::only('name','username','email','password'), $rules);

	    // Si la validación falla, se notifica al usuario los errores.
	    if ($validator->fails())
	    {
	        return Redirect::back()->withErrors($validator)->withInput(Input::except('password'));
	    }

	    $user = Auth::user();

	    // Se actualiza la información del usuario.
	    $user->name = Input::get('name');
	    $user->username = Input::get('username');
	    $user->email = Input::get('email');
	    $user->password = Hash::make(Input::get('password'));
	   

	    // Se guarda la información del usuario
	    $user->save();

		return Redirect::to('/user')
			->withMessage('Los datos se han guardado satisfactoriamente.')
			->withClass('success');
	}

	//Función para eliminar del sistema al usuario autentificado.
	function deleteUser(){
		$user = User::find(Auth::user()->id);

		Auth::logout();

		if ($user->delete()) {

        	return Redirect::to('/')
        		->withMessage('Tu cuenta ha sido eliminada satisfactoriamente.')
        		->withClass('success');
    	}
    	else {
    		Auth::login($user);

    		return Redirect::back()
    			->withMessage('Tu cuenta no pudo ser eliminada, intenta de nuevo.')
    			->withClass('danger');
    	}
	}

	//Función para mostrar el perfil del usuario autentificado.
	function showSYF(){

		return View::make('SYF');
	}

	//Función para mostrar el perfil del usuario autentificado.
	function showProfile(){

		return View::make('profileSYF');
	}


	

}