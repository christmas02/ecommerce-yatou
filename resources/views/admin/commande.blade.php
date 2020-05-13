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
                <h3 class="panel-title"><i class="fa fa-money"></i> Liste des Commandes</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th>Nom & prenom Client <i class="fa fa-sort"></i></th>
                        <th>Lieu de livraison</th> <i class="fa fa-sort"></i></th>
                        <th>Contact <i class="fa fa-sort"></i></th>
                        <th>Date et heure <i class="fa fa-sort"></i></th>
                        <th>Email <i class="fa fa-sort"></i></th>
                        <th>Etats de la livraison<i class="fa fa-sort"></i></th>
                        <th>Action <i class="fa fa-sort"></i></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($commandes as $commande)
                       <tr>
                          <td>{{ $commande->nom }} {{ $commande->prenom }}</td>
                          <td>{{ $commande->lieux }} </td>
                          <td>{{ $commande->telephone }} </td>
                          <td>{{ $commande->date }} </td>
                          <td>{{ $commande->email }} </td>  
                          <td> @if( $commande->etat == true )
                                  <a href="" class="btn btn-warning">livrer</a>
                                @else
                                  <a href="{{ route('dispo',['id' => $commande->id]) }}" class="btn btn-danger">En attente</a>
                              @endif
                          </td>
                          <td>
                             <!--<a href="{{ route('edite',['id' => $commande->id]) }}" class="btn btn-info">Detail</a>-->
                          </td>
                       </tr>
                    @endforeach
                    </tbody>
                  </table>
                   <div class="text-center"></div> 
                </div>
              </div>
            </div>
          </div>
        </div><!-- /.row -->

        
      </div>
@endsection