<!DOCTYPE html>
<html>
<head>
    <title>Share Your Files</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
<!-- 

http://www.templatemo.com/preview/templatemo_394_sonic 
-->
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1">

	<link href="{{ URL::asset('http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,300,600,700,800')}}" rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ URL::asset('css/style.css')}}">
    <link href="{{ URL::asset('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css')}}" rel='stylesheet'>	
	<link rel="stylesheet" href="{{ URL::asset('css/templatemo_misc.css')}}">
	<link rel="stylesheet" href="{{ URL::asset('css/templatemo_style.css')}}">
</head>
<body>
	
	<div class="responsive-navigation visible-sm visible-xs">
        <a href="#" class="menu-toggle-btn">
            <i class="fa fa-bars fa-2x"></i>
        </a>
        <div class="navigation responsive-menu">
            <ul>
            	<li class='about'><a class='active' href='syf'>Inicio</a></li>
                <li class='portfolio'><a href='#'>Mis Archivos</a></li>
                <li class='contact'><a href='friends'>Amigos</a></li>
                <li class='home'><a href="logout">Cerrar sesión</a></li>
            </ul> <!-- /.main_menu -->
        </div> <!-- /.responsive_menu -->
    </div> <!-- /responsive_navigation -->

	<div id="main-sidebar" class="hidden-xs hidden-sm">
		<div class="logo">
			<a href="user"><h1>{{Auth::user()->name}}</h1></a>
			<span>{{Auth::user()->username}}</span>
		</div> <!-- /.logo -->

		<div class="navigation">
	        <ul class="main-menu">
            	<li class='about'><a class='active' href='syf'>Inicio</a></li>
                <li class='portfolio'><a href='#'>Mis Archivos</a></li>
                <li class='contact'><a href='friends'>Amigos</a></li>
                <li class='home'><a href="logout">Cerrar sesión</a></li>
	        </ul>
		</div> <!-- /.navigation -->

	</div> <!-- /#main-sidebar -->


	<!--contenido principal-->
	<div id="main-content">
		<div class="container-fluid">
			<div id='contact' class='section-content'>
	            <div class='row'>
	                <div class='col-md-12'>
	                    <div class='section-title'>
	                        <h2>
	                            Mis amigos
	                        </h2>
	                        <table class='friendsTb'>
	                        @if(count($friends) > 0)
	                        <thead>
	                                    <th>Nombre de usuario</th><th>Nombre</th><th></th>
	                            </thead>
	                            <tbody>
	                            	@foreach($friends as $friend)
		                            	<tr>
			                            	<td>{{$friend->username}}</td>
			                            	<td>{{$friend->name}}</td>
			                            	<td>
			                            		<a href="{{ URL('delete/'.$friend->id)}}">
			                            			<i class='fa fa-user-times 2x' style ='color:#EE4035'></i>
			                            		</a>
			                            	</td>
	                            		</tr>
	                            	@endforeach
	                            </tbody>
	                        @else
	                        	<br/>
	                        	<br/>
	                        	No tienes amigos aún :C
	                        @endif
 	                        </table>

	                    </div>
	                </div>
	            </div>
			        </div>
			
			
			
			<div id='contact' class='section-content'>
            <div class='row'>
                <div class='row contact-form'>
                    <div class='col-md-12'>
                            <div class='section-title'>
                                <h2>
                                    Buscar amigos
                                </h2>
                            </div>
                        <div class='col-md-8'>
                        		{{Form::open(array('action' => 'UserController@searchFriend', 'method' => 'post'))}}
    								{{Form::text('search_string','',array('placeholder' => 'Ingrese un nombre c:' , 'required' => 'required' , 'tabindex' => '1'))}}
                        </div>
                        <div class='col-md-4'>
                                    <input type='submit' class = 'largeButton contactBgColor' value='Buscar'>
								{{Form::close()}}
                        </div>
                        	@if(count($posibleFriends) > 0)
                        <table class='friendsTb'>
                        	<thead>
	                                <th>Nombre de usuario</th><th>Nombre</th><th></th>
	                            </thead>
	                            <tbody>
	                            	@foreach($posibleFriends as $friend)
		                            	<tr>
			                            	<td>{{$friend->username}}</td>
			                            	<td>{{$friend->name}}</td>
			                            	<td>
			                            		<a href="{{ URL('add/'.$friend->id)}}">
			                            			<i class='fa fa-user-plus 2x' style ='color:#169f60'></i>
			                            		</a>
			                            	</td>
	                            		</tr>
	                            	@endforeach
	                            </tbody>
	                    </table>
                           	@else
								<br/>
	                        	<br/>
	                        	No hay resultados con ese nombre :C
	                        	<br/>
	                        	O ya es tu amig@ :D

                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
		</div> <!-- /.container-fluid -->

		

	</div> <!-- /#main-content -->
	<!--Fin contenido principal-->


	<!-- JavaScripts -->
	<script src="js/jquery-1.10.2.min.js"></script>
	
<!-- templatemo 394 sonic -->
</body>
</html>