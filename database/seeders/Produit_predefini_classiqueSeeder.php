<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Produit_predefini_classiqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $produit= new \App\Models\Produit_predefini_classique();
        $produit->nom = "Boeuf chevre";
        $produit->prix_ht = 10000;
        $produit->description = "Approx. 3 lbs (3 x 1 lb packs)";
        $produit->photo_principale = "boeufchevres.jpg";
        $produit->save();

        $produit= new \App\Models\Produit_predefini_classique();
        $produit->nom = "Boeuf crevette";
        $produit->prix_ht = 10000;
        $produit->description = "Approx. 3 lbs (3 x 1 lb packs)";
        $produit->photo_principale = "boeuf creuvette.jpg";
        $produit->save();

        $produit= new \App\Models\Produit_predefini_classique();
        $produit->nom = "Boeuf escargot";
        $produit->prix_ht = 10000;
        $produit->description = "Approx. 3 lbs (3 x 1 lb packs)";
        $produit->photo_principale = "boeuf escargot.jpg";
        $produit->save();

        $produit= new \App\Models\Produit_predefini_classique();
        $produit->nom = "boeuf mouton pintade crabe";
        $produit->prix_ht = 10000;
        $produit->description = "Approx. 3 lbs (3 x 1 lb packs)";
        $produit->photo_principale = "boeuf mouton pintade crabe.jpg";
        $produit->save();

        $produit= new \App\Models\Produit_predefini_classique();
        $produit->nom = "boeuf mouton pintade creuvette";
        $produit->prix_ht = 10000;
        $produit->description = "Approx. 3 lbs (3 x 1 lb packs)";
        $produit->photo_principale = "boeuf mouton pintade creuvette.jpg";
        $produit->save();

        $produit= new \App\Models\Produit_predefini_classique();
        $produit->nom = "boeuf mouton pintade escargot";
        $produit->prix_ht = 10000;
        $produit->description = "Approx. 3 lbs (3 x 1 lb packs)";
        $produit->photo_principale = "boeuf mouton pintade escargot.jpg";
        $produit->save();

        $produit= new \App\Models\Produit_predefini_classique();
        $produit->nom = "boeuf mouton pintade";
        $produit->prix_ht = 10000;
        $produit->description = "Approx. 3 lbs (3 x 1 lb packs)";
        $produit->photo_principale = "boeuf mouton pintade.jpg";
        $produit->save();

        $produit= new \App\Models\Produit_predefini_classique();
        $produit->nom = "boeuf mouton";
        $produit->prix_ht = 10000;
        $produit->description = "Approx. 3 lbs (3 x 1 lb packs)";
        $produit->photo_principale = "boeuf mouton.jpg";
        $produit->save();

        $produit= new \App\Models\Produit_predefini_classique();
        $produit->nom = "boeuf pintade ";
        $produit->prix_ht = 10000;
        $produit->description = "Approx. 3 lbs (3 x 1 lb packs)";
        $produit->photo_principale = "boeufpintades.jpg";
        $produit->save();

        $produit= new \App\Models\Produit_predefini_classique();
        $produit->nom = "chevre poulet poisson";
        $produit->prix_ht = 10000;
        $produit->description = "Approx. 3 lbs (3 x 1 lb packs)";
        $produit->photo_principale = "chevre poulet poisson.jpg";
        $produit->save();

        $produit= new \App\Models\Produit_predefini_classique();
        $produit->nom = "crabe poisson";
        $produit->prix_ht = 10000;
        $produit->description = "Approx. 3 lbs (3 x 1 lb packs)";
        $produit->photo_principale = "crabe poisson.jpg";
        $produit->save();

        $produit= new \App\Models\Produit_predefini_classique();
        $produit->nom = "creuvette crabe poisson";
        $produit->prix_ht = 10000;
        $produit->description = "Approx. 3 lbs (3 x 1 lb packs)";
        $produit->photo_principale = "creuvette crabe poisson.jpg";
        $produit->save();

        $produit= new \App\Models\Produit_predefini_classique();
        $produit->nom = "creuvette escargot crabe poisson";
        $produit->prix_ht = 10000;
        $produit->description = "Approx. 3 lbs (3 x 1 lb packs)";
        $produit->photo_principale = "creuvette escargot crabe poisson.jpg";
        $produit->save();

        
        $produit= new \App\Models\Produit_predefini_classique();
        $produit->nom = "creuvette crabe";
        $produit->prix_ht = 10000;
        $produit->description = "Approx. 3 lbs (3 x 1 lb packs)";
        $produit->photo_principale = "creuvette crabe.jpg";
        $produit->save();
    }
}
