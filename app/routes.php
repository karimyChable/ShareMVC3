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

Route::get('/', function()
{
	return View::make('HelloSYF');
});


//Ruta para páginas de error 404
App::missing(function($exception) 
{
    return Response::view('404', array(), 404);
});


Route::group(array('before' => 'auth'), function()
{

	Route::get('logout', 'UserController@logout');

	Route::get('/syf', 'UserController@showSYF');

	Route::get('/user', 'UserController@showprofile');

	Route::get('/edit', 'UserController@showUpdateUser');

	Route::post('/edit', 'UserController@updateUser');

	Route::get('/friends','UserController@showFriends');

	Route::get('/delete/{id}','UserController@deleteFriend');

	Route::get('/add/{id}','UserController@addFriend');

	Route::post('/searchFriend','UserController@searchFriend');

	Route::get('/files', 'UserController@showMyFiles');

	Route::post('save', 'UserController@savePost');

	Route::get('download/{id}', function($id)
	{
	    // Check if file exists in app/storage/file folder
	    $post = Post::find($id);
	    $file_path = app_path() .'/user_files/'. $post -> filepath;
	    if (file_exists($file_path))
	    {
	        // Send Download
	        return Response::download($file_path, $post -> filepath, [
	            'Content-Length: '. filesize($file_path).
	            'Content-type: '.$post -> mimetype
	        ]);
	    }
	    else
	    {
	        // Error
	        exit('Requested file does not exist on our server!');
	    }
	});

	});


Route::get('/login', 'UserController@showLogin');

Route::post('/login', 'UserController@login');

Route::get('/register', 'RegisterController@showUserRegister');

Route::post('/register','RegisterController@registerUser');


?>


