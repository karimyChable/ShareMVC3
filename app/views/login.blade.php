<!DOCTYPE html>
<html>
<head>
	<title>SYF - Inicio de sesión</title>
		<meta charset="utf-8">
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
</head>
<body>
	 <div class="main">
		<div class="login-form">
			<h1>Inicio de sesión</h1>
				{{Form::open()}}
					{{Form::text('email', '',array('class' => 'text', 'placeholder' => 'email' , 'required' => 'required' , 'tabindex' => '1'))}}
					{{Form::password('password', array('placeholder' => 'Contraseña' , 'required' => 'required' , 'tabindex' => '2'))}}
					{{Form::submit('Entrar')}}
								
						<p>¿Aún no tienes cuenta?<a href="{{URL::to('register')}}"> ¡Regístrate!</a></p>
				{{Form::close()}}

				
			</div>
		</div>
</body>
</html>