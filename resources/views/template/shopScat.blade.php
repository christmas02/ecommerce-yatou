@extends('template.header2')

@section('content')

<main>
@if($namecat == 'Cosmetique')
	<section class="catalog-header header-image-one">
		<header>
			
		</header>
	</section><!-- /.catalog-header -->
@elseif($namecat == 'Cheveux')
    <section class="catalog-header header-image-two">
		<header>
			
		</header>
	</section><!-- /.catalog-header -->
@elseif($namecat == 'Never Give Up')
    <section class="catalog-header header-image-tree">
		<header>
			
		</header>
	</section><!-- /.catalog-header -->
@endif


	@if($produits->count() > 0)
		<div class="catalog-content">
			<div class="container">
				<div class="row row-no-margin">
					<div class="col-md-12 col-sm-10">
						<div class="catalog-products clearfix">
							@foreach($produits as $produit)
								@if( $produit->stock != 0 )
									<div class='col-md-6 col-sm-6 col-lg-4 col-xs-12 product-holder'>
										<div class="product">
											<div class="image">
												<a href="{{ route('show',['slug' => $produit->slug]) }}"><img class="img-responsive" width="258" src="{{asset('/image/'.$produit->image)}}" data-echo="{{asset('/image/'.$produit->image)}}"  alt=""></a>
											</div><!-- .image -->
											<div class="product-info m-t-20 text-center">
												<a class="quick-view uppercase" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="icon icon-more-colors-product"></i> Voir</a>
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
						</div><!-- /.catalog-products -->
					</div>
				</div><!-- /.row -->

			</div><!-- /.container -->
		</div><!-- /.catalog-content -->
		<div class="pagination-holder">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4 text-center">
						<ul class="pagination">
							<li><a href="#">1</a></li>
							<li class='active'><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>							
						</ul><!-- /.pagination -->
					</div><!-- /.col -->

				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!-- /.pagination-holder -->
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
</main><!-- /main -->

@endsection
