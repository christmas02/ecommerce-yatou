
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
        <!-- Shop Page Start -->
        <div class="main-shop-page pb-60">
            <div class="container">
                <!-- Row End -->
                <div class="row">
                    <!-- Sidebar Shopping Option Start -->
                    <div class="col-lg-3  order-2">
                        <div class="sidebar white-bg">
                            <div class="single-sidebar">
                                <div class="group-title">
                                    <h2>categories</h2>
                                </div>
                                <ul>
                                @foreach($categories as $categorie)
                                    <li><a href="#">{{ $categorie->name }}</a></li>
                                @endforeach
                                </ul>
                            </div>
                            <div class="single-sidebar">
                                <div class="group-title">
                                    <h2>Sous Categories</h2>
                                </div>
                                <ul class="">
                                @foreach($souscategoriesItems as $souscategoriesItem)
                                    <li><a href="#">{{ $souscategoriesItem->name }}</a></li>
                                @endforeach
                                </ul>
                            </div>
                           
                            <!-- Single Banner Start -->
                            <div class="single-sidebar single-banner zoom pt-20">
                                <a href="#" class="hidden-sm"><img src="{{asset('/yeslo/img/banner/8.png')}}" alt="slider-banner"></a>
                            </div>
                            <!-- Single Banner End -->
                        </div>
                    </div>
                    <!-- Sidebar Shopping Option End -->                    
                    <!-- Product Categorie List Start -->
                    <div class="col-lg-9 order-lg-2">
                        <!-- Grid & List View Start -->
                        <div class="grid-list-top border-default universal-padding fix mb-30">
                            <div class="grid-list-view f-left">
                                <ul class="list-inline nav">
                                    <li><a data-toggle="tab" href="#grid-view"><i class="fa fa-th"></i></a></li>
                                    <li><a  class="active" data-toggle="tab" href="#list-view"><i class="fa fa-list-ul"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Grid & List View End -->

                        <div class="main-categorie">
                            <!-- Grid & List Main Area End -->
                            <div class="tab-content fix">
                                <div id="grid-view" class="tab-pane ">
                                    <div class="row">
                                        @if($produits->count() > 0)
				                        @foreach($produits as $produit)
				                        @if( $produit->stock != 0 )
                                        <!-- Single Product Start -->                    
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="{{ route('show',['slug' => $produit->slug]) }}">
                                                       <img class="primary-img" src="{{asset('image/'.$produit->image)}}" alt="single-product">
                                                       <img class="secondary-img" src="{{asset('image/'.$produit->image)}}" alt="single-product">
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
                                                    <h4><a href="product.html">{{ $produit->nom }}</a></h4>
                                                    <p><span class="price">{{ number_format($produit->montant) }} XOF</span></p>
                                                    <div class="pro-actions">
                                                        <div class="actions-secondary">
                                                            <a class="add-cart" href="{{ route('show',['slug' => $produit->slug]) }}" data-toggle="tooltip" title="Add to Cart">Panier</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                        @else
                                        <!-- Single Product Start -->                    
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="">
                                                       <img class="primary-img" src="{{asset('/yeslo/img/products/7.jpg')}}" alt="single-product">
                                                       <img class="secondary-img" src="{{asset('/yeslo/img/products/8.jpg')}}" alt="single-product">
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
                                                    <h4><a href="product.html">Products Name Here</a></h4>
                                                    <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                                    <div class="pro-actions">
                                                        <div class="actions-secondary">
                                                            <a class="add-cart" href="cart.html" data-toggle="tooltip" title="Add to Cart">Panier</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                        @endif
                                        @endforeach
                                        <!-- Dans la mesure au la sous categories ne contien de produits -->
                                        @else
                                        <div class="text-center">
                                            <h3>Cette categorie ne contient pas de produits pour l'instant</h3>
                                        </div>
                                        @endif                 
                                    </div>                                    
                                </div>
                                <!-- #grid view End -->

                                <div id="list-view" class="tab-pane active">
                                    @if($produits->count() > 0)
				                        @foreach($produits as $produit)
				                        @if( $produit->stock != 0 )
                                        <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{ route('show',['slug' => $produit->slug]) }}">
                                                <img class="primary-img" src="{{asset('image/'.$produit->image)}}" alt="single-product">
                                                <img class="secondary-img" src="{{asset('image/'.$produit->image)}}" alt="single-product">
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
                                            <h4><a href="product.html">{{ $produit->nom }}</a></h4>
                                            <p><span class="price">{{ number_format($produit->montant) }} XOF</span></p>
                                            <p>{{ $produit->description }}</p>
                                            <div class="pro-actions">
                                                <div class="actions-secondary">
                                                    <a class="add-cart" href="{{ route('show',['slug' => $produit->slug]) }}" data-toggle="tooltip" title="Add to Cart">Panier</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product Start -->   
                                        @else
                                        
                                        @endif
                                        @endforeach
                                        <!-- Dans la mesure au la sous categories ne contien de produits -->
                                        @else
                                        <div class="text-center">
                                            <h3>Cette categorie ne contient pas de produits pour l'instant</h3>
                                        </div>
                                    @endif    
                         
                                </div>
                                <!-- #list view End -->
                            </div>
                            <!-- Grid & List Main Area End -->
                        </div>
                        <!--Breadcrumb and Page Show Start -->
                        <div class="pagination-box fix">
                            <ul class="blog-pagination ">
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                        <!--Breadcrumb and Page Show End -->
                    </div>
                    <!-- product Categorie List End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Shop Page End -->
@endsection
