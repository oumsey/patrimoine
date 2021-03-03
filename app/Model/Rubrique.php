<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rubrique extends Model
{
    protected $table = 'rubrique';
    
    protected $primaryKey = 'RUB_NUM';
    
    //protected $keyType = 'string';
    
     //public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'RUB_LIB',
        'RUB_NORME',
        'RUB_TAUXBONIMAX',
        'RUB_TAUXBONIMIN',
        'RUB_ETAT',
        'TRB_NUM',
        'RUB_ACTIVER',
        'RUB_SENS',
    ];

    const CREATED_AT = 'RUB_DATSAISIE';
    const UPDATED_AT = 'updated_at';

    // rubrique est enfant de type rubrique

    public function typerubrique()
    {
        return $this->belongsTo('App\Model\Typerubrique', 'TRB_NUM', 'TRB_NUM');
    }

    //rubrique est le pere de sous rubrique

    public function sousrubrique()
    {
        return $this->hasMany('App\Model\Sousrubrique', 'RUB_NUM', 'RUB_NUM');
    }
}
