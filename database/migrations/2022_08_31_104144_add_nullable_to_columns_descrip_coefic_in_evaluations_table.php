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
        Schema::table('evaluations', function (Blueprint $table) {
            //
            DB::statement('ALTER TABLE evaluations MODIFY COLUMN description_eval VARCHAR(100) NULL');
            DB::statement('ALTER TABLE evaluations MODIFY COLUMN coefficient_eval INTEGER NULL');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('evaluations', function (Blueprint $table) {
            //
            DB::statement('ALTER TABLE evaluations MODIFY COLUMN description_eval VARCHAR(100)');
            DB::statement('ALTER TABLE evaluations MODIFY COLUMN coefficient_eval INTEGER');

        });
    }
};
