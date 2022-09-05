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
        Schema::create('periodes', function (Blueprint $table) {
            //Periode = (id_periode BIGINT, libelle VARCHAR(50), debut_periode DATE, fin_periode DATE, #id_anneescolaire);
            $table->id();
            $table->string('libelle_periode');
            $table->date('debut_periode');
            $table->date('fin_periode');
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
        Schema::dropIfExists('periodes');
    }
};
