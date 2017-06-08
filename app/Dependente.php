<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
		'tipo_deficiencia',
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
}
