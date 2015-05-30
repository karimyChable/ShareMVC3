<?php

/*
|--------------------------------------------------------------------------
| Archivo de rutas
|--------------------------------------------------------------------------
|
| Aquí se encuentran registradas todas las rutas para el proyecto ShareYourFiles
|	La raíz muestra la vista de presentación de la aplicación
|	El grupo indica todas las rutas que requieren la autenticación del usuario en la aplicación
|	Las rutas que se encuentran fuera del grupo no requieren autenticación
|
*/

//Ruta de presentación ShareYourFiles

Route::get('/', array( 'before' => 'guest', function()
{
	return View::make('HelloSYF');
}));


//Ruta para páginas de error 404
App::missing(function($exception) 
{
    return Response::view('404', array(), 404);
});


Route::group(array('before' => 'auth'), function()
{

	Route::get('logout', 'UserController@logout');

	Route::get('/profile', 'UserController@showMyProfile');

	Route::get('/edit/profile', 'UserController@showUpdateUser');

	Route::post('/edit/profile', 'UserController@updateUser');


});


Route::get('/login', 'UserController@showLogin');

Route::post('/login', 'UserController@login');

Route::get('/register', 'RegisterController@showUserRegister');

Route::post('/register','RegisterController@registerUser');


?>


