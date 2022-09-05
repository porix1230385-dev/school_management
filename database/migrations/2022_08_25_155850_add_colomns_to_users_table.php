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
        Schema::table('users', function (Blueprint $table) {
        
            $table->boolean('is_connected')->default(false);
            $table->datetime('last_login_at')->nullable();
            $table->datetime('last_logout_at')->nullable();
            $table->string('last_login_ip')->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->integer('deleted_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->integer('created_by')->unsigned()->nullable();
            DB::statement('ALTER TABLE users MODIFY COLUMN email VARCHAR(50) UNIQUE NULL');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->boolean('is_connected')->default(false);
            $table->datetime('last_login_at')->nullable();
            $table->datetime('last_logout_at')->nullable();
            $table->string('last_login_ip')->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->integer('deleted_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->integer('created_by')->unsigned()->nullable();
            DB::statement('ALTER TABLE users MODIFY COLUMN email VARCHAR(50) UNIQUE NULL');

        });
    }
};
