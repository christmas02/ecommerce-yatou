<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>ELECTRO-CRED</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{asset('/stylle/css/bootstrap.min.css')}}" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="{{asset('/stylle/css/slick.css')}}" />
	<link type="text/css" rel="stylesheet" href="{{asset('/stylle/css/slick-theme.css')}}" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="{{asset('/stylle/css/nouislider.min.css')}}" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{asset('/stylle/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{asset('/stylle/css/style.css')}}" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
	<header>
		<!-- top Header -->
		<div id="top-header">
			<div class="container">
				<div class="pull-left">
					<span>Mttre le slogan de electro cred!</span>
				</div>
				<div class="pull-right">
				    <ul class="header-top-links">
						<li><a href="#">+225 47 26 26 97</a></li>
						<li><a href="#">+225 02 21 21 69</a></li>
						<li><a href="#">infos@electrocder.ci</a></li></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /top Header -->
		<!-- header -->
		<div id="header">
			<div class="container">
				<div class="col-md-3">
					<!-- Logo -->
					<div class="header-logo">
						<a class="logo" href="{{ url('/') }}">
							<img src="{{asset('/stylle/img/logos.png')}}" class="img-responsive" alt="">
						</a>
					</div>
					<!-- /Logo -->
				</div>
				<div class="col-md-4">
					<!-- Search -->
					<div class="header-search">
						<form>
							<input class="input search-input" type="text" placeholder="Enter your keyword">
							<select class="input search-categories">
								@foreach($categories as $categorie)
						           <option value="{{ $categorie->nom_cat }}">{{ $categorie->nom_cat }}</option>
					            @endforeach
							</select>
							<button class=" primary-btn"><i class="fa fa-search"></i></button>
						</form>
					</div>
					<!-- /Search -->
				</div>
				<div class="col-md-4 pull-right">
					<ul class="header-btns">
						<!-- Account -->
						<li class="header-account dropdown default-dropdown">
							<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-user-o"></i>
								</div>
								<strong class="text-uppercase"> </strong>
							</div>
							<a href="#" class="text-uppercase"></a>  <a href="#" class="text-uppercase"></a>
							
						</li>
						<!-- /Account -->

						<!-- Cart -->
						<li class="header-cart dropdown default-dropdown">
							<a href="{{ url('cart') }}">
								<div class="header-btns-icon">
									<i class="fa fa-shopping-cart"></i>
									<span class="qty">{{ Cart::instance('default')->count(false) }}</span>
								</div>
								<strong class="text-uppercase">Mon Panier </strong>
							</a>
						</li>
						<!-- /Cart -->

						<!-- Mobile nav toggle-->
						<li class="nav-toggle">
							<button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
						</li>
						<!-- / Mobile nav toggle -->
					</ul>
				</div>
			</div>
			<!-- header -->
		</div>
		<!-- container -->
	</header>
    <!-- /HEADER -->

    <!-- NAVIGATION -->
	<div id="navigation">
		<!-- container -->
		<div class="container">
			<div id="responsive-nav">
				<!-- category nav -->
				<div class="category-nav">
					<span class="category-header">CATÉGORIE <i class="fa fa-list"></i></span>
					<ul class="category-list">
					@foreach($categories as $categorie)
						<li><a href="{{ route('produitCat',['name' => $categorie->nom_cat]) }}">{{ $categorie->nom_cat }}</a></li>
					@endforeach
					</ul>
				</div>
				<!-- /category nav -->
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- /NAVIGATION -->

	<!-- HOME -->
	<div id="home">
		<!-- container -->
		<div class="container">
			<!-- home wrap -->
			<div class="home-wrap">
				<!-- home slick -->
				<div id="home-slick">
					<!-- banner -->
					<div class="banner banner-1">
						<img src="{{asset('/stylle/img/banner01.jpg')}}" alt="">
						<div class="banner-caption text-center">
							<h1></h1>
							<h3 class="white-color font-weak"></h3>
							<button class="primary-btn">J'ACHERTE</button>
						</div>
					</div>
					<!-- /banner -->

					<!-- banner -->
					<div class="banner banner-1">
						<img src="{{asset('/stylle/img/banner02.jpg')}}" alt="">
						<div class="banner-caption">
						    <h1></h1>
							<h3 class="white-color font-weak"></h3>
							<button class="primary-btn">J'ACHERTE</button>
						</div>
					</div>
					<!-- /banner -->

					<!-- banner -->
					<div class="banner banner-1">
						<img src="{{asset('/stylle/img/banner03.jpg')}}" alt="">
						<div class="banner-caption">
						    <h1></h1>
							<h3 class="white-color font-weak"></h3>
							<button class="primary-btn">J'ACHERTE</button>
						</div>
					</div>
					<!-- /banner -->
				</div>
				<!-- /home slick -->
			</div>
			<!-- /home wrap -->
		</div>
		<!-- /container -->
	</div>
	<!-- /HOME -->
    
    @yield('content') 

	<!-- FOOTER -->
	<footer id="footer" class="section section-grey">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<!-- footer logo -->
						<div class="footer-logo">
							<a class="logo" href="#"><img src="{{asset('/stylle/img/logos.png')}}" alt=""></a>
						</div>
						<!-- /footer logo -->

						<p>Créée en 2018, <b>ELECTROCRED</b> est  une entreprise dont la vocation principale est  la vente de biens d’équipements avec paiement à tempéraments</p>

						<!-- footer social -->
						<ul class="footer-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
						<!-- /footer social -->
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">MODE DE PAIEMENT</h3>
						<ul class="list-links">
						Si vous êtes un membre d’une des structures partenaire vous serez :  Prélevé directement à la source  Si vous êtes un particulier vous pourrez payer à la livraison ou par Mobile Money au 47 26 26 97/ 02 21 21 69
                        Numéro à apparaître sur le site 47 26 26 97/03 38 63 89

						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				<div class="clearfix visible-sm visible-xs"></div>

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">SERVICE CLIENT</h3>
						<ul class="list-links">
						Assurez-vous d’être un membre d’une entreprise partenaire pour les achats à crédit. Passez 
						votre commande et vous serrez livrer dans les 72 heures qui suivent. Vous pouvez également passer des commandes en appelant au 47 26 26 97/ 02 21 21 69 (coût de l’appel local).
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer subscribe -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">CONTACTER NOUS</h3>
						<p><i class="fa fa-map-marker icone"></i>Abidjan Cocody</p>
						<p><i class="fa fa-phone icone"></i>+225 47 26 26 97/ 02 21 21 69</p>
						<p><i class="fa fa-at icone"></i>infos@electrocred.ci</p>
					</div>
				</div>
				<!-- /footer subscribe -->
			</div>
			<!-- /row -->
			<hr>
			<!-- row -->
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<!-- footer copyright -->
					<div class="footer-copyright">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Electrocred <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank"></a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</div>
					<!-- /footer copyright -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="{{asset('/stylle/js/jquery.min.js')}}"></script>
	<script src="{{asset('/stylle/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('/stylle/js/slick.min.js')}}"></script>
	<script src="{{asset('/stylle/js/nouislider.min.js')}}"></script>
	<script src="{{asset('/stylle/js/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('/stylle/js/main.js')}}"></script>
</body>

</html>
