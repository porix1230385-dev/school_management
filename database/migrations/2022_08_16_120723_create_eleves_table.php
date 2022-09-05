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
        Schema::create('eleves', function (Blueprint $table) {
            $table->id();
            //Eleve = (id_eleve BIGINT, matricule VARCHAR(50), date_naissance DATE, lieu_de_naissance VARCHAR(100), nationnalite VARCHAR(100), statut_eleve VARCHAR(50), #id_utilisateur);
            $table->string('matricule',50)->unique();
            $table->date('date_naissance');
            $table->string('lieu_naissance',100);
            $table->string('nationnalite',100);
            $table->string('statut_eleve',50);
            $table->foreignId('user_id')->constrained();            
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
        Schema::dropIfExists('eleves');
    }
};
