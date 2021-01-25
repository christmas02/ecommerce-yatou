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
                         <label>Quantite en Stock</label>
                         <input type="number"  class="form-control" name="stock" placeholder="100 kg">
                     </div>
                     <div class="form-group col-md-6">
                         <label>Bistributeur</label>
                         <select name="categorie" id="categorie" class="linked-select form-control" target="#souscategorie" data-dependent="categorie">
                          <option value="">--Select Categorie--</option>
                         @foreach($categories as $categorie)
                          <option value="{{ $categorie->id }}"> {{ $categorie->name }} </option>
                         @endforeach
                         </select>
                     </div>

                     <div class="form-group col-md-6">
                         <label>type de bouteille</label>
                         <select name="souscategorie" id ="souscategorie" class="form-control">
                          <option>--Sous categorie--</option>
						                <option value="">Choissisez votre sous categorie</option>
                         </select>
                     </div>
                     



                     <div class="form-group col-md-6">
                         <label>Image</label>
                         <input type="file" class="form-control" name="image">
                     </div>

                     
                     <input type="hidden" name="type" id="type" value="">
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

@section('extra-js')
    <script>
        $(document).ready(function(){
          $("#taille_vetement").hide();
          $("#taille_autre").show();
          $('#categorie').on('change', function(e){
            console.log(e);
            var cat_id = e.target.value;
            console.log(cat_id);
            if(cat_id == 3){
                $("#taille_vetement").show();
                $("#taille_autre").hide();
                $('#type').val('vetement');
            }else{
                $("#taille_autre").show();
                $("#taille_vetement").hide();
                $('#type').val('poids');
            }
            //ajax
            $.get('/ajax_souscategorie?cat_id='+ cat_id, function(data){
              //success data
              console.log(data);
              $('#souscategorie').empty();
              $.each(data, function(index, subcatObj){
                $('#souscategorie').append('<option value="'+subcatObj.id+'">'+subcatObj.name+'</option>');
              });
            });
          });
        })
    </script>
@endsection
