@extends('template.header')

@section('content')
	<!-- ============================================================= SECTION – HERO ============================================================= -->

<section id="hero" class="home-2-slider wow fadeIn">
	<div id="owl-main" class="owl-carousel">

		<div class="item" style="background-image: url(winner/images/hero/home-2.jpg);">
			<div class="container">
				<div class="caption vertical-center text-left">

					<h1 class="fadeInDown-1 title"><span class="first-letter">J</span>anuary Looks</h1>
					<p class="fadeInDown-2 tagline">New Collection</p>
					<div class="fadeInDown-3">
						<a href="" class="btn btn-default btn-block view-look-button">View LookBook</a>
					</div><!-- /.fadeIn -->

				</div><!-- /.caption -->
			</div><!-- /.container -->
		</div><!-- /.item -->

		<div class="item" style="background-image: url(winner/images/hero/home-1.jpg);">
			<div class="container">
				<div class="caption vertical-center text-left">

					<h1 class="fadeInDown-1 title"><span class="first-letter">J</span>anuary Looks</h1>
					<p class="fadeInDown-2 tagline">New Collection</p>
					<div class="fadeInDown-3">
						<a href="lookbook-2.html" class="btn btn-default btn-block view-look-button">View LookBook</a>
					</div><!-- /.fadeIn -->

				</div><!-- /.caption -->
			</div><!-- /.container -->
		</div><!-- /.item -->

		<div class="item" style="background-image: url(winner/images/hero/home-2.jpg);">
			<div class="container">
				<div class="caption vertical-center text-left">

					<h1 class="fadeInDown-1 title"><span class="first-letter">J</span>anuary Looks</h1>
					<p class="fadeInDown-2 tagline">New Collection</p>
					<div class="fadeInDown-3">
						<a href="lookbook-2.html" class="btn btn-default btn-block view-look-button">View LookBook</a>
					</div><!-- /.fadeIn -->

				</div><!-- /.caption -->
			</div><!-- /.container -->
		</div><!-- /.item -->

		<div class="item" style="background-image: url(winner/images/hero/home-1.jpg);">
			<div class="container">
				<div class="caption vertical-center text-left">

					<h1 class="fadeInDown-1 title"><span class="first-letter">J</span>anuary Looks</h1>
					<p class="fadeInDown-2 tagline">New Collection</p>
					<div class="fadeInDown-3">
						<a href="lookbook-2.html" class="btn btn-default btn-block view-look-button">View LookBook</a>
					</div><!-- /.fadeIn -->

				</div><!-- /.caption -->
			</div><!-- /.container -->
		</div><!-- /.item -->

	</div><!-- /.owl-carousel -->
</section>

<!-- ============================================================= SECTION – HERO : END ============================================================= -->
	
	<div class="container">
		<section class="home-2-features inner-top-xs">
			<div class="row">
				<div class="col-md-6 col-sm-12  feature-block">
					<a href="categories-grid.html" class="media features">
						<div class="media-left">
							<div class="image">
								<img width="300" height="300" class="lazy-load media-object img-responsive" src="winner/images/blank.gif" data-echo="winner/images/products/feature1.jpg" alt="">
							</div>
						</div>
						<div class="media-body media-middle">
							<div class="section text-center">
								<h5 class="name">john williams</h5>
								<h3 class="tagline">perfection</h3>
							</div>
						</div>
					</a><!-- /.media -->

					<a href="categories-grid.html" class="media features">
						<div class="media-body media-middle">
							<div class="section text-center">
								<h5 class="name">sunglasses</h5>
								<h3 class="tagline">summer 2015</h3>
							</div>
						</div>
						<div class="media-right">
							<div class="image">
								<img width="300" height="300" class="lazy-load media-object img-responsive" src="winner/images/blank.gif" data-echo="winner/images/products/feature2.jpg" alt="">
							</div>
						</div>
					</a><!-- /.media -->
				</div><!-- /.feature-block -->

				<div class="col-md-6 col-sm-12 feature-block big-image hidden-sm">
					<a href="categories-grid.html">
						<img width="570" height="600" class="img-responsive lazy-load" src="winner/images/blank.gif" data-echo="winner/images/products/feature3.jpg" alt="">
						<div class="centered-caption">
							<div class="banner-text text-center">
								<h4 class="banner-title">clothing</h4>
								<h2 class="tagline">sharp styles</h2>
							</div>
						</div>
					</a>
				</div><!-- /.feature-block -->
			</div><!-- /.row -->
		</section><!-- /.home-2-features -->

		<div class="product-tab-ver2">
		<div role="tabpanel">
		  <!-- Nav tabs -->
		    <div class="tab-nav-holder">
			    <ul class="nav nav-tabs uppercase" role="tablist">
			        <li role="presentation" class="active"><a href="#just-arrived" aria-controls="just-arrived" role="tab" data-toggle="tab">notre collection</a></li>
			        <li role="presentation"><a href="#best-seller" aria-controls="best-seller" role="tab" data-toggle="tab">Never Give Up</a></li>
			        <li role="presentation"><a href="#hot-products" aria-controls="hot-products" role="tab" data-toggle="tab">Cheveux</a></li>
			    </ul><!--nav-tabs-->
		    </div><!--tab-nav-holder-->

		    <!-- Tab panes -->
		    <div class="tab-content inner-top-xs">
			    <div role="tabpanel" class="tab-pane active" id="just-arrived">
				
			    	<div class="row grid-view">
					@foreach($produits->slice(0, 8) as $produit)
				    @if( $produit->stock != 0 )
			    		<div class="col-md-4 col-sm-6 col-lg-3 col-xs-12 product-holder">
							<div class="product">
								<div class="image">
									<a href="{{ route('show',['slug' => $produit->slug]) }}"><img class="img-responsive" width="258" src="{{asset('/image/'.$produit->image)}}" data-echo="{{asset('/image/'.$produit->image)}}"  alt=""></a>
								</div><!-- .image -->
								<div class="product-info m-t-20 text-center">
									<a class="quick-view uppercase" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="icon icon-more-colors-product"></i>Voire </a>
									
									<h5 class="name uppercase"><a href="{{ route('show',['slug' => $produit->slug]) }}">{{ $produit->nom }}</a></h5>
									<div class="product-price">
										<ins><span class="amount">{{ number_format($produit->montant) }} XOF</span></ins>
									</div><!-- .product-price -->
									<div class="buttons-holder m-t-20">					
										<div class="add-cart-holder">
											<a title="Add to cart" href="{{ route('show',['slug' => $produit->slug]) }}" class="cart-button btn btn-primary">
												<span>Ajouter au panier</span>
											</a>
										</div><!-- .add-cart-holder -->
									</div><!-- .buttons-holder -->
								</div><!-- .product-info -->
							</div>
                        </div>
                    @endif
				    @endforeach
             		</div><!-- .row -->			    	
			    </div><!-- .tab-pane -->

			    <div role="tabpanel" class="tab-pane fade" id="best-seller">
			    	<div class="row grid-view">
			    		<div class="col-md-4 col-sm-6 col-lg-3 col-xs-12 product-holder">
							<div class="product">
								<div class="image">
									<a href="product-simple.html"><img class="img-responsive" width="258" src="assets/images/blank.gif" data-echo="winner/images/products/12.jpg"  alt=""></a>
								</div><!-- .image -->
								<div class="product-info m-t-20 text-center">
									<a class="quick-view uppercase" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="icon icon-more-colors-product"></i>Voire </a>
									
									<h5 class="name uppercase"><a href="product-simple.html">Contrast Shoulder Path</a></h5>
									<div class="product-price">
										<ins><span class="amount">$110</span></ins>
									</div><!-- .product-price -->
									<div class="buttons-holder m-t-20">					
										<div class="add-cart-holder">
											<a title="Add to cart" href="checkout" class="cart-button btn btn-primary">
												<span>Ajouter au panier</span>
											</a>
										</div><!-- .add-cart-holder -->
									</div><!-- .buttons-holder -->
								</div><!-- .product-info -->
							</div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-3 col-xs-12 product-holder">
							<div class="product">
								<div class="image">
									<a href="product-simple.html"><img class="img-responsive" width="258" src="assets/images/blank.gif" data-echo="winner/images/products/12.jpg"  alt=""></a>
								</div><!-- .image -->
								<div class="product-info m-t-20 text-center">
									<a class="quick-view uppercase" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="icon icon-more-colors-product"></i>Voire </a>
									
									<h5 class="name uppercase"><a href="product-simple.html">Contrast Shoulder Path</a></h5>
									<div class="product-price">
										<ins><span class="amount">$110</span></ins>
									</div><!-- .product-price -->
									<div class="buttons-holder m-t-20">					
										<div class="add-cart-holder">
											<a title="Add to cart" href="checkout" class="cart-button btn btn-primary">
												<span>Ajouter au panier</span>
											</a>
										</div><!-- .add-cart-holder -->
									</div><!-- .buttons-holder -->
								</div><!-- .product-info -->
							</div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-3 col-xs-12 product-holder">
							<div class="product">
								<div class="image">
									<a href="product-simple.html"><img class="img-responsive" width="258" src="assets/images/blank.gif" data-echo="winner/images/products/12.jpg"  alt=""></a>
								</div><!-- .image -->
								<div class="product-info m-t-20 text-center">
									<a class="quick-view uppercase" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="icon icon-more-colors-product"></i>Voire </a>
									
									<h5 class="name uppercase"><a href="product-simple.html">Contrast Shoulder Path</a></h5>
									<div class="product-price">
										<ins><span class="amount">$110</span></ins>
									</div><!-- .product-price -->
									<div class="buttons-holder m-t-20">					
										<div class="add-cart-holder">
											<a title="Add to cart" href="checkout" class="cart-button btn btn-primary">
												<span>Ajouter au panier</span>
											</a>
										</div><!-- .add-cart-holder -->
									</div><!-- .buttons-holder -->
								</div><!-- .product-info -->
							</div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-3 col-xs-12 product-holder">
							<div class="product">
								<div class="image">
									<a href="product-simple.html"><img class="img-responsive" width="258" src="assets/images/blank.gif" data-echo="winner/images/products/12.jpg"  alt=""></a>
								</div><!-- .image -->
								<div class="product-info m-t-20 text-center">
									<a class="quick-view uppercase" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="icon icon-more-colors-product"></i>Voire </a>
									
									<h5 class="name uppercase"><a href="product-simple.html">Contrast Shoulder Path</a></h5>
									<div class="product-price">
										<ins><span class="amount">$110</span></ins>
									</div><!-- .product-price -->
									<div class="buttons-holder m-t-20">					
										<div class="add-cart-holder">
											<a title="Add to cart" href="checkout" class="cart-button btn btn-primary">
												<span>Ajouter au panier</span>
											</a>
										</div><!-- .add-cart-holder -->
									</div><!-- .buttons-holder -->
								</div><!-- .product-info -->
							</div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-3 col-xs-12 product-holder">
							<div class="product">
								<div class="image">
									<a href="product-simple.html"><img class="img-responsive" width="258" src="assets/images/blank.gif" data-echo="winner/images/products/12.jpg"  alt=""></a>
								</div><!-- .image -->
								<div class="product-info m-t-20 text-center">
									<a class="quick-view uppercase" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="icon icon-more-colors-product"></i>Voire </a>
									
									<h5 class="name uppercase"><a href="product-simple.html">Contrast Shoulder Path</a></h5>
									<div class="product-price">
										<ins><span class="amount">$110</span></ins>
									</div><!-- .product-price -->
									<div class="buttons-holder m-t-20">					
										<div class="add-cart-holder">
											<a title="Add to cart" href="checkout" class="cart-button btn btn-primary">
												<span>Ajouter au panier</span>
											</a>
										</div><!-- .add-cart-holder -->
									</div><!-- .buttons-holder -->
								</div><!-- .product-info -->
							</div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-3 col-xs-12 product-holder">
							<div class="product">
								<div class="image">
									<a href="product-simple.html"><img class="img-responsive" width="258" src="assets/images/blank.gif" data-echo="winner/images/products/12.jpg"  alt=""></a>
								</div><!-- .image -->
								<div class="product-info m-t-20 text-center">
									<a class="quick-view uppercase" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="icon icon-more-colors-product"></i>Voire </a>
									
									<h5 class="name uppercase"><a href="product-simple.html">Contrast Shoulder Path</a></h5>
									<div class="product-price">
										<ins><span class="amount">$110</span></ins>
									</div><!-- .product-price -->
									<div class="buttons-holder m-t-20">					
										<div class="add-cart-holder">
											<a title="Add to cart" href="checkout" class="cart-button btn btn-primary">
												<span>Ajouter au panier</span>
											</a>
										</div><!-- .add-cart-holder -->
									</div><!-- .buttons-holder -->
								</div><!-- .product-info -->
							</div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-3 col-xs-12 product-holder">
							<div class="product">
								<div class="image">
									<a href="product-simple.html"><img class="img-responsive" width="258" src="assets/images/blank.gif" data-echo="winner/images/products/12.jpg"  alt=""></a>
								</div><!-- .image -->
								<div class="product-info m-t-20 text-center">
									<a class="quick-view uppercase" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="icon icon-more-colors-product"></i>Voire </a>
									
									<h5 class="name uppercase"><a href="product-simple.html">Contrast Shoulder Path</a></h5>
									<div class="product-price">
										<ins><span class="amount">$110</span></ins>
									</div><!-- .product-price -->
									<div class="buttons-holder m-t-20">					
										<div class="add-cart-holder">
											<a title="Add to cart" href="checkout" class="cart-button btn btn-primary">
												<span>Ajouter au panier</span>
											</a>
										</div><!-- .add-cart-holder -->
									</div><!-- .buttons-holder -->
								</div><!-- .product-info -->
							</div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-3 col-xs-12 product-holder">
							<div class="product">
								<div class="image">
									<a href="product-simple.html"><img class="img-responsive" width="258" src="assets/images/blank.gif" data-echo="winner/images/products/12.jpg"  alt=""></a>
								</div><!-- .image -->
								<div class="product-info m-t-20 text-center">
									<a class="quick-view uppercase" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="icon icon-more-colors-product"></i>Voire </a>
									
									<h5 class="name uppercase"><a href="product-simple.html">Contrast Shoulder Path</a></h5>
									<div class="product-price">
										<ins><span class="amount">$110</span></ins>
									</div><!-- .product-price -->
									<div class="buttons-holder m-t-20">					
										<div class="add-cart-holder">
											<a title="Add to cart" href="checkout" class="cart-button btn btn-primary">
												<span>Ajouter au panier</span>
											</a>
										</div><!-- .add-cart-holder -->
									</div><!-- .buttons-holder -->
								</div><!-- .product-info -->
							</div>
						</div>
             		</div>
						<!-- .row -->			    	
			    </div><!--tab-pane-->

			    <div role="tabpanel" class="tab-pane fade" id="hot-products">
				    <div class="row grid-view">
			    		<div class="col-md-4 col-sm-6 col-lg-3 col-xs-12 product-holder">
							<div class="product">
								<div class="image">
									<a href="product-simple.html"><img class="img-responsive" width="258" src="assets/images/blank.gif" data-echo="winner/images/products/12.jpg"  alt=""></a>
								</div><!-- .image -->
								<div class="product-info m-t-20 text-center">
									<a class="quick-view uppercase" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="icon icon-more-colors-product"></i>Voire </a>
									
									<h5 class="name uppercase"><a href="product-simple.html">Contrast Shoulder Path</a></h5>
									<div class="product-price">
										<ins><span class="amount">$110</span></ins>
									</div><!-- .product-price -->
									<div class="buttons-holder m-t-20">					
										<div class="add-cart-holder">
											<a title="Add to cart" href="checkout" class="cart-button btn btn-primary">
												<span>Ajouter au panier</span>
											</a>
										</div><!-- .add-cart-holder -->
									</div><!-- .buttons-holder -->
								</div><!-- .product-info -->
							</div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-3 col-xs-12 product-holder">
							<div class="product">
								<div class="image">
									<a href="product-simple.html"><img class="img-responsive" width="258" src="assets/images/blank.gif" data-echo="winner/images/products/12.jpg"  alt=""></a>
								</div><!-- .image -->
								<div class="product-info m-t-20 text-center">
									<a class="quick-view uppercase" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="icon icon-more-colors-product"></i>Voire </a>
									
									<h5 class="name uppercase"><a href="product-simple.html">Contrast Shoulder Path</a></h5>
									<div class="product-price">
										<ins><span class="amount">$110</span></ins>
									</div><!-- .product-price -->
									<div class="buttons-holder m-t-20">					
										<div class="add-cart-holder">
											<a title="Add to cart" href="checkout" class="cart-button btn btn-primary">
												<span>Ajouter au panier</span>
											</a>
										</div><!-- .add-cart-holder -->
									</div><!-- .buttons-holder -->
								</div><!-- .product-info -->
							</div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-3 col-xs-12 product-holder">
							<div class="product">
								<div class="image">
									<a href="product-simple.html"><img class="img-responsive" width="258" src="assets/images/blank.gif" data-echo="winner/images/products/12.jpg"  alt=""></a>
								</div><!-- .image -->
								<div class="product-info m-t-20 text-center">
									<a class="quick-view uppercase" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="icon icon-more-colors-product"></i>Voire </a>
									
									<h5 class="name uppercase"><a href="product-simple.html">Contrast Shoulder Path</a></h5>
									<div class="product-price">
										<ins><span class="amount">$110</span></ins>
									</div><!-- .product-price -->
									<div class="buttons-holder m-t-20">					
										<div class="add-cart-holder">
											<a title="Add to cart" href="checkout" class="cart-button btn btn-primary">
												<span>Ajouter au panier</span>
											</a>
										</div><!-- .add-cart-holder -->
									</div><!-- .buttons-holder -->
								</div><!-- .product-info -->
							</div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-3 col-xs-12 product-holder">
							<div class="product">
								<div class="image">
									<a href="product-simple.html"><img class="img-responsive" width="258" src="assets/images/blank.gif" data-echo="winner/images/products/12.jpg"  alt=""></a>
								</div><!-- .image -->
								<div class="product-info m-t-20 text-center">
									<a class="quick-view uppercase" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="icon icon-more-colors-product"></i>Voire </a>
									
									<h5 class="name uppercase"><a href="product-simple.html">Contrast Shoulder Path</a></h5>
									<div class="product-price">
										<ins><span class="amount">$110</span></ins>
									</div><!-- .product-price -->
									<div class="buttons-holder m-t-20">					
										<div class="add-cart-holder">
											<a title="Add to cart" href="checkout" class="cart-button btn btn-primary">
												<span>Ajouter au panier</span>
											</a>
										</div><!-- .add-cart-holder -->
									</div><!-- .buttons-holder -->
								</div><!-- .product-info -->
							</div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-3 col-xs-12 product-holder">
							<div class="product">
								<div class="image">
									<a href="product-simple.html"><img class="img-responsive" width="258" src="assets/images/blank.gif" data-echo="winner/images/products/12.jpg"  alt=""></a>
								</div><!-- .image -->
								<div class="product-info m-t-20 text-center">
									<a class="quick-view uppercase" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="icon icon-more-colors-product"></i>Voire </a>
									
									<h5 class="name uppercase"><a href="product-simple.html">Contrast Shoulder Path</a></h5>
									<div class="product-price">
										<ins><span class="amount">$110</span></ins>
									</div><!-- .product-price -->
									<div class="buttons-holder m-t-20">					
										<div class="add-cart-holder">
											<a title="Add to cart" href="checkout" class="cart-button btn btn-primary">
												<span>Ajouter au panier</span>
											</a>
										</div><!-- .add-cart-holder -->
									</div><!-- .buttons-holder -->
								</div><!-- .product-info -->
							</div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-3 col-xs-12 product-holder">
							<div class="product">
								<div class="image">
									<a href="product-simple.html"><img class="img-responsive" width="258" src="assets/images/blank.gif" data-echo="winner/images/products/12.jpg"  alt=""></a>
								</div><!-- .image -->
								<div class="product-info m-t-20 text-center">
									<a class="quick-view uppercase" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="icon icon-more-colors-product"></i>Voire </a>
									
									<h5 class="name uppercase"><a href="product-simple.html">Contrast Shoulder Path</a></h5>
									<div class="product-price">
										<ins><span class="amount">$110</span></ins>
									</div><!-- .product-price -->
									<div class="buttons-holder m-t-20">					
										<div class="add-cart-holder">
											<a title="Add to cart" href="checkout" class="cart-button btn btn-primary">
												<span>Ajouter au panier</span>
											</a>
										</div><!-- .add-cart-holder -->
									</div><!-- .buttons-holder -->
								</div><!-- .product-info -->
							</div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-3 col-xs-12 product-holder">
							<div class="product">
								<div class="image">
									<a href="product-simple.html"><img class="img-responsive" width="258" src="assets/images/blank.gif" data-echo="winner/images/products/12.jpg"  alt=""></a>
								</div><!-- .image -->
								<div class="product-info m-t-20 text-center">
									<a class="quick-view uppercase" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="icon icon-more-colors-product"></i>Voire </a>
									
									<h5 class="name uppercase"><a href="product-simple.html">Contrast Shoulder Path</a></h5>
									<div class="product-price">
										<ins><span class="amount">$110</span></ins>
									</div><!-- .product-price -->
									<div class="buttons-holder m-t-20">					
										<div class="add-cart-holder">
											<a title="Add to cart" href="checkout" class="cart-button btn btn-primary">
												<span>Ajouter au panier</span>
											</a>
										</div><!-- .add-cart-holder -->
									</div><!-- .buttons-holder -->
								</div><!-- .product-info -->
							</div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-3 col-xs-12 product-holder">
							<div class="product">
								<div class="image">
									<a href="product-simple.html"><img class="img-responsive" width="258" src="assets/images/blank.gif" data-echo="winner/images/products/12.jpg"  alt=""></a>
								</div><!-- .image -->
								<div class="product-info m-t-20 text-center">
									<a class="quick-view uppercase" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="icon icon-more-colors-product"></i>Voire </a>
									
									<h5 class="name uppercase"><a href="product-simple.html">Contrast Shoulder Path</a></h5>
									<div class="product-price">
										<ins><span class="amount">$110</span></ins>
									</div><!-- .product-price -->
									<div class="buttons-holder m-t-20">					
										<div class="add-cart-holder">
											<a title="Add to cart" href="checkout" class="cart-button btn btn-primary">
												<span>Ajouter au panier</span>
											</a>
										</div><!-- .add-cart-holder -->
									</div><!-- .buttons-holder -->
								</div><!-- .product-info -->
							</div>
						</div>
             		</div>
			    	<!-- .row -->			    	
			    </div><!--tab-pane-->		    
		    </div><!--tab-content-->
		</div><!--tabpanel-->		
	</div><!--product-tab-ver2-->
	</div><!-- /.container -->

	<div class="load-more-holder text-center">
	</div>
	
	<section class="wide-banners clearfix wow fadeIn">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="wide-banner cnt-strip">
						<a href="catalog.html">
							<div class="image lazy-load">
								<img width="370" height="245" src="winner/images/blank.gif" data-echo="winner/images/brands/banner3.jpg" class="img-responsive" alt="">
							</div>	
							<div class="strip text-center">
								
							</div>
						</a>
					</div><!-- /.wide-banner-->
				</div><!-- /.col -->

				<div class="col-md-4 col-sm-4">
					<div class="wide-banner cnt-strip">
						<a href="catalog.html">
							<div class="image lazy-load">
								<img width="370" height="245" src="winner/images/blank.gif" data-echo="winner/images/brands/banner2.jpg" class="img-responsive" alt="">
							</div>	
							<div class="strip text-center">
								<div class="strip-inner">
									
								</div>	
							</div>
						</a>
					</div><!-- /.wide-banner-->
				</div><!-- /.col -->

				<div class="col-md-4 col-sm-4">
					<div class="wide-banner cnt-strip">
						<a href="catalog.html">
							<div class="image lazy-load">
								<img width="370" height="245" src="winner/images/banner1.jgp" data-echo="winner/images/brands/banner1.jpg" class="img-responsive" alt="">
							</div>	
							<div class="strip text-center">
								<div class="strip-inner">
									
								</div>	
							</div>
						</a>
					</div><!-- /.wide-banner-->
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section><!-- /.wide-banners -->

</div>

@endsection
