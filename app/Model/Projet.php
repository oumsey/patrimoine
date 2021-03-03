<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $table = 'projet';
    
    protected $primaryKey = 'PJT_NUM';
    
    //protected $keyType = 'string';
    
     //public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'PJT_NOM',
        'PJT_COUT', 
        'PJT_DUREE',
        'CPT_NUM',
        'MBR_NUM',
        'DJR_NUM',
        'NPJ_NUM',
        
    ];

    const CREATED_AT = 'PJT_DATESAISIE';
    const UPDATED_AT = 'PJT_DATMODIF';

    //PROJET EST ENFANT DE MEMBRE, DATEJOURNEE, NATUREPROJET

    public function membre()
    {
        return $this->belongsTo('App\Models\Membre', 'MBR_NUM', 'MBR_NUM');
    }
     public function datejournee()
    {
        return $this->belongsTo('App\Models\Datejournee', 'DJR_NUM', 'DJR_NUM');
    }
     public function natureprojet()
    {
        return $this->belongsTo('App\Models\Natureprojet', 'NPJ_NUM', 'NPJ_NUM');
    }
}
