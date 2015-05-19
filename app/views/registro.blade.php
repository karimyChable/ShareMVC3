<!DOCTYPE html>
<html>
<head>
	<title>SYF - Registro</title>
		<meta charset="utf-8">
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
</head>
<body>
	 <div class="main">
		<div class="login-form">
			<h1>¡Regístrate!</h1>
				{{Form::open()}}
					{{Form::text('name', '',array('class' => 'text', 'placeholder' => 'Nombre completo' , 'required' => 'required' , 'tabindex' => '1'))}}
					{{Form::text('username', '',array('class' => 'text', 'placeholder' => 'Usuario' , 'required' => 'required' , 'tabindex' => '2'))}}
					{{Form::text('email', '',array('class' => 'text', 'placeholder' => 'email' , 'required' => 'required' , 'tabindex' => '3'))}}
					{{Form::password('password', array('class' => 'password', 'placeholder' => 'Contraseña' , 'required' => 'required' , 'tabindex' => '4'))}}
					{{Form::password('remeber_token', array('class' => 'password', 'placeholder' => 'confirmar contraseña' , 'required' => 'required' , 'tabindex' => '5'))}}
						
					{{Form::submit('Entrar')}}
								
						<p>¿Ya tienes cuenta?<a href="{{URL::to('login')}}"> Inicia sesión</a></p>
				{{Form::close()}}
			</div>
		</div>
</body>
</html>