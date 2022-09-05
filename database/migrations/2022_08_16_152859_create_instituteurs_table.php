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
        Schema::create('instituteurs', function (Blueprint $table) {
            //Instituteur = (id_instituteur BIGINT, matricule VARCHAR(20), #id_utilisateur);

            $table->id();
            $table->string('matricule_instituteur',20)->unique();
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('instituteurs');
    }
};
