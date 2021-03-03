<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    protected $table = 'periode';
    
    protected $primaryKey = 'PRD_NUM';
    
    //protected $keyType = 'string';
    
     //public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'PRD_DEBUT',
        'PRD_FIN',
        'PRD_ETAT', 
        'EXO_NUM',
        
    ];

    const CREATED_AT = 'PRD_DATSAISIE';
    const UPDATED_AT = 'PRD_DATMODIF';

    //PERIODE EST PERE DE DATE JOURNEE
    public function datejournee()//Mettre le nom de la table enfant chez le père
    {
        return $this->hasMany('App\Model\Datejourenee', 'PRD_NUM', 'PRD_NUM');
    }
    public function prevision()//Mettre le nom de la table enfant chez le père
    {
        return $this->hasMany('App\Model\Prevision', 'PRD_NUM', 'PRD_NUM');
    }

    //Periode est enfant de Exercice

    public function exercice()
    {
        return $this->belongsTo('App\Models\Exercice', 'EXO_NUM', 'EXO_NUM');
    }
}
