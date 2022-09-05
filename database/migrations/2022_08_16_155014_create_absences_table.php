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
        //Absence = (id_absence BIGINT, date_absence DATE, motif VARCHAR(200), justificatif VARCHAR(50), #id_seancematiere, #id_eleve);
        Schema::create('absences', function (Blueprint $table) {
            $table->id();
            $table->date('date_absence');
            $table->string('motif',20);
            $table->string('justificatif',50);
            $table->foreignId('seance_matiere_id')->constrained();
            $table->foreignId('eleve_id')->constrained();
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
        Schema::dropIfExists('absences');
    }
};
