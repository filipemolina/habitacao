<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependente extends Model
{
	/**
	 * Fillables
	 */

	protected $fillable = [
		'nome',
		'sexo',
		'nascimento',
		'parentesco',
		'necessidades_especiais',
	];

    /**
     * Relacionamentos
     */

    public function participante()
    {
    	return $this->belongsTo('App\Participante');
    }
}
