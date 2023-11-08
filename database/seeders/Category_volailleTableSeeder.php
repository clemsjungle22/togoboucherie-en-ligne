<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Category_volailleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
     $category_volaille = new \App\Models\Category_volaille();
     $category_volaille->nom = "Boeufs";
     $category_volaille->is_online = 1;
     $category_volaille->save();
         
     $category2_volaille = new \App\Models\Category_volaille();
     $category2_volaille->nom = "Pintades";
     $category2_volaille->is_online = 1;
     $category2_volaille->save();

     $category3_volaille = new \App\Models\Category_volaille();
     $category3_volaille->nom = "Chèvres";
     $category3_volaille->is_online = 1;
     $category3_volaille->save();

     $category4_volaille = new \App\Models\Category_volaille();
     $category4_volaille->nom = "Moutons";
     $category4_volaille->is_online = 1;
     $category4_volaille->save();

     $category5_volaille = new \App\Models\Category_volaille();
     $category5_volaille->nom = "Poulets";
     $category5_volaille->is_online = 1;
     $category5_volaille->save();
         
         
    }
}
