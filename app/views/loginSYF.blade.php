<!DOCTYPE html>
<html>
<head>
	<title>SYF - Inicio de sesión</title>
		<meta charset="utf-8">
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="{{ URL::asset('http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,300,600,700,800')}}" rel='stylesheet' type='text/css'>
</head>
<body>
	 <div class="main">
		<div class="login-form">
			<h1>Inicio de sesión</h1>
				{{Form::open(array('url' => '/login'))}}

						@if(Session::has('error_message') )
			                <strong >{{ Session::get('error_message') }}</strong><br>
			            @endif

			            @if(Session::has('message') )
			                <strong >{{ Session::get('message') }}</strong> <br>
			             @endif
			              <br>
			              
	            {{Form::email('email', '',array('class' => 'emailSYF', 'type' => 'email' ,'placeholder' => 'email' , 'required' => 'required', 'tabindex' => '1'))}}
	            <input type="password"  name="password" placeholder="Contraseña" required tabindex="2">
					
                <input type="submit" value="Entrar"  tabindex="3"></div>

								
						<p>¿Aún no tienes cuenta?<a href="{{URL::to('register')}}"> ¡Regístrate!</a></p>
				{{Form::close()}}

				
			</div>
		</div>
</body>
</html>