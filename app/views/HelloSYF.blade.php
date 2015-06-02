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
	<link rel="stylesheet" href="{{ URL::asset('css/templatemo_misc.css')}}">
	<link rel="stylesheet" href="{{ URL::asset('css/templatemo_style.css')}}">
</head>
<body>
	
	<!-- This one in here is responsive menu for tablet and mobiles -->
    <div class="responsive-navigation visible-sm visible-xs">
        <a href="#" class="menu-toggle-btn">
            <i class="fa fa-bars fa-2x"></i>
        </a>
        <div class="navigation responsive-menu">
            <ul>
                <li class="home"><a href="#templatemo">INICIO</a></li>
	            <li class="about"><a href="#about">NOSOTROS</a></li>
	            
            </ul> <!-- /.main_menu -->
        </div> <!-- /.responsive_menu -->
    </div> <!-- /responsive_navigation -->

	<div id="main-sidebar" class="hidden-xs hidden-sm">
		<div class="logo">
			<a href="#"><h1 align="center">Share Your Files</h1></a>
			
		</div> <!-- /.logo -->

		<div class="navigation">
	        <ul class="main-menu">
                <li class="home"><a href="#templatemo">INICIO</a></li>
	            <li class="about"><a href="#about">NOSOTROS</a></li>
	          
	        </ul>
		</div> <!-- /.navigation -->

	</div> <!-- /#main-sidebar -->

	<div id="main-content">

		<div id="templatemo">
			<div class="main-slider">
				<div class="flexslider">
					<ul class="slides">
                    
						<li>
							<div class="slider-caption">
								<h2>Comparte archivos</h2>
								<p>Comparte tus archivos con tus amigos.</p>
								<a href="{{URL::to('login')}}" class="largeButton homeBgColor">Iniciar sesión</a>
								<a href="{{URL::to('register')}}" class="largeButton homeBgColor">Registrarse</a>
							</div>
							<img src="images/slide1.jpg" alt="Slide 1">
						</li>
                        
						<li>
							<div class="slider-caption">
								<h2>Descarga archivos</h2>
								<p>Descarga tus archivos desde donde te encuentres.</p>
								<a href="{{URL::to('login')}}" class="largeButton homeBgColor">Iniciar sesión</a>
								<a href="{{URL::to('register')}}" class="largeButton homeBgColor">Registrarse</a>
							</div>
							<img src="images/slide2.jpg" alt="Slide 2">
						</li>
                        
                        <li>
							<div class="slider-caption">
								<h2>Encuentra amigos</h2>
								<p>Visualiza los archivos que comparten tus amigos.</p>
								<a href="{{URL::to('login')}}" class="largeButton homeBgColor">Iniciar sesión</a>
								<a href="{{URL::to('register')}}" class="largeButton homeBgColor">Registrarse</a>
							</div>
							<img src="images/slide3.jpg" alt="Slide 3">
						</li>
                        
					</ul>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="welcome-text">
							
						</div>
					</div>
				</div>
			</div>
		</div> <!-- /#sTop -->

		<div class="container-fluid">

			<div id="about" class="section-content">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>NOSOTROS</h2>
						</div>
					</div>
				</div>
				
				<div class="row our-story">
					<div class="col-md-8">
						<h3>Equipo MVC</h3>
					  	Proyecto tercer parcial Share Your Files.
					</div>
					<br><br><br>
					<ul>
						<li>Genny Centeno</li>
						<li>Karimy Chablé</li>
						<li>Brent Heftye</li>
						<li>Maya Villanueva</li>
					</ul>
					<div class="col-md-4">
						<div class="story-image">
							<img src="images/team.jpg" alt="">
						</div>
					</div>
				</div> <!-- /.row -->
			</div> <!-- /#about -->
			
			

		</div> <!-- /.container-fluid -->

	
	</div> <!-- /#main-content -->

	<!-- JavaScripts -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/jquery.singlePageNav.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/custom.js"></script>
	<script>
		$(document).ready(function(){
			$("a[data-gal^='prettyPhoto']").prettyPhoto({hook: 'data-gal'});
		});

        function initialize() {
          var mapOptions = {
            zoom: 13,
            center: new google.maps.LatLng(40.7809919,-73.9665273)
          };

          var map = new google.maps.Map(document.getElementById('map-canvas'),
              mapOptions);
        }

        function loadScript() {
          var script = document.createElement('script');
          script.type = 'text/javascript';
          script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
              'callback=initialize';
          document.body.appendChild(script);
        }

        window.onload = loadScript;
    </script>
<!-- templatemo 394 sonic -->
</body>
</html>