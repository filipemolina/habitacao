<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participantes', function (Blueprint $table) {
            $table->increments('id');
           
            $table->string('nome',100); 
            $table->enum('sexo',['Feminino', 'Masculino', 'Outros']);
            $table->char('cpf',20);
            $table->date('nascimento');
            $table->string('rg',20)->nullable();
            $table->date('emissao_rg');
            $table->string('orgao_emissor_rg',20);
            $table->boolean('mulher_responsavel');
            $table->string('email',100)->nullable();
            $table->float('renda_familiar',8,2);
            $table->date('tempo_residencia');
            $table->boolean('necessidades_especiais');
            $table->string('tipo_deficiencia')->nullable();
            $table->char('nis',20)->nullable();
            $table->char('ctps',20)->nullable();
            $table->boolean('bolsa_familia');
            $table->float('vr_bolsa')->nullable();
            $table->integer('codigo_inscricao');
            $table->boolean('idoso')->default(false);
            $table->integer('user_id')->nullable();
            $table->string('motivo_exclusao')->nullable();
            $table->integer('exclusao_user_id')->nullable();
            $table->string('bairro_preferencial', 50)->nullable();

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
        Schema::dropIfExists('participantes');
    }
}
