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
        Schema::table('notes', function (Blueprint $table) {
            //
            // $table->renameColumn('appréciation', 'appreciation');
            DB::statement('ALTER TABLE notes RENAME COLUMN appréciation TO appreciation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('notes', function (Blueprint $table) {
            // $table->renameColumn('appreciation', 'appréciation');
            DB::statement('ALTER TABLE notes RENAME COLUMN appreciation TO appréciation');
        });
    }
};
