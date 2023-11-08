<?php

namespace App\Http\ViewComposers;

use App\Models\Category_produit_mer;
use App\Models\Category_volaille;
use Illuminate\View\View;

class HeaderComposer
{   
    public function compose(View $view){

        
        $view->with('categories', Category_volaille::where('is_online',1)->get());
        $view->with('categories', Category_volaille::all());
        $view->with('categorie', Category_produit_mer::all());

    }


}