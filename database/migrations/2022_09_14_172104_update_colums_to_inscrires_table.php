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
        Schema::table('inscrires', function (Blueprint $table) {
            //
            DB::statement('ALTER TABLE inscrires MODIFY COLUMN date_inscription VARCHAR(100) NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inscrires', function (Blueprint $table) {
            //
        });
    }
};
