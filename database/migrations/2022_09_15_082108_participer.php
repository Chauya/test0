<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Participer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participer', function (Blueprint $table) {
            $table->unsignedBigInteger('id_participant');
            $table->unsignedBigInteger('id_evenement');
            $table->primary(['id_participant', 'id_evenement']);
            $table->foreign('id_evenement')->references('id_evenement')->on('evenement')->onDelete('restrict')->onupdate('restrict');
            $table->foreign('id_participant')->references('id_participant')->on('participant')->onDelete('restrict')->onupdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('participer');
    }
}
