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
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id();
             $table->string('nom');
            $table->string('prenom');
            $table->string('adresse');
            $table->string('tel')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('image')->default('default.png');
            $table->unsignedBigInteger('departement');
            $table->foreign('departement')
            ->references('id')
            ->on('departements')
            ->onDelete('cascade');
            $table->unsignedBigInteger('role');
            $table->foreign('role')
            ->references('id')
            ->on('roles')
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
        Schema::dropIfExists('utilisateurs');
    }
};
