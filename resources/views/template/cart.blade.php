@extends('template.header_page')

@section('content')

    <div class="">
      <div class="container">
      </div>
    </div>



 @if (sizeof(Cart::content()) > 0)
    <section class="ftco-section ftco-cart">
		<div class="container">
			<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Designation</th>
						        <th>Prix</th>
						        <th>Quantite</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody>
						      @foreach (Cart::content() as $item)
                              <tr>
							    <td class="image-prod">
								     <img src="{{ asset('public/image/'.$item->model->image)}}" alt="product" class="img-responsive cart-image" width="100">
							    </td>
                                <td class="product-name">
									  <strong>{{ $item->name }}</strong>
									  </td>
                                <td class="price"><strong>{{ number_format($item->price ) }} XOF</strong></td>
                                <td>
                                     <select class="quantity" data-id="{{ $item->rowId }}">
                                         <option {{ $item->qty == 1 ? 'selected' : '' }}>1</option>
                                         <option {{ $item->qty == 2 ? 'selected' : '' }}>2</option>
                                         <option {{ $item->qty == 3 ? 'selected' : '' }}>3</option>
                                         <option {{ $item->qty == 4 ? 'selected' : '' }}>4</option>
                                         <option {{ $item->qty == 5 ? 'selected' : '' }}>5</option>
                                         <option {{ $item->qty == 6 ? 'selected' : '' }}>6</option>
                                         <option {{ $item->qty == 7 ? 'selected' : '' }}>7</option>
                                         <option {{ $item->qty == 8 ? 'selected' : '' }}>8</option>
                                         <option {{ $item->qty == 9 ? 'selected' : '' }}>9</option>
                                         <option {{ $item->qty == 10 ? 'selected' : '' }}>10</option>
                                     </select>
                               </td>
                               <td class="total"><strong class="primary-color">{{ number_format($item->subtotal) }} XOF</strong></td>
                               <td>
                               <form action="{{ url('cart', [$item->rowId]) }}" method="POST" class="side-by-side">
                                  {!! csrf_field() !!}
                                  <input type="hidden" name="_method" value="DELETE">
                                  <button type="submit" class="product-remove"><span class="close-card">X</span></button> 
                               </form>
                               </td>
                             </tr>
                             @endforeach<!-- END TR-->
						     </tbody>

						</table>
					</div>
				</div>
			</div>
			<!-- end row-->
			<div class="row">
				<div class="col-lg-8">
					<div>
                           <form action="{{ url('/emptyCart') }}" method="POST">
                             {!! csrf_field() !!}
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="submit" class="btn panier" value="VIder le panier">
                          </form>
			        </div>
				</div>
    			<div class="col-lg-4 ftco-animate">
    				<div class="cart-total mb-3">
    					<h3></h3>
    					<p class="d-flex">
    						<span>Sous total</span>
    						<span>{{ Cart::total() }} XOF</span>
    					</p>
    					<p class="d-flex">
    						<span>Livraison</span>
    						<span>0.00 XOF</span>
    					</p>
    					<hr>
    					<p class="d-flex">
    						<span>Total</span>
							<span>{{ Cart::total() }} XOF</span>
    					</p>
    				</div>
    				<p><a href="{{ route('checkout') }}" class="btn btn-primary py-3 px-4">Valide la commande</a></p>
    			</div>
    		</div>
			<!-- end row -->
			 <div class="row mt-5">
			   <div class=col-md-3 >
			    <div class="infos-item">
				    <div class=row>
				        <div class="col-md-2 icone"><span class="icon-truck"></span></div>
					    <div class="col-md-10 text">
					        <h6>Livraison à Domicile</h6>
					        <p>Avec commande minimum</p>
					    </div>
				    </div>
				</div>


			   </div>
			   <!-- end infos -->
			   <div class=col-md-3 >
			    <div class="infos-item">
				    <div class=row>
				        <div class="col-md-2 icone"><span class="icon-credit-card"></span></div>
					    <div class="col-md-10 text">
					        <h6>Mode de Paiement</h6>
					        <p>Paiement à la livraison</p>
					    </div>
				    </div>
				</div>
			   </div>
			   <!-- end infos -->
			   <div class=col-md-3 >
			    <div class="infos-item">
				    <div class=row>
				        <div class="col-md-2 icone"><span class="icon-shield"></span></div>
					    <div class="col-md-10 text">
					        <h6>Garantie 100%</h6>
					        <p>Des produits de qualite</p>
					    </div>
				    </div>
				</div>
			   </div>
			   <!-- end infos -->
			   <div class=col-md-3 >
			    <div class="infos-item">
				    <div class=row>
				        <div class="col-md-2 icone"><span class="icon-phone"></span></div>
					    <div class="col-md-10 text">
					        <h6>Hotline de 7H30 à 16H</h6>
					        <p>+225 59 30 17 09</p>
					    </div>
				    </div>
				</div>
			   </div>
			   <!-- end infos -->
			</div>
			<!-- end row-->
		</div>


	</section>
	@else
	<br><br>
	<section>
	   <div class="container">
	       <div class="breadcrumb">
               <h3>Vous n'avez aucun article dans votre panier</h3>
               
          </div>
          <div> <a href="{{ url('/') }}" class="btn panier">accueil</a></div>
		  <br>
		  
		  <div class="row">
			   <div class=col-md-3 >
			    <div class="infos-item">
				    <div class=row>
				        <div class="col-md-2 icone"><span class="icon-truck"></span></div>
					    <div class="col-md-10 text">
					        <h6>Livraison à Domicile</h6>
					        <p>Avec commande minimum</p>
					    </div>
				    </div>
				</div>


			   </div>
			   <!-- end infos -->
			   <div class=col-md-3 >
			    <div class="infos-item">
				    <div class=row>
				        <div class="col-md-2 icone"><span class="icon-credit-card"></span></div>
					    <div class="col-md-10 text">
					        <h6>Mode de Paiement</h6>
					        <p>Paiement à la livraison</p>
					    </div>
				    </div>
				</div>
			   </div>
			   <!-- end infos -->
			   <div class=col-md-3 >
			    <div class="infos-item">
				    <div class=row>
				        <div class="col-md-2 icone"><span class="icon-shield"></span></div>
					    <div class="col-md-10 text">
					        <h6>Garantie 100%</h6>
					        <p>Des produits de qualite</p>
					    </div>
				    </div>
				</div>
			   </div>
			   <!-- end infos -->
			   <div class=col-md-3 >
			    <div class="infos-item">
				    <div class=row>
				        <div class="col-md-2 icone"><span class="icon-phone"></span></div>
					    <div class="col-md-10 text">
					        <h6>Hotline de 7H30 à 16H</h6>
					        <p>+225 59 30 17 09</p>
					    </div>
				    </div>
				</div>
			   </div>
			   <!-- end infos -->
			</div>
			<!-- end row-->
			<br>
	   </div>
	</section>
           
    @endif


@endsection
<style>
   
</style>

@section('extra-js')
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

   
@endsection
