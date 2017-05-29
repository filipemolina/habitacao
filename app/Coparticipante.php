<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coparticipante extends Model
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
		'parentesco',
		'email',
		'necessidades_especiais',
		'nis',
		'ctps',
		'bolsa_familia',
	];

	/**
	* The attributes that should be mutated to dates.
	*
	* @var array
	*/
    protected $dates = ['deleted_at'];

    /**
     * Relacionamento
     */

    public function endereco()
    {
    	return $this->hasOne('App\Endereco');
    }

    public function participante()
    {
    	return $this->belongsTo('App\Participante');
    }

    public function telefones()
    {
    	return $this->hasMany("App\Telefone");
    }

}
