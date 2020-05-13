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
                <h3 class="panel-title"><i class="fa fa-money"></i>Ajout des images de presentation de categorie</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                <form role="form" method="post" action="{{ action('Admin@stors') }}" enctype="multipart/form-data">
                     @csrf
                        <div class="form-group col-md-6">
                            <label>Slide 1</label>
                            <input type="file" class="form-control" name="image1"><br>
                            <label>Lien 1</label>
                            <input type="text" class="form-control" placeholder="lien de la categorie" name="Lien1">
                        </div>
                        <div class="form-group col-md-6">
                            <div class="" style="border: 1px solid #000; height: 120px; width: 100%; margin: 20px 0px;">
                            
                            </div> 
                        </div>
                        <div class="form-group col-md-6">
                            <label>Slide 2</label>
                            <input type="file" class="form-control" name="image2"><br>
                            <label>Lien 2</label>
                            <input type="text" class="form-control" placeholder="lien de la categorie" name="lien2">
                        </div>
                        <div class="form-group col-md-6">
                            <div class="" style="border: 1px solid #000; height: 120px; width: 100%; margin: 20px 0px;">
                            
                            </div> 
                        </div>
                        <div class="form-group col-md-6">
                            <label>Slide 3</label>
                            <input type="file" class="form-control" name="image3"><br>
                            <label>Lien 3</label>
                            <input type="text" class="form-control" placeholder="lien de la categorie" name="lien3">
                        </div>
                        <div class="form-group col-md-6">
                            <div class="" style="border: 1px solid #000; height: 120px; width: 100%; margin: 20px 0px;">
                            
                            </div> 
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