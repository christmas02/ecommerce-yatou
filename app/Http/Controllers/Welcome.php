<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Produits;
use App\Categorie;
use App\Souscategories;
use App\User;
use Cart as Cart;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class Welcome extends Controller
{
    protected $rulesClient = [
        'name'=>['required','string','max:255'],
        'prenom'=>['required','string','max:255'],
        'email'=>['required','string','email','max:225','unique:users'],
        'telephone'=>['required'],
        'password'=>['confirmed'],
        'role'=>['required']
    ];

    protected $messages = [
        'required'=>'Le champ :attribute est requis'
    ];

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
        $idItem = Categorie::select('id')->where('name',$name)->first();
        $souscategories = Souscategories::where('categorie_id','=',$idItem->id)->get();
        $produits = Produits::where('categorie', '=',$name)->orderBy('id', "desc")->paginate(16);
        //$produits = DB::table('produits')->paginate(20);
        return view('template.produits',  ['produits' => $produits, 'categories' => $categories, 'souscategories' => $souscategories, 'name' =>$name]);
    }

    public function inscriptionPage(){

        $categories = Categorie::all();
        $souscategories = Souscategories::all();
        return view('template.inscriptionPage', ['categories' => $categories, 'souscategories' => $souscategories]);

    }

    public function notPage(){

        $categories = Categorie::all();
        $souscategories = Souscategories::all();
        return view('template.notPage', ['categories' => $categories, 'souscategories' => $souscategories]);

    }

    public function connexionPage(){

        $categories = Categorie::all();
        $souscategories = Souscategories::all();
        return view('template.connexionPage', ['categories' => $categories, 'souscategories' => $souscategories]);

    }

    public function show($slug)
    {
        $categories = Categorie::all();
        $posts = Produits::where('slug','=',$slug)->first();
        $idCat = Produits::select('categorie')->where('nom',$posts->nom)->first();
        //dd($idCat);
        $CatName = Categorie::where('id',$idCat->categorie)->first();
        //dd($CatName);
        $produits = DB::table('produits')->orderBy('id', "desc")->get()->random(0);
        return view('template.produit', ['posts' => $posts, 'categories' => $categories,
                                         'produits' => $produits, 'idCat' => $idCat]);
    }

    public function distributeurPage($namecat){
        //dd($namecat);
        $categories = Categorie::all();
        $souscategories = Souscategories::all();
        $idScat = Categorie::select('id')->where('name',$namecat)->first();
        //$nomCat = Categorie::select('name')->where('id',$idScat->categorie_id)->first();
        //dd($idScat);
        //$souscategories = Souscategories::where('categorie_id','=',$idScat->categorie_id)->get();
        $produits = Produits::where('souscategorie', '=',$idScat->id)->orderBy('id', "desc")->get();
        //dd($produits);
        //$produits = DB::table('produits')->paginate(20);
        //dd($categories);
        return view('template.distributeurPage', ['produits' => $produits,
                                          'categories' => $categories,
                                          'souscategories' => $souscategories,
                                          'name' => $namecat,
                                          'namecat' => $namecat]);

    }

    public function typbPage($namecat){
        //dd($namecat);
        $categories = Categorie::all();
        $souscategories = Souscategories::all();
        $idScat = Souscategories::select('id')->where('name',$namecat)->first();
        //$nomCat = Categorie::select('name')->where('id',$idScat->categorie_id)->first();
        //dd($idScat);
        //$souscategories = Souscategories::where('categorie_id','=',$idScat->categorie_id)->get();
        $produits = Produits::where('souscategorie', '=',$idScat->id)->orderBy('id', "desc")->get();
        //dd($produits);
        //$produits = DB::table('produits')->paginate(20);
        //dd($categories);
        return view('template.typbPage', ['produits' => $produits,
                                          'categories' => $categories,
                                          'souscategories' => $souscategories,
                                          'name' => $namecat,
                                          'namecat' => $namecat]);

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

    public function apropos(){
        $categories = Categorie::all();
        $souscategories = Souscategories::all();
        return view('template.apropos', ['categories' => $categories, 'souscategories' => $souscategories,]);
    }


    public function produits(){
        $categories = Categorie::all();
        $souscategories = Souscategories::all();
        $produits = Produits::all();
        return view('template.pageProduits', ['categories' => $categories, 'souscategories' => $souscategories, 'produits' => $produits]);
    }

    public function inscriptionClient()
    {
        $categories = Categorie::all();
        $souscategories = Souscategories::all();
        $data = [
            'categories'=>$categories,
            'souscategories'=>$souscategories
        ];
        return view('template.inscription')->with($data);
    }

    public function storeClient(Request $request)
    {
        $this->validate($request, $this->rulesClient, $this->messages );

        $data = $request->request->all();
        $data['name'] = $request->name.' '.$request->prenom;
        $data['password'] = Hash::make($request->password);
        $data = Arr::except($data, 'password_confirmation');
        $data = Arr::except($data, 'prenom');
        $reponse='oui';
        $data['reponse'] = $reponse;
        //dd($data);
        User::create($data);
        $latest_user= DB::table('users')->latest()->first()->id;
        return redirect('checkout/'.$latest_user.'/'.$reponse)->with('message','votre enregistrement a bien été éffectué');
    }
}
