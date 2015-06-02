<?php

class RegisterController extends BaseController {

	/*
	--------------------------------------------------------------------------
	|	Register Controller
	--------------------------------------------------------------------------
	|  Controlador para el registro de usuario
	|
	|	Rutas:
	|		Route::get('/register', 'RegisterController@showUserRegister');
	|		Route::post('/register','RegisterController@registerUser');
	|	Métodos:
	|		showUserRegister()
	|		registerUser()
	|
	*/
	



	/*
	*  Función que muestra la vista para registrar a un nuevo usuario
	*/
	public function showUserRegister()
	{
		return View::make('registerSYF');
	}


	/*
	* Función que se encarga de validar los datos introducidos por el usuario y 
	* y registrarlo en el sistema.
	*/
	public function registerUser()
	{

		$rules=	array(
		    	'name' => 'required|min:1|max:30', 
		    	'username' => 'required|min:1|max:30', 
		    	'email' => 'required|email|unique:users', 
		    	'password' => 'required|min:6|max:20|same:password_confirmation'
		    	);
	
		//Se realizan las validaciones
		$validator = Validator::make(Input::all(), $rules);

		//Se redirige a la vista de regitro con todos los campos excepto contraseña
		//en caso de que ocurra un error en la validación. Se regresa con los errores de validación

		if ($validator->fails())
	    {
	        return Redirect::back()->withErrors($validator)->withInput(Input::all());
	    }
	    else{
	    	//Si la validación es correcta, se obtienen los datos del formulario y se registra exitosamente el usuario.
	    	 //Si no fallan las validaciones, se crea un nuevo viaje
	    $user = new User;

	    //Se asignan los datos del formulario al nuevo paquete
	    $user->name = Input::get('name');
	    $user->username = Input::get('username');
	    $user->email = Input::get('email');
	    $user->password = Hash::make(Input::get('password'));
	
		$user -> save();

			//Se redirige al usuario a su perfil en la aplicación
			if(Auth::attempt(array('email' => $user -> email, 'password' => Input::get('password'))))
			{
				return Redirect::intended('syf');			
			}
			return Redirect::Redirect('login')->with('message', 'Registro Exitoso, inicia sesión.');
		}	
	}

}
