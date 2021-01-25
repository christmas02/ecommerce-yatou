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
                <h3 class="panel-title"> Detail de la commande {{ $commande->matricule }}</h3>
              </div>
              <div class="panel-body">

                <div class="row">
                    <div class="col-md-6">
                        <p class="">
                            <h3><label for="">Information du Client</label></h3>
                            <hr>
                            {{-- <hr class="" style="padding:2px; margin-top:0px; background-color:#428bca;" width="15%"> --}}
                            <label for="" class="">Nom & Prénoms:</label> {{ $commande->user->name }} <br>
                            <label>Telephone :</label> {{ $commande->user->telephone }} <br>
                            <label>Email:</label> {{ $commande->user->email }} <br>

                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="">
                            <h3><label for="">Information sur la commande</label></h3>
                            <hr>
                            {{-- <hr class="" style="padding:2px; margin-top:0px; background-color:#428bca;" width="15%"> --}}
                            <label>Matricule de la commande:</label> {{ $commande->matricule }} <br>
                            <label>Etat de la commande:</label>
                            @switch($commande->etat)
                                @case(0)
                                    <button class="btn btn-sm btn-primary">En Attente</button>
                                    @break
                                @case(1)
                                    <button class="btn btn-sm btn-warning">En Cours de Livraison</button>
                                    @break
                                @case(2)
                                    <button class="btn btn-sm btn-success">Livrée</button>
                                    @break

                                @case(3)
                                    <button class="btn btn-sm btn-danger">Anulée</button>
                                    @break
                            @default

                            @endswitch
                            <br>
                            <label>Lieu:</label> {{ $commande->lieux }} <br>
                            <label>Date Prévue de la livraison :</label> {{ $commande->date }}
                        </p>
                    </div>
                </div>


                <div class="table-responsive">
                  <h3 class=""><strong>Commande (Panier)</strong>  </h3>
                  <hr>
                  <br>
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th>Image <i class="fa fa-sort"></i></th>
                        <th>Nom du Produit <i class="fa fa-sort"></i></th>
                        <th>Qunatité Commndé</th> <i class="fa fa-sort"></i></th>
                        <th>Prix Unitaire <i class="fa fa-sort"></i></th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                            $coutTotal = 0;
                        ?>
                    @foreach($panier as $p)
                        <?php
                            $coutTotal +=  $p->montant * $p->qteCmd;
                        ?>
                       <tr>
                          <td><img src="{{ asset('/image/'.$p->image) }}" width="50px" alt=""></td>
                          <td>{{ $p->nom }} </td>
                          <td>{{ $p->qteCmd }} </td>
                          <td>{{ App\Panier::getPrice($p->montant) }} </td>
                          <td>{{ App\Panier::getPrice($p->montant * $p->qteCmd) }}</td>
                       </tr>
                    @endforeach
                    <tr >
                        <td colspan="4">Côut Total</td>
                        <td>{{ App\Panier::getPrice($coutTotal) }}</td>
                    </tr>
                    </tbody>
                  </table>

                   <div class="">
                     <h3 class="text-uppercase"><strong>Evolution de la commande</strong></h3>

                     <hr>
                     @if($commande->livreur_id != 0)
                        <h3>Information du livreur</h3>
                        <div class="row">
                            <div class="col-md-5">
                                <label for="">Nom & Prénoms</label>: {{ $commande->livreur->name }}<br>
                                <label for="">Contact</label>: {{ $commande->livreur->contact }}<br>
                                <label for="">Structure</label>: {{ $commande->livreur->structure }}<br>
                                <label for="">Email</label>: {{ $commande->livreur->email }}<br>
                                <br>
                            </div>
                            <div class="col-md-7">
                                    @if($commande->etat == 1)
                                    Modifier le livreur
                                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
                                        Nouveau Livreur
                                    </button>
                                    <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal2">
                                          Ancien Livreur
                                    </button>
                                    @endif
                                    @if($commande->etat == 3)
                                       <label for="">Motif D'annulation</label><br>
                                       {{ $commande->motif }}
                                    @endif


                            </div>
                        </div>


                     @endif
                     <!-- Button trigger modal -->
                       {{-- Action lorsque la commande est en attente --}}
                       @switch($commande->etat)
                       @case(0)
                       <div class="row">
                           <div class="col-sm-6">
                                <label for=""> Affecter un Livreur à la commande</label><br>
                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
                                Nouveau Livreur
                                </button>
                                <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal2">
                                    Ancien Livreur
                                </button>
                           </div>
                           <div class="col-sm-6">
                                <label for="">Anulation de la commande</label><br>
                                <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal3">
                                    Anulée la commande
                                </a>
                           </div>
                       </div>

                        @break
                        {{-- Action lorsque la commande est en cours --}}
                        @case(1)
                            <form action="{{ route('livraison', $commande->id) }}" method="POST">
                                @csrf
                                @method('put')
                                <button type="submit" class="btn btn-sm btn-success">Confirmer la livraison de la commande</button>
                                <input type="hidden" name="etat" value="2">
                                <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal3">
                                   Anulée la commande
                                </a>
                            </form>
                            @break
                        @case(2)
                            <button class="btn btn-sm btn-success">Commande Livrée</button>
                            @break
                        @case(3)
                            <button class="btn btn-sm btn-danger">Commande Annulée</button>
                             @break
                        @default

                     @endswitch

                        <div class="">
                            <a href="{{ route('commande') }}" class="btn btn-primary btn-sm pull-right">Retour</a>
                        </div>
                   </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- /.row -->


      </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <form action="{{ route('affectationlivreurcommande') }}" method="POST">
                   @csrf
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Enregistrer les Informations du Livreur</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row" style="margin:4px">

                            <div class="form-group row">
                                <label class="col col-sm-3">Nom & Prénoms</label>
                                <div class="col col-sm-9">
                                    <input type="text" class="form-control" placeholder="Entrez son Nom et Prénoms" name="name" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col col-sm-3">Contact</label>
                                <div class="col col-sm-9">
                                    <input type="text" class="form-control" placeholder="Entrez son contact" name="contact" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col col-sm-3">Email</label>
                                <div class="col col-sm-9">
                                    <input type="email" class="form-control" placeholder="Entrez son Email" name="email" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col col-sm-3">Structure</label>
                                <div class="col col-sm-9">
                                    <input type="text" class="form-control" placeholder="Entrez le nom de votre structure" name="structure">
                                </div>
                            </div>
                            <input type="hidden" name="commande_id" value="{{ $id }}">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary" value="newLivreur">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <form action="{{ route('affectationlivreurcommande') }}" method="POST">
                   @csrf
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Liste des Livreurs</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row" style="margin:4px">

                            <div class="form-group row">
                                <label class="col col-sm-3">Ancien Livreur</label>
                                <div class="col col-sm-9">
                                    <select name="livreur_id" id="" class="form-control">
                                        <option value="">Choississez le livreur</option>
                                        @foreach ($livreurs as $livreur)
                                            <option value="{{ $livreur->id }}">{{ $livreur->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <input type="hidden" name="commande_id" value="{{ $commande->id }}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary" value="oldLivreur">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <form action="{{ route('livraison', $commande->id) }}" method="POST">
                   @csrf
                   @method('put')
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Anulation de la commande</h4>

                    </div>
                    <div class="modal-body">
                        <div class="row" style="margin:4px">

                            <div class="form-group row">
                                <label class="col col-sm-3">Motif</label>
                                <div class="col col-sm-9">
                                    <textarea name="motif" class="form-control" id="" cols="30" rows="10" placeholder="Entrez le motif de l'annulation"></textarea>
                                </div>
                            </div>
                            <input type="hidden" name="commande_id" value="{{ $commande->id }}">
                            <input type="hidden" name="etat" value="3">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary" value="oldLivreur">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
@section('extrajs')
    <script>
        $('#myModal').modal(options)
    </script>

@endsection
