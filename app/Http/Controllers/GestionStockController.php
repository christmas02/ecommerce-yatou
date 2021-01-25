<?php

namespace App\Http\Controllers;

use App\Commandes;
use App\Livreur;
use App\Mail\Retour_Client;
use App\Mail\Retour_Livreur;
use App\Mail\WinnerStore;
use Illuminate\Http\Request;
use App\Panier;
use App\Produits;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class GestionStockController extends Controller
{
    protected $rulesAffectionLivreur=[
        'name'=>'required',
        'contact'=>'required',
    ];
    protected $rulesLivraison = [
        'etat'=>'required'
    ];

    protected $message = [
        'required'=>'le champ :attribute est requis',
    ];
    /**
     * Liste des produits commandés pour une commandes
     */

     public function commandeDetail($id)
     {
         //dd($id);
        //liste des produits du panier en fonction de l'identifiant de la commande
        $panier = DB::table('paniers')
                ->join('produits','produits.id','=','paniers.produits_id')
                ->join('commandes','commandes.id','=','paniers.commandes_id')
                ->select('commandes.id','produits.*','paniers.*')
                ->where('commandes.id','=',$id)
                ->get();
        //dd($panier);
        //dd($panier);
        $commande = Commandes::find($id);
        // $commande =  DB::table('commandes')
        //             ->join('users','users.id','=','commandes.client_id')
        //             ->select('commandes.*','commandes.id','users.*')
        //             ->where('commandes.id','=',$id)
        //             ->first();
        //dd($commande->id);
        $livreurs = Livreur::orderBy('created_at','desc')->get();
        $data = [
            'commande'=>$commande,
            'panier'=>$panier,
            'livreurs'=>$livreurs,
            'id'=>$id
        ];
        return view('admin/commandeDetail')->with($data);
     }
     //verification de l'existance du livreur dans la base de donnée
     public function checklivreurexist($id)
     {
         return $query = Livreur::orderBy('created_at','desc')->where('id','=',$id)->first();

     }
     //affectation du livreur a une commande
     public function affectationLivreur(Request $request)
     {
        //information de la commande
        $commande = Commandes::find($request->commande_id);
       // dd($request->all(), $commande);
        if($this->checklivreurexist($request->livreur_id) ==  NULL){
             /**Cas  Nouveau Livreur */
            $this->validate($request, $this->rulesAffectionLivreur, $this->message);
            $data = Arr::except($request->all(), 'commande_id','livreur_id');

            if($request->structure==''){
                $data['structure'] = 'Indépendant';
            }
            //Ajout du livreur dans la base de donnée
            Livreur::create($data);
            $lastRecordLivreur =  DB::table('livreurs')->latest('id')->first();

            $data2 = [
                'livreur_id'=>$lastRecordLivreur->id,
                'etat'=>1
            ];

            //dd($commande, $data2);
            $commande->update($data2);
            //Notification au Livreur affecté
            $dataCmd = [
                'matricule'=>$commande->matricule,
                'lieu'=>$commande->lieux,
                'nomClient'=>$commande->user->name,
                'telephone'=>$commande->telephone,
                'etatCmd'=>$commande->etat,
                'typeMessage'=>'client'
            ];
            //dd($dataCmd);

            Mail::to($lastRecordLivreur->email)->send(new WinnerStore($dataCmd));

            //Notification au CLient concernée par la commande
            $dataLivreur = [
                'name'=>$commande->livreur->name,
                'contact'=>$commande->livreur->contact,
                'etatCmd'=>$commande->etat,
                'typeMessage'=>'livreur'
            ];
            dd($dataLivreur);
            Mail::to($commande->email)->send(new WinnerStore($dataLivreur));

            //retour sur les détails de la commande
            return back()->with('sucess','le livreur a bien été affecté a la commande');
        }else{
             /**Cas  Ancien Livreur */

            $ckecklivreur = $this->checklivreurexist($request->livreur_id);
            $livreur = Livreur::find($request->livreur_id);
            $data2 = [
                'livreur_id'=>$livreur->id,
                'etat'=>1
            ];
            $commande->update($data2);
             //Notification au CLient concernée par la commande
             $dataLivreur = [
                'name'=>$commande->livreur->name,
                'contact'=>$commande->livreur->contact,
                'etatCmd'=>$commande->etat,
                'typeMessage'=>'client'
            ];
            Mail::to($commande->email)->send(new WinnerStore($dataLivreur));

            $commande->update($data2);
            //Notification au Livreur affecté
            $dataCmd = [
                'matricule'=>$commande->matricule,
                'lieu'=>$commande->lieux,
                'nomClient'=>$commande->nom.' '.$commande->prenoms,
                'telephone'=>$commande->telephone,
                'etatCmd'=>$commande->etat,
                'typeMessage'=>'livreur'
            ];

            Mail::to($livreur->email)->send(new WinnerStore($dataCmd));

            return back()->with('sucess','le livreur a bien été affecté a la commande');
        }

     }
     //fonction pour motifier l'etat de la commande et décrémenté le stock
     public function livraison(Request $request, $id)
     {
         $this->validate($request, $this->rulesLivraison, $this->message);
         $data = [];
         $commande = Commandes::find($id);
         if($request->motif==''){

            $data = [
                'etat'=> $request->etat
            ];
            $paniers = Panier::orderBy('created_at','desc')->where('commandes_id','=',$id)->get();
            //dd($paniers);
            //décrémentation du stock de produit
            foreach ($paniers as $panier) {
               $produit = Produits::find($panier->produits_id);
               //dd($produit->stock-$panier->qteCmd);
               $produit->update(['stock'=>$produit->stock - $panier->qteCmd]);
            }
         }else{
            $data = [
                'etat'=> $request->etat,
                'motif'=>$request->motif
            ];
         }

         $commande->update($data);
         $dataCmd = [
            'etatCmd'=>$commande->etat,
            'typeMessage'=>'client'
         ];

         $dataLivreur= [
             'etatCmd'=>$commande->etat,
             'typeMessage'=>'livreur'
         ];

         if($request->motif==''){
            // dd($dataCmd);
             /**Notification au client et au livreur  que la livraison a bien été effectué */
            Mail::to($commande->email)->send(new WinnerStore($dataCmd));
            Mail::to($commande->email)->send(new WinnerStore($dataLivreur));
            return back()->with('success','Livraison éffectuée');
         }else{
             /**Notification au client et au livreur  que la livraison a bien été annulée */
            Mail::to($commande->email)->send(new WinnerStore($dataCmd));
            Mail::to($commande->email)->send(new WinnerStore($dataLivreur));
            return back()->with('danger','Livraison Annulée');
         }

     }

}
