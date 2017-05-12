<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
	/**
	 * Fillables
	 */

	protected $fillable = [
		'logradouro',
		'numero',
		'complemento',
		'cep',
		'bairro',
	];

    /**
     * Relacionamentos
     */

    public function participante()
    {
    	return $this->belongsTo('App\Participante');
    }

    public function coparticipante()
    {
    	return $this->belongsTo('App\Coparticipante');
    }
}
