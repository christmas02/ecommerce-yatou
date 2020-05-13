@extends('admin/headeradmin')

@section('content') 

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Tableau de bord <small></small></h1>
            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-dashboard"></i> Tableau de bord / Sous categories</li>
            </ol>
          </div>
        </div><!-- /.row -->
         @if(Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
         @endif
        
          <div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-money"></i>Ajouter une nouvelle Sous categorie</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                <form role="form" method="post" action="{{ action('Admin@storesouscateg') }}" enctype="multipart/form-data">
                     @csrf
                     <div class="form-group col-md-6">
                         <label>Nom de la sous categorie</label>
                         <input type="text" class="form-control" name="libelle" placeholder="nom de la sous categorie">
                     </div>
                     <div class="form-group col-md-6">
                     <label>Categorie </label>
                         <select name="idcategorie" class="form-control">
                         @foreach($categories as $categorie)
                          <option value="{{ $categorie->id }}">{{ $categorie->nom_cat }}</option>
                         @endforeach
                         </select>
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
                <h3 class="panel-title"><i class="fa fa-money"></i>Liste Sous categorie</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th>Item <i class="fa fa-sort"></i></th>
                        <th>Nom de la sous categorie <i class="fa fa-sort"></i></th>
                        <th>Categorie <i class="fa fa-sort"></i></th>
                        <th>Statut <i class="fa fa-sort"></i></th>
                        <th>Action <i class="fa fa-sort"></i></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($souscategorie as $souscategories)
                       <tr>
                          <td></td>
                          <td>{{ $souscategories->libele }}</td>
                          <td>{{ $souscategories->categorie_id }}</td>
                          <td> @if( $souscategories->statut == true )
                                  <a href="" class="btn btn-warning">Active</a>
                                @else
                                  <a href="" class="btn btn-danger">Desactive</a>
                              @endif
                          </td>
                          <td>
                             <a href="{{ route('editeScat',['id' => $souscategories->id]) }}" class="btn btn-success">Editer</a>
                             <a href="{{ route('deleteScat',['id' => $souscategories->id]) }}" class="btn btn-danger">Delete</a>
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