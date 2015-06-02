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
            	<li class='about'><a class='active' href='#'>Inicio</a></li>
                <li class='portfolio'><a href='files'>Mis Archivos</a></li>
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
            	<li class='about'><a class='active' href='#'>Inicio</a></li>
                <li class='portfolio'><a href='files'>Mis Archivos</a></li>
                <li class='contact'><a href='friends'>Amigos</a></li>
                <li class='home'><a href="logout">Cerrar sesión</a></li>
	        </ul>
		</div> <!-- /.navigation -->

	</div> <!-- /#main-sidebar -->


	<!--contenido principal-->
	<div id="main-content">

		<div class="container-fluid">

			<div id="about" class="section-content">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Inicio</h2>
						</div>
					</div>
				</div>
				
			</div> <!-- /#about -->
			@foreach($friends as $friend)
				<?php 
					$friend = User::find($friend -> id);
				?>
				<div class='col-lg-12'>
					<h2>Archivos de tu amigo {{$friend -> name}}</h2>
				@foreach($friend -> posts as $post)
					<div class = 'row'>
							<div class='col-md-12'>
							    <div class='member-item'>
							        <div class='member-content'>
							            <h4>{{Auth::user()->name}}</h4>
							            <p>{{$post -> content}}</p>
							            <p><a href='{{URL::to('download/'.$post -> id)}}'>{{$post -> filepath}}</a></p>
							        </div>
							    </div>
							</div>
				    </div>
				    <br/>
			    @endforeach
			    </div>
			@endforeach
			
			

	</div> <!-- /#main-content -->
	<!--Fin contenido principal-->


	<!-- JavaScripts -->
	<script src="js/jquery-1.10.2.min.js"></script>
	
<!-- templatemo 394 sonic -->
</body>
</html>