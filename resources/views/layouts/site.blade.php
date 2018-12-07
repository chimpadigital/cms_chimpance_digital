<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Freiberg 70 Años || Distribuidor Mayorista</title>
        <meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Twitter Card data -->
		<meta name="twitter:card" value="summary_large_image">

		<!-- Open Graph data -->
		<meta property="og:title" content="Freiberg 70 años" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://libreriamayorista.freiberg.com.ar/" />
		<meta property="og:image" content="http://libreriamayorista.freiberg.com.ar/img/redes.jpg" />
		<meta property="og:description" content="Distribuidor mayorista" />


        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico')}}">
        <!-- Place favicon.ico in the root directory -->
		
		<!-- google fonts  -->
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto+Slab:300' rel='stylesheet' type='text/css'>
		<!-- <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:300' rel='stylesheet' type='text/css'> -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->

		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<!-- animate css -->
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
		<!-- jquery-ui.min css -->
        <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
		<!-- RS slider css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('lib/rs-plugin/css/settings.css') }}" media="screen" />	
		<!-- font-awesome css -->
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
		<!-- style css -->
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
		<!-- responsive css -->
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
		<!-- modernizr js -->
        <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
    </head>
    <body>

    		
		<!-- header start -->
        <header>

			<!-- header-bottom-area start -->
			<div id="sticker" class="header-bottom-area">
				<div class="container">
					<div class="inner-container">
						<div class="row">
							<div class="col-md-2 col-sm-4 col-xs-6">
								<div class="logo">
									<a href="{{ route('index') }}"><img src="img/logo.png" alt="" /></a>
								</div>
							</div>
							<div class="col-md-4 hidden-xs hidden-sm">
								
							</div>
							<div class="col-md-6 col-sm-8 col-xs-6 header-right">
								<div class="main-menu">
									<nav>
										<ul>
											<li class="hidden-xs hidden-sm">
												<a href="http://empresas.freiberg.com.ar/">
													<button class="menu button">
													<i class="material-icons left">shopping_cart</i>
													<p class="right m-0"> Empresas</p>
													</button>
												</a>
											</li>
											<li class="hidden-xs hidden-sm">
												<a href="http://minoristas.freiberg.com.ar/">
													<button class="menu button">
														<i class="material-icons left">shopping_cart</i>
														<p class="right m-0"> Librerías</p>
													</button>
												</a>
											</li>
											<li class="menu hidden-xs hidden-sm"><a href="{{ route('extranet') }}" class="menu-top"><img src="img/extranet.svg" alt="" class="icono-menu">  Extranet</a></li>
											<li class="menu hidden-xs hidden-sm"><a href="{{ route('contacto') }}" class="menu-top"><img src="img/contacto.svg" alt="" class="icono-menu" style="margin-top: 3px;">  Contacto</a></li>
											<li>
													<div class="button_container" id="toggle"><span class="top"></span><span class="middle"></span><span class="bottom"></span></div>
													<div class="overlay" id="overlay">
													  <nav class="overlay-menu">
														<ul>
															<li><a href="{{ route('index') }}">Inicio</a></li>
															<li><a href="{{ route('index') }}#nosotros">Quienes somos</a></li>
															<li><a href="{{ route('index') }}#productos">Productos</a></li>
															<li><a href="{{ route('index') }}#novedades">Novedades</a></li>
															<li><a href="{{ route('catalogo') }}">Catálogo</a></li>
															<li><a href="{{ route('contacto') }}">Contacto</a></li>
															<li class="hidden-lg hidden-md">
																<a href="http://empresas.freiberg.com.ar/">
																	
																	<i class="material-icons left">shopping_cart</i>
																	<p class="m-0"> Empresas</p>
																	
																</a>
															</li>
															<li class="hidden-lg hidden-md">
																<a href="http://minoristas.freiberg.com.ar/">
																	
																		<i class="material-icons left">shopping_cart</i>
																		<p class="m-0"> Librerías</p>
																	
																</a>
															</li>
															<li class="menu hidden-lg hidden-md"><a href="/extranet.php" class="menu-top">Extranet</a></li>
															
														</ul>
													  </nav>
													</div>
											</li>

										</ul>
									</nav>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- header-bottom-area end -->		
		</header>
		
		@yield('content')

		<!-- footer start -->
		<footer>
			<div class="footer-top-area">
				<div class="container">
					<div class="row">
						<!-- footer-widget start -->
						<div class="col-lg-3 col-md-3 col-sm-12 footer-marg">
							<div class="footer-widget">
								<h3 class="m-b-30">Contacto</h3>
								<ul class="contacto">
									<li class="white"><i><img src="img/telefono.svg" alt=""></i> 351 553-8500</li>
									<li class="white"><i><img src="img/mail.svg" alt=""></i> ventas@freiberg.com.ar</li>
								</ul>
								<img src="img/fiscal.jpg" class="fiscal" alt="" width="167px">
																
							</div>
						</div>
						<!-- footer-widget end -->					
						<!-- footer-widget start -->
						<div class="col-lg-4 col-md-4 hidden-md hidden-sm footer-marg">
							<div class="footer-widget">
								<h3 class="m-b-30">Dirección</h3>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3404.7380363426787!2d-64.17968758536027!3d-31.421342881402513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9432a29a0193185f%3A0xb6b5064ff3f6c670!2sBalcarce+268%2C+X5000HWF+C%C3%B3rdoba!5e0!3m2!1ses!2sar!4v1541630080797" width="100%" height="225" frameborder="0" style="border:0" allowfullscreen></iframe>							
							</div>
						</div>
						<!-- footer-widget end -->
						<!-- footer-widget start -->
						<div class="col-lg-1 col-md-1 col-sm-1 hidden-sm footer-marg">
							
						</div>
						<!-- footer-widget end -->
						<!-- footer-widget start -->
						<div class="col-lg-2 col-md-2 col-sm-12 footer-marg">
							<div class="footer-widget">
								<h3 class="m-b-30">Freiberg</h3>
								<ul class="footer-menu">
									<li><a href="{{ route('index') }}">Inicio</a></li>
									<li><a href="{{ route('index') }}#nosotros">Quienes somos</a></li>
									<li><a href="{{ route('index') }}#productos">Productos</a></li>
									<li><a href="{{ route('index') }}#novedades">Novedades</a></li>
									<li><a href="{{ route('catalogo') }}">Catálogo</a></li>
									<li><a href="{{ route('contacto') }}">Contacto</a></li>
								</ul>
							</div>
						</div>
						<!-- footer-widget end -->
						<!-- footer-widget start -->
						<div class="col-lg-2 col-md-2 col-sm-12 footer-marg">
							<div class="footer-widget">
								<h3 class="m-b-30">Enlaces Útiles</h3>
								<ul class="footer-menu">
										<li><a href="http://reporting.freiberg.com.ar:8787/ReportServer?%2fProyecto+de+informe2%2fpermisos&rs:Command=Render">Extranet proveedores</a></li>
										<li><a href="http://reporting.freiberg.com.ar:8787/ReportServer/Pages/ReportViewer.aspx?%2fProyecto+de+informe2%2fpermisos_cli&rs%3aCommand=Render">Extranet clientes</a></li>
										<li><a href="http://www.freiberg.com.ar/instructivo_link.pdf">Instructivo de pagos Link</a></li>
									</ul>
							</div>
						</div>
						<!-- footer-widget end -->						
					</div>
				</div>
			</div>
			<!-- footer-top-area end -->
			<!-- footer-bottom-area start -->
			<div class="footer-bottom-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<div class="copyright">
								<p> © <a href="https://chimpancedigital.com.ar">Chimpancé Digital 2018</a></p>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- footer-bottom-area end -->			
		</footer>
		<!-- footer end -->	


		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="{{ asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
		<!-- <script type="text/javascript" src="//cdn.rawgit.com/icons8/bower-webicon/v0.10.7/jquery-webicon.min.js"></script> -->
		<!-- bootstrap js -->
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>
		<!-- owl.carousel js -->
        <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
		<!-- meanmenu js -->
        <script src="{{ asset('js/jquery.meanmenu.js')}}"></script>
		<!-- jquery-ui js -->
        <script src="{{ asset('js/jquery-ui.min.js')}}"></script>
		<!-- RS-Plugin JS -->
		<script type="text/javascript" src="{{ asset('lib/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>   
		<script type="text/javascript" src="{{ asset('lib/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
		<script src="{{ asset('lib/rs-plugin/rs.home.js')}}"></script>		
		<!-- wow js -->
        <script src="{{ asset('js/wow.min.js')}}"></script>
		<!-- plugins js -->
        <script src="{{ asset('js/plugins.js')}}"></script>
		<!-- main js -->
		<script src="{{ asset('js/main.js')}}"></script>
		<script>
$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    thumbs: true,
    thumbsPrerendered: true
  });
});
		</script>
		<script>
		$('#toggle').click(function() {
				$(this).toggleClass('active');
				$('#overlay').toggleClass('open');
			   });
		</script>
    </body>
</html>
