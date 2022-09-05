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
        //Matiere = (id_matiere BIGINT, nom_matiere VARCHAR(255));

        Schema::create('matieres', function (Blueprint $table) {
            $table->id();
            $table->string('nom_matiere',255);
            $table->string('abreviation',50)->unique()->nullable();
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
        Schema::dropIfExists('matieres');
    }
};
