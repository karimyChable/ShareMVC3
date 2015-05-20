<?php

class LoginController extends BaseController {


	//Función para mostrar la página de login
	public function showLogin()
	{
		//Verifica si se autenticó el usuario
		if(Auth::check()){ 
			//Lo redirige a la página principal de la aplicación
			return Redirect::to('/principal');
		}else{
			//Muestra la página de login
			return View::make('login');
		}
	}



	//Muestra página principal
	public function showPrincipal()
	{
		return View::make('principal');	
	}

	//Función para el inicio de sesión
	public function login(){
		//Autentifica al usuario
		if(Auth::attempt(Input::only('email', 'password')))
		{
			//Lo redirige a página correspondiente
			//return Redirect::intended('principal');	
			return "Welcome to Share You Files";
			return "<h4> Welcome to Share You Files</h4> ". "<ul>
			<li>Usuario: " . Auth::user()->username . "</li>
			<li>Nombre: " . Auth::user()->name . "</li>
			<li>Email: ". Auth::user()->email ."</li>	
			</ul>";
			
		}else{
			//Redirecciona a login con mensaje
			return Redirect::back()->with('error_message', 'El correo electrónico y/o contraseña son incorrectos')->withInput(Input::except('password'));
			//return Redirect::back();
		}
	}

	//Función para cerrar sesión
	public function logout(){
		//Cierra la sesión y redirecciona al usuario al login con mensaje
		Auth::logout();
		return Redirect::to('login')->with('error_message', 'Se ha cerrado sesión exitosamente');
	}

	
}
