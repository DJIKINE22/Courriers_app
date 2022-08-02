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
        Schema::create('courriers__sortants', function (Blueprint $table) {
            $table->id();
            $table->string('ref');
            $table->string('objet');
            $table->string('statut');
            $table->string('destinataire');
            $table->string('piece_jointe');            
            $table->date('date_depart');
            $table->string('libelle');
            $table->unsignedBigInteger('user');
            $table->foreign('user')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
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
        Schema::dropIfExists('courriers__sortants');
    }
};
