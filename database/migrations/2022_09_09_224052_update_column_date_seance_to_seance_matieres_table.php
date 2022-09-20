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
            DB::statement('ALTER TABLE seance_matieres MODIFY COLUMN date_seance VARCHAR(100) NULL');
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
            //
        });
    }
};
