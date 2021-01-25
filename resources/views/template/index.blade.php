@extends('template.header')
@section('content')
	<!-- Slider Area -->
	<section class="hero-slider">
		<!-- Single Slider -->
		<div class="single-slider">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-lg-9 offset-lg-3 col-12">
						<div class="text-inner">
							<div class="row">
								<div class="col-lg-7 col-12">
									<div class="hero-text">
										<!--<h1><span>UP TO 50% OFF </span>Shirt For Man</h1>
										<p>Maboriosam in a nesciung eget magnae <br> dapibus disting tloctio in the find it pereri <br> odiy maboriosm.</p>
										<div class="button">
											<a href="#" class="btn">Shop Now!</a>
										</div>-->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Single Slider -->
	</section>
	<!--/ End Slider Area -->
	
	<!-- Start Small Banner  -->
	
	<!-- End Small Banner -->
	
	<!-- Start Product Area -->
    <div class="product-area section">
            <div class="container">
				<div class="row">
					<!--<div class="col-12">
						<div class="section-title">
							<h2>Trending Item</h2>
						</div>
					</div>-->
				</div>
				<div class="row">
					<div class="col-12">
						<div class="product-info">
						
							<div class="tab-content" id="myTabContent">
								<!-- Start Single Tab -->
								<div class="tab-pane fade show active" id="man" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											<div class="row">
												<div class="col-xl-3 col-lg-4 col-md-4 col-12" >
													<div class="shop-sidebar">
														<!-- Single Widget -->
														<div class="single-widget category">
															<h3 class="title">Distributeurs</h3>
															<ul class="nav nav-tabs" id="myTab" role="tablist">
																@foreach($categories as $items)
																<li class="nav-item"><a class="nav-link" href="{{ route('distributeurPage',['namecat' => $items->name ]) }}" role="tab">{{ $items->name }}</a></li>
																@endforeach
															</ul>
														</div>
														<!--/ End Single Widget -->
														<!-- Shop By Price -->
															<div class="single-widget range">
																<h3 class="title">Type de bouteille</h3>
																<ul class="nav nav-tabs">
																@foreach($souscategories as $items)
																   <li class="nav-item"><a class="nav-link" href="{{ route('typbPage',['name' => $items->id, 'namecat' => $items->name ]) }}">{{ $items->name }}</a></li>
																@endforeach
																</ul>
															</div>

												</div>

												</div>

												<div class="col-xl-9 col-lg-8 col-md-8 col-12" >
												<div class="row">
												@foreach($produits as $produit)
													
													<div class="prod col-xl-3 col-lg-4 col-md-4 col-12" >
														<div class="single-product">
															<div class="product-img">
																<a href="product-details.html">
																	<img class="default-img" src="{{asset('/image/'.$produit->image)}}" alt="#" style="height: 190px;">
																	<img class="hover-img" src="{{asset('/image/'.$produit->image)}}" alt="#" style="height: 190px;">
																</a>
																<div class="button-head">
																	<form action="{{ url('/cart') }}" method="POST">
                                                                        {!! csrf_field() !!}
																		

																		<input type="hidden" name="id" value="{{ $produit->id }}">
																		<input type="hidden" name="name" value="{{ $produit->nom }}">
																		<input type="hidden" name="price" value="{{ $produit->montant }}">
																		<input type="hidden" name="nfois" value="3">
																		
																		<div class="product-action">
																			<a title="Panier"><i class="fa fa-shopping-cart"></i><span>Voir le panier</span></a>
																		</div>
																		<div class="product-action-2">
																		<input type="submit">
																		</div>
																		</input>
																	</form>
																</div>
															</div>
															
															<div class="product-content">
																<h2><a href="">{{ $produit->nom }}</a></h2>
																<div class="product-price">
																	<span>{{ number_format($produit->montant) }} XOF</span>
																</div>
															</div>
														</div>
													</div>
													
												@endforeach
													
												</div>
											</div>
											</div>
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								
							</div>
						</div>
					</div>
				</div>
            </div>
    </div>
	<!-- End Product Area -->
	
	<!-- End Midium Banner -->
	
	<!-- Start Most Popular -->
	<div class="product-area most-popular section" style="margin-top: -50px;">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>ACCESSOIRES</h2>
					</div>
				</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
						<!-- Start Single Product -->
						<div class="single-product">
							<div class="product-img">
								<a href="product-details.html">
									<img class="default-img" src="images/AC1.jpg" alt="#">
									<img class="hover-img" src="images/AC1.jpg" alt="#">
									<span class="out-of-stock">Hot</span>
								</a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
										<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
									</div>
									<div class="product-action-2">
										<a title="Add to cart" href="#">Add to cart</a>
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3><a href="product-details.html">Black Sunglass For Women</a></h3>
								<div class="product-price">
									<span class="old">$60.00</span>
									<span>$50.00</span>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- End Most Popular Area -->
	
	<!-- Start Cowndown Area -->
	<section class="">
		<div class=" ">
			<div class="">
				<div class="row">
					<div class="col-lg-12 col-12">
						<div class="image">
							<img src="template/images/bannier.png" alt="#" style="margin-top: -30px;width:100%;height: 500px;">
						</div>	
					</div>		
				</div>
			</div>
		</div>
	</section>
	<!-- /End Cowndown Area -->

	
	@endsection
