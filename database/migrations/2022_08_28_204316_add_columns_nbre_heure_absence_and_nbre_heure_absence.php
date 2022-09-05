<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('absences', function (Blueprint $table) {
            //
            $table->integer('nbre_heure_seance')->nullable();
            $table->integer('nbre_heure_absence')->nullable();
            $table->boolean('absence_state')->default(false);
            DB::statement('ALTER TABLE absences MODIFY COLUMN motif VARCHAR(50) NULL');
            DB::statement('ALTER TABLE absences MODIFY COLUMN justificatif VARCHAR(50) NULL');
         

        });
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
            $table->dropColumn(['nbre_heure_seance', 'nbre_heure_absence','absence_state']);
            DB::statement('ALTER TABLE absences MODIFY COLUMN motif VARCHAR(50) NULL');
            DB::statement('ALTER TABLE absences MODIFY COLUMN justificatif VARCHAR(50) NULL');

        });
    }
};
