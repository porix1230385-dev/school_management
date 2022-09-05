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
        Schema::table('est_enseigners', function (Blueprint $table) {
            //
            DB::statement('ALTER TABLE est_enseigners MODIFY COLUMN annee VARCHAR(20)');
            DB::statement('ALTER TABLE est_enseigners MODIFY COLUMN duree VARCHAR(20)');
            DB::statement('ALTER TABLE est_enseigners MODIFY COLUMN heure_debut VARCHAR(20)');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('est_enseigners', function (Blueprint $table) {
            //
            DB::statement('ALTER TABLE est_enseigners MODIFY COLUMN annee VARCHAR(20)');
            DB::statement('ALTER TABLE est_enseigners MODIFY COLUMN duree VARCHAR(20)');
            DB::statement('ALTER TABLE est_enseigners MODIFY COLUMN heure_debut VARCHAR(20)');
        });
    }
};
