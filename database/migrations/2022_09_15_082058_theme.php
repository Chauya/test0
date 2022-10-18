<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Theme extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('theme', function (Blueprint $table) {
            $table->unsignedBigInteger('id_evenement');
            $table->unsignedBigInteger('id_jeu');
            $table->primary(['id_evenement', 'id_jeu']);
            $table->foreign('id_evenement')->references('id_evenement')->on('evenement')->onDelete('restrict')->onupdate('restrict');
            $table->foreign('id_jeu')->references('id_jeu')->on('jeu')->onDelete('restrict')->onupdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('theme');
    }
}
