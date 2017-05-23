<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelefonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefones', function (Blueprint $table) {
            $table->increments('id');

            $table->char('numero', 15);
            
            $table->enum('tipo_telefone',['Fixo','Celular']);

            $table->integer('participante_id')->unsigned()->nullable();
            $table->integer('coparticipante_id')->unsigned()->nullable();

            $table->foreign('participante_id')->references('id')->on('participantes')->onDelete('cascade');
            $table->foreign('coparticipante_id')->references('id')->on('coparticipantes')->onDelete('cascade');
            


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
        Schema::dropIfExists('telefones');
    }
}
