<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
	/**
	 * Fillables
	 */

	protected $fillable = [
		'nome',
		'sexo',
		'cpf',
		'nascimento',
		'rg',
		'emissao_rg',
		'orgao_emissor_rg',
		'mulher_responsavel',
		'email',
		'renda_familiar',
		'tempo_residencia',
		'necessidades_especiais',
		'nis',
		'ctps',
		'bolsa_familia',
	];
    
    /**
     * Relacionamentos
     */

    public function endereco()
    {
    	return $this->hasOne('App\Endereco');
    }

    public function coparticipante()
    {
    	return $this->hasOne('App\coparticipante');
    }

    public function dependetes()
    {
    	return $this->hasMany('App\Dependentes');
    }

    public function telefones()
    {
    	return $this->hasMany('App\Telefone');
    }
}
