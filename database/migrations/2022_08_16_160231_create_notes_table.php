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
        Schema::create('notes', function (Blueprint $table) {
            //Note = (id_note BIGINT, notation BYTE, appréciation VARCHAR(100), #id_eleve, #id_evalution);
            $table->id();
            $table->double('notation')->nullable();
            $table->string('appréciation',100)->nullable();
            $table->foreignId('evaluation_id')->constrained();
            $table->foreignId('eleve_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notes');
    }
};
