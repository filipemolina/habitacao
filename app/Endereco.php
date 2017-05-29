<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

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
