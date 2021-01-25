<!doctype html>
<html class="no-js" lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="Default Description">
    <meta name="keywords" content="E-commerce" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="img/icon/favicon.png">
    <!-- Google Font css -->
    <link href="https://fonts.googleapis.com/css?family=Lily+Script+One" rel="stylesheet"> 

    <!-- mobile menu css -->
    <link rel="stylesheet" href="{{asset('/yeslo/css/meanmenu.min.css')}}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{asset('/yeslo/css/animate.css')}}">
    <!-- nivo slider css -->
    <link rel="stylesheet" href="{{asset('/yeslo/css/nivo-slider.css')}}">
    <!-- owl carousel css -->
    <link rel="stylesheet" href="{{asset('/yeslo/css/owl.carousel.min.css')}}">
    <!-- slick css -->
   <link rel="stylesheet" href="{{asset('/yeslo/css/slick.css')}}">
    <!-- price slider css -->
    <link rel="stylesheet" href="{{asset('/yeslo/css/jquery-ui.min.css')}}">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="{{asset('/yeslo/css/font-awesome.min.css')}}">
     <!-- fancybox css -->
    <link rel="stylesheet" href="{{asset('/yeslo/css/jquery.fancybox.css')}}">     
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset('/yeslo/css/bootstrap.min.css')}}">
    <!-- default css  -->
    <link rel="stylesheet" href="{{asset('/yeslo/css/default.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('/yeslo/css/style.css')}}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{asset('/yeslo/css/responsive.css')}}">

    <!-- modernizr js -->
    <script src="{{asset('/yeslo/js/vendor/modernizr-2.8.3.min.js')}}"></script>

     <!-- Store CSRF token for AJAX calls -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Wrapper Start -->
    <div class="wrapper homepage">
        <!-- Header Area Start -->
        <header style="background-color:#fefefe;">
            <!-- Header Top Start -->
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <!-- Header Top left Start -->                        
                        <div class="col-lg-3 col-md-3 d-center">
                            <div class="header-top-left">
                                <img src="{{asset('/yeslo/img/icon/2.png')}}" alt=""> Support en ligne 24h / 24
                            </div>                        
                        </div>
                        <!-- Header Top left End -->
                        <!-- Header Top left Start -->                        
                        <div class="col-lg-3 col-md-3 d-center">
                            <div class="header-top-left">
                                <img src="{{asset('/yeslo/img/icon/1.png')}}" alt=""> Livraison partout a Abidjan
                            </div>                        
                        </div>
                        <!-- Header Top left End -->
                        <!-- Header Top left Start -->                        
                        <div class="col-lg-2 col-md-3 d-center">
                            <div class="header-top-left">
                                <img src="{{asset('/yeslo/img/icon/call.png')}}" alt=""> : +225 22 33 33 00
                            </div>                        
                        </div>
                        <!-- Header Top left End -->
                        <!-- Search Box Start -->                                        
                        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                            <div class="search-box-view">
                                <form action="#">
                                    <input type="text" class="email" placeholder="De quelle produit avez vous besoin" name="product">
                                    <button type="submit" class="submit"></button>
                                </form>
                            </div>                                           
                        </div>
                        <!-- Search Box End --> 
                    </div>
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Top End -->
            <!-- Header Bottom Start -->
            <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-sm-5 col-5">
                            <div class="logo">
                                <a href="{{ url('/') }}"><img src="{{asset('/yeslo/img/logo/logo.png')}}" alt="logo-image"></a>
                            </div>
                        </div>
                        <!-- Primary Vertical-Menu End -->
                        <!-- Search Box Start -->
                        <div class="col-xl-9 col-lg-9 d-none d-lg-block">
                            <div class="middle-menu pull-right">
                                <nav>
                                    <ul class="middle-menu-list"><li><a href="">Nos produits<i class="fa fa-angle-down"></i></a>
                                            <!-- Home Version Dropdown Start -->
                                            <ul class="ht-dropdown dropdown-style-two">
                                                
                                                @foreach($categories as $categorie)
                                                    <li><a href="">{{ $categorie->name }}</a>
                                                    <!-- Start Two Step -->
                                                    @if($categorie->sousCategorie()->count() > 0 )
                                                    <ul class="ht-dropdown dropdown-style-two sub-menu">
                                                    @foreach($categorie->sousCategorie as $souscategorie)
                                                        <li><a href="{{ route('produitScat',['name' => $souscategorie->name, 'namecat' => $categorie->name ]) }}">{{ $souscategorie->name }}</a></li>
									                @endforeach
                                                    </ul>
                                                    @endif
                                                   </li>
                                                </li>
                                                @endforeach
                                                
                                            </ul>
                                            <!-- Home Version Dropdown End -->
                                        </li> 
                                        <li><a href="{{ url('A_propoos_de_nous') }}">A-PROPOS</a></li>
                                        <li><a href="{{ url('Nous_joindre') }}">Nous joindre</a></li>
                           
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Search Box End -->
                        <!-- Cartt Box Start -->
                        <div class="col-lg-1 col-sm-7 col-7">
                            <div class="cart-box text-right">
                                <ul>                                 
                                    <li><a href="{{ url('/cart') }}"><i class="fa fa-shopping-basket"></i><span class="cart-counter">{{ Cart::instance('default')->count(false) }}</span></a>
                                    @if (sizeof(Cart::content()) > 0)
                                        <ul class="ht-dropdown main-cart-box">
                                            <li>
                                                <!-- Cart Box Start -->
                                                @foreach (Cart::content() as $item)
                                                <div class="single-cart-box">
                                                    <div class="cart-img">
                                                        <a href=""><img src="{{ asset('image/'.$item->model->image)}}" alt="cart-image"></a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <h6><a href="">{{ $item->name }}</a></h6>
                                                        <span>1 × {{ number_format($item->price ) }} XOF</span>
                                                    </div>
                                                     <form action="{{ url('cart', [$item->rowId]) }}" method="POST" class="side-by-side">
                                                     {!! csrf_field() !!}
                                                     <input type="hidden" name="_method" value="DELETE">
                                                     <button type="submit"><span class="del-icone"><i i class="fa fa-window-close-o"></i></span></button> 
                                                     </form>
                                                </div>
                                                @endforeach
                                                <!-- Cart Box End -->
                                                <!-- Cart Footer Inner Start -->
                                                <div class="cart-footer fix">
                                                    <h5>total :<span class="f-right">{{ Cart::total() }} XOF</span></h5>
                                                    <div class="cart-actions">
                                                        <a class="checkout" href="{{ route('checkout') }}">Commander</a>
                                                    </div>
                                                </div>
                                                <!-- Cart Footer Inner End -->
                                            </li>
                                            
                                        </ul>
                                       @endif
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Cartt Box End -->
                        <div class="col-sm-12 d-lg-none">
                            <div class="mobile-menu">
                                <nav>
                                    <ul>
                                        <li><a href="">NOS PRODUITS</a>
                                            <!-- Mobile Menu Dropdown Start -->
                                            <ul>
                                                
                                                @foreach($categories as $categorie)
                                                    <li><a href="">{{ $categorie->name }}</a>
                                                    <!-- Start Two Step -->
                                                    @if($categorie->sousCategorie()->count() > 0 )
                                                    <ul>
                                                    @foreach($categorie->sousCategorie as $souscategorie)
                                                        <li><a href="{{ route('produitScat',['name' => $souscategorie->name, 'namecat' => $categorie->name ]) }}">{{ $souscategorie->name }}</a></li>
									                @endforeach
                                                    </ul>
                                                    @endif
                                                   </li>
                                                </li>
                                                @endforeach
                                                
                                            </ul>
                                            <!-- Mobile Menu Dropdown End -->
                                        </li>
                                        <li><a href="checkout.html">Checkout Page</a></li>
                                        <li><a href="wishlist.html">Wishlist Page</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu  End -->                        
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Bottom End -->
        </header>
        <!-- Header Area End -->

        <!-- Conetnt Page -->
         @yield('content') 
        <!-- End contente page-->


                <!-- Brand Logo Start -->
        <div class="brand-area pb-60">
            <div class="container">
                <!-- Brand Banner Start -->
                <div class="brand-banner owl-carousel">
                    <div class="single-brand">
                        <a href="#"><img class="img" src="{{asset('/yeslo/img/brand/1.png')}}" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="{{asset('/yeslo/img/brand/2.png')}}" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="{{asset('/yeslo/img/brand/3.png')}}" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="{{asset('/yeslo/img/brand/4.png')}}" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="{{asset('/yeslo/img/brand/5.png')}}" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img class="img" src="{{asset('/yeslo/img/brand/1.png')}}" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="{{asset('/yeslo/img/brand/2.png')}}" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="{{asset('/yeslo/img/brand/3.png')}}" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="{{asset('/yeslo/img/brand/4.png')}}" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="{{asset('/yeslo/img/brand/5.png')}}" alt="brand-image"></a>
                    </div>
                </div>
                <!-- Brand Banner End -->                
            </div>
        </div>
        <!-- Brand Logo End -->

        

        <footer class="off-black-bg">
            <!-- Footer Top Start -->
            <div class="footer-top pt-50 pb-60">
                <div class="container">
                                      
                    <div class="row">
                        <!-- Single Footer Start -->
                        <div class="col-lg-3 col-md-7 col-sm-6">
                            <div class="single-footer">
                                <h3>Nous Contacter</h3>
                                <div class="footer-content">
                                    <div class="loc-address">
                                        <span><i class="fa fa-map-marker"></i>Abidjan cocody</span>
                                        <span><i class="fa fa-envelope-o"></i>Écrivez-nou : info@example.com</span>
                                        <span><i class="fa fa-phone"></i>Téléphone: + 225 254565 54</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <div class="col-lg-3 col-md-5 col-sm-6 footer-full">
                            <div class="single-footer">
                                <h3 class="footer-title">Information</h3>
                                <div class="footer-content">
                                    <ul class="footer-list">
                                        <li><a href="#">Informations De Livraison</a></li>
                                        <li><a href="#">Politique De Confidentialités</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <div class="col-lg-3 col-md-4 col-sm-6 footer-full">
                            <div class="single-footer">
                                <h3 class="footer-title">Service Clients</h3>
                                <div class="footer-content">
                                    <ul class="footer-list">
                                        <li><a href="">Politique De Retour</a></li>
                                        <li><a href="#">Vos Commandes</a></li>
                                        <li><a href="#">Livraison</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <div class="col-lg-3 col-md-4 col-sm-6 footer-full">
                            <div class="single-footer">
                                <div class="logo">
                                    <a href=""><img src="{{asset('/yeslo/img/logo/logo-footer.png')}}" alt="logo-image"></a>
                                </div>
                                <div class="footer-social-content">
                                    <ul class="social-content-list">
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Footer Top End -->
            <!-- Footer Bottom Start -->
            <div class="footer-bottom off-white-bg3">
                <div class="container">
                    <div class="footer-bottom-content">
                        <p class="copy-right-text">Copyright © <a  href="#">Impactafric</a> All Rights Reserved.</p>
                    </div>
                </div>
                <!-- Container End -->
            </div>
            <!-- Footer Bottom End -->
        </footer>
        <!-- Footer End -->
    </div>
    <!-- Wrapper End -->
    <!-- jquery 3.12.4 -->
    <script src="{{asset('/yeslo/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- mobile menu js  -->
    <script src="{{asset('/yeslo/js/jquery.meanmenu.min.js')}}"></script>
    <!-- scroll-up js -->
    <script src="{{asset('/yeslo/js/jquery.scrollUp.js')}}"></script>
    <!-- owl-carousel js -->
    <script src="{{asset('/yeslo/js/owl.carousel.min.js')}}"></script>
    <!-- slick js -->
    <script src="{{asset('/yeslo/js/slick.min.js')}}"></script>
    <!-- wow js -->
    <script src="{{asset('/yeslo/js/wow.min.js')}}"></script>
    <!-- price slider js -->
    <script src="{{asset('/yeslo/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('/yeslo/js/jquery.countdown.min.js')}}"></script>
    <!-- nivo slider js -->
    <script src="{{asset('/yeslo/js/jquery.nivo.slider.js')}}"></script>
    <!-- fancybox js -->
    <script src="{{asset('/yeslo/js/jquery.fancybox.min.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{asset('/yeslo/js/bootstrap.min.js')}}"></script>
    <!-- popper -->
    <script src="{{asset('/yeslo/js/popper.js')}}"></script>
    <!-- plugins -->
    <script src="{{asset('/yeslo/js/plugins.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('/yeslo/js/main.js')}}"></script>
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
   
</body>
</html>