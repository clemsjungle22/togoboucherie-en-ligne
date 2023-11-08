<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
       
        Schema::table('produit_mers', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('category_produit_mers_id');
            $table->foreign('category_produit_mers_id')->references('id')->on('category_produit_mers')->onDelete('cascade');
            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('produit_mers', function (Blueprint $table) {
            //
            
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(['category_produit_mers_id']);
            $table->dropColumn('category_produit_mers_id');
        });
    }
};
