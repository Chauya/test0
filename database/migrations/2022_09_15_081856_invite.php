<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Invite extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invite', function (Blueprint $table){
            $table->id('id_participant')->unsigned();
            $table->string('desc_invite');
            $table->string('metier_invite');
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
        Schema::drop('invite');
    }
}
