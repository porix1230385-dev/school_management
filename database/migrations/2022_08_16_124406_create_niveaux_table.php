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
        //Niveau = (id_niveau INT, libelle VARCHAR(50), #id_cycle);
        Schema::create('niveaux', function (Blueprint $table) {
            $table->id();
            $table->string('libelle_niveau',50);
            $table->foreignId('cycle_id')->constrained();
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
        Schema::dropIfExists('niveaux');
    }
};
