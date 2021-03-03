<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Sousrubrique extends Model
{
    protected $table = 'sousrubrique';
    
    protected $primaryKey = 'SRB_NUM';
    
    //protected $keyType = 'string';
    
     //public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'SRB_LIB',
        'SRB_NORME',
        'SRB_TAUXBONIMAX',
        'SRB_TAUXBONIMIN',
        'SRB_ETAT',
        'RUB_NUM',
        'SRB_ACTIVER',
        
    ];

    const CREATED_AT = 'SRB_DATSAISIE';
    const UPDATED_AT = 'updated_at';

    //SOUSRUBRIQUE EST PERE DE PATRIMOINE

     public function patrimoine()//Mettre le nom de la table enfant chez le père
    {
        return $this->hasMany('App\Model\Patrimoine', 'SRB_NUM', 'SRB_NUM');
    }

    //sousrubrique est enfant de rubrique

    public function rubrique()
    {
        return $this->belongsTo('App\Model\Rubrique', 'RUB_NUM', 'RUB_NUM');
    }
}
