<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Produit_personnalise_grosseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $produit= new \App\Models\Produit_personnalise_grosse();
        $produit->nom = "Boeuf";
        $produit->prix_ht = 29500;
        $produit->description = "Approx. 3 lbs (3 x 1 lb packs)";
        $produit->photo_principale = "boeufs.jpg";
        $produit->save();


        $produit= new \App\Models\Produit_personnalise_grosse();
        $produit->nom = "Poulet";
        $produit->prix_ht = 29500;
        $produit->description = "Approx. 3 lbs (3 x 1 lb packs)";
        $produit->photo_principale = "poulet.jpg";
        $produit->save();


        $produit= new \App\Models\Produit_personnalise_grosse();
        $produit->nom = "Pintade";
        $produit->prix_ht = 29500;
        $produit->description = "Approx. 3 lbs (3 x 1 lb packs)";
        $produit->photo_principale = "pintades.jpg";
        $produit->save();

        $produit= new \App\Models\Produit_personnalise_grosse();
        $produit->nom = "Chèvre";
        $produit->prix_ht = 29500;
        $produit->description = "Approx. 3 lbs (3 x 1 lb packs)";
        $produit->photo_principale = "chevre.jpg";
        $produit->save();

        $produit= new \App\Models\Produit_personnalise_grosse();
        $produit->nom = "Crabe";
        $produit->prix_ht = 29500;
        $produit->description = "Approx. 3 lbs (3 x 1 lb packs)";
        $produit->photo_principale = "crabe.jpg";
        $produit->save();

        $produit= new \App\Models\Produit_personnalise_grosse();
        $produit->nom = "Crevette";
        $produit->prix_ht = 29500;
        $produit->description = "Approx. 3 lbs (3 x 1 lb packs)";
        $produit->photo_principale = "creuvette.jpg";
        $produit->save();

        $produit= new \App\Models\Produit_personnalise_grosse();
        $produit->nom = "Escargot";
        $produit->prix_ht = 29500;
        $produit->description = "Approx. 3 lbs (3 x 1 lb packs)";
        $produit->photo_principale = "escargot.jpg";
        $produit->save();

        $produit= new \App\Models\Produit_personnalise_grosse();
        $produit->nom = "Mouton";
        $produit->prix_ht = 29500;
        $produit->description = "Approx. 3 lbs (3 x 1 lb packs)";
        $produit->photo_principale = "mouton.jpg";
        $produit->save();
    }
}
