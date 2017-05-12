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

            $table->char('ddd',2);
            
            $table->enum('tipo_telefone',['Fixo','Celular']);

            $table->integer('participante_id')->unsigned()->nullable();
            $table->integer('coparticipante_id')->unsigned()->nullable();

            $table->foreign('participante_id')->references('id')->on('participantes');
            $table->foreign('coparticipante_id')->references('id')->on('coparticipantes');
            


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
