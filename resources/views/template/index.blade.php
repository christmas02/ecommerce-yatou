<!DOCTYPE html>
<html lang="en">
  <head>
    <title>yatouaumarche.com - </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="template/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="template/css/animate.css">
    
    <link rel="stylesheet" href="template/css/owl.carousel.min.css">
    <link rel="stylesheet" href="template/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="template/css/magnific-popup.css">

    <link rel="stylesheet" href="template/css/aos.css">

    <link rel="stylesheet" href="template/css/ionicons.min.css">

    <link rel="stylesheet" href="template/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="template/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="template/css/style.css">
	<link rel="stylesheet" href="template/css/style-2.css">
	
  </head>
  <style>

  </style>
  <body class="goto-here">
		<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 225 88 76 04 86</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">contact@yatouaumarche.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">LIVRAISON 2-3 JOURS OUVRABLES</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container-fluid">
	      <a class="navbar-brand" href="{{ url('/') }}"><img src="template/images/logo.png" width='200'></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
			@foreach($categories as $categorie)
			    <li class="nav-item active"><a href="{{ route('produitCat',['name' => $categorie->nom_cat]) }}" class="nav-link">{{ $categorie->nom_cat }}</a></li>
			@endforeach
	          <li class="nav-item cta cta-colored"><a href="{{ url('cart') }}" class="nav-link"><span class="icon-shopping_cart"></span>{{ Cart::instance('default')->count(false) }}</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
	<!-- END nav -->
			  @if (session()->has('success_message'))
              <div class="alert alert-success texy-center">
                {{ session()->get('success_message') }}
              </div>
          @endif

    <section id="home-section" class="hero">
		<div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image: url(template/images/bg_2.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center">
	            <div class="col-sm-12 ftco-animate text-center">
	              <h1 class="mb-2">100% Frais &amp; biologique</h1>
	              <form method="POST" action="{{ action('Welcome@search') }}">
					 @csrf
                    <div class="input-group col-md-12">
                        <input type="text" name="libelle" class="search-query form-control" placeholder="Quelle produits souhaitez-vous commander" />
                        
                            <button type="submit" class="search">
								Recherche
                            </button>
                       
                    </div>
                </form>
	            </div>
			  </div>
	         </div>
		    </div>
		  
		  

	    </div>
    </section>

    <br>

	<section class="ftco-section ftco-category ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 order-md-last align-items-stretch d-flex">
								<div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(template/images/category.jpg);">
									<div class="text text-center">
										<h2>Des légumes</h2>
										<p>Protégez la santé de chaque maison</p>
										<p><a href="#" class="btn btn-primary">Achetez maintenant</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(template/images/category-1.jpg);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="#">légumes</a> </a></h2>
									</div>
								</div>
								<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(template/images/category-2.jpg);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="#">Fruits</a></h2>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(template/images/category-3.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Des jus</a></h2>
							</div>		
						</div>
						<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(template/images/category-4.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Séché</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>

    <section class="ftco-section">
    	<div class="container">
	    <div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">NOS PRODUITS</h2>
          </div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">
				@foreach($produits->slice(0, 8) as $produit)
				    @if( $produit->stock != 0 )
					<div class="col-md-6 col-lg-3 ftco-animate">
    				   <div class="product">
    					<a href="{{ route('show',['slug' => $produit->slug]) }}" class="img-prod"><img class="img-fluid" src="{{asset('/image/'.$produit->image)}}" alt="Colorlib Template">
    					    <!--<span class="status">30%</span>-->
							<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">{{ $produit->nom }}</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc"></span><span class="price-sale">
		    						   {{ number_format($produit->montant) }} XOF 
		    						</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="{{ route('show',['slug' => $produit->slug]) }}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
										<span>
											<form action="{{ url('/cart') }}" method="POST">					
				                              {!! csrf_field() !!}
			                                  <input type="hidden" name="id" value="{{ $produit->id }}">
                                              <input type="hidden" name="name" value="{{ $produit->nom }}">
                                              <input type="hidden" name="price" value="{{ $produit->montant }}">
											  <input type="hidden" name="nfois" value="3">
											  <button type="submit" class="" value=""></button>
			                               </form>
									    </span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				   </div>
    			    </div>
				   @else
				   <div class="col-md-6 col-lg-3 ftco-animate">
    				   <div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="{{asset('public/image/'.$produit->image)}}" alt="Colorlib Template">
    						<span class="status"></span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">{{ $produit->nom }}</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc"></span><span class="price-sale">{{ number_format($produit->montant) }} XOF</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="{{ route('show',['slug' => $produit->slug]) }}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				   </div>
    			    </div>
					
				   @endif
				<!-- /Product Single -->
				@endforeach
    		</div>
    	</div>
    </section>


	<section class="ftco-section ftco-no-pt ftco-no-pb py-5" style="background-image: url({{asset('/template/images/bg-footer.jpg')}});">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0 cl-light">plus de stress on vous livre chez vous</h2>
          	<span class="cl-light">Tous nos produits sont de qualite et frais</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
          </div>
        </div>
      </div>
    </section>
     <footer class="ftco-footer ftco-section bg-black">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
				<a href="#" class="mouse-icon">
					<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
				</a>
			</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 cl-light">
			     <a class="navbar-brand" href="{{ url('/') }}"><img src="template/images/logo-2.png" width='220'></a>
			  </h2>
              <p class="cl-light"></p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                 <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="cl-light">Avez vous une question ?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li class="cl-light"><span class="icon icon-map-marker"></span><span class="cl-light">Abidjan, Cote d'ivoire</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+225 88 76 04 86</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">contact@yatouaumarche.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p class="cl-light"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href=" target="_blank">Impactafric</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <!--<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>-->


  <script src="template/js/jquery.min.js"></script>
  <script src="template/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="template/js/popper.min.js"></script>
  <script src="template/js/bootstrap.min.js"></script>
  <script src="template/js/jquery.easing.1.3.js"></script>
  <script src="template/js/jquery.waypoints.min.js"></script>
  <script src="template/js/jquery.stellar.min.js"></script>
  <script src="template/js/owl.carousel.min.js"></script>
  <script src="template/js/jquery.magnific-popup.min.js"></script>
  <script src="template/js/aos.js"></script>
  <script src="template/js/jquery.animateNumber.min.js"></script>
  <script src="template/js/bootstrap-datepicker.js"></script>
  <script src="template/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="template/js/google-map.js"></script>
  <script src="template/js/main.js"></script>
    
  </body>
</html>