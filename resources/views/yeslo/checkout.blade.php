@extends('yeslo.header')

@section('content')
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-area pt-60 pb-55 pt-sm-30 pb-sm-20">
            <div class="container">
                <div class="breadcrumb">
                    <ul>
                         <h2>YESLO reste mobilisée pour livrer vos colis partout en Cote d'ivoire.
                        Nous faisons tout pour éviter d'éventuels retards</h2>
                    </ul>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Breadcrumb End -->

        <!-- checkout-area start -->
        <div class="checkout-area pt-30  pb-60">
            <div class="container">
                <form method="post" name="formulaire1" action="{{ action('CartController@sendmail') }}" class="info"> 
                     @csrf	               
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="checkbox-form">
                                <h3>Détails de la facturation</h3>
                                <div class="row">			    
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
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="your-order text-left">
                                <h3>VOTRE COMMANDE</h3>
                                <div class="your-order-table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-name">Description</th>
                                                <th class="product-total">Prix total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach (Cart::content() as $item)
                                           <tr class="cart_item">
                                               <td class="product-name">
                                                  {{ $item->name }} x {{ $item->qty }}
                                                </td>
                                               <td class="product-total">
                                                  <span class="amount">{{ number_format($item->subtotal) }} XOF</span>
                                               </td>     
                                          </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr class="order-total">
                                                <th>Order Total</th>
                                                <td><strong><span class="amount">{{Cart::total() }} XOF<</span></strong>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment-method">
                                    <div class="payment-accordion">
                                     
                                        <div class="order-button-payment">
                                            <input type="submit" value="Commander"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </form>   
            </div>
        </div>
        <!-- checkout-area end -->
@endsection
 @section('extra-js')
    