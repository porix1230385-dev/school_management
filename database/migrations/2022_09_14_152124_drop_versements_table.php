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
        Schema::table('versements', function (Blueprint $table) {
            //
            // $table->dropForeign(['eleve_id','annee_scolaire_id']);
            // Schema::dropIfExists('versements');
            // $table->dropForeign('eleve_id');
            // $table->dropForeign('annee_scolaire_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('versements', function (Blueprint $table) {
            //
        });
    }
};
