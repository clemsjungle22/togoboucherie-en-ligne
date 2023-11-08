<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $produit= new \App\Models\Produit();
        $produit->nom = "Ground Beef (85/15)";
        $produit->description = "Approx. 3 lbs (3 x 1 lb packs)";
        $produit->photo_principale = "first.webp";
        $produit->category_volaille_id = 1;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Ribeyes"; 
        $produit->description = "20 oz (2 x 10 oz steaks)";
        $produit->photo_principale = "two.jpg";
        $produit->category_volaille_id = 2;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Breaded Chicken Strips";   
        $produit->description = "1 x 1.5 lb bag";
        $produit->photo_principale = "three.webp";
        $produit->category_volaille_id = 3;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Wild-Caught Gulf Shrimp";
        $produit->description = "Approx. 3 lbs (3 x 1 lb packs)";
        $produit->photo_principale = "four.webp";
        $produit->category_volaille_id = 4;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Chorizo Ground Pork Sausage";
        $produit->description = "2 lbs (2 x 1 lb packs)";
        $produit->photo_principale = "five.jpg";
        $produit->category_volaille_id = 5;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Boneless Pork Butt";
        $produit->description = "Approx. 14 oz";
        $produit->photo_principale = "six.jpg";
        $produit->category_volaille_id = 1;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "St. Louis Ribs";  
        $produit->description = "1 x 3+ lbs roast";
        $produit->photo_principale = "seven.jpg";
        $produit->category_volaille_id = 2;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Ground Chicken";  
        $produit->description = "1.5 lb pack";
        $produit->photo_principale = "eight.jpg";
        $produit->category_volaille_id = 3;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Boneless Skinless Thigh";
        $produit->description = "Approx. 3 lbs (3 x 1 lb packs)";
        $produit->photo_principale = "nine.jpg";
        $produit->category_volaille_id = 4;
        $produit->save();
    }
}
