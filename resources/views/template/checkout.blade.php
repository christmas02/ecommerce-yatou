@extends('template.header')

@section('content')

	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<ul class="bread-list">
								<li><a href="index.html">Accueil<i class="ti-arrow-right"></i></a></li>
								<li class="active"><a href="#">Commander maintenant</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
				
		<!-- Start Checkout -->
		<section class="shop checkout section">
			<div class="container">
				<div class="row"> 
					<div class="col-lg-8 col-12">
						<div class="checkout-form">
							<h2>Faites votre commande ici</h2>
							<p>Veuillez vous inscrire afin de passer à la caisse plus rapidement</p>
							<!-- Form -->
							<form class="form" method="post" name="formulaire1" action="{{ action('CartController@sendmail') }}">
                    			@csrf
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Nom<span>*</span></label>
											<input type="text" name="name" value=" {{ Auth::user()->name }} " required="required">
										</div>
									</div>
									
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Email<span>*</span></label>
											<input type="email" name="email" placeholder=" {{ Auth::user()->email }} " required="required">
										</div>
									</div>
									
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Numéro de téléphone<span>*</span></label>
											<input type="number" name="number" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div id="locationField" class="form-group">
											<label>Magasin<span>*</span></label>
											<input id="originautocomplete" placeholder="Adresse du Magasin" value="Bingerville, Côte d'Ivoire" onFocus="geolocate()" type="text"></input>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-12">
										<div id="locationField" class="form-group">
											<label>Lieu de livraison<span>*</span></label>
											<input id="destinationautocomplete" placeholder="Lieu de livraison" value=" " onFocus="geolocate()" onchange="CalculatedRecommededDistance()" type="text"></input>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Longitude<span></span></label>
											<input type="text" name="address" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Lartitude<span></span></label>
											<input type="text" name="address" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
										<!--	<div>
												<input type='button' value="Voir la distance" onclick="CalculatedRecommededDistance()"></input>
											</div>-->
										</div>
									</div>
									<div  class="col-lg-6 col-md-6 col-12">
										<div style="display: none;" class="form-group">
											
												<br>
											<div>
												<strong>Recommended Route Total Distance</strong>
											</div>
											<div id="outputRecommended"></div>
											<div>
												<strong>Longeest Route Total Distance</strong>
											</div>
											<div id="output"></div>
											
										</div>
									</div>
									
								</div>
							</form>
							<!--/ End Form -->
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="order-details">
							<!-- Order Widget -->
							<div class="single-widget">
								<h2>TOTAUX DU PANIER</h2>
								<div class="content">
									<ul>
										<li>Total Produit<span>{{ Cart::total() }} XOF<</span></li>
										<li>Livraison<span> XOF<</span></li>
										<li class="last">Total<span>$340.00</span></li>
									</ul><hr>
								</div>
							</div>
							<!--/ End Order Widget -->
							<!-- Order Widget -->
							
							<!--/ End Order Widget -->
							<!-- Payment Method Widget -->
							
							<!--/ End Payment Method Widget -->
							<!-- Button Widget -->
							<div class="single-widget get-button">
								<div class="content">
									<div class="button">
									    <button class="btn">Commander</button>
									
									</div>
								</div>
							</div>
							<!--/ End Button Widget -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Checkout -->


@endsection
