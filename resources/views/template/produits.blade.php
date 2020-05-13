@extends('template.header_page')

@section('content')

<style>
    .lien{
        font-size: 16px !important;
        color: #000 !important;
        border-bottom:1px solid #000;
        width:200px !important;
    }
</style>
@if($name == 'GAMBUSE' )
<div class="hero-wrap hero-bread" style="background-image: url('{{asset('/template/images/bg.jpg')}}');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-12 ftco-animate text-center">
            <h1 class="mb-0 bread">	{{ $name }}</h1>
          </div>
        </div>
	</div>
</div>

 <section class="ftco-section">
    	<div class="container">

			<div class="row">
				<div class="col-md-3">
					<ul class="navbar-nav">
						@foreach($souscategories as $lien)
						<li class="lien"><a href="{{ route('produitScat',['name' => $lien->libele ]) }}">{{ $lien->libele }}</a></li>
					    @endforeach
					</ul>
				</div>
				<div class="col-md-9">
					<div class="row">
    			@if($produits->count() > 0)
				@foreach($produits as $produit)
				<!-- Product Single -->
				@if( $produit->stock != 0 )
				   <div class="col-md-6 col-lg-3 ftco-animate">
    				   <div class="product">
    					<a href="{{ route('show',['slug' => $produit->slug]) }}" class="img-prod"><img class="img-fluid" src="{{asset('image/'.$produit->image)}}" alt="Colorlib Template">
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
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				   </div>
    			    </div>
				@else
				   <div class="col-md-6 col-lg-3 ftco-animate">
    				   <div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="{{asset('image/'.$produit->image)}}" alt="Colorlib Template">
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
                @else
                <div class="breadcrumb text-center">
                    <h3>Cette categorie ne contient pas de produits pour l'instant</h3>
                    <a href="{{ url('/') }}" class="btn panier">accueil</a>
                </div>
                @endif  			
    		</div>
				</div>
			</div>

    		

    	  <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
			  <div class="text-center">{{ $produits->links() }}</div> 
            </div>
          </div>
        </div>
    	</div>
	</section>



@else


    <div class="hero-wrap hero-bread" style="background-image: url('{{asset('/template/images/bg_1.jpg')}}');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-12 ftco-animate text-center">
            <h1 class="mb-0 bread">	{{ $name }}</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			@if($produits->count() > 0)
				@foreach($produits as $produit)
				<!-- Product Single -->
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
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				   </div>
    			    </div>
				@else
				   <div class="col-md-6 col-lg-3 ftco-animate">
    				   <div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="{{asset('image/'.$produit->image)}}" alt="Colorlib Template">
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
                @else
                <div class="breadcrumb text-center">
                    <h3>Cette categorie ne contient pas de produits pour l'instant</h3>
                    <a href="{{ url('/') }}" class="btn panier">accueil</a>
                </div>
                @endif  			
    		</div>

    	  <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
			  <div class="text-center">{{ $produits->links() }}</div> 
            </div>
          </div>
        </div>
    	</div>
	</section>
@endif
@endsection