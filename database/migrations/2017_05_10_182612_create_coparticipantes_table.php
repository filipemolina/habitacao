<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoparticipantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coparticipantes', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nome',100);
            $table->enum('sexo',['Feminino', 'Masculino', 'Outros']);
            

            $table->char('cpf',20);
            $table->date('nascimento');
            $table->string('rg',20);
            $table->date('emissao_rg');
            $table->string('orgao_emissor_rg',20);
            $table->enum('parentesco',[
                            'Avós','Bisavós','Bisneto(a)','Companheiro(a)',
                            'Cônjuge','Enteado(a)','Ex-esposa','Filho(a)',
                            'Irmão(ã)','Neto(a)','Pais','Outras'
                        ]);            
            $table->string('email',100)->nullable();
            $table->boolean('necessidades_especiais');
            $table->string('tipo_deficiencia')->nullable();
            $table->char('nis',20)->nullable();
            $table->char('ctps',20)->nullable();
            $table->boolean('bolsa_familia');
            $table->integer('participante_id')->unsigned();

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('participante_id')->references('id')->on('participantes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coparticipantes');
    }
}
