<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Famille extends Model
{
    protected $table = 'famille';
    
    protected $primaryKey = 'FAM_NUM';
    
    //protected $keyType = 'string';
    
     //public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'FAM_NOM',
        'FAM_TEL', 
        'FAM_BOITPOSTE',
        'FAM_EMAIL',
        'FAM_NOMRESPO',
        'FAM_AGERETRAIT',
        'FAM_MONTANTESCOMPTE',
        
    ];

    const CREATED_AT = 'FAM_DATESAISIE';
    const UPDATED_AT = 'FAM_DATMODIF';

    //FAMILLE EST PERE DE MEMBRE, PARAMETRE

    public function membre()//Mettre le nom de la table enfant chez le père
    {
        return $this->hasMany('App\Model\Membre', 'FAM_NUM', 'FAM_NUM');
    }
    public function parametre()//Mettre le nom de la table enfant chez le père
    {
        return $this->hasMany('App\Model\Parametre', 'FAM_NUM', 'FAM_NUM');
    }
}
