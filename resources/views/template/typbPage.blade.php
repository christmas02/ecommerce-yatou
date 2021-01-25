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
								<li class="active"><a href="#">{{ $name }}</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
		
		<!-- Product Style -->
		<section class="product-area shop-sidebar shop section">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-4 col-12">
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
					<div class="col-lg-9 col-md-8 col-12">
						<div class="row">
						@if($produits->count() > 0)
							@foreach($produits as $produit)
								<div class="col-lg-4 col-md-6 col-12">
									<div class="single-product">
										<div class="product-img">
											<a href="product-details.html">
												<img class="default-img" src="{{asset('/image/'.$produit->image)}}" alt="#" style="height: 190px;">
												<img class="hover-img" src="{{asset('/image/'.$produit->image)}}" alt="#" style="height: 190px;">
											</a>
											<div class="button-head">
												<div class="product-action">
													<a title="Panier" href="#"><i class="fa fa-shopping-cart"></i><span>Voir le panier</span></a>
												</div>
												<div class="product-action-2">
													<a title="ajouter au panier" href="#"><i class="fa fa-plus"></i> Ajouter au panier</a>
												</div>
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
							@else
							<div class="catalog-content">
								<div class="container">
									<div class="row row-no-margin">
										<div class="col-md-12 col-sm-10">
											<div class="catalog-products clearfix">
												<h1 class="text-center">Aucun produits disponible </h1>				
											</div><!-- /.catalog-products -->
										</div>
									</div><!-- /.row -->
								</div><!-- /.container -->
							</div><!-- /.catalog-content -->
						@endif
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Product Style 1  -->	

		
		
		<!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!-- Product Slider -->
                                    <div class="product-gallery">
                                        <div class="quickview-slider-active">
                                            <div class="single-slider">
                                                <img src="https://via.placeholder.com/569x528" alt="#">
                                            </div>
                                            <div class="single-slider">
                                                <img src="https://via.placeholder.com/569x528" alt="#">
                                            </div>
                                            <div class="single-slider">
                                                <img src="https://via.placeholder.com/569x528" alt="#">
                                            </div>
                                            <div class="single-slider">
                                                <img src="https://via.placeholder.com/569x528" alt="#">
                                            </div>
                                        </div>
                                    </div>
                                <!-- End Product slider -->
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="quickview-content">
                                    <h2>Flared Shift Dress</h2>
                                    <div class="quickview-ratting-review">
                                        <div class="quickview-ratting-wrap">
                                            <div class="quickview-ratting">
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="#"> (1 customer review)</a>
                                        </div>
                                        <div class="quickview-stock">
                                            <span><i class="fa fa-check-circle-o"></i> in stock</span>
                                        </div>
                                    </div>
                                    <h3>$29.00</h3>
                                    <div class="quickview-peragraph">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
                                    </div>
                                    <div class="size">
                                        <div class="row">
                                            <div class="col-lg-6 col-12">
                                                <h5 class="title">Size</h5>
                                                <select>
                                                    <option selected="selected">s</option>
                                                    <option>m</option>
                                                    <option>l</option>
                                                    <option>xl</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <h5 class="title">Color</h5>
                                                <select>
                                                    <option selected="selected">orange</option>
                                                    <option>purple</option>
                                                    <option>black</option>
                                                    <option>pink</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="quantity">
                                        <!-- Input Order -->
                                        <div class="input-group">
                                            <div class="button minus">
                                                <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                    <i class="ti-minus"></i>
                                                </button>
                                            </div>
                                            <input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
                                            <div class="button plus">
                                                <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
                                                    <i class="ti-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <!--/ End Input Order -->
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#" class="btn">Add to cart</a>
                                        <a href="#" class="btn min"><i class="ti-heart"></i></a>
                                        <a href="#" class="btn min"><i class="fa fa-compress"></i></a>
                                    </div>
                                    <div class="default-social">
                                        <h4 class="share-now">Share:</h4>
                                        <ul>
                                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                            <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
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
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
					</div>
					<div class="modal-body">
						<div class="row no-gutters">
							<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
								<!-- Product Slider -->
									<div class="product-gallery">
										<div class="quickview-slider-active">
											<div class="single-slider">
												<img src="images/3.jpg" alt="#" style="height: 430px;">
											</div>
											<div class="single-slider">
												<img src="images/9.jpg" alt="#" style="height: 430px;">
											</div>

											<div class="single-slider">
												<img src="images/4.jpg" alt="#" style="height: 430px;">
											</div>
										</div>
									</div>
								<!-- End Product slider -->
							</div>
							<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
								<div class="quickview-content" style="margin-top: -45px;">
									<div class="wrapper fadeInDown">
										<div id="formContent">
										  <!-- Tabs Titles -->
										  <!-- Icon -->
										  <div class="fadeIn first">
											<img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
										  </div>
									  
										  <!-- Login Form -->
										  <form>
											<input type="text" id="login" class="fadeIn second" name="login" placeholder="Utilisateur">
											<input type="text" id="password" class="fadeIn third" name="login" placeholder="Mot de passe">
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
	
@endsection
