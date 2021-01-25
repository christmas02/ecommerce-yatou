@extends('template.header2')

@section('content')


<main class="single-page">
	 <div id="single-product" class="inner-top-50">
	<div class="container">
		<div class="row single-product-row wow fadeIn">
			<div class="col-sm-6 col-lg-6 gallery-holder">
				<div class="product-image-slider">
	              <section class="slider wow fadeIn">
                    <div class="row">
                        <div class="col-md-10 col-xs-10">
                            <ul id="product-images">
                                <li>
                                    <a href="{{asset('/image/'.$posts->image)}}">
                                        <img src="{{asset('/image/'.$posts->image)}}"width="500"  data-echo="{{asset('/image/'.$posts->image)}}"" alt=""/>
                                        <span class="zoom-overlay"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                  </section>	           
              </div>
			</div>
			<div class="col-sm-6 col-lg-6 body-holder body-holder-style-1">
				<div class="product-info">
					<h1 class="single-product-title">{{ $posts->nom }}</h1>
					<div class="product-brand">Calvin Klein</div>
					<div class="product-price">
						<ins><span class="amount">{{ number_format($posts->montant) }} XOF</span></ins>
					</div>
					<div class="social-icons-holder">
						<ul class="social-icon-list clearfix">
							<li><a class="icon icon-facebook31" title="Facebook" href=""></a></li>
							<li><a class="icon icon-twitter21" title="Twitter" href="#"></a></li>
							<li><a class="icon icon-linkedin11" title="Pinterest" href="#"></a></li>
							<li><a class="icon icon-google29" title="Instagram" href="#"></a></li>

						</ul>
					</div>
					<div class="product-attributes">
						

						<div class="size-holder m-t-20 clearfix">
                           <form action="{{ url('/cart') }}" method="POST" class="cart">
                            {!! csrf_field() !!}
                            @if($posts->categorie == 1)
                            <div class="quantity-holder">
                                <h4 class="key">Taille: {{ $posts->taille }}</h4>
                                <input type="hidden" class="attribute-radio" value="{{ $posts->taille }}" name="taille">	
							</div>
                            @elseif($posts->categorie == 3)
                            <h3 class="key">Taille:</h3>
                            <ul class="size-picker clearfix">
								<li><input id="group1" class="attribute-radio" type="radio" value="XXL" name="taille">
								<label for="group1"><span>XXL</span></label>		
								</li>
								<li><input id="group2" class="attribute-radio" type="radio" value="XL" name="taille">
								<label for="group2"><span>XL</span></label>																	
								</li>
								<li><input id="group3" class="attribute-radio" type="radio" value="L" name="taille">
								<label for="group3"><span>L</span></label>					
								</li>
                                <li><input id="group3" class="attribute-radio" type="radio" value="M" name="taille">
								<label for="group3"><span>M</span></label>					
								</li>	
                                <li><input id="group3" class="attribute-radio" type="radio" value="S" name="taille">
								<label for="group3"><span>S</span></label>					
								</li>						
                            </ul>
                            @elseif($posts->categorie == 3)
                            <div class="quantity-holder">
                                <h4 class="key">Taille: {{ $posts->taille }} pource</h4>
                                <input type="hidden" class="attribute-radio" value="{{ $posts->taille }}" name="taille">	
							</div>
                            @endif
						</div>

					</div>

					<div class="qnt-holder">
						
			                <input type="hidden" name="id" value="{{ $posts->id }}">
                            <input type="hidden" name="name" value="{{ $posts->nom }}">
                            <input type="hidden" name="price" value="{{ $posts->montant }}">
				            <input type="hidden" name="nfois" value="3">
                            <input type="submit" class="btn btn-primary single-add-cart-button" value="Ajouter au panier">
                        </form>
					</div>

					<div id="product-simple-tab">
						<div class="tabs">
							<!--<<ul class="nav nav-tabs nav-tab-cells">
								<li class="active"><a data-toggle="tab" href="#description">Description</a></li>
							</ul>

							<div class="tab-content bewear-tab-content">
								<!--<div id="description" class="tab-pane in active">
									<p class="text">{{ $posts->description }}</p>
								</div>-->

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	 


<div class="container inner-top-sm">
	<div role="tabpanel">
		<div class="tab-nav-holder single-product-tab inner-bottom-50">
			<ul id="single-product-tabs" class="nav nav-tabs uppercase" role="tablist">
				<li role="presentation" class="active"><a href="#related-products" data-transition-type="backSlide" role="tab" data-toggle="tab">related products</a></li>
			</ul>
        </div>
        
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane" id="wear-with">
				<div class="single-product-wear-it wow fadeInUp">
					<div class="item wear-products">
                        <div class='product-holder'>
                            <div class="product">
                                <div class="image">
                                    <a href="product-simple.html"><img class="img-responsive" width="252" src="assets/images/blank.gif" data-echo="assets/images/related/2.jpg" alt=""></a>
                                </div><!-- .image -->
                                <div class="product-info m-t-20 text-center">
                                    <a class="quick-view uppercase" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="icon icon-more-colors-product"></i> Quick view</a>
                                    <ul class="color-picker clearfix">
                                        <li class="selected"><input class="le-radio dark-gray" type="radio" value="p2" checked="checked" name="r2"></li>
                                        <li><input class="le-radio blue" type="radio" value="p2.2" name="r2"></li>
                                        <li><input class="le-radio orange" type="radio" value="p2.3" name="r2"></li>
                                    </ul><!-- .color-picker -->
                                    <h5 class="name uppercase"><a href="product-simple.html">white fashion dress</a></h5>
                                    <div class="product-price">
                                        <ins><span class="amount">$47</span></ins>
                                    </div><!-- .product-price -->
                                    <div class="buttons-holder m-t-20">
                                        <div class="add-cart-holder">
                                            <a title="Add to cart" href="checkout.html" class="cart-button btn btn-primary">
                                                <span>Add to bag</span>
                                            </a>
                                        </div><!-- .add-cart-holder -->
                                        <div class="add-wishlist-holder">
                                            <a href="checkout.html" title="Wishlist" class="wishlist-button uppercase">
                                                <span class="icon icon-wishlist"></span> add to wishlist
                                            </a>
                                        </div><!-- .add-wishlist-holder -->
                                    </div><!-- .buttons-holder -->
                                </div><!-- .product-info -->
                            </div><!-- .product -->
                        </div><!-- .product-holder -->
                    </div><!-- /.wear-products -->

                    <div class="item wear-products">
                        <div class='product-holder'>
                            <div class="product">
                                <div class="image">
                                    <a href="product-simple.html"><img class="img-responsive" width="252" src="assets/images/blank.gif" data-echo="assets/images/related/3.jpg" alt=""></a>
                                </div><!-- .image -->
                                <div class="product-info m-t-20 text-center">
                                    <a class="quick-view uppercase" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="icon icon-more-colors-product"></i> Quick view</a>
                                    <ul class="color-picker clearfix">
                                        <li class="selected"><input class="le-radio group gray" type="radio" value="p1" checked="checked" name="r5"></li>
                                        <li><input class="le-radio black" type="radio" value="p1.1" name="r5"></li>
                                    </ul><!-- .color-picker -->
                                    <h5 class="name uppercase"><a href="product-simple.html">rotterdam tshirt</a></h5>
                                    <div class="product-price">
                                        <ins><span class="amount">$19</span></ins>
                                    </div><!-- .product-price -->
                                    <div class="buttons-holder m-t-20">					
                                        <div class="add-cart-holder">
                                            <a title="Add to cart" href="checkout.html" class="cart-button btn btn-primary">
                                                <span>Add to bag</span>
                                            </a>
                                        </div><!-- .add-cart-holder -->
                                        <div class="add-wishlist-holder">
                                            <a href="checkout.html" title="Wishlist" class="wishlist-button uppercase">
                                                <span class="icon icon-wishlist"></span> add to wishlist
                                            </a>
                                        </div><!-- .add-wishlist-holder -->
                                    </div><!-- .buttons-holder -->
                                </div><!-- .product-info -->
                            </div><!-- .product -->
                        </div><!-- .product-holder -->
                    </div><!-- /.wear-products -->

                    <div class="item wear-products">
                        <div class='product-holder'>
                            <div class="product">
                                <div class="image">
                                    <a href="product-simple.html"><img class="img-responsive" width="252" src="assets/images/blank.gif" data-echo="assets/images/related/4.jpg" alt=""></a>
                                </div><!-- .image -->
                                <div class="product-info m-t-20 text-center">
                                    <a class="quick-view uppercase" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="icon icon-more-colors-product"></i> Quick view</a>
                                    <ul class="color-picker clearfix">
                                        <li class="selected"><input class="le-radio dark-gray" type="radio" value="p2" checked="checked" name="r4"></li>
                                        <li><input class="le-radio blue" type="radio" value="p2.2" name="r4"></li>
                                        <li><input class="le-radio orange" type="radio" value="p2.3" name="r4"></li>
                                    </ul><!-- .color-picker -->
                                    <h5 class="name uppercase"><a href="product-simple.html">white fashion dress</a></h5>
                                    <div class="product-price">
                                        <ins><span class="amount">$47</span></ins>
                                    </div><!-- .product-price -->
                                    <div class="buttons-holder m-t-20">
                                        <div class="add-cart-holder">
                                            <a title="Add to cart" href="checkout.html" class="cart-button btn btn-primary">
                                                <span>Add to bag</span>
                                            </a>
                                        </div><!-- .add-cart-holder -->
                                        <div class="add-wishlist-holder">
                                            <a href="checkout.html" title="Wishlist" class="wishlist-button uppercase">
                                                <span class="icon icon-wishlist"></span> add to wishlist
                                            </a>
                                        </div><!-- .add-wishlist-holder -->
                                    </div><!-- .buttons-holder -->
                                </div><!-- .product-info -->
                            </div><!-- .product -->
                        </div><!-- .product-holder -->
                    </div><!-- /.wear-products -->

                    <div class="item wear-products">
                        <div class='product-holder'>
                            <div class="product">
                                <div class="image">
                                    <a href="product-simple.html"><img class="img-responsive" width="252" src="assets/images/blank.gif" data-echo="assets/images/related/3.jpg" alt=""></a>
                                </div><!-- .image -->
                                <div class="product-info m-t-20 text-center">
                                    <a class="quick-view uppercase" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="icon icon-more-colors-product"></i> Quick view</a>
                                    <ul class="color-picker clearfix">
                                        <li class="selected"><input class="le-radio dark-gray" type="radio" value="p3" checked="checked" name="r3"></li>
                                        <li><input class="le-radio gray" type="radio" value="p3.1" name="r3"></li>
                                        <li><input class="le-radio red" type="radio" value="p3.2" name="r3"></li>
                                        <li><input class="le-radio green" type="radio" value="p3.3" name="r3"></li>
                                    </ul><!-- .color-picker -->
                                    <h5 class="name uppercase"><a href="product-simple.html">white fashion dress</a></h5>
                                    <div class="product-price">
                                        <ins><span class="amount">$90</span></ins>
                                    </div><!-- .product-price -->
                                    <div class="buttons-holder m-t-20">
                                        <div class="add-cart-holder">
                                            <a title="Add to cart" href="checkout.html" class="cart-button btn btn-primary">
                                                <span>Add to bag</span>
                                            </a>
                                        </div><!-- .add-cart-holder -->
                                        <div class="add-wishlist-holder">
                                            <a href="checkout.html" title="Wishlist" class="wishlist-button uppercase">
                                                <span class="icon icon-wishlist"></span> add to wishlist
                                            </a>
                                        </div><!-- .add-wishlist-holder -->
                                    </div><!-- .buttons-holder -->
                                </div><!-- .product-info -->
                            </div><!-- .product -->
                        </div><!-- .product-holder -->
                    </div><!-- /.wear-products -->

                    <div class="item wear-products">
                        <div class='product-holder'>
                            <div class="product">
                                <div class="image">
                                    <a href="product-simple.html"><img class="img-responsive" width="252" src="assets/images/blank.gif" data-echo="assets/images/related/1.jpg" alt=""></a>
                                </div><!-- .image -->
                                <div class="product-info m-t-20 text-center">
                                    <a class="quick-view uppercase" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="icon icon-more-colors-product"></i> Quick view</a>
                                    <ul class="color-picker clearfix">
                                        <li class="selected"><input class="le-radio brown" type="radio" value="p4" checked="checked" name="r1"></li>
                                        <li><input class="le-radio gray" type="radio" value="p4.1" name="r1"></li>
                                    </ul><!-- .color-picker -->
                                    <h5 class="name uppercase"><a href="product-simple.html">flocked print sweatshirt</a></h5>
                                    <div class="product-price">
                                        <ins><span class="amount">$140</span></ins>
                                    </div><!-- .product-price -->
                                    <div class="buttons-holder m-t-20">
                                        <div class="add-cart-holder">
                                            <a title="Add to cart" href="checkout.html" class="cart-button btn btn-primary">
                                                <span>Add to bag</span>
                                            </a>
                                        </div><!-- .add-cart-holder -->
                                        <div class="add-wishlist-holder">
                                            <a href="checkout.html" title="Wishlist" class="wishlist-button uppercase">
                                                <span class="icon icon-wishlist"></span> add to wishlist
                                            </a>
                                        </div><!-- .add-wishlist-holder -->
                                    </div><!-- .buttons-holder -->
                                </div><!-- .product-info -->
                            </div><!-- .product -->
                        </div><!-- .product-holder -->
                    </div><!-- /.wear-products -->	

                </div>
            </div><!-- /.tab-pane -->
            
			<div role="tabpanel" class="tab-pane active" id="related-products">
				<div class="single-product-related-products wow fadeInUp">





                                </div>
                                </div><!-- /.tab-pane -->
                            </div><!-- /.tab-content -->
                        </div><!-- /.tabpanel -->
                    </div><!-- /.containers -->	

					

					
                    
                </div>
            </div><!-- /.tab-pane -->

</main><!--single-page-->


@endsection