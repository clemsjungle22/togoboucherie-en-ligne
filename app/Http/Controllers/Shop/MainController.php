<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Category_produit_mer;
use App\Models\Category_produit_personnalise;
use App\Models\Category_volaille;
use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Produit_mer;
use App\Models\Produit_personnalise;
use App\Http\Controllers\AdminController;
use App\Models\Produit_personnalise_grosse;
use App\Models\Produit_predefini_classique;
use App\Models\Produit_predefini_grosse;

class MainController extends Controller
{
   

//fonction de la page d'accueil.....................................................................
    public function index(){

       // $categories = Category_volaille::all();
        //$categorie = Category_produit_mer::all();
        return view('/layouts/index');

    }


    public function modals(){

       // $categories = Category_volaille::all();
        //$categorie = Category_produit_mer::all();
        return view('/layouts/modals');

    }
    public function box(){

        //$categories = Category_volaille::all();
        //$categorie = Category_produit_mer::all();  
        return view('/layouts/box');

    }
    public function choix_personnalise(){

       // $categories = Category_volaille::all();
        //$categorie = Category_produit_mer::all();
        return view('/layouts/choix_personnalise');

    }
    public function choix_predefini(){

        //$categories = Category_volaille::all();
        //$categorie = Category_produit_mer::all();
        return view('/layouts/choix_predefini');

    }
//fin fonction de la page d'accueil.............................................................

public function admin_master(){
    
    return view('admin_master');
}



// main authentification..........................................................................







//fin main authentification.........................................................................





 //fonction de toutce qui concerne les produits, categories et payement
    public function mybox() {

        // SELECT * FROM produits;

        $produits = Produit::all();
        //dd($produits);
        
        //$categories = Category_volaille::where('is_online',1)->get();
    

        return view('selling', ['produits'=>$produits]);  

    }


    public function produit(Request $request) {
        //echo"produit";
       // print_r($_Get);
       // die($_GET);
       //SELECT * FROM produits WHERE id = ?
        //dd($request->id);
    
        $produit = Produit::find($request->id);
        
       // $categories = Category_volaille::where('is_online',1)->get();
        
        return view('shop.produit', compact('produit'));
        
        
    }

    public function categorie_volaille(Request $request){

        //$categories = Category_volaille::where('is_online',1)->get();
       // dd($categories);

        $produits = Produit::where('category_volaille_id',$request->id)->get();
      
          return view('shop.categorie_volaille',compact('produits'));
    }

    public function category_produit_mers(Request $request){
        
        $categorie = Category_produit_mer::all();
        //$categories = Category_volaille::where('is_online',1)->get();
       // dd($categories);

        $produits = Produit_mer::where('category_produit_mers_id',$request->id)->get();
        return view('shop.categorie_produit_mers',compact('produits','categorie'));
    }

    public function mybox2(){


        $produits = Produit_mer::all();
        //dd($produits);
        $categories = Category_produit_mer::all();

        return view('selling2',compact('produits','categories'));
    }

    public function produit_mers(Request $request){
        $categories = Category_produit_mer::all();
       
       // dd($request->id);
         $produit = Produit_mer::find($request->id);
        return view('shop.produit_mers', compact('produit', 'categories'));

    }

    public function produit_personnalise(){
        $produits = Produit_personnalise::all();

        //$categories = Category_volaille::all();
        //$categorie = Category_produit_mer::all();

        return view('/shop.produit_personnalise', compact('produits'));

    }
    public function personnalise_detail(Request $request){
    //$categories = Category_volaille::all();
    //$categorie = Category_produit_mer::all();

    $produits = Produit_personnalise::find($request->id);
    
    return view('/shop.personnalise_detail', compact('produits'));

        
    }

    public function produit_personnalise_grosse(Request $request){
        $produits = Produit_personnalise_grosse::all();
        //$categories = Category_volaille::all();
        //$categorie = Category_produit_mer::all();
        
        
       
        
        return view('/shop.produit_personnalise_grosse', compact('produits'));
    }

    
    public function personnalise_grosse_detail(Request $request){
        $produits = Produit_personnalise_grosse::find($request->id);
        //$categories = Category_volaille::all();
        //$categorie = Category_produit_mer::all();
        
        return view('/shop.personnalise_grosse_detail', compact('produits'));
    }
    public function produit_predefini_grosse(Request $request){
        $produits = Produit_predefini_grosse::all();
        //$categories = Category_volaille::all();
        //$categorie = Category_produit_mer::all();
        
        return view('/shop.produit_predefini_grosse', compact('produits'));
    }
    public function predefini_grosse_detail(Request $request){
        $produits = Produit_predefini_grosse::find($request->id);
        //$categories = Category_volaille::all();
        //$categorie = Category_produit_mer::all();  
        
        return view('/shop.predefini_grosse_detail', compact('produits'));


    }

    public function produit_predefini_classique(Request $request){
        $produits = Produit_predefini_classique::all();
       // $categories = Category_volaille::all();
        //$categorie = Category_produit_mer::all();
         
        return view('/shop.produit_predefini_classique', compact('produits'));
    }

    public function predefini_classique_detail(Request $request){
        $produits = Produit_predefini_classique::find($request->id);
        //$categories = Category_volaille::all();
        //$categorie = Category_produit_mer::all();  
        
        return view('/shop.predefini_classique_detail', compact('produits'));
    }
}

