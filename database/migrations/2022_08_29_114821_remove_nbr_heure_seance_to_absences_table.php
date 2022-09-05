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
        if (Schema::hasColumn('absences', 'nbre_heure_seance'))
        {
            Schema::table('absences', function (Blueprint $table) {
                //
                $table->dropColumn('nbre_heure_seance');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('absences', function (Blueprint $table) {
            //
            $table->dropColumn('nbre_heure_seance');
        });
    }
};
