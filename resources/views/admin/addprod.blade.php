@extends('admin/headeradmin')

@section('content') 

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Tableau de bord <small></small></h1>
            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-dashboard"></i> Tableau de bord / Ajout de produit</li>
            </ol>
          </div>
        </div><!-- /.row -->
         @if(Session::has('danger'))
            <div class="alert alert-danger">{{ Session::get('danger') }}</div>
         @endif
        
          <div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-money"></i>Ajout de produits</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                <form role="form" method="post" action="{{ action('Admin@stors') }}" enctype="multipart/form-data">
                     @csrf
                     <div class="form-group col-md-6">
                         <label>Nom du produits</label>
                         <input type="text" class="form-control" name="nom" placeholder="le nom du produits">
                     </div>
                     <div class="form-group col-md-6">
                         <label>Montant du produits</label>
                         <input type="number"  class="form-control" name="montant" placeholder="0.000">
                     </div>
                     <div class="form-group col-md-6">
                         <label>Description du produits</label>
                         <textarea class="form-control" id="" name="description" id="" cols="30" rows="10"></textarea>
                     </div>
                     <div class="form-group col-md-6">
                         <label>Quantite en Stock</label>
                         <input type="number"  class="form-control" name="stock" placeholder="100 kg">
                     </div>
                     <div class="form-group col-md-6">
                         <label>Categorie </label>
                         <select name="categorie" class="form-control">
                         @foreach($categories as $categorie)
                          <option value="{{ $categorie->nom_cat }}">{{ $categorie->nom_cat }}</option>
                         @endforeach
                         </select>
                     </div>
                     <div class="form-group col-md-6">
                         <label>Sous categorie </label>
                         <select name="souscategorie" class="form-control">
                         @foreach($souscategorie as $souscategorie)
                          <option value="{{ $souscategorie->libele }}">{{ $souscategorie->libele }}</option>
                         @endforeach
                         </select>
                     </div>
                     <div class="form-group col-md-6">
                         <label>Image</label>
                         <input type="file" class="form-control" name="image">
                     </div>
                     <div class="col-md-12">
                       <button type="submit" class="btn btn-warning">Enregistrer</button>
                     </div>
                 </form>

                </div>
              </div>
            </div>
          </div>
        </div><!-- /.row -->
@endsection