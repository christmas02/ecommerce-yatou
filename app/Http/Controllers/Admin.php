<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use App\Produits;
use App\Categorie;
use App\Souscategories;
use App\Commandes;
use App\Taille;

class Admin extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($reponse = '')
	{
        $nbrprod = DB::table('produits')->count();
        $nbrcmd = DB::table('commandes')->count();
        $nbrcmdN = DB::table('commandes')->where('etat', '=', '0')->count();
        return view('admin/index', ['nbrprod' => $nbrprod, 'nbrcmd' => $nbrcmd, 'nbrcmdN' => $nbrcmdN]);
    }

    public function ShowProd()
	{
        $produits = DB::table('produits')
        ->leftjoin('categories','categories.id','=','produits.categorie')
        ->leftjoin('souscategories','souscategories.id','=','produits.souscategorie')
        ->select('souscategories.name as libelle','categories.name','produits.*')
        ->orderBy('id', "DESC")->paginate(50);
        return view('admin/home', ['produits' => $produits]);
    }



    public function showcommandes()
	{
        //$commandes = DB::table('commandes')->orderBy('id', "DESC")->paginate(50);
        $commandes = Commandes::orderBy('created_at','desc')->get();
        // $commandes = DB::table('commandes')
        // ->join('users','commandes.user_id','=','users.id')
        // ->select('*','commandes.telephone','commandes.id')
        // ->orderBy('commandes.id', "DESC")->paginate(50);
        //dd($commandes);
        return view('admin/commande',  ['commandes' => $commandes ]);
    }

    public function addmutuelle()
	{
        $mutuelles = DB::select('select * from mutuelles');
        return view('admin/addmutuelle',  ['mutuelles' => $mutuelles ]);
    }


    // CODE DE SOUS CATEGORIES
    public function addsouscateg()
	{
        $souscategorie = DB::select('select * from souscategories');
        $categories = DB::select('select * from categories');
        return view('admin/addsouscateg',  ['souscategorie' => $souscategorie, 'categories' => $categories ]);
    }

     public function addprod()
	{
        $categories = Categorie::get();
        $souscategories = Souscategories::get();
        return view('admin/addprod', compact('categories', 'souscategories'));
    }


    public function deleteScat($id)
    {
        $prots = DB::delete('delete from souscategories where id=?' ,[$id]);
        $reponse = redirect('souscategorie')->with('success','La sous-categorie a bien ete supprimer');
		return $reponse;
    }

    public function editeScat($id)
    {
        $Scategorie = Souscategories::where('id','=',$id)->first();
        return view('admin/editeScat')->with('Scategorie', $Scategorie);
    }

    public function storesouscateg(Request $request)
	  {
        $libelle = $request->get('libelle');
        $idcategorie = $request->get('idcategorie');
        $etat = '1';

        $produits = DB::table('souscategories')
                        ->insert(['name' => $libelle,
                                 'categorie_id' => $idcategorie,
                                 'statut' => $etat]);

        if($produits)
        {
            $resultat = redirect('souscategorie')->with('success', 'Le nouveau produits a ete bien eregistre');
        }else{
            $resultat = redirect('admin/addsouscateg')->with('danger', 'Veille ressayez svp');
        }
        return $resultat;
    }

    public function updateScat(Request $request, $id)
	{
        $libelle = $request->get('libelle');

        $produits = DB::table('souscategories')
                   ->where('id', $id)
                   ->update(['libele' => $libelle ]);

        if($produits)
        {
            $resultat = redirect('souscategorie')->with('success', 'Le nouveau produits a ete bien eregistre');
        }else{
            $resultat = redirect('admin/addsouscateg')->with('danger', 'Veille ressayez svp');
        }
        return $resultat;
    }

    // CODE DE CATEGORIE

    public function addcateg(Request $request)
	{
        $categories = DB::select('select * from categories');
        return view('admin/addcateg', ['categories' => $categories ]);
    }


    public function deleteCat($id){

        $prots = DB::delete('delete from categories where id=?' ,[$id]);
        $reponse = redirect('nouvellecategorie')->with('success','La categorie a bien ete supprimer');
		return $reponse;
    }

    public function editeCat($id){

        $categorie = Categorie::where('id','=',$id)->first();
        return view('admin/editeCat')->with('categorie', $categorie);
    }

    public function storecateg(Request $request)
	{
        $nom_categ = $request->get('nom_categ');
        $etat = '1';

        $categories = DB::table('categories')
                        ->insert(['name' => $nom_categ,
                                 'statut' => $etat]);

        if($categories)
        {
            $resultat = redirect('nouvellecategorie')->with('success', 'La nouvelle a ete bien eregistre');
        }else{
            $resultat = redirect('admin/addcateg')->with('danger', 'Veille ressayez svp');
        }
        return $resultat;
    }

    public function updateCat(Request $request, $id)
	{
        $nom_categ = $request->get('nom_categ');

        $categories = DB::table('categories')
                        ->where('id', $id)
                        ->update(['nom_cat' => $nom_categ ]);

        if($categories)
        {
            $resultat = redirect('nouvellecategorie')->with('success', 'La nouvelle a ete bien eregistre');
        }else{
            $resultat = redirect('admin/addcateg')->with('danger', 'Veille ressayez svp');
        }
        return $resultat;
    }


    // CODE DE PRODUTS

    public function stors(Request $request)
	  {
        //dd($request->all());
        $nom = $request->input ('nom');
        $montant = $request->get('montant');
        $detail = $request->get('detail');
        $categorie = $request->get('categorie');
        $stock = $request->get('stock');
        $taille = $request->get('taille');
        $type = $request->get('type');

        //$image = $request->file('image');
        if($request->get('souscategorie') == ''){
            $souscategorie = 'neant';
        }else{
            $souscategorie = $request->get('souscategorie');
        }
        $image ="";
        if($request->hasfile('image')){
            $image = $request->file('image');
            $newname = $input['imagename'] = time(). '.' . $image->getClientOriginalname();
            $destination = public_path('/image');
            $image->move($destination, $input['imagename']);
        }
        $date = date('d,y,m');
        $slug = $nom.$categorie;

        $produits = DB::table('produits')
            ->insert(['nom' => $nom,
                      'montant' => $montant,
                      'categorie' => $categorie,
                      'souscategorie' => $souscategorie,
                      'image' => $newname,
                      'stock' => $stock,
                      //'taille' => $taille,
                      'nbrvente' => 0,
                      'a_la_une' => 0,
                      'slug' => $slug]);


        if($produits)
        {
            $resultat = redirect('listedesproduits')->with('success', 'Le nouveau produits a ete bien eregistre');
        }else{
            $resultat = redirect('admin/addprod')->with('danger', 'Veille ressayez svp');
        }
        return $resultat;

    }

    public function editeImage($id)
    {
        $posts = Produits::where('id','=',$id)->first();
        return view('admin/editeImage')->with('post', $posts);
    }

    public function delete($id){

        $prots = DB::delete('delete from produits where id=?' ,[$id]);
        $tailles = Taille::where('produit_id','=',$id)->get();
        foreach ($tailles as $key => $value) {
            $tailleDelete = DB::delete('delete from tailles where produit_id=?' ,[$id]);
        }
        $reponse = redirect('listedesproduits')->with('success','Le produits a bien ete supprimer');
		return $reponse;
    }

    public function update(Request $request, $id)
	  {
        $nom = $request->input ('nom');
        $montant = $request->get('montant');
        $description = $request->get('description');
        $categorie = $request->get('categorie');
         //$image = $request->file('image');

        $prod = DB::table('produits')
            ->where('id', $id)
            ->update(['nom' => $nom,
                      'montant' => $montant,
                      'description' => $description,
                      'categorie' => $categorie]);
        if($prod)
        {
            $resultat = redirect('listedesproduits')->with('success', 'La mise a jours a ete bien eregistre');
        }else{
            $resultat = redirect('admin/edite')->with('danger', 'Veille ressayez svp');
        }
        return $resultat;

    }

    public function updateImage(Request $request, $id)
	  {
         $image ="";
        if($request->hasfile('image')){
            $image = $request->file('image');
            $newname = $input['imagename'] = time(). '.' . $image->getClientOriginalname();
            $destination = public_path('/image');
            $image->move($destination, $input['imagename']);
        }

        $prod = DB::table('produits')
            ->where('id', $id)
            ->update(['image' => $newname,]);
        if($prod)
        {
            $resultat = redirect('listedesproduits')->with('success', 'La mise a jours a ete bien eregistre');
        }else{
            $resultat = redirect('admin/edite')->with('danger', 'Veille ressayez svp');
        }
        return $resultat;

    }

    public function dispo($id)
	  {
        $etat = '1';
        $prod = DB::table('produits')
                             ->where('id', $id)
                             ->update(['a_la_une' => $etat]);
         if($prod)
        {
            $resultat = redirect('listedesproduits')->with('success', 'Le produits est a la une');
        }else{
            $resultat = redirect('listedesproduits')->with('danger', '');
        }
        return $resultat;

    }

    public function indispo($id)
	  {
        $etat = '0';
        $prod = DB::table('produits')
                             ->where('id', $id)
                             ->update(['a_la_une' => $etat]);
        if($prod)
        {
            $resultat = redirect('listedesproduits')->with('success', 'Le produits a ete retirer de la une');
        }else{
            $resultat = redirect('listedesproduits')->with('danger', '');
        }
        return $resultat;

    }

    public function show($slug)
    {

    }

    public function edite($id)
    {
        $posts = Produits::where('id','=',$id)->first();
        return view('admin/edite')->with('post', $posts);
    }




    // PARAMETRE DU TEMPLATE


    public function addslide(){

        return view('admin/addslide');
    }

    public function addpub(){

        return view('admin/addpub');
    }

    public function ajax_souscategorie()
    {
        $cat_id = Input::get('cat_id');
        $sousCategories = Souscategories::where('categorie_id','=',$cat_id)->get();
        //dd($sousCategories);
        return response()->json($sousCategories);
    }

}
