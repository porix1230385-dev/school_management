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
        //fichier = (id_fichier BIGINT, fichier VARCHAR(200), #id_seancematiere);
        Schema::create('fichiers', function (Blueprint $table) {
            $table->id();
            $table->string('fichier',200);
            $table->foreignId('seance_matiere_id')->constrained();
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
        Schema::dropIfExists('fichiers');
    }
};
