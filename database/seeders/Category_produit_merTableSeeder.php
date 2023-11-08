<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Category_produit_merTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $category_volaille = new \App\Models\Category_produit_mer();
        $category_volaille->nom = "Sardine";
        $category_volaille->is_online = 1;
        $category_volaille->save();
            
        $category2_volaille = new \App\Models\Category_produit_mer();
        $category2_volaille->nom = "Tilapia";
        $category2_volaille->is_online = 1;
        $category2_volaille->save();
   
        $category3_volaille = new \App\Models\Category_produit_mer();
        $category3_volaille->nom = "Akpala";
        $category3_volaille->is_online = 1;
        $category3_volaille->save();
   
        $category4_volaille = new \App\Models\Category_produit_mer();
        $category4_volaille->nom = "Crevettes";
        $category4_volaille->is_online = 1;
        $category4_volaille->save();
   
        $category5_volaille = new \App\Models\Category_produit_mer();
        $category5_volaille->nom = "Crabes";
        $category5_volaille->is_online = 1;
        $category5_volaille->save();
    }
}
