<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cartecrdit extends Model
{
    protected $table = 'cartecredit';
    
    protected $primaryKey = 'CCE_NUM';
    
    //protected $keyType = 'string';
    
     //public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'CCE_MONTANT',
        'CCE_ETAT',
        'CPT_NUM', 
        
    ];

    const CREATED_AT = 'CCE_DATSAISIE';
    const UPDATED_AT = 'updated_at';

    public function compte()
    {
        return $this->belongsTO('App\Models\Compte', 'CPT_NUM', 'CPT_NUM');
    }
}
