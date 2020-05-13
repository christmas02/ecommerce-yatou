<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Produits;
use App\Categorie;
use App\Souscategories;
use Cart as Cart;


class Welcome extends Controller
{
    public function index()
    {
        //$categories = DB::table('categories')->get();
        $categories = Categorie::all();
        $souscategories = Souscategories::all();
        $produit = Produits::where('a_la_une','!=', '0')->orderBy('id', "asc")->get();
        $interested = Produits::where('nbrvente','!=', '0')->orderBy('nbrvente', "desc")->get();
        return view('template.index', ['produits' => $produit, 'categories' => $categories, 'souscategories' => $souscategories, 'interested' => $interested]);
    }


    public function produitCat($name)
    {
        $categories = Categorie::all();
        $idItem = Categorie::select('id')->where('nom_cat',$name)->first();
        $souscategories = Souscategories::where('categorie_id','=',$idItem->id)->get();
        $produits = Produits::where('categorie', '=',$name)->orderBy('id', "desc")->paginate(16);
        //$produits = DB::table('produits')->paginate(20);
        return view('template.produits',  ['produits' => $produits, 'categories' => $categories, 'souscategories' => $souscategories, 'name' =>$name]);
    }

    public function show($slug)
    {
        $categories = Categorie::all();
        $posts = Produits::where('slug','=',$slug)->first();
        $produits = DB::table('produits')->orderBy('id', "desc")->get()->random(3);
        return view('template.page_produits', ['posts' => $posts, 'categories' => $categories, 'produits' => $produits]);
    }

    public function produitScat($name){

        $categories = Categorie::all();
        
        $idScat = Souscategories::select('categorie_id')->where('libele',$name)->first();
        $nomCat = Categorie::select('nom_cat')->where('id',$idScat->categorie_id)->first();

        $souscategories = Souscategories::where('categorie_id','=',$idScat->categorie_id)->get();
        $produits = Produits::where('souscategorie', '=',$name)->orderBy('id', "desc")->paginate(16);
        //$produits = DB::table('produits')->paginate(20);
        return view('template.produitsScat', ['nomCat' => $nomCat->nom_cat, 'produits' => $produits, 'categories' => $categories, 'souscategories' => $souscategories]);

    }

    public function search(Request $request)
    {  
        $categories = Categorie::all();
        $libelle = $request->get('libelle');
        $resultat = Produits::where('nom','like', '%'.$libelle.'%')->get();
        //dd($resultat);
        return view('template.resultats', ['resultat' => $resultat, 'categories' => $categories,]);
        //dd($paroisses);
    }
}
 