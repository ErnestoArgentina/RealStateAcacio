<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casas', function (Blueprint $table) {
            $table->id();
            $table->text("descricao");
            $table->string("localizacao");
            $table->string("url");
            $table->string("metros_quadrado");
            $table->integer("quartos");
            $table->integer("banheiros");
            $table->double("preco");
            $table->boolean("garagem");
            $table->foreignId("bairro_id")->references("id")->on("bairros");
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
        Schema::dropIfExists('casas');
    }
}
