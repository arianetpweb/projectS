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
        Schema::create('curricula', function (Blueprint $table) {
            $table->id();
            $table->integer('matricule')->nullable();
            $table->string('nom');
            $table->mediumInteger('contact');
            $table->string('adresse');
            $table->string('email');
            $table->string('lieu');
            $table->string('diplome');
            $table->string('annee');
            $table->string('information');
            $table->string('pourcentage');
            $table->string('texte');
            $table->string('entreprise');
            $table->string('description');
            $table->string('langue');
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
        Schema::dropIfExists('curricula');
    }
};
