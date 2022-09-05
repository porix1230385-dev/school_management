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
        //est_enseigne = (#id_classe, #id_matiere, jour VARCHAR(50), année DATE, heure_debut TIME, duree BYTE, coefficient DECIMAL(1,1), nbr_heure_total SMALLINT, etat VARCHAR(10));
        Schema::create('est_enseigners', function (Blueprint $table) {
            $table->id();
            $table->string('jour',50);
            $table->date('annee');
            $table->time('duree');
            $table->time('heure_debut');
            $table->integer('coeficient');
            $table->integer('nbr_heure_total');
            $table->boolean('estEnseigner_state');
            $table->foreignId('classe_id')->constrained();
            $table->foreignId('matiere_id')->constrained();
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
        Schema::dropIfExists('est_enseigners');
    }
};
