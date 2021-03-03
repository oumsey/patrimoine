<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Quartier extends Model
{
    protected $table = 'quartier';
    
    protected $primaryKey = 'QRT_NUM';
    
    //protected $keyType = 'string';
    
     //public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [
        'QRT_NOM',
        'QRT_DESCR', 
        'COM_NUM',
        
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    //QUARTIER EST PERE DE MEMBRE

    public function membre()//Mettre le nom de la table enfant chez le père
    {
        return $this->hasMany('App\Model\Membre', 'QRT_NUM', 'QRT_NUM');
    }

    // QUARTIER EST ENFANT DE COMMUNE

    public function commune()
    {
        return $this->hasMany('App\Models\Commune', 'COM_NUM', 'COM_NUM');
    }
}
