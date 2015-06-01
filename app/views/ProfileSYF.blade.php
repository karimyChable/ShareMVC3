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
			<a ><h1>{{Auth::user()->name}}</h1></a>
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
					<!--, 'action'=>'ACTION', 'method' => 'POST'-->
				{{Form::open(array('id' => 'form_register', 'action' => 'UserController@showUpdateUser', 'method' => 'get'))}}

                    <div class='col-md-12'>
                        <label >Nombre: {{Auth::user()->name}}</label>
                    </div> 
                    <div class='col-md-12'>
                        <label>Email: {{Auth::user()->email}}</label>
                    </div>
                    <div class='col-md-12'>
                        <label>Nombre de usuario: {{Auth::user()->username}}</label>
                    </div>

                    <div class='col-md-4'>
                        <div class='submit-btn'>
                            <input type='submit' class='largeButton servicesBgColor' value='Editar'/>
                        </div> 
                    </div> 
                {{Form::close()}}
            </div>
		</div> <!-- /#services -->

	</div> <!-- /#main-content -->
	<!--Fin contenido principal-->


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