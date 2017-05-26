<?php

use Illuminate\Database\Seeder;

class ParticipantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Criar Participantes

        factory(App\Participante::class, 200)
            ->create()
        	->each(function($participante){

                // Criar um endereço

        		$participante->endereco()->save(factory(App\Endereco::class)->make());

                // Criar 2 telefones

                $participante->telefones()->save(factory(App\Telefone::class)->states('fixo')->make());
                $participante->telefones()->save(factory(App\Telefone::class)->states('celular')->make());

                if(rand(0,1))
                {
                    // Criar um coparticipante

                    $participante->coparticipante()->save(factory(App\Coparticipante::class)->make());

                    // Criar um endereço para o coparticipante

                    $participante->coparticipante->endereco()->save(factory(App\Endereco::class)->make());

                    // Criar um telefone para o coparticipante

                    $participante->coparticipante->telefones()->saveMany(factory(App\Telefone::class, 2)->make());
                }

                // Criar dependentes para cada participante

        		$participante->dependentes()->saveMany(factory(App\Dependente::class, rand(0, 5))->make());

        });
    }
}
