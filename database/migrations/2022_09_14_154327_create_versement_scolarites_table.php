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
        Schema::create('versement_scolarites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('versement_id')->constrained();
            $table->integer('montant')->nullable();
            $table->foreignId('eleve_id')->constrained();
            $table->foreignId('annee_scolaire_id')->constrained();
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
        Schema::dropIfExists('versement_scolarites');
    }
};
