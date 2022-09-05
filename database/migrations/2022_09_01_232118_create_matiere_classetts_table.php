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
        Schema::create('matiere_classetts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('jour');
            // $table->date('annee');
            $table->string('duree')->nullable();
            $table->time('heure_debut');
            // $table->integer('coeficient');
            $table->integer('nbr_heure_total');
            // $table->boolean('estEnseigner_state');
            $table->foreignId('classe_id')->constrained();
            $table->foreignId('matiere_id')->constrained();
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
        Schema::dropIfExists('matiere_classetts');
    }
};
