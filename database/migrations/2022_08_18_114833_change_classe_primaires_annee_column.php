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
        Schema::table('classe_primaires', function (Blueprint $table) {
            //
            DB::statement('ALTER TABLE classe_primaires MODIFY COLUMN annee VARCHAR(20)');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('classe_primaires', function (Blueprint $table) {
            //
            DB::statement('ALTER TABLE classe_primaires MODIFY COLUMN annee DATE');
        });
    }
};
