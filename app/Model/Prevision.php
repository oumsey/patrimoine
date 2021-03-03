<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Prevision extends Model
{
    protected $table = 'prevision';
    
    protected $primaryKey = 'PRV_NUM';
    
    //protected $keyType = 'string';
    
     //public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'PRV_LIB',
        'PRV_MONTDEBIT',
        'PRV_DATEDEBUT',
        'PRV_DATFIN',
        'PRV_MONTCREDIT',
        'PRD_NUM',
        
    ];

    const CREATED_AT = 'PRV_DATSAISIE';
    const UPDATED_AT = 'PRV_DATMODIF';

    //PREVISION EST L'ENFANT DE PERIODE

    public function periode()
    {
        return $this->belongsTo('App\Models\Periode', 'PRD_NUM', 'PRD_NUM');
    }
}
