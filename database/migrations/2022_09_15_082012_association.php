<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Association extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('association', function (Blueprint $table) {
            $table->id('id_asso');
            $table->string('nom_asso');
            $table->string('mail_asso');
            $table->string('desc_asso');
            $table->unsignedBigInteger('id_cagnotte');
            $table->foreign('id_cagnotte')->references('id_cagnotte')->on('cagnotte')->onDelete('restrict')->onupdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('association');
    }
}
