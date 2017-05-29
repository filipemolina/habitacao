<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Telefone extends Model
{
	/**
	 * Fillable
	 */

	protected $fillable = [
		'ddd',
		'tipo_telefone',
        'numero'
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
