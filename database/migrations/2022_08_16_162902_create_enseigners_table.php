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
        //enseigner = (#id_enseignant, #id_classesecondaire, #id_matiere, annee DATE);
        Schema::create('enseigners', function (Blueprint $table) {
            $table->id();
            $table->date('annee_enseigner');
            $table->foreignId('enseignant_id')->constrained();
            $table->foreignId('classe_secondaire_id')->constrained();
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
        Schema::dropIfExists('enseigners');
    }
};
