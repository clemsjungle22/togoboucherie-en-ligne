<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    public function category_volaille()
    {
        return $this->belongsTo(Category_volaille::class);
    }
    public function recommandations(){
        return $this->belongsToMany('App\Models\Produit','produit_recommande','produit_id','produit_recommande_id');
    }
}
