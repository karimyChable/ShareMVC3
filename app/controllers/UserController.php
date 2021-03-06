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
	    	'email' => 'required|email', 
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

		return Redirect::to('/user');
	}


	//Función para mostrar el perfil del usuario autentificado.
	function showSYF(){
		$query = "SELECT users.id, username, name from (select id_user from friends where id = ".Auth::user()->id." union select id from friends where id_user= ".Auth::user()->id.") AS friendsTb join users on friendsTb.id_user = users.id";
    	$friends = DB::select($query);
		return View::make('SYF') -> withFriends($friends);
	}

	//Función para mostrar el perfil del usuario autentificado.
	function showProfile(){

		return View::make('profileSYF');
	}

	//Función para mostrar los amigos

	function showFriends(){
		$query = "SELECT users.id, username, name from (select id_user from friends where id = ".Auth::user()->id." union select id from friends where id_user= ".Auth::user()->id.") AS friendsTb join users on friendsTb.id_user = users.id";
    	$friends = DB::select($query);

    	$query = "SELECT users.id, username, name from users WHERE id NOT IN (SELECT users.id from (select id_user from friends where id = ".Auth::user()->id." union select id from friends where id_user= ".Auth::user()->id." ) AS friendsTb join users on friendsTb.id_user = users.id)AND id != ".Auth::user()->id;
    	$posibleFriends = DB::select($query);

		return View::make('friends', compact('friends'), compact('posibleFriends'));

	}

	function deleteFriend($id){
        DB::table('friends')
            ->where('id_user', '=', Auth::user()->id)
            ->where('id', '=', $id)
		    ->delete();

		return Redirect::to('/friends');
	}

	function addFriend($id){
		DB::table('friends')->insert(array('id' => $id, 'id_user' => Auth::user()->id));
		return Redirect::to('/friends');
	}

	function searchFriend(){
		$query = "SELECT users.id, username, name from (select id_user from friends where id = ".Auth::user()->id." union select id from friends where id_user= ".Auth::user()->id.") AS friendsTb join users on friendsTb.id_user = users.id";
    	$friends = DB::select($query);

		$friendName = Input::get('search_string');
    	$query = "SELECT * FROM ( SELECT users.id, username, name from users WHERE id NOT IN (SELECT users.id from (select id_user from friends where id = ".Auth::user()->id." union select id from friends where id_user= ".Auth::user()->id." ) AS friendsTb join users on friendsTb.id_user = users.id)AND id != ".Auth::user()->id.") AS notFriends WHERE username LIKE '%".$friendName."%' or name LIKE '%".$friendName."%'";
    	$posibleFriends = DB::select($query);

		return View::make('friends', compact('friends'), compact('posibleFriends'));
	}

	function showMyFiles(){
		$posts = Auth::user() -> posts;
		return View::make('files', array("posts" => $posts));
	}

	function savePost(){
		$destinationPath = '';
	    $filename        = '';

	    if (Input::hasFile('file')) {
	        $file            = Input::file('file');
	        $destinationPath = app_path().'/user_files/';
	        $filename        = uniqid(Auth::user()->id).'.'.$file->getClientOriginalExtension();
	        $mimetype = $file->getMimeType();
	        $uploadSuccess   = $file->move($destinationPath, $filename);
	        if($uploadSuccess){
	        	$post = new Post();
	        	$post -> content = Input::get('description');
	        	$post -> filepath = $filename;
	        	$post -> id_user = Auth::user() -> id;
	        	$post -> mimetype = $mimetype;
	        	if($post -> save()){
	        		return Redirect::to('/files');
	        	}
	        	else{
	        		return Redirect::back()->with('error_message', 'No se guardo tu archivo, intentalo de nuevo.')->withInput();
	        	}
	        }
	        else{
	        		return Redirect::back()->with('error_message', 'No se guardo tu archivo, intentalo de nuevo.')->withInput();
	        	}
	    }
		else{
			return Redirect::back()->with('error_message', 'Selecciona un archivo')->withInput();

		}

	   

		return Redirect::to('/files');
	}

	function deletePost(){

	}

}