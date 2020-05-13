@extends('admin/headeradmin')

@section('content') 

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Tableau de bord <small></small></h1>
            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-dashboard"></i> Tableau de bord /Mutuelle</li>
            </ol>
          </div>
        </div><!-- /.row -->
         @if(Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
         @endif

          <div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-money"></i>Ajouter une nouvelle categorie</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                <form role="form" method="post" action="{{ action('Admin@addmut') }}" enctype="multipart/form-data">
                     @csrf
                     <div class="form-group col-md-6">
                         <label>Nom de la mutuelle</label>
                         <input type="text" class="form-control" name="nom_mut" placeholder="le nom de la mutuelle">
                     </div>
                     <div class="form-group col-md-6">
                         <label>Nom du responsable de mutuelle</label>
                         <input type="text" class="form-control" name="respo_mut" placeholder="le nom du responsable de mutuelle">
                     </div>
                     <div class="form-group col-md-6">
                         <label>Email de la mutuelle</label>
                         <input type="text" class="form-control" name="mail_mut" placeholder="Email de la mutuelle">
                     </div>
                     <div class="form-group col-md-6">
                         <label>Contact de la mutuelle</label>
                         <input type="text" class="form-control" name="contact_mut" placeholder="Contact de la mutuelle">
                     </div>
                     <div class="col-md-12">
                       <button type="submit" class="btn btn-info">Enregistrer</button>
                     </div>
                 </form>
                </div>
              </div> 
            </div>
          </div>
        
          <div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-money"></i>Ajout une nouvelle categorie</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                </div>
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th>Item <i class="fa fa-sort"></i></th>
                        <th>Nom de la mutuelle<i class="fa fa-sort"></i></th>
                        <th>Nom du president <i class="fa fa-sort"></i></th>
                        <th>Statut <i class="fa fa-sort"></i></th>
                        <th>Contact <i class="fa fa-sort"></i></th>
                        <th>mail<i class="fa fa-sort"></i></th>
                        <th>Action <i class="fa fa-sort"></i></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($mutuelles as $mutuelle)
                       <tr>
                          <td></td>
                          <td>{{ $mutuelle->nom_mut }}</td>
                          <td>{{ $mutuelle->nom_presi }}</td>
                          <td> @if( $mutuelle->statut == true )
                                  <a href="" class="btn btn-warning">Active</a>
                                @else
                                  <a href="" class="btn btn-danger">Desactive</a>
                              @endif
                          </td>
                          <td>{{ $mutuelle->contact }}</td>
                          <td>{{ $mutuelle->mail }}</td>
                          <td>
                             <a href="" class="btn btn-success">Editer</a>
                             <a href="" class="btn btn-danger">Delete</a>
                          </td>
                       </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- /.row -->
@endsection