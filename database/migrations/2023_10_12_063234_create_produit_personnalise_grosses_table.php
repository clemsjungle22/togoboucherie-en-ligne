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
        Schema::create('produit_personnalise_grosses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string(column: "nom");
            $table->float(column:"prix_ht");
            $table->text(column: "description");
            $table->string(column: "photo_principale");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produit_personnalise_grosses');
    }
};
