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
        Schema::create('rentas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fecha_reg');
            $table->string('fecha_dev');
            $table->string('fecha_ent');
            $table->integer('id_pelicula')->unsigned();
            $table->integer("id_users")->unsigned();
            $table->timestamps();

            $table->foreign('id_pelicula')->references('id')->on('peliculas');
            $table->foreign('id_users')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rentas');
    }
};

