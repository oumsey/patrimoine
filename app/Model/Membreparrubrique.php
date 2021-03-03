<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Membreparrubrique extends Model
{
    protected $table = 'membreparrubrique';
    
    protected $primaryKey = 'MBR_NUM';
    
    //protected $keyType = 'string';
    
     //public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'SRB_NUM',
        'MONTANT', 
        
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
