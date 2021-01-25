<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Cart as Cart;
use Validator;
use App\Categorie;
use App\Mutuelles;
use App\Souscategories;
use App\Panier;
use App\Commandes;
use Spipu\Html2Pdf\Html2Pdf;
use Illuminate\Support\Facades\Mail;
use App\Mail\NouvelleCommande;
use App\Mail\Notification;
use App\User;
use Illuminate\Support\Facades\Hash;
use PDF;
use App\Client;

class CartController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::all();
        $souscategories = Souscategories::all();
        //$interested = DB::table('produits')->orderBy('nbrvente', "desc")->get()->random(4);
        //$mutuelles = DB::select('select * from mutuelles');
        return view('template.card', ['categories' => $categories, 'souscategories' => $souscategories]);
    }

    public function checkout(){

        $categories = Categorie::all();
        $souscategories = Souscategories::all();
        //dd($reponse);
        return view('template.checkout',  ['categories' => $categories, 'souscategories' => $souscategories]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $duplicates = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });

        if (!$duplicates->isEmpty()) {
            return redirect('cart')->withSuccessMessage('L article est déjà dans votre panier!');
        }

        Cart::add($request->id, $request->name, 1, $request->price, $request->taille)->associate('App\Produits');
        return redirect('cart')->withSuccessMessage('L article a été ajouté à votre panier!');
    }

    public function printPDF(Request $request)
    {
        $nom = $request->get('nom');
        $prenom = $request->get('prenom');
        $email = $request->get('email');

        $tel = $request->get('tel');
        $ville = $request->get('ville');
        $date = date('d.m.y');



        $data = array('nom' => $nom, 'prenom' => $prenom, 'email' => $email,  'tel' => $tel, 'ville' => $ville, 'date' => $date );
        $pdf = PDF::loadView('cart_pdf', $data);
        return $pdf->download('facture.pdf');


    }

    public function sendmail(Request $request)
    {

        $client_id = $request->client_id;
        $ville = $request->get('ville');
        $date = date('Y-m-d H:i:s');
        $matricule = 'MAT'.time();
        $tel = $request->get('tel');

        if($client_id == 0)
        {
            $nom = $request->get('nom');
            $prenom = $request->get('prenom');
            $email = $request->get('email');

            $reponse = $request->reponse;

            $data = [
                'name'=>$nom.' '.$prenom,
                'email'=>$email,
                'telephone'=> $tel,
                'password'=>Hash::make('clientwinnerstore'),
                'role'=>1
            ];

            //création du client
            User::create($data);
            $latest_user = DB::table('users')->latest()->first();
            $client =  User::find($latest_user->id);
        }else{
           $client = User::find($request->client_id);
        }
        $commandes = DB::table('commandes')
        ->insert([
                  'statut' => 'commande',
                  'date' => $date,
                  'lieux' => $ville,
                  'telephone' => $client->telephone,
                  'matricule' => $matricule,
                  'modepayement' => 'livraison',
                  'mutuelle' => 'aucun',
                  'etat' => '0',
                  'created_at'=>date('Y-m-d H:i:s'),
                  'updated_at'=>date('Y-m-d H:i:s'),
                  'user_id'=>$client->id
                 ]);

        // foreach (Cart::contents() as $key => $product) {

        // }

        //$html = view('cart_pdf',['nom' => $nom, 'prenom' => $prenom, 'email' => $email, 'tel' => $tel, 'ville' => $ville,  'date' => $date])->render();
        // $html2pdf = new Html2Pdf();
        // $user = auth()->user();
         //$html2pdf->pdf->SetAuthor(config('app.name'));
         //$html2pdf->pdf->SetTitle('Facture  ');
         //$html2pdf->pdf->SetSubject('Facture  ');
         //$html2pdf->pdf->SetKeywords('facture '.config('app.name'));
         //$html2pdf->pdf->SetCreator(config('app.name').' (1.0)');
         //$html2pdf->writeHTML($html);
         //$pdf_file_name = str_slug('Facture '.uniqid()).'.pdf';
         //$pdfContent = $html2pdf->output($pdf_file_name, 'S');

        $data = array('nom' => $client->name, 'email' => $client->email,  'tel' => $client->telephone, 'ville' => $ville, 'date' => $date, 'matricule' => $matricule );
        $pdf = PDF::loadView('cart_pdf', $data)->output();
        //return $pdf->download('facture.pdf');
        $commandes_id = DB::table('commandes')->latest('id')->first()->id;
        foreach ( Cart::content() as $key => $product) {
            $data = [
                'produits_id' => $product->id,
                'commandes_id'=> $commandes_id,
                'date'=> date('Y-m-d H:i:s'),
                'qteCmd'=>$product->qty
            ];
            Panier::create($data);
        }

        Mail::to('admin@yatouaumarche.com')
        ->send(new NouvelleCommande($pdf));

        Mail::to($request->get('email'))
        ->send(new notification($pdf));

        Cart::destroy();
        return redirect('/')->withSuccessMessage('votre commande a été enregistré !');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        // Validation on max quantity
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,10'
        ]);

         if ($validator->fails()) {
            session()->flash('error_message', 'La quantité doit être comprise entre 1 et 10.');
            return response()->json(['success' => false]);
         }

        Cart::update($id, $request->quantity);
        session()->flash('success_message', 'La quantité a été mise à jour avec succès!');

        return response()->json(['success' => true]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return redirect('cart')->withSuccessMessage('L article a été suprimé à votre panier!');
    }

    /**
     * Remove the resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function emptyCart()
    {
        Cart::destroy();
        return redirect('cart')->withSuccessMessage('Votre panier a ete vider!');
    }

    /**
     * Switch item from shopping cart to wishlist.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function switchToWishlist($id)
    {
        $item = Cart::get($id);

        Cart::remove($id);

        $duplicates = Cart::instance('wishlist')->search(function ($cartItem, $rowId) use ($id) {
            return $cartItem->id === $id;
        });

        if (!$duplicates->isEmpty()) {
            return redirect('cart')->withSuccessMessage('Item is already in your Wishlist!');
        }

        Cart::instance('wishlist')->add($item->id, $item->name, 1, $item->price)
                                  ->associate('App\Product');

        return redirect('cart')->withSuccessMessage('Item has been moved to your Wishlist!');

    }
}
