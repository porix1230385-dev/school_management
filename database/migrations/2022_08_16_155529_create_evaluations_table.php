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
        Schema::create('evaluations', function (Blueprint $table) {
            //Evalution = (id_evalution BIGINT, description VARCHAR(100), coefficient DECIMAL(1,1), date_evaluation DATE, #id_matiere, #id_periode, #id_classe);
            $table->id();
            $table->string('description_eval',100);
            $table->integer('coefficient_eval');
            $table->date('date_evaluation');
            $table->foreignId('matiere_id')->constrained();
            $table->foreignId('periode_id')->constrained();
            $table->foreignId('classe_id')->constrained();
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
        Schema::dropIfExists('evaluations');
    }
};
