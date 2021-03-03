<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Previsionparmembre extends Model
{
    protected $table = 'previsionparmembre';
    
    protected $primaryKey = 'MBR_NUM';
    
    //protected $keyType = 'string';
    
     //public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'PRV_NUM',
        'MONTANT',
        
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
