@extends('template.header')

@section('content')

<!-- Breadcrumbs -->
<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index1.html">Accueil<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="#">Panier</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
	@if (sizeof(Cart::content()) > 0)
	<!-- Shopping Cart -->
	<div class="shopping-cart section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th>PRODUIT</th>
								<th>NOM</th>
								<th class="text-center">PRIX UNITAIRE</th>
								<th class="text-center">QUANTITE</th>
								<th class="text-center">TOTAL</th> 
								<th class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>
						<tbody>
						@foreach (Cart::content() as $item)
							<tr>
								<td class="image" data-title="No">									
								    <img src="{{ asset('image/'.$item->model->image)}}" data-echo="{{ asset('image/'.$item->model->image)}}" alt="Product Name">
								</td>
								<td class="product-des" data-title="Description">
									<p class="product-name"><a href="#">{{ $item->name }}</a></p>
									<p class="product-des">Maboriosam in a tonto nesciung eget  distingy magndapibus.</p>
								</td>
								<td class="price" data-title="Price"><span>{{ number_format($item->price ) }} XOF </span></td>
								<td class="qty" data-title="Qty"><!-- Input Order -->
									<div class="input-group">
										<div class="button minus">
											<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
												<i class="ti-minus"></i>
											</button>
										</div>
										<input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="100" value="1">
										<div class="button plus">
											<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
												<i class="ti-plus"></i>
											</button>
											<select class="txt txt-qty quantity" data-id="{{ $item->rowId }}">
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
										</div>
									</div>
									<!--/ End Input Order -->
								</td>
								<td class="total-amount" data-title="Total"><span>{{ number_format($item->subtotal) }} XOF</span></td>
								<td class="action" data-title="Remove">
								<a href="#"></a>
								<form action="{{ url('cart', [$item->rowId]) }}" method="POST" class="side-by-side">
									{!! csrf_field() !!}
									<input type="hidden" name="_method" value="DELETE">
									<button type="submit"><i class="ti-trash remove-icon"></i></button>
								</form>
								</td>
							</tr>
				         @endforeach 
						</tbody>
					</table>
					<!--/ End Shopping Summery -->
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<!-- Total Amount -->
					<div class="total-amount">
						<div class="row">
							<div class="col-lg-8 col-md-5 col-12">
								
							</div>
							<div class="col-lg-4 col-md-7 col-12">
								<div class="right">
									<ul>
										<li>Sous-total du panier<span>{{ Cart::total() }} XOF</span></li>
										
									</ul>
									<div class="button5">
										<a href="{{ route('checkout') }}" class="btn">Commander</a>
										<a href="{{ route('produits') }}" class="btn">Continuer vos achats</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/ End Total Amount -->
				</div>
			</div>
		</div>
	</div>
	<!--/ End Shopping Cart -->
	@else
	<section class="checkout container">
		<div class="row">
			<section class="col-md-12">
				<header>
					<h1 class="text-center red"><span class="step-no">Vous n'avez aucun article dans votre panier</span></h1>
				</header>

			</section>
		</div>
	</section>
    @endif



@endsection
