@extends('yeslo.header')

@section('content')
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-area ptb-60 ptb-sm-30">
            <div class="container">
                <div class="breadcrumb">
                    <h2>YESLO reste mobilisée pour livrer vos colis partout en Cote d'ivoire.
                        Nous faisons tout pour éviter d'éventuels retards</h2>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Breadcrumb End -->
        <!-- Product Thumbnail Start -->
        <div class="main-product-thumbnail pb-60">
            <div class="container"> 
                <div class="row">
                    <!-- Main Thumbnail Image Start -->
                    <div class="col-lg-5">
                        <!-- Thumbnail Large Image start -->
                        <div class="tab-content">
                            <div id="thumb1" class="tab-pane active">
                                <a data-fancybox="images" href="{{asset('/yeslo/img/products/1.jpg')}}"><img src="{{asset('/yeslo/img/products/1.jpg')}}" alt="product-view"></a>
                            </div>
                        </div>
                        <!-- Thumbnail Large Image End -->
                    </div>
                    <!-- Main Thumbnail Image End -->
                    <!-- Thumbnail Description Start -->
                    <div class="col-lg-7">
                        <div class="thubnail-desc fix">
                            <h3 class="product-header">{{ $posts->nom }}</h3>
                            <div class="rating-summary fix mtb-10">
                                <div class="rating f-left">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="rating-feedback f-left">
                                    
                                </div>
                            </div>
                            <div class="pro-price mb-10">
                                <p><span class="price font-price">{{ number_format($posts->montant) }} XOF</span></p>
                            </div>
                           
                            <div class="box-quantity">
                                <form action="{{ url('/cart') }}" method="POST">
				                    {!! csrf_field() !!}
			                        <input type="hidden" name="id" value="{{ $posts->id }}">
                                    <input type="hidden" name="name" value="{{ $posts->nom }}">
                                    <input type="hidden" name="price" value="{{ $posts->montant }}">
				                    <input type="hidden" name="nfois" value="3">
                                    <input type="submit" class="panier" value="Ajouter au panier">
                                </form>
                            </div>
                            <div class="product-link">
                                <ul class="list-inline">
                                    <li><a href="">Description du produit</a></li>
                                </ul>
                            </div>
                            <p class="ptb-20">{{ $posts->description }}</p>
                        </div>
                    </div>
                    <!-- Thumbnail Description End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Product Thumbnail End -->
       
        <!-- Realted Product Start -->
        <div class="related-product pb-30">
            <div class="container">
                <div class="related-box">
                    <div class="group-title">
                        <h2>Produits similaire</h2>
                    </div>
                    <!-- Realted Product Activation Start -->                    
                    <div class="new-upsell-pro owl-carousel">
                        <!-- Single Product Start -->                    
                        <div class="single-product">
                            <!-- Product Image Start -->
                            <div class="pro-img">
                                <a href="product.html">
                                    <img class="primary-img" src="{{asset('/yeslo/img/products/4.jpg')}}" alt="single-product">
                                    <img class="secondary-img" src="{{asset('/yeslo/img/products/1.jpg')}}" alt="single-product">
                                </a>
                            </div>
                            <!-- Product Image End -->
                            <!-- Product Content Start -->
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>                                
                                <h4><a href="product.html">Nom produits</a></h4>
                                <p><span class="price">$30.00</span></p>
                                <div class="pro-actions">
                                    <div class="actions-secondary">
                                        <a class="add-cart" href="" data-toggle="tooltip" title="Add to Cart">Panier</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Content End -->
                        </div>
                        <!-- Single Product End -->  

                    </div>
                    <!-- Realted Product Activation End -->
                </div>
            </div>
        </div>
        <!-- Realted Product End -->
@endsection