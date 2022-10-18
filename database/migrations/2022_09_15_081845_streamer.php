<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Streamer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('streamer', function (Blueprint $table) {
            $table->id('id_participant')->unsigned();
            $table->integer('emplacement_streamer');
            $table->string('nom_chaine_streamer');
            $table->foreign('id_participant')->references('id_participant')->on('participant')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('streamer');
    }
}
