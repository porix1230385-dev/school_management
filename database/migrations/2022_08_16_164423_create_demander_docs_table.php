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
        //demander_document = (#id_administration, #id_parent, type_document VARCHAR(50), date_demande DATE, etat VARCHAR(50));
        Schema::create('demander_docs', function (Blueprint $table) {
            $table->id();
            $table->string('type_document',50);
            $table->date('date_demande');
            $table->boolean('demande_state');
            $table->foreignId('administration_id')->constrained();
            $table->foreignId('parent_id')->constrained();
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
        Schema::dropIfExists('demander_docs');
    }
};
