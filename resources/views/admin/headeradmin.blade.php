<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tableau de bord - Mon-marche</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/admin/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin/css/sb-admin.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin/css/sb-integration.css') }}" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #428bca; color:#fff;"  role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" style="color:#fff;" href="">Mon marche / Espace Admin</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li><a class="logos" href="{{ url('/') }}">
							<img src="{{asset('/template/images/logo-admin.png')}}" alt="" width="200">
						</a></li>
            <li class=""><a href="{{ url('bonjour') }}"><i class="fa fa-dashboard"></i>TABLEAU DE BORD</a></li>
            <li class=""><a href="{{ route('tableaudebord') }}"><i class="fa fa-dashboard"></i>Liste des produits</a></li>
            <li><a href="{{ route('commande') }}"><i class="fa fa-bar-chart-o"></i>Liste des commande</a></li>
            <li><a href=" {{ route('addproduits') }}"><i class="fa fa-bar-chart-o"></i>Produit</a></li>
            <li><a href=" {{ route('addcateg') }}"><i class="fa fa-bar-chart-o"></i>Categorie</a></li>
            <li><a href=" {{ route('addsouscategorie') }}"><i class="fa fa-bar-chart-o"></i>Sous-categorie</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" style="color:#fff;"></i> {{ Auth::user()->name }} <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fa fa-gear"></i> Parametres</a></li>
                <li class="divider"></li>
                <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Deconnexion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
              </li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

     @yield('content') 

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

     <!-- JavaScript -->
    <script src="{{ asset('/admin/js/jquery-1.10.2.js') }}"></script>
    <script src="{{ asset('/admin/js/bootstrap.js') }}"></script>

    <script src="{{ asset('/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
        CKEDITOR.replace( 'article-ckeditor2' );
    </script>

    <!-- Page Specific Plugins -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="  {{ asset('/admin/js/morris/chart-data-morris.js') }}"></script>
    <script src=" {{ asset('/admin/js/tablesorter/jquery.tablesorter.js') }}"></script>
    <script src=" {{ asset('/admin/js/tablesorter/tables.js') }}"></script>

   
  </body>
</html>
