<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Produits_merTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $produit= new \App\Models\Produit_mer();
        $produit->nom = "Crabes";   
        $produit->description = "Crabes constituants la petite boite";
        $produit->photo_principale = "crabes.jpg";
        $produit->category_produit_mers_id = 1;
        $produit->save();
  
        $produit= new \App\Models\Produit_mer();
        $produit->nom = "poissons Boeufs chèvres Poulets";    
        $produit->description = "Compose une boite classique prédéfinie";
        $produit->photo_principale = "Boeuf chevres poulet poisson.jpg";
        $produit->category_produit_mers_id = 2;
        $produit->save();

        $produit= new \App\Models\Produit_mer();
        $produit->nom = "Poissons Boeufs Poulets "; 
        $produit->description = "Compose une boite classique prédéfinie"; 
        $produit->photo_principale = "boeufs poulet poisson.jpg";
        $produit->category_produit_mers_id = 3;
        $produit->save();

        $produit= new \App\Models\Produit_mer();
        $produit->nom = "Crabes";   
        $produit->description = "Crabes constituants la grande boite";
        $produit->photo_principale = "crabes.jpg";
        $produit->category_produit_mers_id = 4;
        $produit->save();
  

        $produit= new \App\Models\Produit_mer();
        $produit->nom = "poissons Boeufs chèvres Poulets";
        $produit->description = "Compose une grosse boite prédéfinie";
        $produit->photo_principale = "Boeuf chevres poulet poisson.jpg";
        $produit->category_produit_mers_id = 5;
        $produit->save();

        $produit= new \App\Models\Produit_mer();
        $produit->nom = " Poissons Boeufs Poulets";
        $produit->description = "Compose une grosse boite prédéfinie"; 
        $produit->photo_principale = "boeufs poulet poisson.jpg";
        $produit->category_produit_mers_id = 1;
        $produit->save();

        $produit= new \App\Models\Produit_mer();
        $produit->nom = "Crevettes";   
        $produit->description = "Compose une petite boite predefinie";
        $produit->photo_principale = "creuvette.jpg";
        $produit->category_produit_mers_id = 2;
        $produit->save();

        $produit= new \App\Models\Produit_mer();
        $produit->nom = "Poissons Boeufs";
        $produit->description = "Compose une petite boite predefinie";
        $produit->photo_principale = "boeufs poisson.jpg";
        $produit->category_produit_mers_id = 3;
        $produit->save();

        $produit= new \App\Models\Produit_mer();
        $produit->nom = "Poissons chèvres";   
        $produit->description = "Compose une petite boite predefinie";
        $produit->photo_principale = "chevre poisson.jpg";
        $produit->category_produit_mers_id = 4;
        $produit->save();

        $produit= new \App\Models\Produit_mer();
        $produit->nom = "Crevettes";  
        $produit->description = "Crevettes constituants une grosse boite";
        $produit->photo_principale = "creuvette.jpg";
        $produit->category_produit_mers_id = 5;
        $produit->save();

        $produit= new \App\Models\Produit_mer();
        $produit->nom = "Poissons Boeufs";   
        $produit->description = "Compose une grosse boite predefinie";
        $produit->photo_principale = "boeufs poisson.jpg";
        $produit->category_produit_mers_id = 1;
        $produit->save();

        $produit= new \App\Models\Produit_mer();
        $produit->nom = "Poissons chèvres"; 
        $produit->description = "Compose une grosse boite predefinie";
        $produit->photo_principale = "chevre poisson.jpg";
        $produit->category_produit_mers_id = 2;
        $produit->save();
    
    }
}
