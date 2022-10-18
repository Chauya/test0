<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Evenement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evenement', function (Blueprint $table) {
            $table->id('id_evenement');
            $table->string('nom_evenement');
            $table->string('desc_evenement');
            $table->timestamp('date_evenement');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('evenement');
    }
}
