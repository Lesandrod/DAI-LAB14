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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('paterno');
            $table->string('materno');
            $table->string('fecha_nac');
            $table->integer('id_membresia')->unsigned();
            $table->boolean('tipo_usuario')->default(0); //0=usuario comun
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('id_membresia')->references('id')->on('membresias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
