<?php

namespace App\Http\Controllers\Shop;

use Cart;

use App\Http\Controllers\Controller;
use App\Models\Produit;
use App\Models\Produit_personnalise;
use App\Models\Produit_personnalise_grosse;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // Ajouter un produit au panier
    public function add(Request $request){ 
        $produits = Produit_personnalise::find($request->id);    
        Cart::add(array(
            'id' => $produits->id,
            'name' => $produits->nom,
            'price' => $produits->prix_ht,
            'quantity' => $request->input ('qty'),
            'attributes' => array('photo'=>$produits->photo_principale)
        ));
        
        return redirect(route('cart_index'));

    }
    public function index() {
        $content = Cart::getContent();
        //dd($content);

       $total_ttc_panier = Cart::getTotal();

        return view('cart.index',compact('content', 'total_ttc_panier')); 
    }

    public function remove($id){
        Cart::remove($id);

        return redirect(route('cart_index'))->with('succès', 'Produit supprimé avec succès.');
    }


}
