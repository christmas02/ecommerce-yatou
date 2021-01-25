@extends('admin/headeradmin')

@section('extra_css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.bootstrap.min.css">
@endsection
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
                  <table class="table table-bordered table-condensed table-hover table-striped tablesorter" id="example">
                    <thead>
                      <tr>
                        <th>Matricule Commande<i class="fa fa-sort"></i></th>
                        <th>Nom & prenom Client <i class="fa fa-sort"></i></th>
                        <th>Lieu de livraison</th> <i class="fa fa-sort"></i></th>
                        <th>Contact <i class="fa fa-sort"></i></th>
                        <th>Date et heure <i class="fa fa-sort"></i></th>
                        <th>Email <i class="fa fa-sort"></i></th>
                        <th>Livreur <i class="fa fa-sort"></i></th>
                        <th>Etats de la livraison<i class="fa fa-sort"></i></th>
                        <th>Action <i class="fa fa-sort"></i></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($commandes as $commande)
                       <tr>
                          <td>{{ $commande->matricule }}</td>
                          <td>{{ $commande->user->name }}</td>
                          <td>{{ $commande->lieux }} </td>
                          <td>{{ $commande->telephone }} </td>
                          <td>{{ $commande->date }}  </td>
                          <td>{{ $commande->user->email }} </td>
                          <td>
                              @if($commande->livreur_id != 0)
                                {{ $commande->livreur->name }}
                              @else
                                Pas encore disponible
                              @endif
                          </td>
                          <td>
                            @switch($commande->etat)
                                @case(0)
                                    <a href="#" class="btn btn-sm btn-primary">En Attente</a>
                                    @break
                                @case(1)
                                    <a href="#" class="btn btn-sm btn-Warning">En Cours de Livraison</a>
                                    @break
                                @case(2)
                                    <a href="#" class="btn btn-sm btn-success">Commande Livrée</a>
                                    @break
                                @case(3)
                                    <a href="#" class="btn btn-sm btn-danger">Commande Annulée</a>
                                    @break
                                @default

                            @endswitch
                          </td>
                          <td>
                             <!--<a href="{{ route('edite',['id' => $commande->id]) }}" class="btn btn-info">Detail</a>-->
                             <a href="{{ route('commandeDetail', $commande->id) }}" class="btn btn-primary">Détails</a>
                          </td>
                       </tr>
                    @endforeach
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
          </div>
        </div><!-- /.row -->


      </div>
@endsection
@section('extra-js')

<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.colVis.min.js"></script>
<script>
    $(document).ready(function() {
        var table = $('#example').DataTable( {
            lengthChange: false,
            buttons: [ 'copy', 'excel', 'pdf', 'colvis' ],
            language: {
                "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/French.json"
            }
        } );

        table.buttons().container()
            .appendTo( '#example_wrapper .col-sm-6:eq(0)' );
    } );
</script>
@endsection
