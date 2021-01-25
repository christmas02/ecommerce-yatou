<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Winner Store Abidjan</title>
    <!-- Bootstrap -->
    <link href="{{asset('winner/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('winner/css/jasny-bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('winner/css/lightbox.css')}}" rel="stylesheet">
    <link href="{{asset('winner/css/bewear-icons.css')}}" rel="stylesheet">
    <link href="{{asset('winner/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('winner/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('winner/css/main.css')}}" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.png">
	<!-- Store CSRF token for AJAX calls -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="wrapper">
    <header>
	<div class="navbar">
		<div class="navbar-header">
			<div class="container">
				<!-- ============================================================= LOGO MOBILE ============================================================= -->
				<a class="navbar-brand" href="home.html"><img src="assets/images/logo.png" class="logo" alt=""></a>
				<!-- ============================================================= LOGO MOBILE : END ============================================================= -->	
				<a class="btn responsive-menu pull-right" data-toggle="collapse" data-target=".navbar-collapse">					
					<div class="bar"></div>
					<div class="bar"></div>
					<div class="bar"></div>					
				</a>
			</div><!-- /.container -->
		</div><!-- /.navbar-header -->
		
		<div class="yamm">
			<div class="navbar-collapse collapse animate-dropdown">
				<div class="container">
					<a href="{{ url('/') }}" class="navbar-brand"><img src="{{asset('winner/images/logo-white.png')}}" class="logo" alt=""></a>
					
					<ul class="nav navbar-nav">						
						<li class="dropdown bewear-dropdown">
							<a href="{{ url('qui_nous_sommes') }}" class="dropdown-toggle"><span>A propos de nous</span></a>						
						</li>
						 @foreach($categories as $categorie)
						    <li class="dropdown bewear-dropdown">
							    <a href="" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown"><span>{{ $categorie->name }}</span></a>
								@if($categorie->sousCategorie()->count() > 0 )
							       <ul class="dropdown-menu bewear-dropdown-menu">
								   @foreach($categorie->sousCategorie as $souscategorie)
				 	                       <li><a href="{{ route('produitScat',['name' => $souscategorie->name, 'namecat' => $categorie->name ]) }}">{{ $souscategorie->name }}</a></li>
									@endforeach
							       </ul>	
								@endif					
						    </li>
                          @endforeach
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
						<li><a href=""><i class=""></i></a></li>
						<li><a id="menu-toggle" class="navbar-toggle shopping-cart-toggle" data-toggle="offcanvas" data-target="#shopping-cart-summary" href="{{ route('checkout') }}"><i class="icon icon-shopbag"></i><span class="item-count">{{ Cart::instance('default')->count(false) }}</span></a></li>
					</ul>  
                </div>
                

			</div><!-- /.navbar-collapse -->
		</div><!-- /.yamm -->
	</div><!-- /.navbar -->
</header><!-- /header -->


 <!-- Conetnt Page -->
    @yield('content') 
  <!-- End contente page-->
<div class="category-content">
	   <div class="category-features">
		    <div class="container">
			    <div class="row">
				    <div class="col-md-3 col-sm-6">
					    <div class="text-center">
						    <div class="media feature">
							    <div class="media-left">
								    <i class="icon icon-30-days-return"></i>
							    </div>
							    <div class="media-body media-middle">
								    <h4 class="media-heading">RETOUR 30 JOURS</h4>
							    </div>
						    </div>
					    </div>
				    </div><!--col-->

				    <div class="col-md-6 hidden-sm">
					    <div class="text-center">
						    <div class="media feature">
							    <div class="media-left">
								    <i class="icon icon-truck"></i>
							    </div>
							    <div class="media-body media-middle">
								    <h4 class="media-heading">LIVRAISON GRATUITE! SUR LES COMMANDES DE PLUS DE 20.000 FR CFA</h4>
							    </div>
						    </div>
					    </div>
				    </div><!--col-->

				    <div class="col-md-3 col-sm-6">
					    <div class="text-center">
						    <div class="media feature">
							    <div class="media-left">
								    <i class="icon icon-secure-payment"></i>
							    </div>
							    <div class="media-body media-middle">
								    <h4 class="media-heading">PAIEMENTS SÉCURISÉS</h4>
							    </div>
						    </div>
					    </div>
				    </div><!--col-->
			    </div><!--row-->
			</div><!--container-->
	    </div><!--category-features-->
</div><!--category-content-->	

<footer class="style-2">
	<div class="contact-and-links">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-4">
					<div class="footer-logo">
						<img src="{{asset('winner/images/footer-logo.png')}}" class="img-responsive" alt="Bewear">
					</div>
					<div class="contact-info">
						<address>
							<span class="address-title">Boutique Abidjan</span>
							Bingerville <br>Tel. +225 47 57 85 30 <a href="mailto:contact@winnerstoreabidjan.com">contact@winnerstoreabidjan.com</a>
						</address>
					</div>
					<div class="social-info">
						<span class="get-in-touch">Nous suivre sur nos reseaux</span>
						<ul class="list-social-icons list-unstyled">
				            <li><a class="icon" href="https://www.facebook.com/W.StoreCI/"><img src="{{asset('winner/images/facebook.png')}}" width="30"></a></li>
							<li><a class="icon" href="https://www.instagram.com/winner_store38/"><img src="{{asset('winner/images/instagram.png')}}" width="30"></a></li>
							<li><a class="icon" href="#"><img src="{{asset('winner/images/whatsapp.png')}}" width="30"></a></li>
						</ul><!-- /.list-social-icons -->
					</div>
				</div><!-- /.col -->
				@foreach($categories as $categorie)
				<div class="col-xs-12 col-sm-3 col-md-2">
					<div class="footer-links">
						<h3 class="links-title">{{ $categorie->name }}</h3>
						<ul class="list-links list-unstyled">
						@foreach($categorie->sousCategorie as $souscategorie)
				 	        <li><a href="{{ route('produitScat',['name' => $souscategorie->name, 'namecat' => $categorie->name ]) }}">{{ $souscategorie->name }}</a></li>
						@endforeach
						</ul>
					</div><!-- /.footer-links -->
				</div><!-- /.col -->
				@endforeach

				<div class="col-xs-12 col-sm-3 col-md-2">
					<div class="footer-links">
						<h3 class="links-title">Information</h3>
						<ul class="list-links list-unstyled">
							<li><a href="categories-grid.html">Your Account</a></li>
							<li><a href="categories-grid.html">Return Policy</a></li>
							<li><a href="categories-grid.html">FAQs</a></li>
							<li><a href="categories-grid.html">Manufactures</a></li>
							<li><a href="categories-grid.html">Suppliers</a></li>
							<li><a href="categories-grid.html">Specials</a></li>
							<li><a href="categories-grid.html">Shorts</a></li>
							<li><a href="categories-grid.html">Customer Service</a></li>
							<li><a href="categories-grid.html">Lookbook</a></li>
						</ul>
					</div><!-- /.footer-links -->
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /.contact-and-links -->
	<div class="copyright-bar">
        <div class="container clearfix">
        	<span class="pull-left">Copyright <a href="home.html">Bewear</a>. 2020: <a href="" target="_blank">impactafric</a></span>
        	<ul class="payment-methods pull-right list-unstyled">
        		<li><img src="assets/images/payments/p1.png" alt=""></li>
                <li><img src="assets/images/payments/p2.png" alt=""></li>
                <li><img src="assets/images/payments/p3.png" alt=""></li>
                <li><img src="assets/images/payments/p4.png" alt=""></li>
                <li><img src="assets/images/payments/p5.png" alt=""></li>
        	</ul>
        </div>
    </div><!-- /.copyright-bar -->
</footer><!-- /footer -->       

 
<!-- Modal -->
@if (sizeof(Cart::content()) > 0)
<div id="shopping-cart-summary" class="navmenu-shopping-cart navmenu navmenu-default navmenu-fixed-right offcanvas">
	<header>
		<h3 class="section-title">Panier <span class="item-count">{{ Cart::instance('default')->count(false) }}</span></h3>
		<ul class="currency-block animate-dropdown">
            <li class="dropdown">
                <a href="" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="false"><strong>XOF</strong> FRANC CFA</a>
            </li>
        </ul>
	</header>
	<div class="cart-products">
		<div class="cart-block-list">
			<ul>
			    <!-- Cart Box Start -->                                                
			    @foreach (Cart::content() as $item)
				<li>
					<div class="product">
						<div class='row'>
							<div class="col-md-4 col-sm-4">
								<a href=""><img src="{{ asset('image/'.$item->model->image)}}" width="100"  data-echo="{{ asset('image/'.$item->model->image)}}" alt="cart-image"></a>
							</div>
							<div class="col-md-8 col-sm-8">
								<div class="cart-info">
									<div class="product-name">
										<span class="quantity-formated"><span class="quantity">{{ $item->qty }}</span>x</span>
										<a href=""><br> {{ $item->name }}</a>
									</div>

									<div class="product-price">
										<span class='amount'>{{ number_format($item->price ) }} XOF</span>
									</div>
								</div>
							</div>
						</div>
						<form action="{{ url('cart', [$item->rowId]) }}" method="POST" class="side-by-side">
                            {!! csrf_field() !!}
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit"><span class="del-icone"><i class="remove-link"></i></span></button> 
                        </form>
					</div>
				</li>
				@endforeach
                <!-- Cart Box End -->
			</ul>

			<div class="cart-summary text-center inner-top-50">
                <h5 class="cart-total">Le total panier</h5>
                <p class="cart-total-price">{{ Cart::total() }} XOF</p>
                <p class="instruction">shipping costs are calculated at the next step,before you pay.</p>
                <a class="btn btn-primary btn-uppercase continue-shopping" href="{{ route('checkout') }}">Continuer votre achat</a>
            </div>
		</div>
	</div>
</div> 
@endif
<div class="overlay"></div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('winner/js/jquery-1.11.2.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('winner/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('winner/js/jasny-bootstrap.min.js')}}"></script>
    <script src="{{asset('winner/js/bootstrap-hover-dropdown.min.js')}}"></script>
    <script src="{{asset('winner/js/wow.min.js')}}"></script>
    <script src="{{asset('winner/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('winner/js/echo.min.js')}}"></script>
    <script src="{{asset('winner/js/lightbox.min.js')}}"></script>
    <script src="{{asset('winner/js/jquery.easing-1.3.min.js')}}"></script>
    <script src="{{asset('winner/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('winner/js/jquery.customSelect.min.js')}}"></script>
    <script src="{{asset('winner/js/jquery.bxslider.min.js')}}"></script>
    <script src="{{asset('winner/js/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('winner/js/pace.min.js')}}"></script>
    <script src="{{asset('winner/js/odometer.min.js')}}"></script>
	<script src="{{asset('winner/js/scripts.js')}}"></script>
	
	<script>
        (function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.quantity').on('change', function() {
                var id = $(this).attr('data-id')
                $.ajax({
                  type: "PATCH",
                  url: '{{ url("/cart") }}' + '/' + id,
                  data: {
                    'quantity': this.value,
                  },
                  success: function(data) {
                    window.location.href = '{{ url('/cart') }}';
                  }
                });
            });
        })();
    </script>
</body>
</html>
