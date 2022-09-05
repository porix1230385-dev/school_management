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
        Schema::table('enseigners', function (Blueprint $table) {
            //
            DB::statement('ALTER TABLE enseigners MODIFY COLUMN annee_enseigner VARCHAR(20)');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('enseigners', function (Blueprint $table) {
            //
            DB::statement('ALTER TABLE enseigners MODIFY COLUMN annee_enseigner DATE');

        });
    }
};
