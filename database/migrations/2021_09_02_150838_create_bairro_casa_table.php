<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBairroCasaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bairro_casa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bairro_id')->references('id')->on('bairros')->onDelete('cascade');
            //The 'bairro_id' column references to the 'id' column in a 'bairros' table.
            //When a user is deleted in the parent column ('bairro_id'), then also the bairro in 'id' ('bairros') is deleted.
            $table->foreignId('casa_id')->references('id')->on('casas')->onDelete('cascade');
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
        Schema::dropIfExists('bairro_casas');
    }
}
