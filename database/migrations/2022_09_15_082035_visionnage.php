<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Visionnage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visionnage', function (Blueprint $table) {
            $table->timestamp('temps_visionnage');
            $table->unsignedBigInteger('id_participant');
            $table->unsignedBiginteger('id_viewer');
            $table->primary(['id_participant', 'id_viewer']);
            $table->foreign('id_participant')->references('id_participant')->on('streamer')->onDelete('restrict')->onupdate('restrict');
            $table->foreign('id_viewer')->references('id_viewer')->on('viewer')->onDelete('restrict')->onupdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('visionnage');
    }
}
