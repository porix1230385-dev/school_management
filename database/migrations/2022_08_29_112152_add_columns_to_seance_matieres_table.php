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
        Schema::table('seance_matieres', function (Blueprint $table) {
            //
            $table->date('date_seance')->nullable();
            $table->integer('nbr_heure_seance')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('seance_matieres', function (Blueprint $table) {
            $table->dropColumn(['date_seance', 'nbr_heure_seance']);
        });
    }
};
