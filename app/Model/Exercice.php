<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Exercice extends Model
{
    protected $table = 'exercice';
    
    protected $primaryKey = 'EXO_NUM';
    
    //protected $keyType = 'string';
    
     //public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'EXO_DATEDEBUT',
        'EXO_DATFIN',
        'EXO_MONTANTDEBUT',
        'EXO_MONTANTFIN',
        'EXO_DEBUTSOLDETT',
        'EXO_FINSOLDETT',
        'EXO_ETAT',
    ];

    const CREATED_AT = 'EXO_DATSAISIE';
    const UPDATED_AT = 'EXO_DATMODI';

    // EXERCICE EST PERE DE PERIODE

    public function periode()
    {
        return $this->hasmany('App\Model\Periode', 'EXO_NUM', 'EXO_NUM');
    }
}
