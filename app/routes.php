<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	
	return View::make('ShareYourFiles');
});


Route::get('info', 'PaginaController@info');

/*
Rutas para Inicio 
*/

//Rutas para inicio de sesión
Route::get('login', 'LoginController@showLogin');
Route::post('login', 'LoginController@login');

/*
Rutas para registrar a un usuario
*/
Route::get('register', 'RegisterController@showRegister');
Route::post('register', 'RegisterController@registerUser');

/* 
|------------------------
|Nos indica que las rutas que están dentro de este grupo 
|sólo serán mostradas si el usuario se ha autenticado.
|------------------------
*/
Route::group(array('before' => 'auth'), function()
{
/*
Ruta de página principal
*/
Route::get('principal', 'LoginController@showPrincipal');

/*
Rutas para cerrar sesión
*/
Route::get('logout', 'LoginController@logout');
});


//Error 404-Page not found
App::missing(function($exception) 
{
    return Response::view('404', array(), 404);
});

