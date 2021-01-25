<!DOCTYPE html>
<html lang="">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>e-Commerce Gaz</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/favicon.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{asset('/template/css/bootstrap.css')}}">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('/template/css/magnific-popup.min.css')}}">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('/template/css/font-awesome.css')}}">
	<!-- Fancybox -->
	<link rel="stylesheet" href="{{asset('/template/css/jquery.fancybox.min.css')}}">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="{{asset('/template/css/themify-icons.css')}}">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{asset('/template/css/niceselect.css')}}">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('/template/css/animate.css')}}">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{asset('/template/css/flex-slider.min.css')}}">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('/template/css/owl-carousel.css')}}">
	<!-- Slicknav -->
    <link rel="stylesheet" href="{{asset('/template/css/slicknav.min.css')}}">
	
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="{{asset('/template/css/reset.css')}}">
	<link rel="stylesheet" href="{{asset('/template/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('/template/css/responsive.css')}}">
<style>
.prod:hover {
  color:  red; 
}
</style>	
</head>
<body class="js">
	<!-- Header -->
	<header class="header shop">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-12">
						<!-- Top Left -->
						<div class="top-left">
							<ul class="list-main">
								<li><i class="ti-headphone-alt"></i> (+225) 01 73 83 50 40</li>
								<!--<li><i class="ti-email"></i> support@shophub.com</li>-->
							</ul>
						</div>
						<!--/ End Top Left -->
					</div>
					<div class="col-lg-8 col-md-12 col-12">
						<!-- Top Right -->
						<div class="right-content">
							<ul class="list-main">
								<!-- Authentication Links -->
								@guest
								  <li class="">
									<a class="" href="{{ url('/inscription') }}">
										<i class="ti-user"></i> Inscription
									</a>
								  </li>
								  <li><i class="ti-power-off"></i><a href="login.html#" data-toggle="modal" data-target="#exampleModal">Connexion</a></li>
								  @else
								  <li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="ti-user"></i>  {{ Auth::user()->name }} 
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									  <a class="dropdown-item" href="compte.html"><i class="fa fa-user-circle-o" style="font-size: 20px;"></i> Votre Compte</a>
									  <a class="dropdown-item" href="SuivreCommande.html"><i class="fa fa-inbox" style="font-size: 20px;"></i> Vos Commandes</a>
									  <div class="dropdown-divider"></div>
									  <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Déconnexion') }}
									  </a>
									  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                      </form>
									</div>
								   </li>
								@endguest
								   
							</ul>
						</div>
						<!-- End Top Right -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="index.html"><img src="{{asset('/template/images/logo 2.png')}}" alt="logo" style="margin-top: -25px;"></a>
						</div>
						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<select class="form-control">
									<option></option>
								</select>
								<form class="search-form">
									<input type="text" placeholder="Search here..." name="search">
									<button value="search" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<div class="search-bar-top">
							<div class="row search-bar">
								<select class="col-lg-6 col-md-6 col-12 form-control">
									<option class="form-control">Distributeur</option>
									@foreach($categories as $items)
									<option class="form-control">{{ $items->name }}</option>
									@endforeach
								</select>
								<select class="col-lg-6 col-md-6 col-12form-control">
									<option>Type de bouteille</option>
									@foreach($souscategories as $items)
									<option class="form-control">{{ $items->name }}</option>
									@endforeach
								</select>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-12">
						<div class="right-bar">
							<!-- Search Form -->
							<!--<div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
							</div>-->
							<div class="sinlge-bar">
								<!--<a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>-->
							</div>
							
							<div class="sinlge-bar shopping">
								<a href="#" class="single-icon"><i class="ti-bag"></i> <span class="total-count">{{ Cart::instance('default')->count(false) }}</span></a>
								<!-- Shopping Item -->
								<div class="shopping-item">
									<div class="dropdown-cart-header">
										<span>{{ Cart::instance('default')->count(false) }} articles</span>
										<a href="{{ url('/cart') }}">Voir le panier</a>
									</div>
									<ul class="shopping-list">
									@foreach (Cart::content() as $item)
										<li>
											<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
											
											<a class="cart-img" href="#"><img src="{{ asset('image/'.$item->model->image)}}" alt="cart-image"></a>
											<h4><a href="#">{{ $item->name }}</a></h4>
											<p class="quantity">1x - <span class="amount">{{ number_format($item->price ) }} XOF</span></p>
										</li>
									@endforeach
									</ul>
									<div class="bottom">
										<div class="total">
											<span>Total :</span>
											<span class="total-amount">{{ Cart::total() }} XOF</span>
										</div>
										<a href="{{ route('checkout') }}" class="btn animate">Commander maintenant</a>
									</div>
								</div>
								<!--/ End Shopping Item -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">
						<div class="col-lg-9 col-12">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">	
										<div class="nav-inner">	
											<ul class="nav main-menu menu navbar-nav">
												<li class="active"><a href="{{ url('/') }}">Accueil</a></li>
												<li><a href="{{ url('/liste-de-produits') }}">Produits</a></li>
												
												<li><a href="">Nous contacter</a></li>
												<li><a href="">A Propos</a></li>
											</ul>
										</div>
									</div>
								</nav>
								<!--/ End Main Menu -->	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>
	<!--/ End Header -->

	<!-- Conetnt Page -->
	@yield('content') 
    <!-- End contente page-->

	<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
                            
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="quickview-content" style="margin-top: -45px;">
                                    <div class="wrapper fadeInDown">
										<div id="formContent">
										  <!-- Tabs Titles -->
										  <!-- Icon -->
										  <div class="fadeIn first">
											<img src="http://127.0.0.1:8001/template/images/logo%202.png" id="icon" alt="User Icon" />
										  </div>
									  
										  <!-- Login Form -->
										  <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
        									@csrf
										  
											<input id="email" class="fadeIn second" type="email" name="email" placeholder="Adresse electronique">
											@if ($errors->has('email'))
											<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('email') }}</strong>
											</span>
											@endif

											<input id="password" type="password" class="fadeIn third" placeholder="Mot de passe" name="password" required>
											@if ($errors->has('password'))
											<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('password') }}</strong>
											</span>
											@endif

											<input type="submit" class="fadeIn fourth" value="Se connecter">
											<div style="margin-top: -20px;">ou</div>
											<a href="register.html"><div class="underlineHover" ><b>Créer un compte</b></div></a><br><br>

										  </form>
										  <!-- Remind Passowrd -->
										  <div id="formFooter">
											<a class="underlineHover" href="#"><i>Mot de passe oublié?</i></a>
										  </div>
									  
										</div>
									  </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Modal end -->
	
	<!-- Start Footer Area -->
	<footer class="footer">
		<!-- Footer Top -->
		<div class="footer-top section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer about">
							<div class="logo">
								<a href="{{ url('/') }}"><img src="{{asset('/template/images/logo 2.png')}}" alt="logo"></a>
							</div>
							<p class="call">Vous avez une question? Appelez-nous 24/7<span><a href="tel:0173835040"> (+225) 01 73 83 50 40 </a></span></p>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Information</h4>
							<ul>
								<li><a href="#">Nous contacter</a></li>
								<li><a href="#">Termes et conditions</a></li>
								<li><a href="#">Aide</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Service Clients</h4>
							<ul>
								<li><a href="#">méthodes de payement</a></li>
								<li><a href="#">livraison</a></li>
								<li><a href="#">Politique de confidentialité</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer social">
							<h4>Retrouvez-nous sur :</h4>
							<!-- Single Widget -->
							<div class="contact">
								<ul>
									<li>info@eshop.com</li>
									<li>(+225) 01 73 83 50 40</li>
								</ul>
							</div>
							<!-- End Single Widget -->
							<ul>
								<li><a href="#"><i class="ti-facebook"></i></a></li>
								<li><a href="#"><i class="ti-twitter"></i></a></li>
								<li><a href="#"><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Top -->
		<div class="copyright">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="left">
								<p>Copyright © 2021 <a href="" target="_blank"></a>  -  All Rights Reserved.</p>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="right">
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- /End Footer Area -->
 
	<!-- Jquery -->
    <script src="{{asset('/template/js/jquery.min.js')}}"></script>
    <script src="{{asset('/template/js/jquery-migrate-3.0.0.js')}}"></script>
	<script src="{{asset('/template/js/jquery-ui.min.js')}}"></script>
	<!-- Popper JS -->
	<script src="{{asset('/template/js/popper.min.js')}}"></script>
	<!-- Bootstrap JS -->
	<script src="{{asset('/template/js/bootstrap.min.js')}}"></script>
	<!-- Color JS -->
	<script src="{{asset('/template/js/colors.js')}}"></script>
	<!-- Slicknav JS -->
	<script src="{{asset('/template/js/slicknav.min.js')}}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{asset('/template/js/owl-carousel.js')}}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{asset('/template/js/magnific-popup.js')}}"></script>
	<!-- Waypoints JS -->
	<script src="{{asset('/template/js/waypoints.min.js')}}"></script>
	<!-- Countdown JS -->
	<script src="{{asset('/template/js/finalcountdown.min.js')}}"></script>
	<!-- Nice Select JS -->
	<script src="{{asset('/template/js/nicesellect.js')}}"></script>
	<!-- Flex Slider JS -->
	<script src="{{asset('/template/js/flex-slider.js')}}"></script>
	<!-- ScrollUp JS -->
	<script src="{{asset('/template/js/scrollup.js')}}"></script>
	<!-- Onepage Nav JS -->
	<script src="{{asset('/template/js/onepage-nav.min.js')}}"></script>
	<!-- Easing JS -->
	<script src="{{asset('/template/js/easing.js')}}"></script>
	<!-- Active JS -->
	<script src="{{asset('/template/js/active.js')}}"></script>

</body>
</html>
