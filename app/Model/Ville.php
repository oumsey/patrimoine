<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    protected $table = 'ville';
    
    protected $primaryKey = 'VIL_NUM';
    
    //protected $keyType = 'string';
    
     //public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'VIL_NOM',
        'VIL_DESCR', 
        'REG_NUM',
        
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    //ville est le pere de commune

    public function commune()//Mettre le nom de la table enfant chez le père
    {
        return $this->hasMany('App\Model\Commune', 'VIL_NUM', 'VIL_NUM');
    }

    //ville l'enfant de la region
    public function region()//Mettre le nom de la table enfant chez le père
    {
        return $this->belongsTo('App\Models\Region', 'REG_NUM', 'REG_NUM');
    }

}
