<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('logradouro',100);
            $table->unsignedMediumInteger('numero');
            $table->string('complemento',10)->nullable();
            $table->char('cep',10);
            $table->string('bairro',30);
            $table->string('municipio',30);
           /*  
            $table->enum('bairro',['ALTO URUGUAI','BANCO DE AREIA','BNH','CENTRO','CHATUBA','COREIA','COSMORAMA','CRUZEIRO DO SUL','EDSON PASSOS','ERRO','JACUTINGA','PRES. JUSCELINO','ROCHA SOBRINHO','SANTO ELIAS','VILA EMIL','VILA NORMA']); */
            
            $table->integer('participante_id')->unsigned()->nullable();
            $table->integer('coparticipante_id')->unsigned()->nullable();

            $table->foreign('participante_id')->references('id')->on('participantes')->onDelete('cascade');
            $table->foreign('coparticipante_id')->references('id')->on('coparticipantes')->onDelete('cascade');


            $table->softDeletes();
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
        Schema::dropIfExists('enderecos');
    }
}
