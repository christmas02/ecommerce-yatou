@extends('template.header_page')

@section('content')
	<!-- END nav -->
	<style>

	</style>

    <div class="" style="background:#82ae46;">
      <div class="container">
        <div class="row">
          <div class="col-md-9 ftco-animate">
            <h1 class="titre">{{ $posts->categorie }} / {{ $posts->nom }}</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="images/product-1.jpg" class="image-popup"><img src="{{asset('public/image/'.$posts->image)}}" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3>{{ $posts->nom }}</h3>
    				<div class="rating d-flex">
							<p class="text-left mr-4">
								<a href="#" class="mr-2">5.0</a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
							</p>
						</div>
    				<p class="price"><span>{{ number_format($posts->montant) }} XOF</span></p>
    				<p>{{ $posts->description }}</p>
            <br>
            <form action="{{ url('/cart') }}" method="POST">
				{!! csrf_field() !!}
			    <input type="hidden" name="id" value="{{ $posts->id }}">
                <input type="hidden" name="name" value="{{ $posts->nom }}">
                <input type="hidden" name="price" value="{{ $posts->montant }}">
				<input type="hidden" name="nfois" value="3">
				<input type="submit" class="panier" value="Ajouter au panier">
			</form>
            <style>
                .panier{
                  background-color: #000!important;
                  color:#fff!important;
                  color: #82ae46;
                  cursor:pointer;
                  padding: 10px 20px;
                  border: 1px solid rgba(0, 0, 0, 0.1) !important;
                }
            </style>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Nos produits</span>
            <h2 class="mb-4">Ces produits pourrons vous interressez</h2>
            <p></p>
          </div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">
    			@foreach($produits as $produit)
				    @if( $produit->stock != 0 )
					<div class="col-md-6 col-lg-3 ftco-animate">
    				   <div class="product">
    					<a href="{{ route('show',['slug' => $produit->slug]) }}" class="img-prod"><img class="img-fluid" src="{{asset('public/image/'.$produit->image)}}" alt="Colorlib Template">
    					    <!--<span class="status">30%</span>-->
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

	
@endsection