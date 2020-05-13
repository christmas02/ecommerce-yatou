@extends('admin/headeradmin')

@section('content') 

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Tableau de bord <small></small></h1>
            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-dashboard"></i> Tableau de bord /</li>
            </ol>
          </div>
        </div><!-- /.row -->
        
          <div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-money"></i>{{ $categorie->nom_cat }} </h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                <form role="form" method="post" action="{{ action('Admin@updateCat', $categorie->id) }}" enctype="multipart/form-data">
                     @csrf
                     <div class="form-group col-md-6">
                         <label>Nom de la Categories</label>
                         <input type="text" class="form-control" name="nom_categ" value="{{ $categorie->nom_cat }}">
                     </div>
                     <div class="col-md-12">
                       <button type="submit" class="btn btn-warning">Mise a jours</button>
                     </div>
                 </form>
              
                </div>
              </div>
            </div>
          </div>
        </div><!-- /.row -->
@endsection