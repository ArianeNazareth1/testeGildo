<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questoes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('enunciadoum');
            $table->string('questaoum');
            $table->string('enunciadodois');
            $table->string('questaodois');
            $table->string('enunciadotres');
            $table->string('questaotres');
            $table->string('enunciadoquatro');
            $table->string('questaoquatro');
            $table->string('enunciadocinco');
            $table->string('questaocinco');
            $table->string('enunciadoseis');
            $table->string('questaoseis');
            $table->string('enunciadosete');
            $table->string('questaosete');       
            $table->string('correta');
            $table->double('valorquestao');
            $table->integer('teste_id')->unsigned();

            $table->foreign('teste_id')->references('id')->on('testes')->onDelete('cascade');
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
        Schema::dropIfExists('questoes');
    }
}
