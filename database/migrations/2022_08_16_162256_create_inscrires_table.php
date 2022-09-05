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
        //inscrire = (#id_eleve, #id_anneescolaire, #id_classe, date_inscrption DATE, montant_inscript CURRENCY);
        Schema::create('inscrires', function (Blueprint $table) {
            $table->id();
            $table->date('date_inscription');
            $table->integer('montant_inscription');
            $table->foreignId('eleve_id')->constrained();
            $table->foreignId('annee_scolaire_id')->constrained();
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
        Schema::dropIfExists('inscrires');
    }
};
