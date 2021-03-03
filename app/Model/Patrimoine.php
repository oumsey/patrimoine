<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Patrimoine extends Model
{
    protected $table = 'patrimoine';
    
    protected $primaryKey = 'PAT_NUM';
    
    //protected $keyType = 'string';
    
     //public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'PAT_MONTANTDEBIT',
        'PAT_MONTANTCREDIT',
        'PAT_LIB', 
        'PAT_TYOPERATION',
        'PAT_DATOPERATION',
        'MBR_NUM',
        'SRB_NUM',
        
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    //PATRIMOINE EST L'ENFANT DE MEMBRE, SOUSRUBRQUE

    public function membre()
    {
        return $this->belongsTo('App\Models\Membre', 'MBR_NUM', 'MBR_NUM');
    }
     public function sousrubrique()
    {
        return $this->belongsTo('App\Models\Sousrubrique', 'SRB_NUM', 'SRB_NUM');
    }
}
