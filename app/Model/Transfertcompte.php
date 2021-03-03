<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Transfertcompte extends Model
{
    protected $table = 'transfertcompte';
    
    protected $primaryKey = 'TRC_NUM';
    
    //protected $keyType = 'string';
    
     //public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'TRC_COMPTESOURCE',
        'TRC_COMPTDEST',
        'TRC_MONT',
        'TRC_DAT',
        'TRC_LIB',
        'CPT_NUM',
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    //transfert compte est enfant de compte

     public function compte()
    {
        return $this->belongsTo('App\Models\Compte', 'CPT_NUM', 'CPT_NUM');
    }
}
