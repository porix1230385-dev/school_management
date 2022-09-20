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
        Schema::create('modality_payements', function (Blueprint $table) {
            $table->id();
            $table->string('naf_af',50)->nullable();
            $table->foreignId('niveau_id')->constrained();
            $table->integer('frais_inscription')->nullable();
            $table->foreignId('versement_id')->constrained();
            $table->string('date_echeance')->nullable();
            $table->integer('montant')->nullable();
            $table->integer('montant_total_scolarite')->nullable();
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
        Schema::dropIfExists('modality_payements');
    }
};
