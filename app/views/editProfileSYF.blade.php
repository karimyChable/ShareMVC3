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
	<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css')}}">
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
                <li class="home"><a href="#templatemo">Home</a></li>
	            <li class="about"><a href="#about">About Us</a></li>
	            <li class="services"><a href="#services">Perfil</a></li>
	            <li class="portfolio"><a href="#portfolio">Portfolio</a></li>
	            <li class="contact"><a href="#contact">Contact</a></li>
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
	            <li class="home"><a href="#templatemo">Home</a></li>
	            <li class="about"><a href="#about">About Us</a></li>
	            <li class="services"><a href="#services">Perfil</a></li>
	            <li class="portfolio"><a href="#portfolio">Portfolio</a></li>
	            <li class="contact"><a href="#contact">Contact</a></li>
	        </ul>
		</div> <!-- /.navigation -->

	</div> <!-- /#main-sidebar -->


	<!--contenido principal-->
	<div id="main-content">

		<div id="services" class="section-content">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Perfil</h2>
						</div> <!-- /.section-title -->
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
				<div class='row contact-form'>
                    <div class='col-md-12'>
				{{Form::model(Auth::user(), array('url'=>'/edit'))}}
		                        <label>Nombre:</label>
		                        {{Form::text('name', null, array('id'=>'name','maxlength'=>'50','tabindex'=>'1','required'=>'true'))}}
		                </div> 
		                <div class='col-md-12'>
		                        <label>Email:</label>
		                       	{{Form::email('email', null, array('id'=>'email','maxlength'=>'50','tabindex'=>'2','required'=>'true'))}}
		                </div> 
		                <div class='col-md-12'>
		                        <label>Nombre de usuario:</label>
		                        {{Form::text('username', null, array('id'=>'username','maxlength'=>'13','tabindex'=>'3','required'=>'true'))}}
		                </div> 
		                
		                <div class='col-md-4'>
		                        <label for='password'>Contraseña nueva:</label>
		                        {{Form::password('password', array('id'=>'password','maxlength'=>'50','tabindex'=>'4','required'=>'true'))}}

		                        
		                </div> <br>
							<div><strong> {{ $errors -> first('name')}} </strong></div><br>
							<div><strong> {{ $errors -> first('username')}} </strong></div><br>
							<div><strong> {{ $errors -> first('password')}} </strong></div><br>



		                <div class='col-md-4'>
		                        <div class='submit-btn'>
		                                <!--<a href='#' class='largeButton contactBgColor'>Send Message</a>-->
		                                <input type='submit' class='largeButton servicesBgColor' value='Guardar'>
		                        </div> 
				{{Form::close()}}
		                </div> 
		        </div>
		</div> <!-- /#services -->

	</div> <!-- /#main-content -->
	<!--Fin contenido principal-->


<!-- templatemo 394 sonic -->
</body>
</html>