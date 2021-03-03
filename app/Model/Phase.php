<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Phase extends Model
{
    protected $table = 'phase';
    
    protected $primaryKey = 'PHA_NUM';
    
    //protected $keyType = 'string';
    
     //public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'PHA_NOM',
        'PHA_TAUX',
        'TPH_NUM', 
        
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    //PHASE EST LE PERE DE PARAMETRE

    public function parametre()
    {
        return $this->hasMany('App\Model\Parametre', 'PHA_NUM', 'PHA_NUM');
    }

    //PHASE EST L'ENFANT DE TYPE PHASE

     public function typehase()
    {
        return $this->belongsTo('App\Model\Typephase', 'TPH_NUM', 'TPH_NUM');
    }
}
