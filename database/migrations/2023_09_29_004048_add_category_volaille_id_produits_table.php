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
        Schema::table('produits', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('category_volaille_id');
            $table->foreign('category_volaille_id')->references('id')->on('category_volailles')->onDelete('cascade');
            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produits', function (Blueprint $table) {
            //
            
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(['category_volaille_id']);
            $table->dropColumn('category_volaille_id');
        });
    }
};
