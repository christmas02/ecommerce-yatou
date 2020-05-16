@extends('template.header_page')

<style>
table{
 font-size: 16px;
 text-align:;
}
.right{
  text-align: right;
}
table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6;
}
table th {
    padding: 5px !important;
    width: 250px !important;
    border-top: 1px solid !important;
}

table td{
    padding: 5px !important;
    width: 250px !important;
    font-size:15px;
}
</style>

@section('content')

    <div class="" style="background:#82ae46;">
      <div class="container">
        <div class="row">
          <div class="col-md-9 ftco-animate">
            <h1 class="titre">Valider la commande</h1>
          </div>
        </div>
      </div>
    </div>

 @if (sizeof(Cart::content()) > 0)
    <section class="ftco-section ftco-cart">
		<div class="container">
			<!-- end row -->
      <div class="row justify-content-end">
    	<div class="col-lg-7  mt-5 cart-wrap ftco-animate">
    		<div class="cart-total mb-3">
    		<h3>FORMULAIRE DE COMMANDE</h3>
    		<p></p>
            <form method="post" name="formulaire1" action="{{ action('CartController@sendmail') }}" class="info">
			    @csrf	
                <div class="form-group">
                    <label>Nom </label>
					<input type="text" class="form-control text-left px-3" name="nom" placeholder="Nom">
				</div>
                <div class="form-group">
                    <label>Prénom</label>
					<input type="text" class="form-control text-left px-3" name="prenom" placeholder="Prenom">
				</div>
				<div class="form-group">
                    <label>E-mail </label>
					<input type="email" class="form-control text-left px-3" name="email" placeholder="Email">
				</div>
				<div class="form-group">
                    <label>Contact </label>
					<input type="number" class="form-control text-left px-3" name="tel" placeholder="00 00 00 00">
				</div>
                <div class="form-group">
                    <label>Lieux de livraison </label>
					<input type="text" class="form-control text-left px-3" name="ville" placeholder="ville comune quatier">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary py-3 px-4" value="commander">
                </div>
	        </form>
    		</div>
            </div>
            
    		<div class="col-lg-5 mt-5 cart-wrap ftco-animate">
                <h3>Votre commnade</h3>
                <br>
            
    				<div class="cart-total mb-3">
    					<h3></h3>
						<table class="">
                        @foreach (Cart::content() as $item)
                            <tr>
                                <td>{{ $item->name }} x {{ $item->qty }}</td>
                                <td class="right">{{ number_format($item->subtotal) }} XOF</td>     
                            </tr>
                        @endforeach
                        </table> 
						<hr>
						<table class="">
                            <tr>
                                <td>Sous total</td>
                                <td class="right">{{ Cart::total() }} XOF</td>     
                            </tr>
							<tr>
                                <td>Livraison</td>
                                <td class="right">0.00 XOF</td>     
                            </tr>
                        </table> 
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
							<span></span>
							<span class="right">{{ Cart::total() }} XOF</span>
    					</p>
    				</div>
    			</div>
    		</div>


			<div>
			</div>

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
