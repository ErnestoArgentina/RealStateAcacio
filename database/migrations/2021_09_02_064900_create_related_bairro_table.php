<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelatedBairroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('related_bairro', function (Blueprint $table) {
            $table->id();
//            $table->integer('bairro_id')->unsigned(); // bairro id number,must be positive.
//            $table->integer('vizinho_id')->unsigned(); // vizinho_id id number,must be positive.
            $table->foreignId('bairro_id')->references('id')->on('bairros')->onDelete('cascade');
            //The 'bairro_id' column references to the 'id' column in a 'bairros' table.
            //When a user is deleted in the parent column ('bairro_id'), then also the bairro in 'id' ('bairros') is deleted.
            $table->foreignId('related_id')->references('id')->on('bairros')->onDelete('cascade');
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
        Schema::dropIfExists('bairro_vizinhos');
    }
}
