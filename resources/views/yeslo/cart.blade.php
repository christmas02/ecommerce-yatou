@extends('yeslo.header')

@section('content')
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-area pt-60 pb-55 pt-sm-30 pb-sm-20">
            <div class="container">
                <div class="breadcrumb">
                    <h2>YESLO reste mobilisée pour livrer vos colis partout en Cote d'ivoire.
                        Nous faisons tout pour éviter d'éventuels retards</h2>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Breadcrumb End -->
        <!-- Cart Main Area Start -->
        <div class="cart-main-area pb-80 pb-sm-50">
            <div class="container">
            @if (sizeof(Cart::content()) > 0)
               <h2 class="text-capitalize sub-heading">Mon panier</h2>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Form Start -->
                       
                            <!-- Table Content Start -->
                            <div class="table-content table-responsive mb-50">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">Image</th>
                                            <th class="product-name">Designation</th>
                                            <th class="product-price">Prix</th>
                                            <th class="product-quantity">Quantite</th>
                                            <th class="product-subtotal">Total</th>
                                            <th class="product-remove"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach (Cart::content() as $item)
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href=""><img src="{{ asset('image/'.$item->model->image)}}" alt="cart-image" /></a>
                                            </td>
                                            <td class="product-name"><a href="#">{{ $item->name }}</a></td>
                                            <td class="product-price"><span class="amount">{{ number_format($item->price ) }} XOF</span></td>
                                            <td class="product-quantity">
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
                                            <td class="product-subtotal">{{ number_format($item->subtotal) }} XOF</td>
                                            <td class="product-remove"> 
                                                <form action="{{ url('cart', [$item->rowId]) }}" method="POST" class="side-by-side">
                                                     {!! csrf_field() !!}
                                                     <input type="hidden" name="_method" value="DELETE">
                                                     <button type="submit"><span class="close-card"><i class="fa fa-times" aria-hidden="true"></i></span></button> 
                                               </form>
                                            </td>
                                        </tr>
                                    @endforeach<!-- END TR-->
                                    </tbody>
                                </table>
                            </div>
                            <!-- Table Content Start -->
                            <div class="row">
                               <!-- Cart Button Start -->
                                <div class="col-lg-8 col-md-7">
                                    <div class="buttons-cart">
                                        <form action="{{ url('/emptyCart') }}" method="POST">
                                             {!! csrf_field() !!}
                                             <input type="hidden" name="_method" value="DELETE">
                                             <input type="submit" value="Vider le panier">
                                        </form>
                                        <a href="{{ url('/') }}">Continuer vos achats</a>
                                    </div>
                                </div>
                                <!-- Cart Button Start -->
                                <!-- Cart Totals Start -->
                                <div class="col-lg-4 col-md-12">
                                    <div class="cart_totals">
                                        <h2>Total du panier</h2>
                                        <br />
                                        <table>
                                            <tbody>
                                                <tr class="cart-subtotal">
                                                    <th>Livraison</th>
                                                    <td><span class="amount"> XOF</span></td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td>
                                                        <strong><span class="amount">{{ Cart::total() }} XOF</span></strong>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="wc-proceed-to-checkout">
                                            <a href="{{ route('checkout') }}">Passez votre commande</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Cart Totals End -->
                            </div>
                            <!-- Row End -->
                      
                        <!-- Form End -->
                    </div>
                    @else
                    <div class="col-md-12">
                        <!-- Form Start -->
                        <form action="#">
                            <!-- Table Content Start -->
                            <div class="table-content table-responsive mb-50">
                                <h3 class="text-center">Vous n'avez aucun article dans votre panier</h3>
                            </div>
                            <!-- Table Content Start -->
                        </form>
                        <!-- Form End -->
                    </div>
                    @endif
                </div>
                 <!-- Row End -->
            </div>
        </div>
        <!-- Cart Main Area End -->
@endsection


   