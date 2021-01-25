@extends('admin/headeradmin')

@section('content') 

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Tableau de bord <small></small></h1>
            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-dashboard"></i> Tableau de bord</li>
            </ol>
          </div>
        </div><!-- /.row -->
        @if(Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
         @endif
          <div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-money"></i> Liste des produits</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th>Item <i class="fa fa-sort"></i></th>
                        <th>Nom <i class="fa fa-sort"></i></th>
                        <th>Montant <i class="fa fa-sort"></i></th> 
                        <th>Distributeur <i class="fa fa-sort"></i></th>
                        <th>Bouteille <i class="fa fa-sort"></i></th>
                        <th>Stock <i class="fa fa-sort"></i></th>
                        <th>A la une<i class="fa fa-sort"></i></th>
                        <th>Quantites <i class="fa fa-sort"></i></th>
                        <th>Action <i class="fa fa-sort"></i></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($produits as $produit)
                       <tr>
                          <td><img src="{{asset('image/'.$produit->image)}}"  style="width:42px; height:42px;"></td>
                          <td>{{ $produit->nom }}</td>
                          <td>{{ $produit->montant }} CFA</td>
                          <td>{{ $produit->name }}</td>
                          <td>{{ $produit->libelle }}</td>
                        
                          <td> @if( $produit->stock != 0 )
                                  <p class="alert-success">Disponible</p>
                                @else
                                  <p class="alert-danger">Indisponible</p>
                              @endif
                          </td>
                          <td>
                            @if( $produit->a_la_une != 0 )
                                <a href="{{ route('indispo',['id' => $produit->id]) }}" class="btn btn-primary">Activer</a>
                            @else
                                <a href="{{ route('dispo',['id' => $produit->id]) }}" class="btn btn-info">Desactiver</a>
                            @endif
                          </td>
                          <td>{{ $produit->stock }} b</td>
                          <td>
                             <a href="{{ route('edite',['id' => $produit->id]) }}" class="btn btn-success">Editer</a>
                             <a href="{{ route('editeImage',['id' => $produit->id]) }}" class="btn btn-warning">Image</a>
                             <a href="{{ route('delete',['id' => $produit->id]) }}" class="btn btn-danger">Delete</a>
                          </td>
                       </tr>
                    @endforeach
                    </tbody>
                  </table>
                   <div class="text-center">{{ $produits->links() }}</div> 
                </div>
              </div>
            </div>
          </div>
        </div><!-- /.row -->

        
      </div>
@endsection