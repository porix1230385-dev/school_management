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
            DB::statement('TRUNCATE est_enseigners');
            // $table->dropForeign(['classe_id']);
            $table->dropColumn('classe_id');
            // $table->foreignId('niveau_id')->constrained();
            
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
            // $table->dropForeign(['niveau_id']);

            $table->foreignId('niveau_id')->constrained();
            $table->dropColumn('niveau_id');
        });
    }
};
