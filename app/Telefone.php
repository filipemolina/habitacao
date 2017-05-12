<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
	/**
	 * Fillable
	 */

	protected $fillable = [
		'ddd',
		'tipo_telefone',
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
