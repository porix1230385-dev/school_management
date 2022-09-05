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
        Schema::create('seance_matieres', function (Blueprint $table) {
            //SeanceMatiere = (id_seancematiere BIGINT, titre_seance VARCHAR(100), detail_seance VARCHAR(50), #id_matiere);
            $table->id();
            $table->string('titre_seance',100)->nullable();
            $table->string('detail_seance',100)->nullable();
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
        Schema::dropIfExists('seance_matieres');
    }
};
