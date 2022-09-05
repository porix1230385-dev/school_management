<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //classePrimaire = (id_classeprimaire BIGINT, annee DATE, #id_instituteur, #id_classe);
        Schema::create('classe_primaires', function (Blueprint $table) {
            $table->id();
            $table->date('annee');
            $table->foreignId('instituteur_id')->constrained();
            $table->foreignId('classe_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classe_primaires');
    }
};
