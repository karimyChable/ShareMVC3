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
            	<li class='about'><a class='active' href='#'>Inicio</a></li>
                <li class='portfolio'><a href='#'>Mis Archivos</a></li>
                <li class='contact'><a href='friends'>Amigos</a></li>
                <li class='home'><a href="logout">Cerrar sesión</a></li>
	        </ul>
		</div> <!-- /.navigation -->

	</div> <!-- /#main-sidebar -->


	<!--contenido principal-->
	<div id="main-content">

		<div id="templatemo">
			<div class="main-slider">
				<div class="flexslider">
					<ul class="slides">
                    
						<li>
							<div class="slider-caption">
								<h2>Responsive Layout</h2>
								<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</p>
								<a href="#" class="largeButton homeBgColor">Read More</a>
							</div>
							<img src="images/slide1.jpg" alt="Slide 1">
						</li>
                        
						<li>
							<div class="slider-caption">
								<h2>Portfolio Website</h2>
								<p>Fusce convallis enim vitae sagittis mollis. Sed bibendum ultricies dignissim.</p>
								<a href="#" class="largeButton homeBgColor">Details</a>
							</div>
							<img src="images/slide2.jpg" alt="Slide 2">
						</li>
                        
                        <li>
							<div class="slider-caption">
								<h2>Free Templates</h2>
								<p>All templates are free to download and use for your personal or commercial websites.</p>
								<a href="logout" class="largeButton homeBgColor">Downloads</a>
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
							<h2>Welcome to Sonic Template</h2>
							<p>Sonic is <a href="#">free HTML5 template</a> provided by templatemo website for everyone. Credit goes to <a rel="nofollow" href="http://flexslider.woothemes.com">FlexSlider</a>. Maecenas adipiscing pellentesque elit eu volutpat. Integer vitae <a href="#">pulvinar magna</a>. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent auctor mi metus, nec sagittis purus ultrices id.</p>
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
							<h2>About Us</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="member-item">
							<div class="member-thumb">
								<img src="images/team1.jpg" alt="girl 1">
								<div class="overlay">
									<ul class="social-member">
										<li><a href="#" class="fa fa-facebook"></a></li>
										<li><a href="#" class="fa fa-twitter"></a></li>
										<li><a href="#" class="fa fa-linkedin"></a></li>
									</ul>
								</div>
							</div>
							<div class="member-content">
								<h4>Christina Welldone</h4>
								<p>Marketing Director</p>
							</div>
						</div>
					</div> <!-- /.col-md-4 -->
					<div class="col-md-4">
						<div class="member-item">
							<div class="member-thumb">
								<img src="images/team2.jpg" alt="girl 2">
								<div class="overlay">
									<ul class="social-member">
										<li><a href="#" class="fa fa-facebook"></a></li>
										<li><a href="#" class="fa fa-twitter"></a></li>
										<li><a href="#" class="fa fa-linkedin"></a></li>
									</ul>
								</div>
							</div>
							<div class="member-content">
								<h4>Teri Belle</h4>
								<p>Creative Executive</p>
							</div>
						</div>
					</div> <!-- /.col-md-4 -->
					<div class="col-md-4">
						<div class="member-item">
							<div class="member-thumb">
								<img src="images/team3.jpg" alt="girl 3">
								<div class="overlay">
									<ul class="social-member">
										<li><a href="#" class="fa fa-facebook"></a></li>
										<li><a href="#" class="fa fa-twitter"></a></li>
										<li><a href="#" class="fa fa-linkedin"></a></li>
									</ul>
								</div>
							</div>
							<div class="member-content">
								<h4>Tawana Cherry</h4>
								<p>Company President</p>
							</div>
						</div>
					</div> <!-- /.col-md-4 -->
				</div> <!-- /.row -->
				<div class="row our-story">
					<div class="col-md-8">
						<h3>Our Management Team</h3>
					  	This is a mobile website template which can be viewed in mobile devices. Quisque in metus tristique, gravida dolor ut, varius neque. Maecenas ac risus aliquam, facilisis massa id, vulputate elit. Curabitur pretium arcu dictum, faucibus diam quis, commodo turpis. Proin viverra, risus eget egestas sodales, felis ante scelerisque ligula, eget condimentum diam ligula eu tellus. <br><br>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, exercitationem, laboriosam, modi non quisquam voluptas accusamus numquam ipsum reiciendis saepe veniam cupiditate explicabo autem. Repudiandae tempore dolore deserunt nemo voluptatum consectetur aspernatur expedita aliquid iste illo enim molestias vel animi quod.
					</div>
					<div class="col-md-4">
						<div class="story-image">
							<img src="images/responsive-design.jpg" alt="">
						</div>
					</div>
				</div> <!-- /.row -->
			</div> <!-- /#about -->
			
			<div id="services" class="section-content">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Perfil</h2>
						</div> <!-- /.section-title -->
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
				<div class='row contact-form'>
                <form id='form_register' action='../UserController/editarPerfil' method='POST'>
                    <div class='col-md-12'>
                        <input type='hidden' value='". $_SESSION["id_user"] ."' name='id_user' id='id_user'/>
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
                </form>
            </div>
			</div> <!-- /#services -->

			<div id="portfolio" class="section-content">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Portfolio</h2>
						</div> <!-- /.section-title -->
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
				<div class="row">
					<div class="col-md-4">
						<div class="portfolio-item">
							<div class="portfolio-thumb">
								<img src="images/portfolio/1.jpg" alt="Fantasy">
								<div class="overlay-p">
									<a href="images/portfolio/1.jpg" data-gal="prettyPhoto">
										<i class="fa fa-arrows-alt fa-2x"></i>
									</a>
								</div>
							</div> <!-- /.portfolio-thumb -->
							<h3 class="portfolio-title"><a href="#">Fantasy</a></h3>
						</div> <!-- /.portfolio-item -->
					</div> <!-- /.col-md-4 -->
					<div class="col-md-4">
						<div class="portfolio-item">
							<div class="portfolio-thumb">
								<img src="images/portfolio/2.jpg" alt="Botany">
								<div class="overlay-p">
									<a href="images/portfolio/2.jpg" data-gal="prettyPhoto">
										<i class="fa fa-arrows-alt fa-2x"></i>
									</a>
								</div>
							</div> <!-- /.portfolio-thumb -->
							<h3 class="portfolio-title"><a href="#">Botany</a></h3>
						</div> <!-- /.portfolio-item -->
					</div> <!-- /.col-md-4 -->
					<div class="col-md-4">
						<div class="portfolio-item">
							<div class="portfolio-thumb">
								<img src="images/portfolio/3.jpg" alt="Universe">
								<div class="overlay-p">
									<a href="images/portfolio/3.jpg" data-gal="prettyPhoto">
										<i class="fa fa-arrows-alt fa-2x"></i>
									</a>
								</div>
							</div> <!-- /.portfolio-thumb -->
							<h3 class="portfolio-title"><a href="#">Universe</a></h3>
						</div> <!-- /.portfolio-item -->
					</div> <!-- /.col-md-4 -->
				</div> <!-- /.row -->
				<div class="row">
					<div class="col-md-4">
						<div class="portfolio-item">
							<div class="portfolio-thumb">
								<img src="images/portfolio/4.jpg" alt="Channel">
								<div class="overlay-p">
									<a href="images/portfolio/4.jpg" data-gal="prettyPhoto">
										<i class="fa fa-arrows-alt fa-2x"></i>
									</a>
								</div>
							</div> <!-- /.portfolio-thumb -->
							<h3 class="portfolio-title"><a href="#">Channel</a></h3>
						</div> <!-- /.portfolio-item -->
					</div> <!-- /.col-md-4 -->
					<div class="col-md-4">
						<div class="portfolio-item">
							<div class="portfolio-thumb">
								<img src="images/portfolio/5.jpg" alt="Dragonfly">
								<div class="overlay-p">
									<a href="images/portfolio/5.jpg" data-gal="prettyPhoto">
										<i class="fa fa-arrows-alt fa-2x"></i>
									</a>
								</div>
							</div> <!-- /.portfolio-thumb -->
							<h3 class="portfolio-title"><a href="#">Dragonfly</a></h3>
						</div> <!-- /.portfolio-item -->
					</div> <!-- /.col-md-4 -->
					<div class="col-md-4">
						<div class="portfolio-item">
							<div class="portfolio-thumb">
								<img src="images/portfolio/6.jpg" alt="Titanium">
								<div class="overlay-p">
									<a href="images/portfolio/6.jpg" data-gal="prettyPhoto">
										<i class="fa fa-arrows-alt fa-2x"></i>
									</a>
								</div>
							</div> <!-- /.portfolio-thumb -->
							<h3 class="portfolio-title"><a href="#">Titanium</a></h3>
						</div> <!-- /.portfolio-item -->
					</div> <!-- /.col-md-4 -->
				</div> <!-- /.row -->
				<div class="row">
					<div class="col-md-12">
						<div class="load-more">
							<a href="#portfolio" class="largeButton portfolioBgColor">Load More</a>
						</div>
					</div>
				</div>
			</div> <!-- /#portfolio -->

			<div id="contact" class="section-content">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Contact Us</h2>
						</div> <!-- /.section-title -->
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
				<div class="row">
					<div class="col-md-12">
						<div class="map-holder">
							<div class="google-map-canvas" id="map-canvas">
                    		</div>
						</div> <!-- /.map-holder -->
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
				<div class="row contact-form">
					<div class="col-md-4">
						<label for="name-id" class="required">Name:</label>
						<input name="name-id" type="text" id="name-id" maxlength="40">
					</div> <!-- /.col-md-4 -->
					<div class="col-md-4">
						<label for="email-id" class="required">Email:</label>
						<input name="email-id" type="text" id="email-id" maxlength="40">
					</div> <!-- /.col-md-4 -->
					<div class="col-md-4">
						<label for="subject-id">Subject:</label>
						<input name="subject-id" type="text" id="subject-id" maxlength="60">
					</div> <!-- /.col-md-4 -->
					<div class="col-md-12">
						<label for="message-id" class="required">Message:</label>
						<textarea name="message-id" id="message-id" rows="6"></textarea>
					</div> <!-- /.col-md-12 -->
					<div class="col-md-12">
						<div class="submit-btn">
							<a href="#" class="largeButton contactBgColor">Send Message</a>
						</div> <!-- /.submit-btn -->
					</div> <!-- /.col-md-12 -->
				</div>
			</div> <!-- /#contact -->

		</div> <!-- /.container-fluid -->

		<div class="site-footer">
			<div class="first-footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="social-footer">
								<ul>
									<li><a href="#" class="fa fa-facebook"></a></li>
									<li><a href="#" class="fa fa-twitter"></a></li>
									<li><a href="#" class="fa fa-dribbble"></a></li>
									<li><a href="#" class="fa fa-linkedin"></a></li>
									<li><a href="#" class="fa fa-rss"></a></li>
								</ul>
							</div> <!-- /.social-footer -->
						</div> <!-- /.col-md-12 -->
					</div> <!-- /.row -->
				</div> <!-- /.container-fluid -->
			</div> <!-- /.first-footer -->
			<div class="bottom-footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6">
							<p class="copyright">Copyright © 2084 <a href="#">Your Company Name</a>
                            </p>
						</div> <!-- /.col-md-6 -->
						<div class="col-md-6 credits">
							<p><!-- Design: <a href="http://www.templatemo.com">templatemo</a> --></p>
						</div> <!-- /.col-md-6 -->
					</div> <!-- /.row -->
				</div> <!-- /.container-fluid -->
			</div> <!-- /.bottom-footer -->
		</div> <!-- /.site-footer -->

	</div> <!-- /#main-content -->
	<!--Fin contenido principal-->


	<!-- JavaScripts -->
	<script src="js/jquery-1.10.2.min.js"></script>
	
<!-- templatemo 394 sonic -->
</body>
</html>